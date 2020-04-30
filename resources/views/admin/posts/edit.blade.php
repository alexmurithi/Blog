@extends('layouts.admin')

@section('content')

   <div class="container-fluid">
      <div class="row">
          <div class="col col-lg-12">
              <div class="panel panel-info">
                  <div class="panel-heading">Edit Post</div>
                  <div class="panel-body">


    {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}

    <div>
        <img src="{{$post->photo->file}}" alt=""  class=" img-rounded" width="100%" height="400px">
        </div>

         <div class="form-group">
            {!! Form::label('category_id','Category') !!}
            {!! Form::select('category_id',[] +$categories ,null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body','Description') !!}
            {!! Form::textarea('body',null,['class'=>'form-control','rows'=>8]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Photo') !!}
            {!! Form::file('photo_id',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::submit('Edit Post',['class'=>'btn btn-primary']) !!}
        </div>


    {!!Form::close()!!}





                  </div>
              </div>
          </div>
      </div>
   </div>

@endsection

