<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！--}}
    <title>登录后台</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:100px;">
            <div class="panel panel-default">
                <div class="panel-heading" >欢迎登录后台管理系统</div>
                <div class="panel-body" >
                    <div class='row' style="height:50px;margin:10px 0 10px 0;">
                        @include('common.message')
                    </div>
                    <div class="row">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/login') }}">
                            {{ csrf_field() }}
                            {{--账号输入--}}
                            <div class="form-group{{ $errors->has('username') ? ' has-error has-feedback' : '' }}">
                                <label class="col-md-3 control-label" for="LoadInputUsername">账号</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="LoadInputUsername" name="username" value="{{ old('username') }}" >
                                    @if ($errors->has('username'))
                                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            {{--密码输入--}}
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label" for="LoadInputPassword">密码</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="LoadInputPassword" name="password">
                                </div>
                                <div class="col-md-3">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> 记住我
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i>登录
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">忘记密码?</a>
                                </div>
                            </div>
                        </form>
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

