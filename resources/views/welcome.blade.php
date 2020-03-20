{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
@extends('layouts.app')

@section('content')
       <div class="container">

         <div class="row">
            
         </div>

           <div class="row">
               <div class="col-lg-8 col-sm-8 col-xs-12">
                   <div class="card">
                       <div class="card-header">
                          <div class="float-left">
                            <h4><span class="badge badge-secondary">The title of the post will appear here</span></h4>
                            <a href="#" class="badge badge-info"><i class="fa fa-user-circle-o"></i> tabby</a>
                          </div>
                          <div class="float-right">
                            <span class="badge badge-light"><i class="fa fa-sort"></i> Category</span>
                            
                            <span class="badge badge-light"><i class="fa fa-clock-o"></i> 2 secs ago</span>
                          </div>
                       </div>
                       <div class="card-body">
                           <div class="row">
                            <div class="col-lg-12 col-sm-12">
                               <div class="post-img-box">
                                   <a href="#">
                                       <img src="/images/tree.jpg" alt="">
                                   </a>
                               </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="content-box">
                                    <h5 class="card-title">What is Lorem Ipsum?</h5>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                                    </p>
                                </div>

                                
                            </div>
                           </div>                      
                       </div>

                       <div class="card-footer">
                           <div class="float-left">

                            <a href="#" class="badge badge-success">
                                <i class="fa fa-heart-o fa-2x"></i>
                                <span class="badge badge-light" >10 likes</span>
                            </a>
                            
                           </div>
                           <div class="float-right">
                            <a href="#" class="badge badge-success">
                                <i class="fa fa-comments-o fa-2x"></i>
                                <span class="badge badge-light" >10 comments</span>
                            </a>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-lg-4 col-sm-4 col-xs-12">

                   <div class="card" id="search-box">
                     <div class="card-body">
                        <form class="form-inline">
                            <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
                             <i class="fa fa-search"></i>
                          </form>
                         </div> 
                   </div>

                   <div class="card" id="recent-posts">
                    <div class="card-header">
                        <h4><span class="badge badge-dark">Recently added</span></h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5><span class="badge badge-secondary">The title of the post will appear here</span></h5>
                        </li>
                        <li class="list-group-item">
                            <h5><span class="badge badge-secondary">The title of the post will appear here</span></h5>
                        </li>
                        <li class="list-group-item">
                            <h5><span class="badge badge-secondary">The title of the post will appear here</span></h5>
                        </li>
                    </ul>
               </div>

               <div class="card" id="categories-box">
                <div class="card-header">
                    <h4><span class="badge badge-dark">Categories</span></h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h4><span class="badge badge-pill badge-light">Fitness</span></h4>
                        
                    </li>
                    <li class="list-group-item">
                        <h4><span class="badge badge-pill badge-light">Health</span></h4>
                        
                    </li>
                    <li class="list-group-item">
                        <h4><span class="badge badge-pill badge-light">Light</span></h4> 
                    </li>
                </ul>
           </div>
           </div>

         
       </div>
@endsection