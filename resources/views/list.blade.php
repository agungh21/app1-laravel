@extends('templates.main')

@section('container')

    <h1>List {{ $title }}</h1>

    @if ($title == 'All Category')
        @foreach ($posts as $p)
        <ul>
            <li>
                <h2><a href="/categories/{{ $p->slug }}">{{ $p->name }}</a></h2>
            </li>
        </ul>
        @endforeach
    @else
        @foreach ($posts as $a)
        <ul>
            <li>
                <h2><a href="/authors/{{ $a->username }}">{{ $a->name }}</a></h2>
            </li>
        </ul>
        @endforeach
    @endif
@endsection
