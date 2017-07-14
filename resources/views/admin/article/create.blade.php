@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新增一篇文章</div>
                    <div class="panel-body">

                        {{--@if (count($errors) > 0)--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--<strong>新增失败</strong> 输入不符合要求<br><br>--}}
                                {{--{!! implode('<br>', $errors->all()) !!}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        @include('common.validator')

                        <form action="{{ url('admin/article') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="text" name="Article[title]" class="form-control" required="required" placeholder="请输入标题" value="{{ old('Article')['title']? old('Article')['title']:''}}">

                            <br>
                            <textarea name="Article[body]" rows="10" class="form-control" required="required" placeholder="请输入内容" >{{ old('Article')['body']? old('Article')['body']:''}}</textarea>
                            <br>
                            <button class="btn btn-lg btn-info">新增文章</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
