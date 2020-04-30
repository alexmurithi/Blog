
@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
       <div class="row">


         <div class="col col-lg-3 col-md-3">
             <div class="panel panel-info">
                 <div class="panel-heading">User Photo</div>
                 <div class="panel-body">
<img src="{{$user->photo ? $user->photo->file : "No photo"}}" class="img-responsive img-rounded" alt="" height="100px">
                 </div>
             </div>
         </div>

         <div class="col col-lg-9 col-md-9">
             <div class="panel panel-info">
                 <div class="panel-heading">Edit this User</div>
                 <div class="panel-body">

                    {!!Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true])!!}
                    <div class="form-group">
                        {!! Form::label('name','Name') !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email','Email') !!}
                        {!! Form::email('email',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('photo_id','Photo') !!}
                        {!! Form::file('photo_id',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id','Role') !!}
                        {!! Form::select('role_id',$roles, null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('is_active','Status') !!}
                        {!! Form::select('is_active',array(1=>'Active',0=>'Inactive'),null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Edit User',['class'=>'btn btn-success']) !!}
                        {!!Form::close()!!}
                    </div>



                 </div>
             </div>


         </div>



       </div>

    </div>

@stop
