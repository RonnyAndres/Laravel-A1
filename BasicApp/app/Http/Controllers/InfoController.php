<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    // Create a function userInformation
    public function userInformation()
    {
        // Return a view /userInformation/user.html
        return view('Information.information');
    }

    // Create a function contact
    public function contact()
    {
        // Return a view /contact/contact.html
        return view('Contacts.contact');
    }
}
