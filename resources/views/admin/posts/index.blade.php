@extends('layouts.admin')

@section('content')
     <div class="container-fluid">
         <div class="row">
             <div class="col col-lg-12 col-sm-12 col-md-12 col-xs-12">

                @if(Session::has('post_updated'))
                  <div class="alert alert-info">
                    <strong>{{session('post_updated')}}</strong>
                 </div>
              @endif

                <div class="panel panel-info">
                    <div class="panel-heading">
                        Posts
                    </div>

                    <div class="panel-body">
                        @if(count($posts)>0)
                        <table class="table table-dark">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scopr="col">USER</th>
                                <th scope="col">CATEGORY</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">BODY</th>

                                <th scope="col">CREATED</th>
                                <th scope="col">UPDATED</th>
                              </tr>
                            </thead>

                            @foreach($posts as $post)
                            <tbody>


                              <tr>
                              <th scope="row">{{$post->id}}</th>
                              <td>
                                  <div class="flex flex-row justify-content-start">
                                      <a href="#">
                                        <span>{{$post->user->name}}</span>
                                        <img src="{{$post->user->photo->file}}" width="80px" class="img-responsive img-rounded">
                                      </a>

                                  </div>
                                </td>
                              <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
                              <td>{{$post->title}}</td>
                            <td>{{\Illuminate\Support\Str::limit($post->body,100)}}</td>

                              <td>{{$post->created_at->diffForHumans()}}</td>
                              <td>{{$post->updated_at->diffForHumans()}}</td>
                            <td><a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                            <td><a href="{{route('posts.index',$post->slug)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>


                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}

                                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}

                                 {!! Form::close() !!}
                            </td>
                              </tr>
                      @endforeach
                            </tbody>
                        </table>
                          @else
                           <div class="alert alert-danger">
                           <strong>No Posts Were Found! Please Check later or <a href="{{route('admin.posts.create')}}">Click here</a> to Create a Post!</strong>
                           </div>
                        @endif

                    </div>
                </div>
             </div>

         </div>

         <div class="row">
             <div class="col col-lg-12">
                 <div class="panel panel-info">
                    <div class="panel-heading">
                        Recent Posts
                    </div>
                    <div class="panel-body">
                        @if(count($recent_posts)>0)
                        @foreach($recent_posts as $recent_post)

                        <div class="media">

                            <div class="media-body">
                            <h4 class="media-heading">{{$recent_post->title}}</h4>

                          </div>
                      @endforeach

                      @else

                      <div class="alert alert-danger">
                      <strong>No Recent Posts Found! Please Check Later or <a href="{{route('admin.posts.create')}}">Click here</a> to Create a Post!</strong>
                      </div>
                  @endif
                    </div>
                 </div>
             </div>
         </div>
     </div>
@stop

