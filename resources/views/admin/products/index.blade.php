@extends('layouts.admin')

@section('page_title', 'Products')
@section('content')





            {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminProductsController@search']) !!}



                <div class="form-group -pull-right">
                    {!! Form::text('keyword', null, ['class'=>'form-control','placeholder'=>'Search...']) !!}
                </div>


                {!! Form::close() !!}


    <div class="table-responsive">
        <table class="table table-bordered" id="#dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th width="5px">#</th>
                <th width="10px">SKU</th>
                <th width="10px">Price</th>
                <th width="50px">Image</th>
                <th>Name</th>
                <th>Status</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->sku}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <div class="thumbnail">
                            <img src="{{URL::to('/') }}/uploads/products/{{$product['image_1']}}" alt="Nature" style="width:100%" class="card-img-top img-fluid">
                        </div>
                    </td>
                    <td><a href="{{route('products.edit', $product->id)}}">{{$product->name}}</a></td>
                    <td>{{$product->status==1 ? 'Active' : 'Inactive'}}</td>
                    <td>{{$product->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
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