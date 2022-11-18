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
            'naam' => 'required|string|min:3|max:255|unique:contacts,naam',
            'straat' => 'required|string|min:3|max:255',
            'postcode' => 'required|string|min:3|max:255',
            'plaats' => 'required|string|min:3|max:255',
        ]);

        // Mass assignablity is not a vulnerability when properly validating request data

        Contact::create($validatedData);

        return redirect()->route('dashboard')->with(['message' => 'Succesfully created a contact!']);
    }
    public function read(Contact $contact)
    {

        return view('contacts.read', ['contact' => $contact]);
    }
    public function update_index(Contact $contact)
    {
        return view('contacts.update', ['contact' => $contact]);
    }

    public function update(Request $request, Contact $contact)
    {

        $validatedData = $request->validate([
            'naam' => 'required|string|min:2|max:255',
            'straat' => 'required|string|min:3|max:255',
            'postcode' => 'required|string|min:3|max:255',
            'plaats' => 'required|string|min:3|max:255',
        ]);

        $contact->update($validatedData);
        return redirect()->route('contacts.read', $contact->uuid)->with('message', 'Succesfully updated your contact');
    }
    public function delete(Contact $contact)
    {
        // If authentication system would be implementen, check if passed contact model belongs to  logged in user 
        // if (Auth::user()->id !== $contact->user_id) return;

        $contact->delete();
        return redirect()->route('dashboard')->with(['message' => 'Succesfully deleted contact!']);
    }
}
