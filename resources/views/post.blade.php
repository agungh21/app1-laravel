@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <article class="mb-5">
                <h2>{{ $posts->title }}</h2>
                <p>By : <a href="/sekolah-blog?author={{ $posts->author->username }}">{{ $posts->author->name }}</a> in <a href="/sekolah-blog?category={{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
                @if ($posts->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'.$posts->image) }}" class="img-fluid" alt="Category">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x300?{{ $posts->category->name }}" class="img-fluid my-3" alt="Category">
            @endif
                <article class="my-3 fs-4">
                    {!! $posts->body !!}
                </article>
                <a href="/sekolah-blog">kembali</a>
            </article>
        </div>
    </div>
</div>
@endsection
