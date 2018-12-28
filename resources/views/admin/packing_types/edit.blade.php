@extends('layouts.admin')

@section('page_title', 'Edit Packing Type')
@section('content')


    {!! Form::model($packing_type,['method'=>'PUT', 'action'=>['Admin\AdminPackingTypesController@update', $packing_type->id]]) !!}


    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('big_order_level', 'Big Order Level:') !!}
        {!! Form::text('big_order_level', null, ['class'=>'form-control']) !!}
    </div>



    <hr>


    <div class="form-group">
        {!! Form::submit('Update Packing Type', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminPackingTypesController@destroy',$packing_type->id]]) !!}


    <div class="form-group">
        {!! Form::submit('Delete Packing Type', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}

@endsection
