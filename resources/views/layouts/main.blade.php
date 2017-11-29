<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @stack('scripts')
</head>
<body class="skin-blue sidebar-mini">
<div id="app" class="wrapper">
    <div class="main-header">
        @include('header')
    </div>
    <aside class="main-sidebar">
        @include('sidebar')
    </aside>
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
@stack('footer-scripts')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
