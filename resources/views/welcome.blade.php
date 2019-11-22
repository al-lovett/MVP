<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YouBiz</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" type="text/css" href="{{  url('/css/app.css') }}">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="">
              <img src="images/bare-feet.jpg">
                <div class="text align center">
                    <h2> YouBiz </h2>
                    <p> If you are a small business who needs to quote and <br> or Invoice quickly.
                    Within a few seconds to input your customers data.<br> A PDF can be generated and emailed
                    right off of your phone. </p>
                </div>

            </div>
        </div>
    </body>
</html>
