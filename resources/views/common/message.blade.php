<!-- 成功提示框 -->
@if (Session::has('success'))
<div class="ui success visible message">
    <p><strong>{{ Session::get('success') }}</strong></p>
</div>
@endif

<!-- 失败提示框 -->
@if (Session::has('error'))
<div class="ui error visible message">
    <p><strong>{{ Session::get('error') }}</strong></p>
</div>
@endif

