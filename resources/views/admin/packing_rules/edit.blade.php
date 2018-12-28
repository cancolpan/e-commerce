@extends('layouts.admin')

@section('page_title', 'Packing Rules - If product "packing with another products" we should select big order box type (Except main product in box)')
@section('content')



    <div class="table-responsive">
        <table class="table table-bordered" id="#dataTable" width="100%" cellspacing="0">
            <tr>
                <td>
                    {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminPackingRulesController@store', 'files'=>true]) !!}
                    {!! Form::submit('Add', ['class'=>'btn btn-success btn-sm']) !!}</td>
                <td>
                    {!! Form::select('packing_type_id',[''=>'Select'] + $packing_types ,null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::text('min_quantity',null,['class'=>'form-control', 'placeholder'=>'Min']) !!}
                </td>
                <td>
                    {!! Form::text('max_quantity',null,['class'=>'form-control', 'placeholder'=>'Max']) !!}
                </td>
                <td>
                    {!! Form::select('box_id',['0'=>'Packing with other products'] + $boxes ,null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::select('box_id_big_order',['0'=>'Select'] + $boxes ,null,['class'=>'form-control']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            <thead>
            <tr>
                <th width="5px">#</th>
                <th width="200px">Packing Type</th>
                <th width="100px">Min Quantity</th>
                <th width="100px">Max Quantity</th>
                <th width="200px">Box</th>
                <th width="200px">Big Order Box</th>
            </tr>
            </thead>
            <tbody>
            @foreach($packing_rules as $packing_rule)
                @if($packing_rule->id<>$packing_one->id)
                <tr>
                    <td><a href="{{route('packing_rules.edit', $packing_rule->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>{{$packing_rule->packing_type->name}}</td>
                    <td>{{$packing_rule->min_quantity}}</td>
                    <td>{{$packing_rule->max_quantity}}</td>
                    <td>{{$packing_rule->box_id <> 0 ? $packing_rule->box($packing_rule->box_id)->name : 'Pack with other products'}}</td>
                    <td>{{$packing_rule->box_id_big_order <> 0 ?$packing_rule->box($packing_rule->box_id_big_order)->name : '--'}}</td>
                </tr>
                @else
                    <tr>
                        <td>
                            {!! Form::model($packing_one,['method'=>'PUT', 'action'=>['Admin\AdminPackingRulesController@update',$packing_one->id]]) !!}

                            {!! Form::submit('Update', ['class'=>'btn btn-warning btn-sm']) !!}</td>
                        <td>
                            {!! Form::select('packing_type_id',[''=>'Select'] + $packing_types ,null,['class'=>'form-control']) !!}
                        </td>
                        <td>
                            {!! Form::text('min_quantity',null,['class'=>'form-control', 'placeholder'=>'Min']) !!}
                        </td>
                        <td>
                            {!! Form::text('max_quantity',null,['class'=>'form-control', 'placeholder'=>'Max']) !!}
                        </td>
                        <td>
                            {!! Form::select('box_id',['0'=>'Packing with other products'] + $boxes ,null,['class'=>'form-control']) !!}
                        </td>
                        <td>
                            {!! Form::select('box_id_big_order',['0'=>'Select'] + $boxes ,null,['class'=>'form-control']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endif
            @endforeach
            </tbody>
        </table>
    </div>

@endsection



@section('header_css')
    <!-- Page level plugin CSS-->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <style>
        /* Equal-height card images, cf. https://stackoverflow.com/a/47698201/1375163*/
        .card-img-top {
            /*height: 11vw;*/
            object-fit: cover;
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 100px) {
            .card-img-top {
                height: 3vw;
            }
        }

    </style>

@endsection


@section('footer_js')

    <!-- Page level plugin JavaScript-->
    <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                responsive: true
            });
        });
    </script>
@endsection