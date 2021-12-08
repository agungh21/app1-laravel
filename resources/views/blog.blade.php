@extends('layouts.main')

@section('container')
    <h1 class="mb-4 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/sekolah-blog">

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x300?{{ $posts[0]->category->name }}" class="card-img-top" alt="Category">
            <div class="card-body">
                <a href="/sekolah-blog/{{ $posts[0]->slug }}"><h5 class="card-title">{{ $posts[0]->title }}</h5></a>
                <p>
                <small class="text-muted">
                    By : <a href="/sekolah-blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/sekolah-blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}....</p>

                <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>

                <a href="/sekolah-blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $p)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="/sekolah-blog?category={{ $p->category->slug }}">
                        <div class="position-absolute px-3 py-2 text-white bg-success">{{ $p->category->name }}</div>
                    </a>
                    <img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top" alt="Category">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/sekolah-blog/{{ $p->slug }}">{{ $p->title }}</a></h5>
                      <p>
                        <small class="text-muted">
                            By : <a href="/sekolah-blog?author={{ $p->author->username }}">{{ $p->author->name }}</a>
                        </small>
                        </p>
                      <p class="card-text">{{ $p->excerpt }}....</p>
                      <p class="card-text"><small class="text-muted">{{ $p->created_at->diffForHumans() }}</small></p>
                      <a href="/sekolah-blog/{{ $p->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">Post Not Found</p>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
