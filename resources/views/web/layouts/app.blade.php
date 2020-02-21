<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title', 'Air Sydney')</title>
    <meta name="description" content="@yield('description', 'Air Sydney Description')"/>
    <meta name="keyword" content="@yield('keyword', 'Air Sydney Keyword')"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- SCRF-TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Styles --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/web/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/icomoon.css') }}">
    <link rel="stylesheet" href="{{ mix('css/web/app.css')  }}">

    @yield('styles')
</head>
<body>

@include('web.layouts._header')

@yield('content')

@include('web.layouts._footer')

@include('sweetalert::alert')


{{-- Loader --}}
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

{{-- Scripts --}}
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/web/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/web/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/web/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/web/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/web/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/web/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/web/aos.js') }}"></script>
<script src="{{ asset('js/web/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/web/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/web/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/web/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/web/google-map.js') }}"></script>
<script src="{{ mix('js/web/main.js') }}"></script>

@yield('scripts')


</body>
</html>
