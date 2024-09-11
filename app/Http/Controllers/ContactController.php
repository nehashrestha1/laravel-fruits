<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();  // Fetch all contacts
        return view('admin.contact.index', compact('contacts'));  // Return the index view with contacts data
    }

    public function create()
    {
        return view('admin.contact.create');  // Return the create view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());  // Save the new contact to the database

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));  // Return the edit view with the contact data
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        $contact->update($request->all());  // Update the contact with the new data

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();  // Delete the contact

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
