@extends('layouts.main')

@section('container')
<section class="home">
    <div class="gradient-overlay opacity">
      <div class="container">
        <div class="name-block">
          <div class="name-block-container">
            <h1><span>Wellcome to</span>SCHOOL X NATIONAL</h1>
            <h2>we serve the country. enlighten the life of the nation and country.</h2>

            <!-- social media -->
            <ul class="social">
              <li>
                <a
                  href="https://www.instagram.com/magunghartonoid/"
                  target="_blank"
                  ><i class="bi bi-instagram"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.youtube.com/channel/UCTcbdxAaoCDfpstsihUmhHA"
                  target="_blank"
                  ><i class="bi bi-youtube"></i
                ></a>
              </li>
              <li>
                <a href="https://github.com/agungh21" target="_blank"
                  ><i class="bi bi-github"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>

        <a href="/sekolah-about">
          <div class="menu-blocks">
            <div class="first-block menu-block">
              <div class="first-block-container">
                <h2 class="first menu-item">About</h2>
            </div>
            </div>
        </a>

        <a href="/sekolah-blog">
            <div class="second-block menu-block">
              <div class="second-block-container">
                <h2 class="second menu-item">Blog</h2>
              </div>
            </div>
        </a>
        <a href="/categories">
            <div class="third-block menu-block">
              <div class="third-block-container">
                <h2 class="third menu-item">Category</h2>
              </div>
            </div>
        </a>

        <a href="/authors">
            <div class="fourth-block menu-block">
              <div class="fourth-block-container">
                <h2 class="fourth menu-item">Author</h2>
              </div>
            </div>
        </a>
          </div>
      </div>
    </div>
  </section>
@endsection
