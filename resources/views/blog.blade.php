@extends('templates.main')

@section('container')
    <h1>Daftar Post Blog</h1>

    @foreach ($posts as $p)
        <article class="mb-5">
            <a href="/sekolah-blog/{{ $p->slug }}" class="text-decoration-none"><h2>{{ $p->title }}</h2></a>
            <p>By : Agung in <a href="/categories/{{ $p->category->slug }}" class="text-decoration-none">{{ $p->category->name }}</a></p>
            <p>{{ $p->excerpt }}</p>
        </article>
    @endforeach
@endsection
