@extends('layouts.admin')

@section('page_title', 'Packing Types')
@section('content')



    <a href="{{route('packing_types.create')}}" class="btn btn-primary btn-sm">Create</a>

    <div class="table-responsive">
        <table class="table table-bordered" id="#dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th width="5px">#</th>
                <th width="200px">Name</th>
                <th width="200px">Big Order Level</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($packing_types as $packing_type)
                <tr>
                    <td>{{$packing_type->id}}</td>
                    <td><a href="{{route('packing_types.edit', $packing_type->id)}}">{{$packing_type->name}}</a></td>
                    <td>{{$packing_type->big_order_level}}</td>
                    <td>{{$packing_type->updated_at->diffForHumans()}}</td>
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