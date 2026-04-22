<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
public function create()
    {
       return view('contacts.create');
    }

   public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    dd(Contact::create($data));
}

public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contact' => $contacts]);
    }
}
