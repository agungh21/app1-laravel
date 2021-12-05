@extends('templates.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <article class="mb-5">
                <h2>{{ $posts->title }}</h2>
                <p>By : <a href="/authors/{{ $posts->author->username }}">{{ $posts->author->name }}</a> in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x300?{{ $posts->category->name }}" class="img-fluid" alt="Category">
                <article class="my-3 fs-4">
                    {!! $posts->body !!}
                </article>
                <a href="/sekolah-blog">kembali</a>
            </article>
        </div>
    </div>
</div>
@endsection
