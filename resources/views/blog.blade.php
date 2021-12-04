@extends('templates.main')

@section('container')
    <h1>Daftar Post Blog</h1>

    @foreach ($posts as $p)
        <article class="mb-5 border-bottom">
            <a href="/sekolah-blog/{{ $p->slug }}"><h2>{{ $p->title }}</h2></a>
            <p>By : Agung in <a href="/categories/{{ $p->category->slug }}">{{ $p->category->name }}</a></p>
            <p>{{ $p->excerpt }}</p>
        </article>
    @endforeach
@endsection
