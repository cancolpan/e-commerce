@extends('layouts.admin')

@section('page_title', 'Edit Category')
@section('content')


    {!! Form::model($box_group,['method'=>'PUT', 'action'=>['Admin\AdminBoxGroupsController@update', $box_group->id]]) !!}


    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], $box_group->status , ['class'=>'form-control']) !!}
    </div>


    <hr>


    <div class="form-group">
        {!! Form::submit('Update Box Group', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminBoxGroupsController@destroy',$box_group->id]]) !!}


    <div class="form-group">
        {!! Form::submit('Delete Box Group', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}

@endsection
