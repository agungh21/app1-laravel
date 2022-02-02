{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">SXN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/')?'active':'' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('sekolah-about')?'active':'' }}" href="/sekolah-about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('sekolah-blog')?'active':'' }}" href="/sekolah-blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('categories')?'active':'' }}" href="/categories">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('authors')?'active':'' }}" href="/authors">Author</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My DashBoard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ Request::is('login')?'active':'' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
  {{-- navbar end --}}
