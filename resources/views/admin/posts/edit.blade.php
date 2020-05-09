@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<div class="container-fluid">
    <div class="row">
        {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}

        <div class="col col-lg-12 col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Edit Post</div>

            <div class="panel-body">

             <div class="form-group">
                 {!! Form::label('title','Title') !!}
                 {!! Form::text('title',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description','Description') !!}
                    {!! Form::text('description',null,['class'=>'form-control']) !!}
                </div>

               <div class="form-group">
                {!! Form::label('body','Body') !!}
                {!! Form::textarea('body',null,['class'=>'form-control','rows'=>12]) !!}
               </div>

               <div class="form-group">

                {!! Form::submit('Edit Post',['class'=>'btn btn-success']) !!}
                </div>

            </div>
          </div>
         </div>

        <div class="col col-lg-12 col-md-12">
           <div class="panel panel-info">
                <div class="panel-heading">ThumbNail</div>

              <div class="panel-body">


               <img src="{{$post->photo ? $post->photo->file :null}}" alt="Thumbnail" width="100%">
               <div class="form-group">
                {!! Form::label('photo_id','Photo') !!}
                {!! Form::file('photo_id',['class'=>'form-control']) !!}
               </div>
              </div>
            </div>

        </div>


        {!!Form::close()!!}
    </div>
</div>

{{-- <div class="container-fluid"> --}}
     {{-- <div class="row"> --}}
         {{-- <div class="col col-lg-12"> --}}
          {{-- <div class="panel panel-info">
             <div class="panel-heading">
                Edit Post
              </div> --}}
             {{-- <div class="panel-body">


               {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}

                <div>
                <img src="{{$post->photo ? $post->photo->file :null}}" alt="Generic Photo"  class=" img-rounded" width="100%" height="400px">
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
              {!! Form::textarea('body',null,['class'=>'form-control','rows'=>12]) !!}
             </div>

             <div class="form-group">
              {!! Form::label('photo_id','Photo') !!}
              {!! Form::file('photo_id',['class'=>'form-control']) !!}
             </div>

             <div class="form-group">

             {!! Form::submit('Edit Post',['class'=>'btn btn-primary']) !!}
             </div>


              {!!Form::close()!!} --}}





              {{-- </div><!--end panel-body--> --}}

              {{-- </div><!--end panel-info--> --}}
             {{-- </div><!--end col--> --}}
        {{-- </div><!--end row--> --}}
{{-- </div><!--end container-fluid--> --}}

@endsection

