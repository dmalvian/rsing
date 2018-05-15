@extends('base')

@section('content')
  <section class="hero is-medium is-primary has-carousel">
    <div class="hero-carousel carousel-animated carousel-animate-fade" data-autoplay="true">
      <div class='carousel-container'>
        <div class='carousel-item has-background is-active'>
          <img class="is-background" src="{{ asset('img/carousel-1.jpg') }}" alt="" />
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="{{ asset('img/carousel-2.jpg') }}" alt="" />
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="{{ asset('img/carousel-3.jpg') }}" alt="" />
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="{{ asset('img/carousel-4.jpg') }}" alt="" />
        </div>
      </div>
      <div class="carousel-navigation is-overlay">
        <div class="carousel-nav-left">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="carousel-nav-right">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
      </div>
    </div>
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Primary title
        </h1>
        <h2 class="subtitle">
          Primary subtitle
        </h2>
      </div>
    </div>
  </section>

  <section class="has-background-white-ter">
    
  </section>

  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
          is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
        </p>
      </div>
    </div>
  </footer>

  <script> 
      document.addEventListener('DOMContentLoaded', function(){
        var carousels = bulmaCarousel.attach();
      }, false);
    </script>
@endsection