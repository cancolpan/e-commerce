@extends('layouts.admin')

@section('page_title', 'Packing Box Create')
@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminBoxesController@store']) !!}

    <div class="form-group">
        {!! Form::label('box_group_id','Box Group') !!}
        {!! Form::select('box_group_id',[''=>'Choose Options'] + $box_groups ,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('length', 'Length (in):') !!}
        {!! Form::text('length', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('width','Width (in):') !!}
        {!! Form::text('width',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('height','Height: (in)') !!}
        {!! Form::text('height',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], 1 , ['class'=>'form-control']) !!}
    </div>

    <hr>
    <div class="form-group">
        {!! Form::submit('Create Packing Box', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection
