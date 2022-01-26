<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostsController extends Controller
{
    function show(){
        $posts = post::latest();
        return view('posts',[
            'posts'=>$posts->get()
        ]);
    }

    function find(){
        $posts = post::latest();
        $posts->where('title','like','%'.request('search').'%')
        ->orwhere('content','like','%'.request('search').'%');
        return view('posts',[
            'posts'=>$posts->paginate()
        ]);
    }
}
