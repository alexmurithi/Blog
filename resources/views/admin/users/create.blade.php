@extends('layouts.admin')

@section('content')
 
<div class="container">
    <div class="row">

        

        <div class="col col-lg-12 col-md-12">
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                     <div class="alert alert-danger">
                         <strong>{{$error}}</strong>
                     </div>
                     
                @endforeach
            </ul>
         @endif

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

                                {!!Form::password('confirm-password',['class'=>'form-control'])!!}
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

                                {!!Form::select('isActive',[0=>'Not active',1=>'Active'],0,['class'=>'form-control'])!!}
                               </div>
                           </div>

                           <div class="col-6">
                               <div class="form-group">
                                {!!Form::label('photo_id','File')!!}
                                {!!Form::file('photo_id',['class'=>'form-control'])!!}
                               </div>
                               
                           </div>
                       </div>
                         <div class="form-group">
                            {!!Form::submit('Submit',['class'=>'btn btn-primary text-center'])!!}
                         </div>
                           
                   
                 {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop