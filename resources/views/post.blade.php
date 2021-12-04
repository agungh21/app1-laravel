@extends('templates.main')

@section('container')
<article class="mb-5">
    <h1>{{ $post->title }}</h1></a>
    <p>By : <a href="">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a href="/sekolah-blog">kembali</a>
</article>
@endsection
