@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($messages)>0)

                <ul class = "media-list">
                    @foreach($messages as $message)
                    <li class = "media">
                        <a class = "pull-left" href = "#">
                            <img class = "media-object" src = "https://www.tutorialspoint.com/latest/Angular-4.png" alt = "Generic placeholder image">
                        </a>
                        <div class = "media-body">
                            <h4 class = "media-heading">{{$message->name}}</h4>
                            <p>{{$message->message}}</p>
                            <hr>


                        </div>
                    </li>
                    @endforeach
                </ul>
            @else
                <div class="alert alert-info">
                    <strong>Sorry, we found no messages for you, Please check in later!</strong>
                </div>
                @endif
        </div>
    </div>
    @stop
