<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditInfoController extends Controller
{
    // Create a function userEdit
    public function userEdit()
    {
        // Return a view /userEdit/edit.html
        return view('EditInformation.user');
    }
    // Create function delete user
    public function userDelete()
    {
        // Return a view /userEdit/delete.html
        return view('deleteUser.deleteUser');
    }
}
