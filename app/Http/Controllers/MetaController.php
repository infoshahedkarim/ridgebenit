<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class MetaController extends Controller
{
    public function show_home()
    {
        $metas = Meta::all();
        $tops = Meta::latest()->take(5)->get();
        return view('frontend.Meta', compact('Metas','tops'));
    }

    public function index()
    {
        return view('back.add-meta');
    }

    public function show()
    {
        $metas = Meta::all();
        return view('back.show-meta', compact('metas'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'des' => 'required',
            'keywords' => 'required',
        ]);

        try {

            Meta::create([
                'title' => $request->title,
                'des' => $request->des,
                'keywords' => $request->keywords,
            ]);

            return redirect()->back()->with('success', 'Meta added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Meta: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $meta = Meta::where('id', $id)->firstOrFail(); // Fetch product by slug
        return view('back.edit-Meta', compact('meta'));
    }


    public function update(Request $request, $id)
{
    $meta = Meta::where('id', $id)->firstOrFail();

    $request->validate([
        'title' => 'required',
        'des' => 'required',
        'keywords' => 'required',
    ]);


    try {
        $meta->update([
            'title' => $request->title,
            'des' => $request->des,
            'keywords' => $request->keywords,
        ]);

        return redirect()->route('show.meta')->with('success', 'Meta updated successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error saving Meta: ' . $e->getMessage());
    }
}

    public function delete(Meta $meta)
    {

        $meta->delete();
        return redirect(route('show.meta'))->with('success', 'Meta deleted successfully');
    }
}
