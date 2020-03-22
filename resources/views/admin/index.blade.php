@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Users</a></li>
              <li class="breadcrumb-item" ><a href="#">Posts</a></li>
              <li class="breadcrumb-item" ><a href="#">Categories</a></li>
              <li class="breadcrumb-item" ><a href="#">Comments</a></li>
              <li class="breadcrumb-item" ><a href="#">Media</a></li>
            </ol>
          </nav>
    </div>

    <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-12">
            <div class="card">
                
                <div class="card-body" id="admin-content-box">
                  <img src="/images/tree.jpg" class="card-img-top" alt="..." height="200px">
                   
                  <div class="content">
                    <span class="icon">
                      <i class="fa fa-user-o fa-3x"></i>
                    </span>
                    
                    <h4>{{$users}} users</h4>
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