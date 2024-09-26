c<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::all();
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'top_title' => 'required',
            'title' => 'required',
            'status' => 'required',
            'action' => 'required',
        ]);

        $hero = new hero;
        $hero->top_title = $request->top_title;
        $hero->title = $request->title;
        $hero->status = $request->status;
        $hero->status = $request->status;
        $hero->save();

        return redirect()->route('hero.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(hero $hero)
    {
        // Display the specified hero if necessary
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('admin.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'top_title' => 'required',
            'title' => 'required',
            'status' => 'required',
            'action' => 'required',
        ]);

        $hero = Hero::findOrFail($id);
        $hero->top_title = $request->top_title;
        $hero->title = $request->title;
        $hero->status = $request->status;
        $hero->action = $request->action;
        $hero->save();

        return redirect()->route('hero.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();
        return redirect()->route('hero.index');
    }
}
