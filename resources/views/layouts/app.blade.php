<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'nownow') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/chart-master/Chart.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

    <!--Ionicons-->
    <link rel="stylesheet" href="{{asset('Ionicons/css/ionicons.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/skin-mod.css')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <!--external css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/gritter/css/jquery.gritter.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('lineicons/style.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    {{--<link rel='stylesheet' id='fontawesome-css' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css?ver=cef393249aa859f391433a18b021ac10' type='text/css' media='all' />--}}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="app">
        @if(!Auth::guest())
            @include('bars.topbar')
            @include('bars.sidebar')
        @endif
        <main class="py-4">
            <div class="container">
                @include('messages')
            </div>
            @yield('content')
        </main>
    </div>

</body>
@if(!Auth::guest())
    @include('scripts')
@endif
</html>
