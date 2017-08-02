<div class="ui black inverted visible sidebar left_menu">
        <div class="header">
            <img class="ui avatar image" src="{{ asset('images/logo.png') }}">
            <span>{{ Auth::guard('admin')->user()->username }}</span>
        </div>
        <a class="item @if( url()->current() == url('admin') )  active  @endif " href="{{ url('admin') }}">
            <i class="home icon"></i> 主页
        </a>
        <a class="item  @if( url()->current() == url('admin/products') )  active  @endif " href="{{ url('admin/products') }}">
            <i class="content icon"></i> 商品
        </a>
        <a class="item  @if( url()->current() == url('admin/orders') )  active  @endif " href="{{ url('admin/orders') }}">
            <i class="book icon"></i> 订单
        </a>
        <a class="item  @if( url()->current() == url('admin/users') )  active  @endif " href="{{ url('admin/users') }}">
            <i class="user icon"></i> 用户
        </a>
        <a class="item  @if( url()->current() == url('admin/settings') )  active  @endif " href="{{ url('admin/settings') }}">
            <i class="settings icon"></i> 设置
        </a>
        <a class="item" href="{{ url('admin/logout') }}">
            <i class="sign out icon" ></i> 退出
        </a>
        @foreach($left_menu as $menu)
        <a class="item  @if( url()->current() == url('admin/settings') )  active  @endif " href="{{ url('admin/settings') }}">
            <i class="settings icon"></i> {{ $menu->name }}
        </a>
        @endforeach
</div>