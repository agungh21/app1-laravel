{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">SXN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('/')?'active':'' }}" href="/"><i class="bi bi-house-fill"></i></a>
        </li>


          <li class="nav-item">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('sekolah-about')?'active':'' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/sekolah-about">About Campus</a></li>
                    </ul>
                </li>
            </ul>
          </li>

          <li class="nav-item">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('authors')?'active':'' }} {{ Request::is('categories')?'active':'' }} {{ Request::is('sekolah-blog')?'active':'' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Blog
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/sekolah-blog">Post News</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/categories">Category News</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/authors">Author News</a></li>
                    </ul>
                </li>
            </ul>
        </li>

    </ul>

    <ul class="navbar-nav ms-auto">

        <li class="nav-item">
            <a href="https://akademik.sttcirebon.ac.id/" class="nav-link">SIAK</a>
        </li>
        <li class="nav-item">
            <a href="http://digilib.sttcirebon.ac.id/" class="nav-link">DIGILIB</a>
        </li>
        <li class="nav-item">
            <a href="https://ejournal.sttcirebon.ac.id/" class="nav-link">E-JOURNAL</a>
        </li>
        <li class="nav-item">
            <a href="http://wais.sttcirebon.ac.id/" class="nav-link">WAIS</a>
        </li>
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
