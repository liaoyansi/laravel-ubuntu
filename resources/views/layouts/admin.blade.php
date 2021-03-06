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

    <link href="{{ asset('static/SemanticUI/semantic.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/admin/common/left_menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/admin/common/main.css') }}" rel="stylesheet" type="text/css" />

    @section('style')
    @show
</head>
<body >
    @include('admin.left_menu',['left_menu'=> \App\module\system\Config::all()])
    <div class="" id="main" >
        {{--<div class="ui segments">--}}
            <div class="ui segment">
                <div class="ui breadcrumb">
                    <a class="section" href="/admin">
                        <i class="home icon "></i>主页
                    </a>
                    <i class="right chevron icon divider"></i>
                    @section('breadcrumb')
                    @show
                </div>
            </div>
            <div class="ui orange segment">橘黄</div>
            <div class="ui yellow segment">纯黄</div>
            <div class="ui olive segment">橄榄绿</div>
            <div class="ui green segment">纯绿</div>
            <div class="ui teal segment">水鸭蓝</div>
            <div class="ui blue segment">纯蓝</div>
            <div class="ui violet segment">紫罗兰</div>
            <div class="ui purple segment">纯紫</div>
            <div class="ui pink segment">粉色</div>
            <div class="ui brown segment">棕色</div>
            <div class="ui grey segment">灰色</div>
            <div class="ui black segment">黑色</div>
            <div class="ui blue segment">纯蓝</div>
            <div class="ui violet segment">紫罗兰</div>
            <div class="ui purple segment">纯紫</div>
            <div class="ui pink segment">粉色</div>
            <div class="ui brown segment">棕色</div>
            <div class="ui grey segment">灰色</div>
            <div class="ui black segment">黑色</div>
        {{--</div>--}}
        <div class="ui container" id="content">
            <div class="ui black segment">黑色</div>
        </div>
    </div>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script src="{{ asset('static/SemanticUI/semantic.min.js') }}"></script>
<script src="{{ asset('js/admin/index.js') }}"></script>
{{--引入jQuery--}}
{{--<script src="{{ asset('static/jquery/jquery.min.js') }}"></script>--}}
{{--引入bootstrap js库--}}
{{--<script src="{{ asset('static/bootstrap/js/bootstrap.min.js') }}"></script>--}}
</body>
</html>




{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}

{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--Bootstrap--}}
    {{--<link href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/admin/main.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/admin/left_menu.css').'?v='.time() }}" rel="stylesheet">--}}
    {{--<style>--}}
        {{--.left_menu{width:100%;}--}}
        {{--.list-group{padding-left: 0;margin-bottom: 0;}--}}
        {{--.btn-group-vertical>.btn:first-child:not(:last-child) {border-radius: 0;}--}}
        {{--.list-group>.list-group-item:last-child{border-radius: 0;}--}}
        {{--.list-group>.list-group-item:first-child {border-radius: 0;}--}}
    {{--</style>--}}
    {{--<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->--}}
    {{--<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
    {{--<!--[if lt IE 9]>--}}
    {{--<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
    {{--<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
{{--</head>--}}
{{--<body >--}}
{{--<div id="app">--}}
    {{--<nav class="navbar navbar-default navbar-fixed-top navbar-top" role="navigation">--}}
        {{--<div class="container-fluid" >--}}
            {{--<div class="navbar-header" style="margin-left:20px;">--}}
                {{--<!-- Collapsed Hamburger -->--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                {{--<!-- Branding Image -->--}}
                {{--<a class="navbar-brand" href="">--}}
                    {{--Laravel--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav" >--}}

                    {{--<li ><a href="{{ url('/') }}" class="navbar-a">前台</a></li>--}}
                    {{--<li><a href="{{ url('/admin') }}" class="navbar-a">后台</a></li>--}}
                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav navbar-right " style="margin-right:20px;">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@if (!Auth::guard('admin')->check())--}}
                        {{--<li><a href="{{ url('admin/login') }}" class="navbar-a">Login</a></li>--}}
                        {{--<li><a href="{{ url('admin/register') }}" class="navbar-a">Register</a></li>--}}
                    {{--@else--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle navbar-a" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                {{--{{ Auth::guard('admin')->user()->username }} <span class="caret"></span>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu navbar-a" role="menu">--}}
                                {{--<li><a href="{{ url('admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--<div class="container-fluid" style="margin-top:50px;">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2" style="padding:20px 0 0 0;">--}}
                {{--@include('admin.left_menu')--}}
            {{--</div>--}}
            {{--<div class="col-md-10 main" style="padding-top:20px;">--}}
                {{--@yield('content')--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--引入jQuery--}}
{{--<script src="{{ asset('static/jquery/jquery.min.js') }}"></script>--}}
{{--引入bootstrap js库--}}
{{--<script src="{{ asset('static/bootstrap/js/bootstrap.min.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
