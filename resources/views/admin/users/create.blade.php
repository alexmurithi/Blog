@extends('layouts.admin')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        <span class="badge badge-light">Create User</span>
                    </h2>
                  
                </div>
                <div class="card-body">

                    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
                       <div class="form-row">
                           <div class="col-6">
                            <div class="form-group">
                                {!!Form::label('name','Name')!!}
                                {!!Form::text('name',null,['class'=>'form-control'])!!}
                            </div>

                           </div>

                           <div class="col-6">
                            <div class="form-group">
                                {!!Form::label('name','Name')!!}
                                 {!!Form::select('gender',[''=>'Choose Gender',1=>'Male',2=>'Female',3=>'Other'],null,['class'=>'form-control'])!!}
                            </div>
                           </div>
                       </div>
                    
                       <div class="form-row">
                           <div class="col-6">
                               <div class="form-group">
                                {!!Form::label('email','Email')!!}
                                {!!Form::email('email',null,['class'=>'form-control'])!!}
                               </div>
                            
                           </div>

                           <div class="col-6">
                               <div class="form-group">
                                {!!Form::label('password','Password')!!}

                                {!!Form::password('password',['class'=>'form-control'])!!}
                               </div>
                            
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="col-6">
                               <div class="form-group">
                                {!!Form::label('password','Confirm Password')!!}

                                {!!Form::password('password',['class'=>'form-control'])!!}
                               </div>
                            
                           </div>
                           <div class="col-6">
                             <div class="form-group">
                                {!! Form::label('role_id','Role') !!}
                                {!! Form::select('role_id',[''=>'Choose Role'] + $roles, null,['class'=>'form-control']) !!}
                             </div>
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="col-6">
                               <div class="form-group">
                                {!!Form::label('status','Status')!!}

                                {!!Form::select('is_active',[0=>'Not active',1=>'Active'],0,['class'=>'form-control'])!!}
                               </div>
                           </div>

                           <div class="col-6">
                               <div class="form-group">
                                   <label for="file" id="user-file-upload" id="file-label">
                                    <i class="fa fa-camera fa-2x"></i>
                                   </label>
                                   <input type="file" name="file" id="file">
                               </div>
                           </div>
                       </div>

                    
                   
                 {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop