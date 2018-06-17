<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allpost=Post::get();
        // var_dump($allpost);
        
        return view('post',['allpost'=>$allpost]);
    }
    public function create( Request $request) {

       
        $post=new Post();
        $post->title=$request['title'];
        $post->description=$request['description'];
        $post->save();
        $allpost=Post::get();
        return view('post',['allpost'=>$allpost]);
    }
}