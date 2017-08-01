
<div class="ui fixed  inverted  menu top_menu">
    <div class="ui container">
        <a class="header item" href="{{ url('admin') }}">
            <i class="home icon"></i>主页
        </a>
        <div class="right menu">
            @if (!Auth::guard('admin')->check())
            <div class="item">
                <div class="ui primary button">注册</div>
            </div>
            <div class="item">
                <div class="ui button">登录</div>
            </div>
            @else
            <div class="ui dropdown item">
                {{ Auth::guard('admin')->user()->username }} <i class="icon dropdown"></i>
                <div class="menu">
                    <a class="item" href="{{ url('admin/logout') }}">退出</a>
                </div>
            </div>
            @endif
        </div>
    </div>

</div>