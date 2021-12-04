@extends('templates.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>

    @foreach ($posts as $p)
        <article class="mb-5 border-bottom pb-4">
            <a href="/sekolah-blog/{{ $p->slug }}"><h2>{{ $p->title }}</h2></a>
            <p>By : <a href="">{{ $p->user->name }}</a> in <a href="/categories/{{ $p->category->slug }}">{{ $p->category->name }}</a></p>
            <p>{{ $p->excerpt }}</p>
            <a href="/sekolah-blog/{{ $p->slug }}">Read More</a>
        </article>
    @endforeach
@endsection
