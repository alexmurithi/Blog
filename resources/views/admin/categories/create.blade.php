@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4>Create Category</h4>
            </div>
            <div class="panel-body">

                {!!Form::open(['action'=>'AdminCategoriesController@store','method'=>'POST'])!!}

                 <div class="form-group">
                    {!!Form::label('name')!!}
                    {!!Form::text('name',null,['class'=>'form-control'])!!}
                 </div>

                 <div class="form-group">
                    {!!Form::label('Description')!!}
                    {!!Form::textarea('description',null,['class'=>'form-control','rows'=>5])!!}
                 </div>

                 <div class="form-group">
                     {!!Form::submit('Create Category',['class'=>'btn btn-success'])!!}
                 </div>

                {!!Form::close()!!}

            </div>
        </div>

        <div class="panel panel-info">
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
                      </tr>
                    </thead>
                    @foreach($categories as $category)

                    <tbody>
                      <tr class="active">
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->description ? $category->description : "No description"}}</td>
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
