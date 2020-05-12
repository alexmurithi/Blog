@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-lg-12 col-md-12">
                @if(count($categoryPostUser[0]->post)>0)
                <div class="card">

                    <div class="card-header bg-dark">
                        <h3 class="card-title text-white text-center">{{$categoryPostUser[0]->name}}</h3>
                    </div>
                    <div class="body p-4">
                        @foreach($categoryPostUser[0]->post as $cat)
                        <div class="media">

                            <img class="mr-3" src="{{$cat->photo ? $cat->photo->file :null}}" alt="Generic Photo" width="100px">
                            <div class="media-body text-muted">
                                <a href="{{route('posts.index',$cat->slug)}}"><h3 class="mt-0 text-dark">{{$cat->title}}</h3></a>
                                {{$cat->description}}
                                <div class="flex d-flex flex-row justify-content-start my-2">

                                    @if($cat->user->isAdmin())
                                        <span class="badge badge-dark">
                                         <i class="fa fa-user"></i>
                                        Admin
                                     </span>
                                    @else
                                        <span class="badge badge-light">
                                         <i class="fa fa-user"></i>
                                         {{$post->user->name}}
                                     </span>
                                    @endif

                                    <span class="badge badge-light">
                                         <i class="fa fa-clock-o"></i>
                                         {{$cat->created_at->diffForHumans()}}
                                     </span>



                                </div>

                                <hr>
                            </div><!--end of media-body-->


                        </div><!--end of media-->
                        @endforeach
                    </div>



                </div>
                @else
                    <div class="alert alert-info">
                        <strong>
                            <h3 class="text-danger">OOPS! We could not get any posts for this category at the moment. Please check later!</h3>
                        </strong>
                    </div>
                @endif
            </div>

        </div>

        <div class="row">
            <div class="col col-lg-12 col-md-12">
                <div class="card">
                    @if(count($recent_posts)>0)
                        <div class="card-header bg-dark">
                            <h3 class="card-title text-white text-center">Recent Posts</h3>
                        </div>
                        <div class="body p-4">
                            @foreach($recent_posts as $post)
                                <div class="media">

                                    <img class="mr-3" src="{{$post->photo ? $post->photo->file :null}}" alt="Generic Photo" width="100px">
                                    <div class="media-body text-muted">
                                        <a href="{{route('posts.index',$post->slug)}}"><h3 class="mt-0 text-dark">{{$post->title}}</h3></a>
                                        {{$post->description}}
                                        <div class="flex d-flex flex-row justify-content-start my-2">

                                            @if($post->user->isAdmin())
                                                <span class="badge badge-dark">
                                         <i class="fa fa-user"></i>
                                        Admin
                                     </span>
                                            @else
                                                <span class="badge badge-light">
                                         <i class="fa fa-user"></i>
                                         {{$post->user->name}}
                                     </span>
                                            @endif

                                                <span class="badge badge-light">
                                         <i class="fa fa-clock-o"></i>
                                         {{$post->created_at->diffForHumans()}}
                                     </span>

                                                <span class="badge badge-success">
                                         <i class="fa fa-folder"></i>
                                         {{$post->category->name}}
                                     </span>

                                        </div>

                                        <hr>
                                    </div><!--end of media-body-->


                                </div><!--end of media-->
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

        </div>




    </div>


@endsection


