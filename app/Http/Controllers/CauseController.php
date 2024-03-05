<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Models\Contact;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $volunteer_count = Volunteer::all()->count();

        $causes = Cause::orderBy('id', 'desc')->paginate(9);

        return view('admin.cause_create', compact('countmsg', 'contact_msgs', 'volunteer_count', 'causes'));
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
            'title' => 'required',
            'user_id' => 'required',
            'message' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/causes/images', $imageName);

            $validated_data['image'] = $imageName;
        }

        $gallery = Cause::create($validated_data);

        return redirect()->back()->with('success', 'Cause Created!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cause $cause)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cause $cause)
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $volunteer_count = Volunteer::all()->count();

        return  view('admin.cause_edit', compact('countmsg', 'contact_msgs', 'volunteer_count', 'cause'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cause $cause)
    {
        $validated_data = $request->validate([
            'title' => 'required',
            'message' => 'required',
            'user_id' => 'required',
        ]);

        $cause->update($validated_data);

        return redirect()->route('causes.index')->with('success', 'Cause Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cause $cause)
    {
        if ($cause) {
            Storage::delete('public/causes/images/' . $cause->image);
            
        }

        $cause->delete();

        return redirect()->back()->with('success', 'Cause deleted');
    }
    
}
