<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Volunteer;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(9);
        return view('admin.galleryindex', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $volunteer_count = Volunteer::all()->count();
        $galleries = Gallery::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(9);
        return view('admin.galleryimages_create', compact('galleries', 'countmsg', 'contact_msgs', 'volunteer_count'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedimage = $request->validate([
            'user_id' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/gallery/images', $imageName);

            $validatedimage['image'] = $imageName;
        }

        $gallery = Gallery::create($validatedimage);

        return redirect()->back()->with('success', 'Image uploaded!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
         if ($gallery) {
            Storage::delete('public/gallery/images/' . $gallery->image);
            
        }

        $gallery->delete();

        return redirect()->back()->with('success', 'Gallery Image deleted');
    }
}
