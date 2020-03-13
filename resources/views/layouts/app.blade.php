<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('logo.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tech-Challenge') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

.bodytheme{

    height:200%;
    width:100%;

  background: #100e17;
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: initial;
  background-repeat-y: initial;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: rgb(16, 14, 23);
  z-index: 10;
}

.backgroundFiltred{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -100;
    background-image: radial-gradient(ellipse closest-side, rgba(15, 14, 22, 0.75), #100e17), url(https://previews.123rf.com/images/houbacze/houbacze1705/houbacze170500393/78423870-red-vector-flat-design-background-challenge-it-is-well-adapted-for-web-design-.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.95;
}

.theme{
    background: -webkit-gradient(linear, left top, right top, from(#ff8a00), to(#e52e71));
    background: linear-gradient(90deg, #ff8a00, #e52e71);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone;
    -webkit-text-decoration-color: #ff8a00!important;
    text-decoration-color: #ff8a00!important;
    font-weight: 700;
    padding-bottom: .15rem;
}

.themeColored{
    overflow: hidden;
    background-image: -webkit-gradient(linear,left top,right top,from(#ff8a00),to(#e52e71));
    background-image: linear-gradient(90deg,#ff8a00,#e52e71);
    position: relative;
}
.btnThemed{
    overflow: hidden;
    background-image: -webkit-gradient(linear,left top,right top,from(#ff8a00),to(#e52e71));
    background-image: linear-gradient(90deg,#ff8a00,#e52e71);
    position: relative;
}
 .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.mini-card {
    min-width: 300px;
    min-height: 350px;
    padding: 1.5rem;
    border-radius: 16px;
    background: #17141d;
    box-shadow: -1rem 0 3rem #000;
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -webkit-transition: .2s;
    transition: .2s;
    margin: 0;
}
.popular-articles .mini-card {
    scroll-snap-align: start;
}
t: 0;
}


.tags {
    margin: 1rem 0 2rem;
    padding: .5rem 0 1rem;
    line-height: 2;
}
.page-header-top-nav:after {
    position: absolute;
    left: 100%;
    bottom: 3.5rem;
    height: 3.5rem;
    width: 37.5vw;
    border: inherit;
    border-color: #eb7d01;
    border-width: 4px 0 0 4px;
    border-radius: 3.5rem 0 0 0;
    content: "";
}
.popular-articles {
    box-sizing: content-box;
    display: -webkit-box;
    display: flex;
    width: calc(100vw - 71px);
    margin: 0 0 5rem;
    padding: 2rem 0;
}
.mini-card-grid {
    scrollbar-color: #201c29;
    scrollbar-width: 10px;
    scrollbar-gutter: always;
    padding: 3rem;
    display: -webkit-box;
    display: flex;
    overflow-x: scroll;
    -webkit-overflow-scrolling: touch;
}


.mini-card:not(:first-child) {
    margin-left: -130px;
}

.mini-card {
    min-width: 300px;
    min-height: 350px;
    padding: 1.5rem;
    border-radius: 16px;
    background: #17141d;
    box-shadow: -1rem 0 3rem #000;
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -webkit-transition: .2s;
    transition: .2s;
    margin: 0;
}

.ais-hits--item, .module {
    clear: both;
    margin: 0 0 1rem;
    position: relative;
}
.snippet-top-level-nav {
    display: -webkit-box;
    display: flex;
}
.page-header-top-nav {
    font-family: Ringside Regular A,Ringside Regular B,Rubik,Lato,Lucida Grande,Lucida Sans Unicode,Tahoma,Sans-Serif;
    font-style: normal;
    font-weight: 700;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    position: relative;
    margin: 1rem 37.5vw 0 -1rem;
    border: 4px solid transparent;
    padding: 2rem;
    height: 5rem;
    width: 100%;
    border-radius: 2.5rem 0 3.5rem 2.5rem;
    background: -webkit-gradient(linear,left top,left bottom,from(#100e17),to(#100e17)) padding-box,-webkit-gradient(linear,left top,right top,from(#db1d60),to(#ed4f32)) 0/50% no-repeat border-box,-webkit-gradient(linear,right top,left top,from(#eb7d01),color-stop(37.5vw,#ed4f32),to(rgba(237,79,50,0))) 100% 101%/65% 75% no-repeat border-box;
    background: linear-gradient(#100e17,#100e17) padding-box,linear-gradient(90deg,#db1d60,#ed4f32) 0/50% no-repeat border-box,linear-gradient(-90deg,#eb7d01,#ed4f32 37.5vw,rgba(237,79,50,0)) 100% 101%/65% 75% no-repeat border-box;
}
    ul{
    list-style-type: none;
    }


    .modal-backdrop.show {
    opacity: 0;
}
.page-header-top-nav-inside::-webkit-scrollbar-track {
    background: linear-gradient(90deg,#201c29,#201c29 1px,transparent 0,transparent);
}
    </style>
</head>
<body class=" backgroundFiltred ">
    <div id="app" class="bodytheme">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background:transparent">
            <div class="container">
                <img src="{{asset('logo.png')}}"  style="width: 5%; margin-right:2%;">
                <a class="navbar-brand theme"  href="{{ url('/') }}">
                    {{ config('app.name', 'Tech-challenge') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a  class="nav-link" style="color:white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="nav-link theme dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Hi {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:black" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>


</html>
