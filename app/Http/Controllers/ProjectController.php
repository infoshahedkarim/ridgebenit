<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function ProjectSlug($slug)
    {
        try {
            $slugExists = Project::where('slug', $slug)->exists();
            return response()->json(['exists' => $slugExists]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }



    public function show_home()
    {
        $projects = Project::all();
        $tops = Project::latest()->take(5)->get();
        return view('frontend.Project', compact('Projects','tops'));
    }

    public function details($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('frontend.Project-details', compact('Project'));
    }

    public function index()
    {
        $services = Service::all();
        $products = Product::all();
        return view('back.add-project', compact('services', 'products'));
    }

    public function show()
    {
        $projects = Project::all(); //not working
        $alls = Project::with(['service', 'product'])->get();
        return view('back.show-project', compact('projects', 'alls'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:projects,slug',
            'short_des' => 'required',
            'service_1' => 'required',
            'service_2' => 'required',
            'service_id' => 'nullable|exists:services,id',
            'product_id' => 'nullable|exists:products,id',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'des' => 'required',
        ]);

        try {

            $iconName = null;


            if ($request->hasFile('img')) {
                $icon = $request->file('img');
                $iconName = Str::slug($request->name) . 'img' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            // Save to database
            Project::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'short_des' => $request->short_des,
                'service_1' => $request->service_1,
                'service_2' => $request->service_2,
                'service_id' => $request->service_id ?? 0,
                'product_id' => $request->product_id ?? 0,
                'img' => $iconName,
                'des' => $request->des,
            ]);

            return redirect()->back()->with('success', 'Project added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Project: ' . $e->getMessage());
        }
    }

    public function edit($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail(); // Fetch product by slug
        return view('back.edit-project', compact('project'));
    }


    public function update(Request $request, $slug)
{
    $project = Project::where('slug', $slug)->firstOrFail();

    $request->validate([
        
        'name' => 'required',
        'slug' => ['required', Rule::unique('projects', 'slug')->ignore($project->id)],
        'short_des' => 'required',
        'service_1' => 'required',
        'service_2' => 'required',
        'service_id' => 'nullable|exists:services,id',
        'product_id' => 'nullable|exists:products,id',
        'img' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        'des' => 'required',
    ]);

    if ($request->hasFile('img')) {
        $icon = $request->file('img');
        $iconName = Str::slug($request->name) . '-img-' . time() . '.' . $icon->getClientOriginalExtension();
        $icon->move(public_path('storage'), $iconName);

        // Delete old image
        if ($project->img && file_exists(public_path('storage/' . $project->img))) {
            unlink(public_path('storage/' . $project->img));
        }
    } else {
        $iconName = $project->img;
    }

    try {
        $project->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'short_des' => $request->short_des,
            'service_1' => $request->service_1,
            'service_2' => $request->service_2,
            'service_id' => $request->service_id ?? 0,
            'product_id' => $request->product_id ?? 0,
            'img' => $iconName,
            'des' => $request->des,
        ]);

        return redirect()->route('show.project')->with('success', 'Project updated successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error saving Project: ' . $e->getMessage());
    }
}

    public function delete(Project $project)
    {

        $project->delete();
        return redirect(route('show.project'))->with('success', 'Project deleted successfully');
    }

    public function casestudy(){
        $projects = Project::all();
        return view('frontend.case-study', compact('projects'));
    }
    
    public function casestudy_details($slug){
         $project = Project::where('slug', $slug)->firstOrFail();
        return view('frontend.casestudy-details', compact('project'));
    }
}
