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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .column {
            max-width: 450px;
        }
        .load_grid{
            height:100%;
            width:100%;
        }
    </style>
</head>
<body >
    <div class="ui middle aligned center aligned grid load_grid" style="">

        <div class="column">
            <h2 class="ui teal header">
                <img class="ui image" src="{{asset('images/logo.png')}}">
                <div class="content">
                    登录后台管理系统
                </div>
            </h2>
            <form  class="ui large form">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="username" placeholder="用户名" >
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="密码" >
                        </div>
                    </div>
                    <button type="submit" class="fluid ui teal button">登录</button>
                </div>
            </form>

        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script src="{{ asset('static/SemanticUI/semantic.min.js') }}"></script>
{{--引入jQuery--}}
{{--<script src="{{ asset('static/jquery/jquery.min.js') }}"></script>--}}
{{--引入bootstrap js库--}}
{{--<script src="{{ asset('static/bootstrap/js/bootstrap.min.js') }}"></script>--}}
</body>
</html>
