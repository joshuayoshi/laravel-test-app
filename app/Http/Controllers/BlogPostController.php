<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    
    public function index()
    {
        // show all blog posts
        $posts = BlogPost::all(); //fetch all blog posts from DB
	    // return $posts; //returns the fetched posts
        return view('blog.index', [
            'posts' => $posts,
        ]); //returns the view with posts
    }

    public function create()
    {
        //show form to create a blog post
        return view('blog.create');
    }

   
    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ]);

        return redirect('blog/' . $newPost->id);
    }


    public function show(BlogPost $blogPost)
    {
        // return $blogPost; //returns the fetched posts
        return view('blog.show', [
            'post' => $blogPost,
        ]); //returns the view with the post
    }

    
    public function edit(BlogPost $blogPost)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, BlogPost $blogPost)
    {
        //save the edited post
    }

    
    public function destroy(BlogPost $blogPost)
    {
        //delete a post
    }

    public function database_test(){
        return view('database_test');
    }
    
}