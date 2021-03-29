<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    function index(){
        $posts = DB::table('posts')->orderBy('id','desc')->get();
        return view('index',['posts'=>$posts]);
    }

    function registerPost(){
        return view('posts.register');
    }

    function createPost(Request $request){
        //Validate Requests
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        //Registering the User
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $query = $post->save();
        
        if($query){
            return redirect('/')->with('success','Successfully New Post Created');
        }else{
            return bakc()->with('fail', 'Sorry!, Cant add new Post!');
        }
    }

    function editPost($id){
        $post = Post::find($id);
            
        return view('posts.edit', ['post'=>$post]);    
    }
    

    function updatePost(Request $req){
        //Validate Requests
        $req->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        //Registering the User
        $post = Post::find($req->id);
        $post->title = $req->title;
        $post->content = $req->content;
        $query = $post->save();
        
        if($query){
            return redirect('/')->with('success','Successfully Updated');
        }else{
            return bakc()->with('fail', 'Sorry!, somethings wrong!');
        }
    }


}
