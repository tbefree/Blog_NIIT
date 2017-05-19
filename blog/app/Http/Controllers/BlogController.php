<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Post;

class BlogController extends Controller
{
    public function getindex()
    {
        $posts =Post::paginate(10);

        return view('blog.index')->withPosts($posts);
    }

    public function getSingle($slug)
    {
       // fetch from the DB based on slug
       $post = Post::where('slug','=', $slug)->first();

       // return the view and  pass in the post oci_fetch_object
       return view('blog.single')->withPost($post);
    }

}
