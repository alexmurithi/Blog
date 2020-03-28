@extends('layouts.admin')

@section('content')
<div class="container">
    

    <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">

    @if($users)
    <table id="datatable" class="table table-dark">
   <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
     @foreach($users as $user)
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
    <td><img src="{{$user->photo->file}}" alt="" id="user-avatar"></td>
    <td>{{$user->name}}</td>
    <td>{{$user->gender==1 ? "Male" :"Female"}} </td>
      <td>{{$user->email}}</td>
      <td>{{$user->role->name}}</td>
    <td>{{$user->isActive==1 ? "Active" : "Not Active"}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
    <td>
        
    <a href="{{route('admin.users.edit',$user->id)}}" id="mymodal" type="button" class="btn btn-success">
            <i class="fa fa-edit"></i>
        </a>

          
    </td>
      <td><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
    
    {{$users->links()}}

    
</div>


  
@endsection

@section('scripts')

<script type="text/javascript">
  $(document).ready(function(){
     var table =$('#datatable').DataTable();
     console.log(table);
  });
</script>

@stop