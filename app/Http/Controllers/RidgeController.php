<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SendEmail;
use App\Models\Product;
use App\Models\AddFeatures;
use App\Models\Expertise;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class RidgeController extends Controller
{




    public function show()
    {
        $services = Service::all();
        return view('back.show-services', ['services' => $services]);
    }

    public function checkSlug($slug)
    {
        try {
            $slugExists = Service::where('slug', $slug)->exists();
            return response()->json(['exists' => $slugExists]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function slugCheck($slug)
    {
        try {
            $slugExists = Product::where('slug', $slug)->exists();
            return response()->json(['exists' => $slugExists]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services,slug',
            'short_text' => 'required',
            'icon' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'banner' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
        ]);

        try {
            // Handle file uploads
            $iconName = null;
            $bannerName = null;

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = Str::slug($request->title) . '_icon_' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            if ($request->hasFile('banner')) {
                $banner = $request->file('banner');
                $bannerName = Str::slug($request->title) . '_banner_' . time() . '.' . $banner->getClientOriginalExtension();
                $banner->move(public_path('storage'), $bannerName);
            } else {
                $bannerName = null;
            }

            // Save to database
            Service::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'short_text' => $request->short_text,
                'icon' => $iconName,
                'banner' => $bannerName,
                'des' => $request->des,
            ]);

            return redirect()->back()->with('success', 'Service added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving service: ' . $e->getMessage());
        }
    }

    public function edit($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('back.edit-services', compact('service'));
    }
    public function update(Request $request, $slug)
    {
        $services = Service::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services,slug,' . $services->id . ',id',
            'short_text' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
        ]);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = Str::slug($request->title) . '_icon_' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);
            if ($services->icon && file_exists(public_path('storage/' . $services->icon))) {
                unlink(public_path('storage/' . $services->icon));
            }
        } else {
            $iconName = $services->icon;
        }

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerName = Str::slug($request->title) . '_banner_' . time() . '.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('storage'), $bannerName);
            if ($services->banner && file_exists(public_path('storage/' . $services->banner))) {
                unlink(public_path('storage/' . $services->banner));
            }
        } else {
            $bannerName = $services->banner;
        }

        try {
            $services->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'short_text' => $request->short_text,
                'icon' => $iconName,
                'banner' => $bannerName,
                'des' => $request->des,
            ]);

            return redirect()->route('back.show')->with('success', 'Service updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving service: ' . $e->getMessage());
        }
    }


    public function delete(Service $services)
    {

        $services->delete();
        return redirect(route('back.show'))->with('success', 'product deleted successfully');
    }


    public function getmsg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'booking_date' => 'nullable|date|after_or_equal:today',
            'booking_time' => 'nullable|in:11:00,12:00,01:00,02:00,03:00,04:00,05:00,06:00',
            'email' => 'required|email',
            'msg' => 'required',
        ]);


        // Prepare the email body
        $emailBody = "You have a new contact form submission:\n\n"
            . "Name: {$request->name}\n"
            . "Email: {$request->email}\n"
            . "Phone: {$request->phone}\n\n"
            . "booking_date: {$request->booking_date}\n"
            . "booking_time: {$request->booking_time}\n\n"
            . "Message:\n{$request->msg}";

        Mail::raw($emailBody, function ($message) use ($request) {
            $message->to("shahed@ridgebenit.com")
                ->subject("New Contact Form Submission from: " . $request->name)
                ->from('shahed@ridgebenit.com', 'Ridgeben IT Website Form')
                ->replyTo($request->email, $request->name); // So you can reply directly
        });

        SendEmail::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'booking_date' => $request->booking_date ?? 0,
            'booking_time' => $request->booking_time ?? 0,
            'email' => $request->email,
            'msg' => $request->msg,
        ]);

        return response()->json(['success' => true]);
    }


    public function pshow()
    {
        $products = Product::all();
        return view('back.show-products', compact('products'));
    }


    public function pstore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services,slug',
            'short_text' => 'required',
            'icon' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'banner' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
            'head1' => 'required',
            'head2' => 'required',
            'head3' => 'required',
        ]);

        try {
            // Handle file uploads
            $iconName = null;
            $bannerName = null;

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = Str::slug($request->title) . '_icon_' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            if ($request->hasFile('banner')) {
                $banner = $request->file('banner');
                $bannerName = Str::slug($request->title) . '_banner_' . time() . '.' . $banner->getClientOriginalExtension();
                $banner->move(public_path('storage'), $bannerName);
            } else {
                $bannerName = null;
            }

            // Save to database
            Product::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'short_text' => $request->short_text,
                'icon' => $iconName,
                'banner' => $bannerName,
                'des' => $request->des,
                'head1' => $request->head1,
                'head2' => $request->head2,
                'head3' => $request->des,
            ]);

            return redirect()->back()->with('success', 'Product added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Product: ' . $e->getMessage());
        }
    }

    public function pedit($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail(); // Fetch product by slug
        return view('back.edit-products', compact('product'));
    }
    public function pupdate(Request $request, $slug)
    {
        $products = Product::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services,slug,' . $products->id . ',id',
            'short_text' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
            'head1' => 'required',
            'head2' => 'required',
            'head3' => 'required',
        ]);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = Str::slug($request->title) . '_icon_' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);
            if ($products->icon && file_exists(public_path('storage/' . $products->icon))) {
                unlink(public_path('storage/' . $products->icon));
            }
        } else {
            $iconName = $products->icon;
        }

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerName = Str::slug($request->title) . '_banner_' . time() . '.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('storage'), $bannerName);
            if ($products->banner && file_exists(public_path('storage/' . $products->banner))) {
                unlink(public_path('storage/' . $products->banner));
            }
        } else {
            $bannerName = $products->banner;
        }

        try {
            $products->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'short_text' => $request->short_text,
                'icon' => $iconName,
                'banner' => $bannerName,
                'des' => $request->des,
                'head1' => $request->head1,
                'head2' => $request->head2,
                'head3' => $request->head3,
            ]);

            return redirect()->route('back.show')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Product: ' . $e->getMessage());
        }
    }


    public function pdelete(Product $products)
    {

        $products->delete();
        return redirect(route('back.show'))->with('success', 'Product deleted successfully');
    }







   public function ecreate()
    {
        $services = Service::all();
        return view('back.add-expertise', compact('services'));
    }
    public function eshow()
    {
        $expertises = Expertise::all();
        return view('back.show-expertise', compact('expertises'));
    }

    public function estore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
            'service_id' => 'required|exists:services,id',
        ]);

        try {
            // Handle file uploads
            $iconName = null;

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = Str::slug($request->title) . '_expertise_' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            Expertise::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'icon' => $iconName,
                'des' => $request->des,
                'service_id' => $request->service_id,
            ]);

            return redirect()->back()->with('success', 'Expertise added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Expertise: ' . $e->getMessage());
        }
    }

    public function eedit($id)
    {

        $expertise = Expertise::where('id', $id)->firstOrFail();
        $services = Service::all(); // Fetch product by slug
        return view('back.edit-expertise', compact('expertise', 'services'));
    }

    public function eupdate(Request $request, $id)
    {
        $expertise = Expertise::where('id', $id)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
            'service_id' => 'required|exists:services,id',
        ]);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = Str::slug($request->title) . 'expertise' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);
            if ($expertise->icon && file_exists(public_path('storage/' . $expertise->icon))) {
                unlink(public_path('storage/' . $expertise->icon));
            }
        } else {
            $iconName = $expertise->icon;
        }

        try {
            $expertise->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'icon' => $iconName,
                'des' => $request->des,
                'service_id' => $request->service_id,
            ]);

            return redirect()->route('back.eshow')->with('success', 'Expertise updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving expertise: ' . $e->getMessage());
        }
    }


    public function edelete(Expertise $expertise)
    {

        $expertise->delete();
        return redirect(route('back.eshow'))->with('success', 'Expertise deleted successfully');
    }





    

    public function fcreate()
    {
        $services = Service::all();
        return view('back.add-feature', compact('services'));
    }
    public function fshow()
    {
        $features = AddFeatures::all();
        return view('back.show-feature', compact('features'));
    }


    public function fstore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
            'service_id' => 'required|exists:services,id',
        ]);

        try {
            // Handle file uploads
            $iconName = null;

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = Str::slug($request->title) . '_icon_' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            AddFeatures::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'icon' => $iconName,
                'des' => $request->des,
                'service_id' => $request->service_id,
            ]);

            return redirect()->back()->with('success', 'Feature added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Feature: ' . $e->getMessage());
        }
    }

    public function fedit($id)
    {

        $feature = AddFeatures::where('id', $id)->firstOrFail();
        $services = Service::all(); // Fetch product by slug
        return view('back.edit-feature', compact('feature', 'services'));
    }

    public function fupdate(Request $request, $id)
    {
        $feature = AddFeatures::where('id', $id)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
            'service_id' => 'required|exists:services,id',
        ]);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = Str::slug($request->title) . '_icon_' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);
            if ($feature->icon && file_exists(public_path('storage/' . $feature->icon))) {
                unlink(public_path('storage/' . $feature->icon));
            }
        } else {
            $iconName = $feature->icon;
        }

        try {
            $feature->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'icon' => $iconName,
                'des' => $request->des,
                'service_id' => $request->service_id,
            ]);

            return redirect()->route('back.fshow')->with('success', 'Feature updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Product: ' . $e->getMessage());
        }
    }


    public function fdelete(AddFeatures $feature)
    {

        $feature->delete();
        return redirect(route('back.fshow'))->with('success', 'Feature deleted successfully');
    }


    public function screate()
    {
        $services = Service::all();
        return view('back.add-solution', compact('services'));
    }
    public function sshow()
    {
        $solutions = Solution::all();
        return view('back.show-solution', compact('solutions'));
    }


    public function sstore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
            'service_id' => 'required|exists:services,id',
        ]);

        try {
            // Handle file uploads
            $iconName = null;

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = Str::slug($request->title) . '_icon_' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            Solution::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'icon' => $iconName,
                'des' => $request->des,
                'service_id' => $request->service_id,
            ]);

            return redirect()->back()->with('success', 'Solution added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving solution: ' . $e->getMessage());
        }
    }

    public function sedit($id)
    {

        $solution = Solution::where('id', $id)->firstOrFail();
        $services = Service::all(); // Fetch product by slug
        return view('back.edit-solution', compact('solution', 'services'));
    }

    public function supdate(Request $request, $id)
    {
        $solution = Solution::where('id', $id)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
            'service_id' => 'required|exists:services,id',
        ]);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = Str::slug($request->title) . 'solution' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);
            if ($solution->icon && file_exists(public_path('storage/' . $solution->icon))) {
                unlink(public_path('storage/' . $solution->icon));
            }
        } else {
            $iconName = $solution->icon;
        }

        try {
            $solution->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'icon' => $iconName,
                'des' => $request->des,
                'service_id' => $request->service_id,
            ]);

            return redirect()->route('back.sshow')->with('success', 'solution updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Product: ' . $e->getMessage());
        }
    }


    public function sdelete(Solution $solution)
    {

        $solution->delete();
        return redirect(route('back.sshow'))->with('success', 'solution deleted successfully');
    }














    public function services($slug)
    {

        $service = Service::where('slug', $slug)->firstOrFail();
        $features = AddFeatures::where('service_id', $service->id)->get();
        $expertises = Expertise::where('service_id', $service->id)->get();
        $solutions = Solution::where('service_id', $service->id)->get();
        $ft = AddFeatures::where('service_id', $service->id)->first();
        $et = Expertise::where('service_id', $service->id)->first();
        $st = Solution::where('service_id', $service->id)->first();
        return view('frontend.page1', compact('service', 'features', 'ft', 'expertises', 'et', 'solutions', 'st'));
    }

    public function products($slug)
    {

        $product = Product::where('slug', $slug)->firstOrFail();

        return view('frontend.page5', compact('product'));
    }








}
