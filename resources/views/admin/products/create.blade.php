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
        <small> - Please add packing box type and product weight. If you packing separately please add all packing box
            options and weights.
        </small>
    </h4>



    <table id="myTable" class=" table order-list">
        <thead>
        <tr>
            <td>#</td>
            <td>Box Group</td>
            <td>Weight (lb)</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="col-sm-1"><input type="hidden" id="items" name="items" value="1"/>
                <a class="deleteRow"></a>
            </td>

            <td class="col-sm-3">
                <div class="form-group">
                    <select name="box_group[]" class="form-control">'+
                        '<?php
                        foreach ($box_groups as $box_group) {
                            echo '<option value="' . $box_group['id'] . '">' . $box_group['name'] . '</option>';
                        }
                        ?>.'+
                        '</select>
                </div>
            </td>

            <td class="col-sm-4">
                {!! Form::text('weight[]',null,['class'=>'form-control']) !!}
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row"/>
            </td>
        </tr>
        <tr>
        </tr>
        </tfoot>
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


            // BOX GROUP PROCESS JAVASCRIPT


            var currentItem = 1;

            $("#addrow").on("click", function () {
                currentItem++;
                var newRow = $("<tr>");
                var cols = '<td class="col-sm-1"><input type="button" class="ibtnDel btn btn-md btn-danger"  value="Delete"></td><td  class="col-sm-3" >' +
                    '<div class="form-group">' +
                    '<select name="box_group[]" class="form-control">' +
                    '<?php
                        foreach ($box_groups as $box_group) {
                            echo '<option value="' . $box_group['id'] . '">' . $box_group['name'] . '</option>';
                        }
                        ?>.' +
                    '</select>' +
                    '</div></td><td  class="col-sm-4">' +
                    '<input class="form-control" name="weight[]" type="text">' +
                    '</td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                $('#items').val(currentItem);
            });


            $("table.order-list").on("click", ".ibtnDel", function (event) {
                $(this).closest("tr").remove();
                currentItem -= 1
                $('#items').val(currentItem);
            });

            // BOX GROUP PROCESS JAVASCRIPT


        });
    </script>

@endsection