<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{

    // GET [/blog]
    public function index()
    {
        // Get all the blogs from the database utilising our model.
        $blogs = Blog::all();

        // Return our view back, passing the variable to the view file to utilise.
        return view('blogs.index', compact('blogs'));
    }

    // GET [/blog/create]
    public function create()
    {
        return view('blogs.edit');
    }

    // POST [/blog]
    public function store(Request $request)
    {
        $data = $request->all();
        if($data["live"]) $data["live"] = 1;

        // These are the rules for the blog creation / update form. 
        // !! We will be able to put these into a validator later on. !!
        $rules = [
            'title' => 'required|max:50',
            'description' => 'required|max:140',
            'url' => 'required|max:50'
        ];

        // We will utilize the validator class to verify the request data against our rule set.
        $validator = \validator()->make($data, $rules);

        if($validator->fails())
        {
            return redirect()->back()->with('error', 'Error submitting form');
        }

        if(!is_null($data['id']))
        {
            $blog = Blog::findOrFail($data['id']);
        }else{
            $blog = new Blog;
        }

        // Utilize the already named fields on the view file to fill the blog data automatically, then saving.
        $blog->fill($data)->save();

        return redirect()->route('blog.index')->with('success', 'Successfully created form!');
    }

    // GET [/blog/{id}/edit]
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function show($url)
    {
        $blog = Blog::where('url', $url)->first();

        if(is_null($blog)) return redirect()->back();

        return view('blogs.details', compact('blog'));
    }
}
