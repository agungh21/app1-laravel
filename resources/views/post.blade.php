@extends('templates.main')

@section('container')
<article class="mb-5">
    <h1>{{ $title }}</h1>
    <p>By : <a href="/authors/{{ $posts->author->username }}">{{ $posts->author->name }}</a> in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
    {!! $posts->body !!}
</article>
<a href="/sekolah-blog">kembali</a>
@endsection
