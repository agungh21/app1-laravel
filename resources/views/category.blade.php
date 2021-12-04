@extends('templates.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>

    @foreach ($posts as $p)
        <article class="mb-5">
            <a href="/sekolah-blog/{{ $p->slug }}" class="text-decoration-none"><h2>{{ $p->title }}</h2></a>
            <h5>By : {{ $p['author'] }}</h5>
            <p>{{ $p->excerpt }}</p>
        </article>
    @endforeach
@endsection
