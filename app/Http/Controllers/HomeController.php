<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Email;

class HomeController extends Controller
{
    function getCheckEmail()
    {
        return view('checkemail');
    }
    function postCheckEmail(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|max:100|min:3|email|unique:testEmail',
        ]);
    }
    function addNewEmail()
    {
        $newEmail = [
            'email' =>  rand(1000, 9000) . '@laravel.com'
        ];

        Email::insert($newEmail);

    }
    function viewEmails()
    {
        $emails = Email::get();
        return view('view-emails', compact('emails'));
    }
    function checkSingleEmail($id)
    {
        $singleEmail = Email::where('id', $id)->first();
        return view('view-single-email', compact('singleEmail'));
    }
}
