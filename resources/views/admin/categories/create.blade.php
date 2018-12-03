@extends('layouts.admin')

@section('page_title', 'Create Category')
@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminCategoriesController@store']) !!}



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
        {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection