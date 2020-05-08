@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <header>
                            <h4>Create Post</h4>
                        </header>
                    </div>
                    <div class="panel-body">

                        @include('includes.form-errors')

                        {!!Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true])!!}

                          <div class="form-group">
                            {!!Form::label('title','Title')!!}
                            {!!Form::text('title',null,['class'=>'form-control'])!!}
                          </div>

                         <div class="form-group">
                            {!!Form::label('title','Category')!!}
                            {!!Form::select('category_id',[''=>'Choose Category'] + $categories ,null,['class'=>'form-control'])!!}
                         </div>

                         <div class="form-group">
                            {!!Form::label('body','Body')!!}
                             {!!Form::textarea('body',null,['rows'=>12,'class'=>'form-control'])!!}
                         </div>


                      <div class="form-group">
                          {!!Form::label('photo_id','Photo')!!}
                          {!!Form::file('photo_id',['class'=>'form-control'])!!}
                      </div>

                         {{-- <div class="form-group">
                             <label for="photo_id" name="photo_id">

                                <i class="fa fa-camera fa-2x"></i>
                                <span>Upload Photo</span>
                             </label>

                             <input type="file" id="photo_id" name="photo_id">

                         </div> --}}

                         <div class="form-group">
                             {!!Form::submit('Save Post',['class'=>'btn btn-success'])!!}
                         </div>

                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
