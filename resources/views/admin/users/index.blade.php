@extends('layouts.admin')

@section('page_title', 'Users')
@section('content')

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Status</th>
            <th>Role</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->status==1 ? 'Active' : 'Disabled'}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
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