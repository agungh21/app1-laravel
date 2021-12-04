@extends('templates.main')

@section('container')
<article class="mb-5">
    <h1>{{ $post->title }}</h1></a>
    <p>By : Agung in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a href="/sekolah-blog" class="text-decoration-none">kembali</a>
</article>
@endsection
