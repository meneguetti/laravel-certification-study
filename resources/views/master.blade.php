<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--<base url="{{ url('/') }}/">-->

        <title>{{ $title ?? 'Laravel' }} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type='text/css' />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type='text/css' />

        <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            li, .custom-content{
                color:#5e5e5e;
                font-family: sans-serif;
                font-weight: normal;
                font-size: 16px;
            }

            .table{
                margin-bottom: 75px;
            }

            .glyphicon-ok-sign{
                color: #469647;
            }

            .popover-content {
                padding: 9px 14px;
                color: #464646;
                background-color: #ffffff;
                font-family: sans-serif;
                font-weight: 100;
            }

            pre{
                text-align: left;
                width: fit-content;
                margin: 0 auto;
                margin-bottom: 20px;
            }

            .custom-content{
                margin-bottom: 100px;
            }

        </style>
    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}" style="font-weight: bold;color: #3097d1;">Laravel Certification Study</a>
                    <br />
                    <div>
                        @if (Route::has('login'))
                        <span class="text-success bg-success">
                            <br />
                            <br />
                            <b>v{{ config('app.version') }}</b>
                        </span>
                        @auth
                        <ul class="nav navbar-nav navbar-left">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <br />
                                <ul class="dropdown-menu">
                                    <li><a href="#">Settings</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @else
                        <span style="font-weight:bold">
                            <br />
                            <a href="{{ route('login') }}" style="color: #777777;">Login</a>
                            <br />
                            <a href="{{ route('register') }}" style="color: #777777;">Register</a>
                        </span>
                        @endauth
                        @endif
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        @include('menu')
<!--                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>-->
                    </ul>
                    <!--                    <form class="navbar-form navbar-left">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>-->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="flex-center position-ref">

            <div class="content">
                <!--                <div class="title m-b-md">
                                    <a href="{{ route('home') }}" style="text-decoration: none;">Laravel Certification Study</a>
                                </div>-->
                <div class="links">
                    <a href="{{ route('queue') }}">Queue Length</a>
                    <a href="{{ route('queue.consume') }}">Queue Consume</a>
                    <a href="{{ route('queue.publish') }}">Queue Publish</a>
                </div>

                <br />

                <div class="custom-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
