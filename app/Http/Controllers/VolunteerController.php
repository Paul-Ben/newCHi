<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Auth;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->is_admin) {
            $countmsg = Contact::all()->count();
            $contact_msgs = Contact::latest()->take(3)->get();
            $volunteer_count = Volunteer::all()->count();
            $volunteer_request = Volunteer::orderBy('id', 'DESC')->paginate(8);
            return view('admin.volunteerrequest', compact('volunteer_request', 'countmsg', 'contact_msgs', 'volunteer_count'));
        } else {
            return redirect()->route('login');
        }
        
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
        $validated_data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $volunteer = Volunteer::create($validated_data);

        return redirect()->back()->with('success', 'Your request has been submitted.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunteer $volunteer)
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $volunteer_count = Volunteer::all()->count();
        return view('admin.volunteer_msg', compact('volunteer', 'countmsg', 'contact_msgs', 'volunteer_count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteer $volunteer)
    {
       

        $volunteer->delete();

        return redirect()->back()->with('success', 'Request Deleted.');
    }
}
