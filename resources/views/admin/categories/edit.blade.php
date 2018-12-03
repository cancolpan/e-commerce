@extends('layouts.admin')

@section('page_title', 'Edit Category')
@section('content')


    {!! Form::model($category,['method'=>'PUT', 'action'=>['Admin\AdminCategoriesController@update', $category->id]]) !!}



    <div class="form-group">
        {!! Form::label('parent_id','Parent') !!}
        {!! Form::select('parent_id',[''=>'Choose Parent'] + $parents ,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], 1 , ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminCategoriesController@destroy',$category->id]]) !!}


        <div class="form-group">
            {!! Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}

@endsection