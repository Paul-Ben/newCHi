<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
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
            
            return view('admin.blogadmin', compact('countmsg', 'contact_msgs', 'volunteer_count'));
        } else {

            // Auth::user()->logout();
            return redirect()->route('homepage');
        }
        
    }

    public function getMsgCount()
    {
        $contact_msgcount = Contact::all()->count();
        // $contact_msg = Contact::orderBy('id', 'desc');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $volunteer_count = Volunteer::all()->count();
        return view('admin.creator', compact('countmsg', 'contact_msgs', 'volunteer_count'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'author' => 'required',
            'message' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images', $imageName);

            $validatedData['image'] = $imageName;
        }

        $blog = Blog::create($validatedData);

        

        return redirect()->back()->with('success', 'Blog post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $volunteer_count = Volunteer::all()->count();
        $blogs = Blog::where('author', Auth::user()->name)->latest()->paginate(8);
        
        return view('admin.blogview', compact('blogs', 'countmsg', 'contact_msgs', 'volunteer_count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog, Request $request)
    {
        $countmsg = Contact::all()->count();
        $contact_msgs = Contact::latest()->take(3)->get();
        $volunteer_count = Volunteer::all()->count();
        $id = $request->id;
        // $blog = Blog::find($id)->first(); 
        $blog = Blog::where('id', $id)->first();  
        // dd($blog);
        return view('admin.edit', compact('blog', 'countmsg', 'contact_msgs', 'volunteer_count'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $blog = Blog::where('id', $request->id)
        ->update([
            'title' =>$request->input('title'),
            'author' =>$request->input('author'),
            'slug' =>$request->input('slug'),
            'message' =>$request->input('message')
        ]);
        return redirect()->route('bloglist')->with('success', 'Blog Post updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog, Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        if ($blog->image) {
            Storage::delete('public/images/' . $blog->image);
        } 
        
        $blog->delete();

        return redirect()->back()->with('success', 'Blog post deleted');
    }
}
