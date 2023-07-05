<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show(User $author)
    {
        $posts = $author->posts->load(['category','author']);
        return view('posts',compact('posts'));
    }
}
