<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.header')

<body>
    
    <div class="super_container">
        @include('partials.btn')

        <!-- Header -->

        <header class="header">
            <!-- Header Main -->
            <div class="header_main">
                <div class="container">
                    @include('partials.headermain')
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    @include('partials.navbar')
                </div>
            </nav>
            
            <!-- Menu -->
            
            <div class="page_menu">
                <div class="container">
                    @include('partials.menu')
                </div>
            </div>

        </header>
        
        @yield('content')
        
        @yield('content2')

        
        <!-- Footer -->
        
        <footer class="footer">
            <div class="container">
                @include('partials.footer')
            </div>
        </footer>
        
        <!-- Copyright -->
        
        <div class="copyright">
            <div class="container">
                @include('partials.copyright')
            </div>
        </div>
    </div>
    
    @include('partials.script')
</body>

</html>
