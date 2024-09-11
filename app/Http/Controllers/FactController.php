<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facts = Fact::all();
        return view('admin.facts.index', compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'number' => 'required',
            'status' => 'required',
        ]);

        $fact = new Fact;
        $fact->icon = $request->icon;
        $fact->title = $request->title;
        $fact->number = $request->number;
        $fact->status = $request->status;
        $fact->save();

        return redirect()->route('facts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fact $fact)
    {
        // Display the specified fact if necessary
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fact = Fact::findOrFail($id);
        return view('admin.facts.edit', compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'number' => 'required',
            'status' => 'required',
        ]);

        $fact = Fact::findOrFail($id);
        $fact->icon = $request->icon;
        $fact->title = $request->title;
        $fact->number = $request->number;
        $fact->status = $request->status;
        $fact->save();

        return redirect()->route('facts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fact = Fact::findOrFail($id);
        $fact->delete();
        return redirect()->route('facts.index');
    }
}
