<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts(){
        $posts = Post::latest()->get();
        return response()->json($posts);

    }
    public function getPost($id){
       return response()->json(Post::findOrFail($id));
    }
}
