@extends('layouts.app')

@section('title')
    Deskripsi - {{ $desc->nama }}
@endsection

@section('cus-css')
    <link rel="stylesheet" href="{{ asset('/') }}plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/OwlCarousel2-2.2.1/animate.css">
@endsection

@section('desc')

@endsection

@section('content')
    <!-- Single Product -->

<div class="single_product">
    <div class="container">
        <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image="{{ asset('/assets/content/opentrip') }}/{{ $desc->thumbnail }}"><img src="{{ asset('/assets/content/opentrip') }}/{{ $desc->thumbnail }}" alt="{{ $desc->thumbnail }}"></li>
                    <li data-image="{{ asset('/assets/content/opentrip') }}/{{ $desc->foto1 }}"><img src="{{ asset('/assets/content/opentrip') }}/{{ $desc->foto1 }}" alt="{{ $desc->foto1 }}"></li>
                    <li data-image="{{ asset('/assets/content/opentrip') }}/{{ $desc->foto2 }}"><img src="{{ asset('/assets/content/opentrip') }}/{{ $desc->foto2 }}" alt="{{ $desc->foto2 }}"></li>
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected"><img src="{{ asset('/assets/content/opentrip') }}/{{ $desc->thumbnail }}" alt="{{ $desc->thumbnail }}"></div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category">{{ $desc->kategori }}</div>
                    <div class="product_name desc">{{ $desc->nama }}</div>
                    {{-- <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div> --}}
                    <div class="product_text">
                        <p>{!! $desc->deskripsi !!}</p>
                    </div>
                    <div class="order_info d-flex flex-row">
                        {{-- <form action="#">
                            <div class="clearfix" style="z-index: 1000;">

                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Quantity: </span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                                class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                                class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>

                                <!-- Product Color -->
                                <ul class="product_color">
                                    <li>
                                        <span>Color: </span>
                                        <div class="color_mark_container">
                                            <div id="selected_color" class="color_mark"></div>
                                        </div>
                                        <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                                        <ul class="color_list">
                                            <li>
                                                <div class="color_mark" style="background: #999999;"></div>
                                            </li>
                                            <li>
                                                <div class="color_mark" style="background: #b19c83;"></div>
                                            </li>
                                            <li>
                                                <div class="color_mark" style="background: #000000;"></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            <div class="product_price">$2000</div>
                            <div class="button_container">
                                <button type="button" class="button cart_button">Add to Cart</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>
                            
                        </form> --}}
                        <div class="button_container">
                            <button type="button" class="button cart_button"><a href="https://wa.me/+6289622823800" target="_blank"><i
                                    class="fab fa-whatsapp"></i> Book Now</a></button>
                            {{-- <div class="product_fav"><i class="fas fa-heart"></i></div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content2')
    <!-- Recently Viewed -->

    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">See More</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">

                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">

                            @foreach ($dataProduk as $dp)
                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('/assets/content/min') }}/{{ $dp->thumbnail }}" alt="{{ $dp->thumbnail }}"></div>
                                    <div class="viewed_content text-center">
                                        @if ($dp->harga !== null)
                                            <div class="viewed_price">Rp.{{ $dp->harga }}</div>
                                        @endif
                                        <div class="viewed_name"><a href="#">{{ $dp->nama }}</a></div>
                                    </div>
                                    @if ($dp->discount !== null)
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-{{ $dp->discount }}%</li>
                                            {{-- <li class="item_mark item_new">new</li> --}}
                                        </ul>
                                    @endif
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
