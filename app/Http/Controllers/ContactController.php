<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $contacts = Contact::orderBy('id', 'desc')->paginate(10);
        $volunteer_count = Volunteer::all()->count();
        return view('admin.contactmessages', compact('contacts', 'countmsg', 'contact_msgs', 'volunteer_count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact_validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($contact_validator);

        return redirect()->back()->with('success', 'Message Submitted.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $volunteer_count = Volunteer::all()->count();
        return view('admin.contact_msg', compact('contact', 'countmsg', 'contact_msgs', 'volunteer_count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->with('success', 'Request Deleted.');
    }
}
