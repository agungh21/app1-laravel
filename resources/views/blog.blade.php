@extends('templates.main')

@section('container')
    <h1>Daftar Post Blog</h1>

    @foreach ($posts as $p)
        <article class="mb-5">
            <a href="/sekolah-blog/{{ $p['slug'] }}"><h2>{{ $p['title'] }}</h2></a>
            <h5>By : {{ $p['author'] }}</h5>
            <p>{{ $p['body'] }}</p>
        </article>
    @endforeach
@endsection
