@extends('layouts.admin')

@section('content')
   <div class="container-fluid">
       <div class="panel panel-primary">
           <div class="panel panel-heading">
               <h4>Edit Category</h4>
           </div>

           <div class="panel-body">
            {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Category') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description',null,['class'=>'form-control','rows'=>4]) !!}
            </div>



          <div class="form-group">
              {!! Form::submit('Update Category',['class'=>'btn btn-info']) !!}
          </div>


          {!! Form::close() !!}
           </div>
       </div>
   </div>
@stop
