{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/sekolah-about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "blog") ? 'active' : '' }}" href="/sekolah-blog">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- navbar end --}}
