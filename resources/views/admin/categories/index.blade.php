@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        @if(Session::has('category_created'))
          <div class="alert alert-success">
          <strong>{{session('category_created')}}</strong>
          </div>
        @endif

        @if(Session::has('category_updated'))
          <div class="alert alert-success">
          <strong>{{session('category_updated')}}</strong>
          </div>
        @endif

        @if(Session::has('category_deleted'))
        <div class="alert alert-warning">
        <strong>{{session('category_deleted')}}</strong>
        </div>
      @endif

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4> Categories</h4>
            </div>

            <div class="panel-body">

                @if($categories)

                <table class="table table-bordered">
                    <thead>
                      <tr class="success">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    @foreach($categories as $category)

                    <tbody>
                      <tr class="active">
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->description ? $category->description : "No description"}}</td>


                      <td><a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                      <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}

                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}

                        {!!Form::close()!!}
                      </td>
                      </tr>

                    </tbody>

                    @endforeach
                  </table>

                  @else

                    <div class="alert alert-warning">
                        <strong> No Categories Found !</strong>
                    </div>
                @endif


            </div>
        </div>
    </div>
@stop

