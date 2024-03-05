<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Cause;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->take(3)->get();
        $causes = Cause::latest()->take(5)->get();
        return view('sitepages.index', compact('blogs', 'causes'));
    }

    /**Display the about page */
    public function about()
    {
        return view('sitepages.about');
    }

    /**Display the gallery page */
    public function gallery()
    {
        $galleryimages = Gallery::orderBy('id', 'desc')->paginate(32);
        return view('sitepages.gallery', compact('galleryimages'));
    }

    /**Display the contact page */
    public function contact()
    {
        return view('sitepages.contact');
    }

    public function details(Blog $id)
    {
        $blog = Blog::find($id)->first();
        return view('sitepages.blogsingle', compact('blog'));
    }

    public function show_blogs()
    {
        $blogs = Blog::latest()->paginate(4);

        return view('sitepages.blog', ['blogs' => $blogs]);
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
        //
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
        //
    }
}
