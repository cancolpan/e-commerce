@extends('layouts.admin')

@section('page_title', 'Create Product')
@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminProductsController@store', 'files'=>true]) !!}

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
    <hr>
    <h4>Packing
        <small> - Please add packing box type and product weight. If you packing separately please add all packing box options and weights. </small>
    </h4>


    <table class="table" width="100%" id="data">
        <thead>
        <tr>
            <th width="10px"><input type="button" class="btn btn-primary" id="addnew" name="addnew" value="Add"/>
                <input type="hidden" id="items" name="items" value="1"/></th>
            <th>Box Group</th>
            <th>Weight (lb)</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td>
                <div class="form-group">
                    <select name="box_group_1" class="form-control">'+
                        '<?php
                        foreach($box_groups as $box_group){
                            echo '<option value="'.$box_group['id'].'">'.$box_group['name'].'</option>';
                        }
                        ?>.'+
                        '</select>
                </div>
            </td>
            <td>
                <div class="form-group">
                    {!! Form::text('weight_1',null,['class'=>'form-control']) !!}
                </div>
            </td>
        </tr>
        </tbody>
    </table>




    <hr>
    <div class="form-group">
        {!! Form::label('body_short','Summary') !!}
        {!! Form::textarea('body_short',null,['class'=>'form-control','rows' => 3]) !!}
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
    <h4>SEO Optimization</h4>

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
    <h4>Images</h4>

    <div class="row">
        @for ($i = 1; $i <= 8; $i++)
            <div class="col-md-3">
                <div class="thumbnail">
                    <div class="form-group mb-2">
                        {!! Form::file('image_'.$i) !!}
                        {!! Form::text('image_description_'.$i,null,['class'=>'form-control','placeholder'=>'SEO Description']) !!}
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <hr>


    <div class="form-group">
        {!! Form::submit('Create Product', ['class'=>'btn btn-primary']) !!}
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

        $(document).ready(function () {
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

            var currentItem = 1;
            $('#addnew').click(function () {
                currentItem++;
                $('#items').val(currentItem);
                var strToAdd = '<tr><td></td><td>' +
                    '<div class="form-group">' +
                        '<select name="box_group_'+currentItem+'" class="form-control">'+
                        '<?php
                        foreach($box_groups as $box_group){
                         echo '<option value="'.$box_group['id'].'">'.$box_group['name'].'</option>';
                        }
                        ?>.'+
                        '</select>'+
                    '</div></td><td>' +
                    '<input class="form-control" name="weight_'+currentItem+'" type="text">' +
                    '</td></tr>';
                $('#data').append(strToAdd);

            });


        });
    </script>

@endsection