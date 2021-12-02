@extends('templates.main')

@section('container')
<article class="mb-5">
    <h2>{{ $post['title'] }}</h2></a>
    <h5>By : {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
    <a href="/sekolah-blog">kembali</a>
</article>
@endsection
