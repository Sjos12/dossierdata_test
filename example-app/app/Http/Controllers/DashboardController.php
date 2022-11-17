<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __invoke()
    {
        // Query by user_id if authentication was implemented. 
        $contacts = Contact::orderBy('created_at', 'DESC')->get();

        return view('dashboard')->with(['contacts' => $contacts]);
    }
}
