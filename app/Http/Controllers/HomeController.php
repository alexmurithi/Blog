<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $categories =Category::all();
        $recent_posts =Post::orderBy('created_at','desc')->take(5)->get();
        $posts =Post::all();
        return view('home',compact('posts', 'categories', 'recent_posts'));
    }
}
