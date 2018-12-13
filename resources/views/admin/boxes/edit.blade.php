@extends('layouts.admin')

@section('page_title', 'Edit Packing Box')
@section('content')


    {!! Form::model($box,['method'=>'PUT', 'action'=>['Admin\AdminBoxesController@update', $box->id]]) !!}

    <div class="form-group">
        {!! Form::label('group_id','Box Group') !!}
        {!! Form::select('group_id',[''=>'Choose Options'] + $box_groups ,null,['class'=>'form-control']) !!}
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
        {!! Form::label('min_quantity','Min Product Capacity:') !!}
        {!! Form::text('min_quantity',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('max_quantity','Max Product Capacity:') !!}
        {!! Form::text('max_quantity',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], $box->status , ['class'=>'form-control']) !!}
    </div>


    <hr>


    <div class="form-group">
        {!! Form::submit('Update Box', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminBoxesController@destroy',$box->id]]) !!}


    <div class="form-group">
        {!! Form::submit('Delete Box', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}

@endsection
