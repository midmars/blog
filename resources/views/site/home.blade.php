@extends('site.layouts.default')
@section('content')
@section('test')
    <h1>{{ $title }}</h1>
    <div>{{ link_to('post/create', '新增') }}</div>
    @if (isset($posts))
        <ol>
        @foreach ($posts as $post)
            <li>
            {{-- HtmL::linkRoute('post.show', $post->title, ['id'=>$post->id]) --}}
            {{ Html::link('post/'.$post->id, $post->title) }}
            ({{ Html::link('post/'.$post->id.'/edit', '編輯') }})</li>
        @endforeach
        </ol>
    @endif
@stop