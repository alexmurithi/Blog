<?php

namespace App\Http\Controllers;

use App\Category;
use App\ContactMessage;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    public function contact(){
        return view('contact');
    }

    public function store(Request $request){
      $validated =$request->validate([
          'name'=>'required',
          'email'=>'required',
          'message'=>'required'
      ]);

        $name =$request->name;
        $email=$request->email;
        $message =$request->message;

       if($request->user_id){
           $user_id = $request->user_id;

           ContactMessage::create([
               'user_id'=>$user_id,
               'message'=>$message,
                'name'=>$name,
               'email'=>$email,
           ]);

       }else{
           ContactMessage::create([

               'name'=>$name,
               'email'=>$email,
               'message'=>$message

           ]);
       }


       Session::flash('contact_msg_sent','Thank you for contacting us, Your message has been sent! We will get back to you soon');
       return redirect()->back();
    }
}
