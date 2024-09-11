<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = new Setting;
        $settings = $settings->all();
        return view('admin.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'site_key' => 'required',
            'site_value' => 'required',
        ]);

        $settings = new Setting;
        $settings->site_key = $request->site_key;
        $settings->site_value = $request->site_value;
        $settings->save();

        return redirect()->route('setting.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $settings = new Setting;
        $settings = $settings->where('id', $id)->first();

        return view('admin.setting.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'site_value' => 'required',
        ]);

        $settings = Setting::findOrFail($id);
        $settings->site_value = $request->site_value;
        $settings->status = $request->status;
        $settings->save();

        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $settings = new Setting;
        $settings = Setting::findOrFail($id);
        $settings->delete();
        return view('admin.setting.index');
    }
}
