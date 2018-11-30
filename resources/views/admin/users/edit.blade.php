@extends('layouts.admin')

@section('page_title', 'Edit User')
@section('content')


    {!! Form::model($user,['method'=>'PATCH', 'action'=>['Admin\AdminUsersController@update', $user->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('role_id','Role') !!}
        {!! Form::select('role_id',[''=>'Choose Options'] + $roles ,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], 1 , ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}




@endsection