@extends('dashboard.layouts.main')

@section('container')
<div class="row my-3">
    <div class="col-lg-8">
        <article class="mb-5">
            <h2>{{ $posts->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success">Back to all my post</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>

            <img src="https://source.unsplash.com/1200x300?{{ $posts->category->name }}" class="img-fluid my-3" alt="Category">
            <article class="my-3 fs-4">
                {!! $posts->body !!}
            </article>
            <a href="/sekolah-blog">kembali</a>
        </article>
    </div>
</div>
@endsection
