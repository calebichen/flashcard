<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Flash Card - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @yield('extra_css')
</head>

<body class="sidebar-mini" >
<div class="wrapper">

    @include('layouts.dashboard.header')

    @include('layouts.dashboard.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">
        @yield('content')
    </div>

</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
@yield('extra_js')
</body>
</html>

