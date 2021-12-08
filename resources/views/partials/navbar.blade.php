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
            <a class="nav-link {{ ($subtitle === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($subtitle === "About") ? 'active' : '' }}" href="/sekolah-about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($subtitle === "All Post") ? 'active' : '' }}" href="/sekolah-blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($subtitle === "All Category") ? 'active' : '' }}" href="/categories">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($subtitle === "All Author") ? 'active' : '' }}" href="/authors">Author</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/login" class="nav-link {{ ($subtitle === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- navbar end --}}
