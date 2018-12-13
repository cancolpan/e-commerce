@extends('layouts.admin')

@section('page_title', 'Packing Boxes')
@section('content')





            {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminBoxesController@search']) !!}



                <div class="form-group -pull-right">
                    {!! Form::text('keyword', null, ['class'=>'form-control','placeholder'=>'Search...']) !!}
                </div>


                {!! Form::close() !!}


    <div class="table-responsive">
        <table class="table table-bordered" id="#dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th width="5px">#</th>
                <th width="200px">Box Group</th>
                <th width="200px">Name</th>
                <th width="10px">Length</th>
                <th width="50px">Width</th>
                <th width="10px">Height</th>
                <th width="15px">Min Quantity</th>
                <th width="15px">Max Quantity</th>
                <th width="10px">Status</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($boxes as $box)
                <tr>
                    <td>{{$box->id}}</td>
                    <td>{{$box->box_group->name}}</td>
                    <td><a href="{{route('boxes.edit', $box->id)}}">{{$box->name}}</a></td>
                    <td>{{$box->length}}</td>
                    <td>{{$box->width}}</td>
                    <td>{{$box->height}}</td>
                    <td>{{$box->min_quantity}}</td>
                    <td>{{$box->max_quantity}}</td>
                    <td>{{$box->status==1 ? 'Active' : 'Inactive'}}</td>
                    <td>{{$box->updated_at->diffForHumans()}}</td>
                </tr>
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