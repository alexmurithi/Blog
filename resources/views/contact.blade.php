@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="contact-clean">
            <div class="row">
                <div class="col col-lg-6 col-md-6 mr-auto ml-auto">
                    @include('includes.form-errors')
                </div>
            </div>

                 @if(Session::has('contact_msg_sent'))
                     <div class="row">
                         <div class="col col-lg-6 col-md-6 mr-auto ml-auto">
                             <div class="alert alert-success">
                                 <strong>{{session('contact_msg_sent')}}</strong>
                             </div>
                         </div>
                     </div>

                     @endif


            {!! Form::open(['method'=>'POST','action'=>'HomeController@store']) !!}
               <h2 class="text-center">Contact Us</h2>

            @if(Auth::user())
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                @endif

            @if(Auth::user())
                <div class="form-group">
                    {!! Form::text('name',Auth::user()->name,['class'=>'form-control','placeholder'=>'Name']) !!}
                </div>
            @else
                <div class="form-group">
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                </div>
            @endif

               @if(Auth::user())
                <div class="form-group">
                    {!! Form::email('email',Auth::user()->email,['class'=>'form-control','placeholder'=>'Email' ])!!}
                </div>
            @else
                   <div class="form-group">
                       {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email' ])!!}
                   </div>
            @endif
                <div class="form-group">
                    {!! Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Message','rows'=>8]) !!}

                </div>

                @if(Auth::user())
                    <div class="form-group">
                        {!! Form::submit('Send as '.Auth::user()->name,['class'=>'btn btn-success px-4']) !!}
                    </div>
                @else
                <div class="form-group">
                    {!! Form::submit('Send' ,['class'=>'btn btn-success px-4']) !!}
                </div>
                    @endif



            {!!Form::close()!!}
        </div>
    </div>

    @stop
