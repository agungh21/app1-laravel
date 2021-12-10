@extends('dashboard.layouts.main')

@section('container')
<div class="row my-3">
    <div class="col-lg-8">
        <article class="mb-5">
            <h2>{{ $posts->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to all my post</a>
            <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
            <form action="/dashboard/posts/{{ $posts->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-x-circle"></i> Delete</button>
            </form>

            <img src="https://source.unsplash.com/1200x300?{{ $posts->category->name }}" class="img-fluid my-3" alt="Category">
            <article class="my-3 fs-4">
                {!! $posts->body !!}
            </article>
        </article>
    </div>
</div>
@endsection
