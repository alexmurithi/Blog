@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">All Users</a></li>
                  <li class="breadcrumb-item"><a href="#">Create User</a></li>
                  
                </ol>
              </nav>
        </div>
    </div>

    <div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12">

    @if($users)
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
     @foreach($users as $user)
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role->name}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
    </tr>
    
    
  </tbody>

  @endforeach

</table>

  @else
  <div class="alert alert-primary" role="alert">
    No users Found!
  </div>

@endif
        </div>
        
    </div>
    
</div>


   
@endsection