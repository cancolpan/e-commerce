@extends('layouts.admin')

@section('page_title', 'Packing Box Group Create')
@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminBoxGroupsController@store']) !!}



    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], 1 , ['class'=>'form-control']) !!}
    </div>

    <hr>
    <div class="form-group">
        {!! Form::submit('Create Packing Box Group', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection
