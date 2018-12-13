@extends('layouts.admin')

@section('page_title', 'Packing Box Groups')
@section('content')





            {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminBoxGroupsController@search']) !!}



                <div class="form-group -pull-right">
                    {!! Form::text('keyword', null, ['class'=>'form-control','placeholder'=>'Search...']) !!}
                </div>


                {!! Form::close() !!}


    <div class="table-responsive">
        <table class="table table-bordered" id="#dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th width="5px">#</th>
                <th width="200px">Name</th>
                <th width="10px">Status</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($box_groups as $box_group)
                <tr>
                    <td>{{$box_group->id}}</td>
                    <td><a href="{{route('box_groups.edit', $box_group->id)}}">{{$box_group->name}}</a></td>
                    <td>{{$box_group->status==1 ? 'Active' : 'Inactive'}}</td>
                    <td>{{$box_group->updated_at->diffForHumans()}}</td>
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