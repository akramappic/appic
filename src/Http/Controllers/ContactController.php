<?php

namespace Bcamq\Greetr\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bcamq\Greetr\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('greetr::contact');
    }

    public function store(Request $request)
    {
       Contact::create($request->all());
       return redirect()->route('contact.index');
    }
}
