<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    // Show all sliders
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    // Show form to create a new slider
    public function create()
    {
        return view('sliders.create');
    }

    // Store a new slider in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/sliders'), $fileName);
        }

        // Create new slider
        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully');
    }

    // Show form to edit a slider
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    // Update a slider in the database
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/sliders'), $fileName);
            $slider->image = $fileName;
        }

        // Update slider data
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully');
    }

    // Delete a slider
    public function destroy(Slider $slider)
    {
        // Remove the image file
        $imagePath = public_path('uploads/sliders/' . $slider->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete slider
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully');
    }
}
