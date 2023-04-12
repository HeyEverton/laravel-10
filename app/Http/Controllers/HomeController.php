<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show($post): View
    {
        $post = Post::whereSlug($post)->first();
        return view('posts.post', compact('post'));
    }
}
