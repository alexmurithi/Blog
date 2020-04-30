@extends('layouts.admin')

@section('content')
<div class="container-fluid">
      @include('includes.form-errors')
    @if(Session::has('user_created'))
           <div class="alert alert-success">
           <strong>{{session('user_created')}}</strong>
           </div>

        @endif

        @if(Session::has('user_updated'))
           <div class="alert alert-success">
           <strong>{{session('user_updated')}}</strong>
           </div>

        @endif

        @if(Session::has('admin_limit'))
           <div class="alert alert-danger">
           <strong>{{session('admin_limit')}}</strong>
           </div>

        @endif


    <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">


    @if(count($users)>0)
    <div class="panel panel-info">
        <div class="panel panel-heading">Users</div>
    <div class="panel-body">
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
             <td><img src="{{$user->photo->file}}" alt="" id="user-avatar" width="40px"></td>
             <td>{{$user->name}}</td>
             <td>{{$user->gender==1 ? "Male" :"Female"}} </td>
               <td>{{$user->email}}</td>
               <td>{{$user->role->name}}</td>
             <td>{{$user->isActive==1 ? "Active" : "Not Active"}}</td>
               <td>{{$user->created_at->diffForHumans()}}</td>
             <td>

             <a href="{{route('admin.users.edit',$user->id)}}"  type="button" class="btn btn-success">
                     <i class="fa fa-edit"></i>
                 </a>


             </td>
               <td>
                   {!!Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]])!!}
                   {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                   {!!Form::close()!!}
                </td>
             </tr>


           </tbody>

           @endforeach

         </table>
    </div>
    </div>



  @else

    <div class="alert alert-warning">
        <strong>No users found !</strong>
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
