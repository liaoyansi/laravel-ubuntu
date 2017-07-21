<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！--}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--Bootstrap--}}
    <link href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="app">
<div class="container-fluid">
    <div class="row-fluid clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header" style="margin-left:20px;">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="">
                        Laravel
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" >

                        <li><a href="{{ url('/') }}">前台</a></li>
                        <li><a href="{{ url('/admin') }}">后台</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="margin-right:20px;">
                        <!-- Authentication Links -->
                        @if (!Auth::guard('admin')->check())
                            <li><a href="{{ url('admin/login') }}">Login</a></li>
                            <li><a href="{{ url('admin/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('admin')->user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>



            </nav>


        </div>
    </div>
</div>
<div class="container-fluid" style="padding:0;">
    <div class="row-fluid clearfix" style="margin-top:60px;">
        <div class="col-md-12 column" style="padding:0;">
            <div class="row-fluid clearfix">
                <div class="col-md-2 column" style="padding:0;">
                    @include('admin.left_menu')
                </div>
                <div class="col-md-10 column">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
</div>

{{--引入jQuery--}}
<script src="{{ asset('static/jquery/jquery.min.js') }}"></script>
{{--引入bootstrap js库--}}
<script src="{{ asset('static/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
