@extends('layouts.admin')

@section('page_title', 'Edit Product')
@section('content')


    {!! Form::model($product,['method'=>'PUT', 'action'=>['Admin\AdminProductsController@update', $product->id],'files'=> true]) !!}

    <div class="form-group">
        {!! Form::label('categories','Categories') !!}
        {!! Form::select('categories[]', $categories ,null,['class'=>'categories form-control',  'multiple'=>'multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sku','SKU') !!}
        {!! Form::text('sku',null,['class'=>'form-control']) !!}
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
        {!! Form::label('price','Price') !!}
        {!! Form::text('price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body_short','Summary') !!}
        {!! Form::textarea('body_short',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Body') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', ['1' => 'Active', 0 => 'Inactive'], 1 , ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sort','Sort') !!}
        {!! Form::text('sort',null,['class'=>'form-control']) !!}
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
    @for ($i = 1; $i <= 8; $i++)
        <div class="form-inline">
            <div class="form-group mb-2">
                {!! Form::label('image_'.$i,'Product Image '.$i.' : ') !!}
                {!! Form::file('image_'.$i) !!}
            </div>
            <div class="form-group mx-sm-5 mb-3">
                {!! Form::label('image_description_'.$i,'SEO Desc. : ') !!}
                {!! Form::text('image_description_'.$i,null,['class'=>'form-control']) !!}
            </div>
        </div>
    @endfor

    <hr>




    <div class="form-group">
        {!! Form::submit('Update Product', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminProductsController@destroy',$product->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete Product', ['class'=>'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}


@endsection

@section('header_css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('footer_js')
    {{--CKEDITOR--}}
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.1/plugins/autogrow/plugin.js"></script>
    {{--CK EDITOR--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>

        $(function () {
            $('.categories').select2({
                placeholder: 'Select a Category'
            });

            CKEDITOR.replace('body_short', {
                height: 100
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