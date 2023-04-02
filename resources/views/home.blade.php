@extends('layouts.app')

@section('title')
    Home
@endsection

@section('cus-css')
    <link rel="stylesheet" href="{{ asset('/') }}plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/OwlCarousel2-2.2.1/animate.css">
@endsection

@section('desc')
@endsection


@section('content')
    <!-- Banner -->

    <div class="banner">
        <div class="banner_background"
            style="background-image:url({{ asset('/') }}assets/banner/banner2.png); opacity: 0.6;">
            <!-- Notifikasi menggunakan flash session data -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="{{ asset('/') }}assets/banner/banner1.png" alt="banner"
                        loading="lazy" height="460px"></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content" style="height: 300px;">
                        <h1 class="banner_text" style="color: #08415D;">Your Travel Experience Starts Here!</h1>
                        <!-- <div class="banner_price"><span>$530</span>$460</div> -->
                        <!-- <div class="banner_product_name">With SinggahSiniAja</div> -->
                        <div class="button banner_button"><a href="https://wa.me/+6289622823800" target="_blank"><i
                                    class="fab fa-whatsapp"></i> Book Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <!-- Shop Content -->

            <div class="shop_content">
                <div class="shop_bar clearfix">
                    <div class="shop_product_count"><span>{{ $dataTrip->count() }}</span> products found</div>
                    <div class="shop_sorting">
                        <span>Sort by:</span>
                        <ul>
                            <li>
                                <span class="sorting_text">latest<i class="fas fa-chevron-down"></span></i>
                                <ul>
                                    <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>
                                        latest
                                    </li>
                                    <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                                    <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "cat" }'>category</li>
                                    <li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product_grid">
                    <div class="product_grid_border"></div>

                    @foreach ($dataTrip as $dt)
                        <div class="product_item">
                            <div class="product_border"></div>
                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                <a data-fslightbox="trip"
                                    href="{{ asset('/assets/content/opentrip') }}/{{ $dt->thumbnail }}">
                                    <img src="{{ asset('/assets/content/opentrip') }}/{{ $dt->thumbnail }}"
                                        alt="{{ $dt->thumbnail }}" loading="lazy" width="900px">
                                </a>
                            </div>
                            <div class="product_content">
                                @if ($dt->harga !== null)
                                    <div class="product_price">Rp.{{ $dt->harga }}</div>
                                    <div class="product_cat">
                                        <p>{{ $dt->kategori }}</p>
                                    </div>
                                @else
                                    <div class="product_cat mt-4">
                                        <p>{{ $dt->kategori }}</p>
                                    </div>
                                @endif
                                <div class="product_name">
                                    <div><a href="{{ route('desc.trip', ['id' => Crypt::encryptString($dt->id)]) }}"
                                            tabindex="0">{{ $dt->nama }}</a></div>
                                </div>
                            </div>
                            @if ($dt->discount !== null)
                            <ul class="product_marks">
                                <li class="product_mark product_discount">-{{ $dt->discount }}%</li>
                            </ul>
                            @endif
                        </div>
                    @endforeach

                </div>

                <!-- Shop Page Navigation -->

                {{-- <div class="shop_page_nav d-flex flex-row">
                    <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i
                            class="fas fa-chevron-left"></i></div>
                    <ul class="page_nav d-flex flex-row">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">21</a></li>
                    </ul>
                    <div class="page_next d-flex flex-column align-items-center justify-content-center"><i
                            class="fas fa-chevron-right"></i></div>
                </div> --}}

            </div>
        </div>
    </div>
@endsection

@section('content2')
    <!-- Trends -->

    <div class="trends">
        <div class="trends_background" style="background-image:url({{ asset('/') }}images/trends_background.jpg)"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Destinasi Wisata</h2>
                        <div class="trends_text">
                            <p>Dalam Negeri, Luar Negeri dan Tiket Atraksi</p>
                        </div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">

                            <!-- Trends Slider Item -->

                            @foreach ($dataProduk as $dp)
                                <div class="owl-item">
                                    <div class="trends_item">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <a data-fslightbox="produk"
                                                href="{{ asset('/assets/content/min') }}/{{ $dp->thumbnail }}">
                                                <img src="{{ asset('/assets/content/min') }}/{{ $dp->thumbnail }}"
                                                    alt="{{ $dp->thumbnail }}" loading="lazy" width="1024px">
                                            </a>
                                        </div>
                                        <div class="trends_content">
                                            <div class="trends_category pt-2"><a href="#">{{ $dp->kategori }}</a>
                                            </div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a
                                                        href="product.html">{{ $dp->nama }}</a>
                                                </div>
                                                @if ($dp->harga !== null)
                                                    <div class="trends_price">Rp.{{ $dp->harga }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <ul class="trends_marks">
                                            @if ($dp->discount !== null)
                                                <li class="trends_mark trends_discount">-{{ $dp->discount }}%</li>
                                            @endif
                                            <!-- <li class="trends_mark trends_new">new</li> -->
                                        </ul>
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

@section('cus-script')
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(300, 0).slideUp(300, function() {
                    $(this).remove();
                });
            }, 4000);
        });
    </script>
@endsection
