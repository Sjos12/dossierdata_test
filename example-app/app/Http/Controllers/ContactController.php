<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function create_index()
    {
        return view('contacts.create');
    }
    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'naam' => 'required',
            'straat' => 'required',
            'postcode' => 'required',
            'plaats' => 'required',
        ]);

        // Mass assignablity is not a risk when properly validating request data

        $contact = Contact::create($validatedData);

        return redirect()->route('dashboard')->with(['message' => 'Succesfully created a contact!']);
    }
    public function read(Request $request, Contact $contact)
    {
        return view('contacts.read');
    }
    public function update(Request $request)
    {
    }
    public function delete(Request $request)
    {
    }
}
