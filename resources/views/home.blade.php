@extends('layouts.front')

@section('content')

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">FEATHER FLAG BANNER</h4>
            </header>

            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <article href="#" class="card-banner h-100 bg2">
                            <div class="card-body zoom-wrap">
                                <h5 class="title">Feather Flag Banners</h5>
                                <p>Feather flags are the perfect outdoor and indoor banners for drawing attention to
                                    your business, product, promotion, or location. </p>
                                <a href="{{url('/category/feather-flag-banners')}}" class="btn btn-warning">Show Now</a>
                                <img src="{{asset('frontend/images/items/item-sm.png')}}" height="200"
                                     class="img-bg zoom-in">
                            </div>
                        </article>

                    </div> <!-- col.// -->
                    <div class="col-md-9">
                        <ul class="row no-gutters border-cols">
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Feather Flag Banner Kit + Ground Stake </p>
                                        <img class="img-lg" src="{{asset('frontend/images/f_ground.jpg')}}">
                                    </div>

                                </a>
                            </li>
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Feather Flag Banner Kit + X-base Stand</p>
                                        <img class="img-lg" src="{{asset('frontend/images/f_xbase.jpg')}}">
                                    </div>
                                </a>
                            </li>

                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Feather Flag Banner Kit + X-base Stand + Waterbag</p>
                                        <img class="img-lg" src="{{asset('frontend/images/f_water.jpg')}}">
                                    </div>
                                </a>
                            </li>

                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Feather Flag Banner – Flag Only</p>
                                        <img class="img-lg" src="{{asset('frontend/images/f_flag.jpg')}}">
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div> <!-- col.// -->
                </div> <!-- row.// -->

            </div> <!-- card.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">

            <header class="section-heading heading-line">
                <h4 class="title-section bg text-uppercase">TEARDROP FLAG BANNER</h4>
            </header>

            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-3">

                        <article href="#" class="card-banner h-100 bg2">
                            <div class="card-body zoom-wrap">
                                <h5 class="title">Teardrop Flag Banners</h5>
                                <p>Teardrop flag banners are great for drawing attention to your booth, business,
                                    product, promotion, or sales event, indoors and outdoors!</p>
                                <a href="#" class="btn btn-warning">Explore</a>
                                <img src="{{asset('frontend/images/items/item-sm.png')}}" height="200"
                                     class="img-bg zoom-in">
                            </div>
                        </article>

                    </div> <!-- col.// -->
                    <div class="col-md-9">
                        <ul class="row no-gutters border-cols">
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Teardrop Flag Banner Kit + Ground Stake </p>
                                        <img class="img-lg" src="{{asset('frontend/images/t_ground.jpg')}}">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Teardrop Flag Banner Kit + X-base Stand</p>
                                        <img class="img-lg" src="{{asset('frontend/images/t_xbase.jpg')}}">
                                    </div>
                                </a>
                            </li>

                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Teardrop Flag Banner Kit + X-base Stand + Waterbag</p>
                                        <img class="img-lg" src="{{asset('frontend/images/t_water.jpg')}}">
                                    </div>
                                </a>
                            </li>

                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Teardrop Flag Banner – Flag Only</p>
                                        <img class="img-lg" src="{{asset('frontend/images/t_flag.jpg')}}">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->

            </div> <!-- card.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


@endsection