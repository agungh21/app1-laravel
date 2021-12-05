@extends('templates.main')

@section('container')

    <h1>List {{ $title }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($posts as $p)
            <div class="col-md-4">
                <div class="card bg-dark text-white ">
                    @if ($title == 'All Category')
                        <img src="https://source.unsplash.com/500x400?{{ $p->name }}" class="card-img-top" alt="Category">
                    @else
                        <img src="https://source.unsplash.com/500x400?person" class="card-img-top" alt="person">
                    @endif
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill bg-dark bg-opacity-50 p-4 fs-3">
                        @if ($title == 'All Category')
                            <a href="/sekolah-blog?category={{ $p->slug }}" class="text-white">{{ $p->name }}</a>
                        @else
                            <a href="/sekolah-blog?author={{ $p->username }}" class="text-white">{{ $p->name }}</a>
                        @endif
                      </h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
