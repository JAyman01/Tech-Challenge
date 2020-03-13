<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tech-Challenge</title>
        <link rel="icon" href="{{ asset('logo.png') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .body{
                padding: calc(200px + 1rem) 2rem 0;
                margin-top: -200px;
                overflow: hidden;background-image: -webkit-gradient(linear,left top,right top,from(#ff8a00),to(#e52e71));
                background-image: linear-gradient(90deg,#ff8a00,#e52e71);
                position: relative;
            }

            .logo{
                color:white;
                text-shadow:     0 1px 0 hsl(174,5%,80%),
                                 0 2px 0 hsl(174,5%,75%),
                                 0 3px 0 hsl(174,5%,70%),
                                 0 4px 0 hsl(174,5%,66%),
                                 0 5px 0 hsl(174,5%,64%),
                                 0 6px 0 hsl(174,5%,62%),
                                 0 7px 0 hsl(174,5%,61%),
                                 0 8px 0 hsl(174,5%,60%),
​
                                 0 0 5px rgba(0,0,0,.05),
                                 0 1px 3px rgba(0,0,0,.2),
                                 0 3px 5px rgba(0,0,0,.2),
                                 0 5px 10px rgba(0,0,0,.2),
                                 0 10px 10px rgba(0,0,0,.2),
                                 0 20px 20px rgba(0,0,0,.3);
            }
        </style>
    </head>
    <body class="body">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" style="color:white;">
                    @auth
                        <a href="{{ url('/home') }}" style="color:white;">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color:white;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color:white;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="{{asset('logo.png')}}" style="width: 10%; margin-right:2%;margin-bottom:2%">
                <div class="title m-b-md logo" style="">
                    Tech-challenge
                </div>

                <div class="links logo" >
                    Tech-challenge is a dashboard  to announce tech challenge and get codes from participants. <i class="fas fa-hands-helping"></i>
                </div>
            </div>
        </div>
    </body>
</html>
