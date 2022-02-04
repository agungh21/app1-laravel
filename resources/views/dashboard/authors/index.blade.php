@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Author</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-8">
        {{-- <a href="/dashboard/authors/create" class="btn btn-primary">Create New Author</a> --}}
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Author Name</th>
              <th scope="col">Admin</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($authors as $author)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->is_admin }}</td>
                <td>
                    <a href="/dashboard/authors/{{ $author->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    {{-- <form action="/dashboard/authors/{{ $author->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-x-circle"></i></button>
                    </form> --}}
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
@endsection
