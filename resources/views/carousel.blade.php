@extends('base')

@section('content')
<section class="hero is-medium has-carousel">
  <div class="hero-carousel carousel-animated carousel-animate-fade">
    <div class='carousel-container'>
      <div class='carousel-item has-background is-active'>
        <img class="is-background" src="{{ asset('img/carousel-1.jpg') }}" alt="" />
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="https://wikiki.github.io/images/singer.jpg" alt="" />
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="https://wikiki.github.io/images/sushi.jpg" alt="" />
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="https://wikiki.github.io/images/life.jpg" alt="" />
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
  <div class="hero-head">
    <nav class="navbar is-transparent">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item has-text-white is-active">
              Home
            </a>
            <a class="navbar-item has-text-white">
              Examples
            </a>
            <a class="navbar-item has-text-white">
              Documentation
            </a>
            <span class="navbar-item has-text-white">
              <a class="button is-primary is-inverted">
                <span class="icon">
                  <i class="fa fa-github"></i>
                </span>
                <span>Download</span>
              </a>
            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="hero-body has-text-centered">
    <div class="columns is-mobile is-centered">
      <div class="column is-half is-narrow">
        <div class="field has-addons">
          <div class="control is-expanded">
            <input class="input" type="text" placeholder="Find a repository">
          </div>
          <div class="control">
            <a class="button is-info">
              Search
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active"><a>Overview</a></li>
          <li><a class="has-text-white">Modifiers</a></li>
          <li><a class="has-text-white">Grid</a></li>
          <li><a class="has-text-white">Elements</a></li>
          <li><a class="has-text-white">Components</a></li>
          <li><a class="has-text-white">Layout</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
<script> 
  document.addEventListener('DOMContentLoaded', function(){
    var carousels = bulmaCarousel.attach();
  }, false);
</script>
@endsection