@extends('layouts.admin')

@section('content')

<div class="container">
    
     

    <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-12">

            <div class="card">
            <a href="{{route('admin.users')}}">
              <div class="card-body" id="admin-content-box">
                <img src="/images/tree.jpg" class="card-img-top" alt="..." height="200px">
                 
                <div class="content">
                  <span class="icon">
                    <i class="fa fa-user-o fa-3x"></i>
                  </span>
                  
                  <h4>{{$users}} users</h4>
                </div>

              </div>
            </a>
                
                
              </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-xs-12">
            <div class="card">
                
              <div class="card-body" id="admin-content-box">
                <img src="/images/tree.jpg" class="card-img-top" alt="..." height="200px">
                 
                <div class="content">
                  <span class="icon">
                    <i class="fa fa-user-o fa-3x"></i>
                  </span>
                  <p>Lorem ipsum..</p>
                </div>

              </div>
              </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-xs-12">
            <div class="card">
                
              <div class="card-body" id="admin-content-box">
                <img src="/images/tree.jpg" class="card-img-top" alt="..." height="200px">
                 
                <div class="content">
                  <span class="icon">
                    <i class="fa fa-user-o fa-3x"></i>
                  </span>
                  <p>Lorem ipsum..</p>
                </div>

              </div>
              </div>
        </div>
    </div>

</div>

@stop