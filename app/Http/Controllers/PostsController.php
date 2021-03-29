<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    function index(){
        $posts = Post::all();
        return view('index',['posts'=>$posts]);
    }
}
