<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function BlogSlug($slug)
    {
        try {
            $slugExists = Blog::where('slug', $slug)->exists();
            return response()->json(['exists' => $slugExists]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function index()
    {
        return view('back.add-blog');
    }

    public function show()
    {
        $blogs = Blog::all();
        return view('back.show-blog', compact('blogs'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services,slug',
            'short_decs' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'category' => 'required',
            'author' => 'required',
            'des' => 'required',
        ]);

        try {

            $iconName = null;


            if ($request->hasFile('img')) {
                $icon = $request->file('img');
                $iconName = Str::slug($request->title) . 'img' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            // Save to database
            Blog::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'short_decs' => $request->short_decs,
                'img' => $iconName,
                'category' => $request->category,
                'author' => $request->author,
                'des' => $request->des,
            ]);

            return redirect()->back()->with('success', 'Blog added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Blog: ' . $e->getMessage());
        }
    }

    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail(); // Fetch product by slug
        return view('back.edit-blog', compact('blog'));
    }
    public function update(Request $request, $slug)
    {
        $blogs = Blog::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services,slug',
            'short_decs' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'category' => 'required',
            'author' => 'required',
            'des' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $icon = $request->file('img');
            $iconName = Str::slug($request->title) . 'img' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);
            if ($blogs->icon && file_exists(public_path('storage/' . $blogs->icon))) {
                unlink(public_path('storage/' . $blogs->icon));
            }
        } else {
            $iconName = $blogs->icon;
        }

        try {
            $blogs->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'short_decs' => $request->short_decs,
                'img' => $iconName,
                'category' => $request->category,
                'author' => $request->author,
                'des' => $request->des,
            ]);

            return redirect()->route('back.show')->with('success', 'Blog updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Blog: ' . $e->getMessage());
        }
    }


    public function delete(Blog $blogs)
    {

        $blogs->delete();
        return redirect(route('back.show'))->with('success', 'Blog deleted successfully');
    }
}
