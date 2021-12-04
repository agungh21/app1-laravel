@extends('templates.main')

@section('container')
<article class="mb-5">
    <h1>{{ $post->title }}</h1>
    <p>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
<a href="/sekolah-blog">kembali</a>
@endsection
