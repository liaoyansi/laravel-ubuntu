
<div class="ui fluid vertical menu" id="left_menu">
    {{--<a class="active teal item">--}}
    {{--收件箱--}}
    {{--<div class="ui teal label">1</div>--}}
    {{--</a>--}}
    <a class="active  item">
        <i class="home icon"></i>主页
    </a>
    <a class="item">
        <i class="home icon"></i>{{ \App\module\admin\AdminUser::find(1)->username }}
    </a>
    <div class="header item">
        <i class="user icon"></i>
        社区
    </div>
    <a class="teal  item">
        主题
    </a>
    <a class="item">
        朋友
    </a>
    <div class="header item">
        <i class="globe icon"></i>
        城市
    </div>
    <a class="item">
        历史
    </a>
    <a class="item">
        消息
    </a>
    <a class="item">
        讨论
    </a>
    <a class="item">
        奖励
    </a>
    <a class="item">
        商店
    </a>
    <div class="header item">
        <i class="globe icon"></i>
        设置
    </div>
    <a class="item">
        奖励
    </a>
    <a class="item"  href="http://www.baidu.com">
        <i class="globe icon"></i>
        商店
    </a>
</div>