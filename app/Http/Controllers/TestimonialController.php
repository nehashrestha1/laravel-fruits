<?php
namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'name' => 'required',
            'position' => 'required',
            'image' => 'image|nullable',
        ]);

        $testimonial = new Testimonial($request->all());

        if ($request->hasFile('image')) {
            $testimonial->image = $request->file('image')->store('images');
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        $request->validate([
            'message' => 'required',
            'name' => 'required',
            'position' => 'required',
            'image' => 'image|nullable',
        ]);

        $testimonial->update($request->all());

        if ($request->hasFile('image')) {
            $testimonial->image = $request->file('image')->store('images');
        }

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
?>
