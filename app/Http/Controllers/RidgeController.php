<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class RidgeController extends Controller
{
    public function show(){
        $services = Service::all();
        return view('back.show-services',['services'=>$services]);
    }

    public function checkSlug($slug)
    {
        // Check if the slug exists in the database
        $slugExists = Service::where('slug', $slug)->exists();
    
        // Return a JSON response with the result
        return response()->json([
            'exists' => $slugExists
        ]);
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'slug' => 'required|unique:services,slug',
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
        }
        else {
            $iconName = null;
        }

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerName = Str::slug($request->title) . '_banner_' . time() . '.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('storage'), $bannerName);
        }
        else {
            $bannerName = null;
        }

        // Save to database
        Service::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'icon' => $iconName,
            'banner' => $bannerName,
            'des' => $request->des,
        ]);

        return redirect()->back()->with('success', 'Service added successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error saving service: ' . $e->getMessage());
    }
}

public function edit($slug){
    $services = Service::where('slug', $slug)->firstOrFail(); // Fetch product by slug
        return view('back.edit-services', compact('services'));

}
public function update(Request $request, $slug)
{
    $services = Service::where('slug', $slug)->firstOrFail();

    $request->validate([
        'title' => 'required',
        'slug' => 'required|unique:services,slug,' . $services->id . ',id',
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
            'icon' => $iconName,
            'banner' => $bannerName,
            'des' => $request->des,
        ]);

        return redirect()->route('back.show')->with('success', 'Service updated successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error saving service: ' . $e->getMessage());
    }
}


public function delete(Service $services){

    $services->delete();
    return redirect(route('back.show'))->with('success','product deleted successfully');
}






}
