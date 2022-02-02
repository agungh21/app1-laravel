@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">EDIT Author</h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/authors/{{ $authors->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Author Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $authors->name) }}">
               @error('name')
               <div class="invalid-feedback">
                    {{ $message }}
                </div>
               @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-5">Update Author</button>
          </form>
    </div>
@endsection
