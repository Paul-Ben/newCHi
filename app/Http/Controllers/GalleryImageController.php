<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

class GalleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleryImages = GalleryImage::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(9);

        return view('admin.galleryindex', compact('galleryImages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $galleryImages = GalleryImage::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(9);
        return view('admin.galleryimages_create', compact('galleryImages'));
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

        $galleryImage = GalleryImage::create($validatedimage);

        return redirect()->back()->with('success', 'Image uploaded!!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(GalleryImage $galleryImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GalleryImage $galleryImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GalleryImage $galleryImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GalleryImage $galleryImage)
    {
        $id = $galleryImage->get('image');
        // dd($id);
       
        if ($id) {
            Storage::delete('public/gallery/images/' . $id);
            
        }
        // $this->deleteImageFromStorage($galleryImage);

        $galleryImage->delete();

        return redirect()->back()->with('success', 'Gallery Image deleted');
    }

}
