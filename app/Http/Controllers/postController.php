<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class postController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}
