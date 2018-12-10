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
        {!! Form::label('sort','Sort') !!}
        {!! Form::text('sort',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], 1 , ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body_short','Summary (Top)') !!}
        {!! Form::textarea('body_short',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Body') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    <hr>
    <div class="form-group">
        {!! Form::label('meta_title','Meta Title') !!}
        {!! Form::text('meta_title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('meta_description','Meta Description') !!}
        {!! Form::text('meta_description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('meta_keyword','Meta Keyword') !!}
        {!! Form::text('meta_keyword',null,['class'=>'form-control']) !!}
    </div>

    <hr>
    <div class="form-group">
        {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection

@section('footer_js')
    {{--CKEDITOR--}}
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.1/plugins/autogrow/plugin.js"></script>
    {{--CK EDITOR--}}

    <script>

        $(function () {
            CKEDITOR.replace('body_short', {
                height: 200
            });
            CKEDITOR.replace('body', {
                extraPlugins: 'autogrow',
                autoGrow_minHeight: 250,
                autoGrow_maxHeight: 600,
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            });
        });
    </script>

@endsection