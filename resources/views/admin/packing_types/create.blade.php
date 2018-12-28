@extends('layouts.admin')

@section('page_title', 'Packing Type Create')
@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminPackingTypesController@store']) !!}



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
        {!! Form::submit('Create Packing Type', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection
