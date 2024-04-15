<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
  
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contacts = new Contact();

        $contacts->contact_name = $request->input('contact_name');
        $contacts->contact_email = $request->input('contact_email');
        $contacts->contact_message = $request->input('contact_message');

        $contacts->save();

        return redirect('nelsonjohnmontezo1.online');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contacts = Contact::findOrFail($id);
  
        $contacts->delete();
  
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }
}