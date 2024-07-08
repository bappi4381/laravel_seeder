<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $blogs = Post::samplePaginate(10); // Paginate with 10 items per page
        return view('posts.index', compact('blogs'));
    }
}
