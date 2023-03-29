<div class="row justify-content-between">

    <!-- Logo -->
    <div class="col-lg-2 col-sm-3 col-3 order-1">
        <div class="logo_container">
            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('/') }}assets/logo.png" alt="logo" width="300px"></a></div>
        </div>
    </div>

    <!-- Search -->
    <div class="col-lg-8 col-12 order-lg-2 order-3 text-lg-left text-right">
        <div class="header_search">
            <div class="header_search_content">
                <div class="header_search_form_container">
                    <form action="#" class="header_search_form clearfix">
                        <input type="search" required="required" class="header_search_input"
                            placeholder="Search for products...">
                        <div class="custom_dropdown">
                            <div class="custom_dropdown_list">
                                <span class="custom_dropdown_placeholder clc">All Categories</span>
                                <i class="fas fa-chevron-down"></i>
                                <ul class="custom_list clc">
                                    <li><a class="clc" href="#">All Categories</a></li>
                                    <li><a class="clc" href="#">Tiket Pesawat</a></li>
                                    <li><a class="clc" href="#">Tiket Atraksi</a></li>
                                    <li><a class="clc" href="#">Paket Tour</a></li>
                                    <li><a class="clc" href="#">Paket Opentrip</a></li>
                                    <li><a class="clc" href="#">Booking Hotel</a></li>
                                </ul>
                            </div>
                        </div>
                        <button type="submit" class="header_search_button trans_300" value="Submit"><img
                                src="{{ asset('/') }}images/search.png" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
