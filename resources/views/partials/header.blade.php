<head>
    <!-- Required meta tags -->
    <title>@yield('title') - SinggahSiniAja</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('desc')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/') }}assets/favicon.png" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/') }}styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free-5.0.1/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <!-- endinject -->
    <!-- Main css for this page -->
    <link rel="stylesheet" href="{{ asset('/') }}styles/shop_styles.css">
    <link rel="stylesheet" href="{{ asset('/') }}styles/shop_responsive.css">
    <!-- End css for this page -->
    <!-- inject:css -->
    @yield('cus-css')
    <!-- endinject -->
</head>
