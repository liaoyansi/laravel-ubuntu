@extends('layouts')

@section('header')
    header
@stop

@section('content')
    content
    <!-- 1.模版中输出PHP变量-->
    {{--<p>{{ $name }}</p>--}}

    {{--模版中调用PHP代码--}}
    {{--<p>{{ time() }}</p>--}}
    {{--<p>{{ date('Y-m-d H:i:s',time()) }}</p>--}}
    {{--<p>{{ in_array($name,$arr) ? 'true':'false' }}</p>--}}
    {{--<p>{{ var_dump($arr) }}</p>--}}
    {{--<p>{{ isset($name) ? $name : 'default' }}</p>--}}
    {{--<p>{{ $name or 'default' }}</p>--}}

    {{--3. 原样输出--}}
    {{--<p>@{{ $name }}</p>--}}

    {{-- 引入子视图 include --}}
    @include('student.common1',['message'=>'我是错误信息'])

    {{--@if($name == 'liao')--}}
        {{--I'm liao--}}
    {{--@elseif($name == 'Yancy')--}}
        {{--I'm Yancy--}}
    {{--@else--}}
        {{--Who am I?--}}
    {{--@endif--}}

    {{--@foreach($students as $student)--}}
        {{--<p>{{ $student->name }}</p>--}}
    {{--@endforeach--}}

    @forelse($students as $student)
        <p>{{ $student->name }}</p>
    @empty
        <p>is null</p>
    @endforelse

    <a href="{{ url('student/section2') }}">url</a>
    <a href="{{ action('StudentController@section2') }}">action</a>
    <a href="{{ route('section') }}">route</a>

@stop