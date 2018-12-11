@extends('layouts.front')


@section('content')

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg">SHOPPING CART</h4>
            </header>

            <div class="row">

                <main class="col-sm-9">
                    @include('inc.messages')
                    <div class="card">
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" width="120">Subtotal</th>
                                <th scope="col" class="text-right" width="50">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(count(Cart::getContent())>0)


                                @foreach(Cart::getContent() as $content)

                                    <tr>
                                        <td>
                                            <figure class="media">
                                                <div class="img-wrap"><img
                                                            src="{{URL::to('/') }}/uploads/products/{{$content->attributes->image}}"
                                                            class="img-thumbnail img-sm"></div>
                                                <figcaption class="media-body">
                                                    <h6 class="title"><a
                                                                href="{{url('/product/'.$content->attributes->slug)}}">{{$content->name}}</a>
                                                    </h6>
                                                    <dl class="dlist-inline small">
                                                        <dt>Size:</dt>
                                                        <dd>XXL</dd>
                                                    </dl>
                                                    <dl class="dlist-inline small">
                                                        <dt>Color:</dt>
                                                        <dd>Orange color</dd>
                                                    </dl>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            {!! Form::open(['method'=>'POST', 'action'=>'CartController@update']) !!}

                                            {!! Form::hidden('id', $content->id) !!}

                                            <select class="form-control" name="quantity" onchange="this.form.submit()">
                                                <option selected="selected"
                                                        value="{{$content->quantity}}">{{$content->quantity}}</option>
                                                @for($i=1;$i<1000;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">${{$content->price}}</var>
                                                <small class="text-muted">(each)</small>
                                            </div> <!-- price-wrap .// -->
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">${{$content->price * $content->quantity}}</var>
                                            </div> <!-- price-wrap .// -->
                                        </td>
                                        <td class="text-right">
                                            {!! Form::open(['method'=>'DELETE', 'action'=>'CartController@remove']) !!}

                                            <div class="form-group">
                                                {!! Form::hidden('id',$content->id) !!}

                                                {!! Form::submit('x Remove', ['class'=>'btn btn-outline-danger']) !!}
                                            </div>

                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    <tr><td colspan="5"><a href="{{route('cart.clear')}}" class="btn btn-danger">Clear Cart</a></td></tr>
                                @endforeach()
                            @else
                                <tr>
                                    <td colspan="5">Your Cart is empty</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div> <!-- card.// -->

                </main> <!-- col.// -->
                <aside class="col-sm-3">
                    <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE
                        Shipping. </p>
                    <dl class="dlist-align">
                        <dt>Total price:</dt>
                        <dd class="text-right">$ {{Cart::getTotal()}}</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Tax:</dt>
                        <dd class="text-right">$ 0</dd>
                    </dl>
                    <dl class="dlist-align h4">
                        <dt>Total:</dt>
                        <dd class="text-right"><strong>$ {{Cart::getTotal()}}</strong></dd>
                    </dl>
                    <hr>
                    <a href="" class="btn btn-primary">Proceed to Checkout</a>

                </aside> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection