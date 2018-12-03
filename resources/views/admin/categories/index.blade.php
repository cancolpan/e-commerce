@extends('layouts.admin')

@section('page_title', 'Categories')
@section('content')

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th width="5px">#</th>
            <th>Name</th>
            <th>Status</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                <td>{{$category->status==1 ? 'Active' : 'Inactive'}}</td>
                <td>{{$category->created_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection



@section('header_css')
    <!-- Page level plugin CSS-->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

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