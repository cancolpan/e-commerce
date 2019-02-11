@extends('layouts.front')


@section('content')



    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg">CHECK OUT</h4>
            </header>

            <div class="row">

                <main class="col-sm-8">
                    @include('inc.messages')


                    <div class="card">
                        <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>

                        <article class="card-body">
                            <form>
                                <div class="form-row">


                                    <div class="col form-group">
                                        {!! Form::label('firstname','First name') !!}
                                        {!! Form::text('firstname',null,['class'=>'form-control']) !!}
                                    </div> <!-- form-group end.// -->
                                    <div class="col form-group">
                                        {!! Form::label('lastname','Last name') !!}
                                        {!! Form::text('lastname',null,['class'=>'form-control']) !!}
                                    </div> <!-- form-group end.// -->
                                </div> <!-- form-row end.// -->
                                <div class="form-group">
                                    {!! Form::label('company_name','Company name (optional)') !!}
                                    {!! Form::text('company_name',null,['class'=>'form-control']) !!}
                                </div> <!-- form-group end.// -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        {{ Form::label('country','Country') }}
                                        {{ Form::select('country',['u'=>'United States','c'=>'Canada'],null,['class'=>'form-control']) }}
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group col-md-6">
                                        {{ Form::label('city','Town/City') }}
                                        {{ Form::text('city',null,['class'=>'form-control']) }}
                                    </div> <!-- form-group end.// -->
                                </div> <!-- form-row.// -->
                                <div class="form-group">
                                    {{ Form::label('address','Address') }}
                                    {{ Form::text('address',null,['class'=>'form-control']) }}
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        {{ Form::label('state','State/County') }}
                                        {{ Form::text('state',null,['class'=>'form-control']) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('zip','Postcode/Zip') }}
                                        {{ Form::text('zip',null,['class'=>'form-control']) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('note','Order notes(optional)') }}
                                    {{ Form::textarea('note',null,['class'=>'form-control','rows'=>'3']) }}
                                </div> <!-- form-group// -->

                            </form>
                        </article> <!-- card-body end .// -->

                    </div> <!-- card.// -->


                </main> <!-- col.// -->
                <aside class="col-sm-4">

                    <table class="table table-hover shopping-cart-wrap">
                        <thead class="text-muted">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach(Cart::getContent() as $content)

                            <tr>
                                <td>
                                    <a href="{{url('/product/'.$content->attributes->slug)}}">{{$content->name}} x
                                        <b>{{ $content->quantity }}</b></a>

                                </td>
                                <td>
                                    ${{$content->price * $content->quantity}}
                                </td>

                            </tr>
                        @endforeach()
                        <tr>
                            <td>Subtotal</td>
                            <td>$ {{ \Cart::getTotal() }}</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Local Pickup</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>$ {{ \Cart::getTotal() }}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>$ {{ \Cart::getTotal() }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <a href="" class="btn btn-primary">Place Order</a>

                </aside> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection