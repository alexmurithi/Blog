
@extends('layouts.admin')

@section('content')
    
    <div class="container">
       <div class="row">
          <div class="col col-lg-8 col-sm-8 col-xs-12">
             <div class="card">
               <div class="card-header">
                  <h2 class="text-center"><span class="badge badge-primary">{{$user->name}}</span></h2>
                  
                  </div>
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

                    <div class="form-group">
                     {!!Form::label('role_id','Role')!!}
                     {!!Form::select('role_id',[''=>'Choose Role'] +$roles ,null,['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                     {!! Form::label('isActive','Status') !!}

                    {!!Form::select('isActive',[0=>'Inactive',1=>'Active'],null,['class'=>'form-control'])!!}
                 </div>
                     
                    {!!Form::submit('Edit User',['class'=>'btn btn-dark'])!!}

                    {!! Form::close()!!}
                </div>
             </div>
          </div>
          <div class="col col-lg-4 col-sm-4 xs col-12">
             <div class="card" style="width: 18rem;">
               {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
               <img class="card-img-top" src="{{$user->photo->file}}" alt="Card image cap">

                <div class="card-body">

                 <div class="form-group">
                  {!!Form::file('file',['class'=>'form-control'])!!}
                 </div>
                   
                 <div class="form-group">
                  {!!Form::submit('Change Image',['class'=>'btn btn-dark'])!!}
                 </div>

               

                  {!! Form::close()!!}
                </div>
             </div>

             <div class="card" style="width: 18rem;">
                <div class="card-header">
                <h4><span class="badge badge-primary">{{$user->name}}</span></h4>
                </div>
                <div class="card-body">
                  {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
                     {!!Form::password('password',['class'=>'form-control'])!!}
                  
                </div>
                <div class="card-footer">
                  {!!Form::submit('Change password',['class'=>'btn btn-dark'])!!}
                  {!!Form::close()!!}
                </div>
             </div>

          </div>
       </div>
    </div>

@stop