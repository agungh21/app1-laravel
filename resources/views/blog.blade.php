@extends('templates.main')

@section('container')
    <h1 class="mb-4">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x300?{{ $posts[0]->category->name }}" class="card-img-top" alt="Category">
            <div class="card-body">
                <a href="/sekolah-blog/{{ $posts[0]->slug }}"><h5 class="card-title">{{ $posts[0]->title }}</h5></a>
                <p>
                <small class="text-muted">
                    By : <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                </small>
                </p>
                <p class="card-text">{{ substr($posts[0]->excerpt,0,200) }}....</p>

                <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>

                <a href="/sekolah-blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Post Not Found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $p)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="/categories/{{ $p->category->slug }}">
                        <div class="position-absolute px-3 py-2 text-white bg-success">{{ $p->category->name }}</div>
                    </a>
                    <img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top" alt="Category">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/sekolah-blog/{{ $p->slug }}">{{ $p->title }}</a></h5>
                      <p>
                        <small class="text-muted">
                            By : <a href="/authors/{{ $p->author->username }}">{{ $p->author->name }}</a>
                        </small>
                        </p>
                      <p class="card-text">{{ substr($p->excerpt,0,100) }}....</p>
                      <p class="card-text"><small class="text-muted">{{ $p->created_at->diffForHumans() }}</small></p>
                      <a href="/sekolah-blog/{{ $p->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
