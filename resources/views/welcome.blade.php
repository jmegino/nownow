<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>nownow</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
        <!-- Styles -->


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    @else

                        {{--<a href="{{ url('login') }}">Login</a>--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="../img/ui-sam.png" alt="Pic">
                </div>


                <div class="progress-bar">
                    <div class="progress" id="progress"></div>
                    <div id="percentCount" class="percent-count"></div>

                </div>

                <input type="hidden" id="progress_width" value="0">
            </div>
        </div>

        <script src="{{asset('js/script.js')}}"></script>
        {{--<script src="{{asset(('js/jquery.min.js'))}}"></script>--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
