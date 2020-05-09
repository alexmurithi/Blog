@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-9 col-md-9">
                <div class="card">
                    @if(count($posts)>0)

                        <div class="card-body">
                            @foreach($posts as $post)

                                <div class="media">

                                    <img class="mr-3" src="{{$post->photo ? $post->photo->file :null}}" alt="Generic Photo" width="100px">
                                    <div class="media-body text-muted">
                                        <a href="{{route('posts.index',$post->id)}}"><h3 class="mt-0 text-dark">{{$post->title}}</h3></a>
                                        {{$post->description}}
                                        <div class="flex d-flex flex-row justify-content-start my-2">
                                     <span class="badge badge-dark">
                                         <i class="fa fa-user"></i>
                                         {{$post->user->name}}
                                     </span>

                                            <span class="badge badge-light">
                                         <i class="fa fa-clock-o"></i>
                                         {{$post->created_at->diffForHumans()}}
                                     </span>
                                            <span class="badge badge-info">
                                         <i class="fa fa-folder"></i>
                                         {{$post->category->name}}
                                     </span>
                                        </div>

                                        <hr>
                                    </div><!--end of media-body-->


                                </div><!--end of media-->



                            @endforeach

                        </div><!--end of card-body-->
                </div><!--end of card-->
                @endif
            </div><!--end of col col-lg-9-->



            <div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="card-body">
                        <h3>Search Blog</h3>
                        <form class="form-inline">
                            <div class="input-group"><input class="form-control" type="text">
                                <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card" style="margin-bottom: 32px;">
                    <div class="card-header text-white bg-dark border rounded-0 border-dark" style="padding: 5px;">
                        <h5>Categories</h5>
                    </div>
                    <div class="card-body">

                        @if(count($categories)>0)
                            <ul class="list-group text-dark">
                                @foreach($categories as $category)
                                    <li class="list-group-item text-dark">

                                        <a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;">
                                    <span>
                                        <i class="fa fa-folder" style="padding: 0px 8px;"></i>
                                    </span>
                                            {{$category->name}}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        @endif
                    </div>
                </div><!--end CATEGORIES CARD-->

                @if(count($posts)>0)
                    <div class="card" style="margin-bottom: 32px;">
                        <div class="card-header text-white bg-dark border-dark" style="padding: 5px;">
                            <h5>Recent Posts</h5>
                        </div>
                        <div class="card-body">

                            <ul class="list-group text-dark">
                                @foreach($posts as $post)

                                    <li class="list-group-item d-flex flex-column">
                                        <a href="#">
                                            <h6 class="text-muted mb-0" style="font-family: Almendra, serif;">
                                                {{$post->title}}
                                            </h6>
                                            <span class="text-primary mt-0" style="font-size: 13px;font-family: Andika, sans-serif;">
                                        By {{$post->user->name}}
                                    </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>



@endsection

