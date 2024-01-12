<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('back.contact.index', compact('contacts'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'country' => 'required',
            'description' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('front.index')->with('message', "This is Success Created");
    }
}
