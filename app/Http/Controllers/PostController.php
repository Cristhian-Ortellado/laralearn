<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {

        return view('posts.index',[
            'posts' => Post::with('category','author')
                ->latest()
                ->filter(request(['search','category','author']))
                ->paginate(15)->withQueryString()
        ]);
    }

    public function show(Request $request, Post $post){
        return view('posts.show',compact('post'));
    }

}
