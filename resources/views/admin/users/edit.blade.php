
@extends('layouts.admin')

@section('content')
    
    <div class="container">
       <div class="row">
          <div class="col col-lg-8 col-sm-8 col-xs-12">
             <div class="card">
                <div class="card-body">
                    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

                    <div class="form-group">
                     {!!Form::label('name','Name')!!}
                     {!!Form::text('name',null,['class'=>'form-control'])!!}
                    </div>
                     
                    <div class="form-group">
                     {!!Form::label('email','Email')!!}
                     {!!Form::email('email',null,['class'=>'form-control'])!!}
                    </div>
                     
                    {!!Form::submit('Submit',['class'=>'btn btn-info'])!!}
                    {!! Form::close()!!}
                </div>
             </div>
          </div>
          <div class="col col-lg-4 col-sm-4 xs col-12">
             <div class="card" id="card-edit-img">
                <div class="card-body">

                  {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

                  <div class="form-group">
                     <img src="{{$user->photo->file}}" alt="" id="user-edit-img">
                  </div>
                
               <div class="form-group">
                  <label for="file" name="file">
                     <i class="fa fa-camera fa-2x"></i>
                  </label>

                  
               </div>
               {!!Form::file('file')!!}

                  {!! Form::close()!!}
                </div>
             </div>
          </div>
       </div>
    </div>

@stop