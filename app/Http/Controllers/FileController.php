<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();  // Fetch all files
        return view('admin.file.index', compact('files'));  // Return the index view with files data
    }

    public function create()
    {
        return view('admin.file.create');  // Return the create view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'path' => 'required|string|max:255',
        ]);

        File::create($request->all());  // Save the new file to the database

        return redirect()->route('files.index')->with('success', 'File created successfully.');
    }

    public function edit(File $file)
    {
        return view('admin.file.edit', compact('file'));  // Return the edit view with the file data
    }

    public function update(Request $request, File $file)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'path' => 'required|string|max:255',
        ]);

        $file->update($request->all());  // Update the file with the new data

        return redirect()->route('files.index')->with('success', 'File updated successfully.');
    }

    public function destroy(File $file)
    {
        $file->delete();  // Delete the file

        return redirect()->route('files.index')->with('success', 'File deleted successfully.');
    }
}
