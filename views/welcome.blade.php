@extends('layouts.app')

@section('title', 'Andreu García Martínez')

@section('content')

<header class="masthead">
  <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading">Your Favorite Source of Free Bootstrap Themes</h1>
      <hr>
      <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
    </div>
  </div>
</header>

<section class="bg-primary" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-white">We've got what you need!</h2>
        <hr class="light">
        <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
        <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Get Started!</a>
      </div>
    </div>
  </div>
</section>

<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">At Your Service</h2>
        <hr class="primary">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
          <i class="fa fa-3x fa-diamond text-primary sr-icons pad-bot"></i>
          <h3>Sturdy Templates</h3>
          <p class="text-muted">Our templates are updated regularly so they don't break.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
          <i class="fa fa-3x fa-paper-plane text-primary sr-icons pad-bot"></i>
          <h3>Ready to Ship</h3>
          <p class="text-muted">You can use this theme as is, or you can make changes!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
          <i class="fa fa-3x fa-newspaper-o text-primary sr-icons pad-bot"></i>
          <h3>Up to Date</h3>
          <p class="text-muted">We update dependencies to keep things fresh.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
          <i class="fa fa-3x fa-heart text-primary sr-icons pad-bot"></i>
          <h3>Made with Love</h3>
          <p class="text-muted">You have to make your websites with love these days!</p>
        </div>
      </div>
    </div>
  </div>
</section>

@if ($portfolio)

  <section class="p-0" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Portfolio</h2>
          <hr class="primary">
          <div class="button-group filter-button-group text-center pad-bot">
            <button type="button" class="btn btn-secondary" data-filter="*">Todos</button>
            <button type="button" class="btn btn-primary btn-sm" data-filter=".cat">cat</button>
            <button type="button" class="btn btn-primary btn-sm" data-filter=".teg">teg</button>
            <button type="button" class="btn btn-primary btn-sm" data-filter=".ory">ory</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">

      <div class="row no-gutter popup-gallery grid">
        @foreach ($portfolio as $p)
          <div class="col-lg-4 col-sm-6 grid-item {{ $p['filters'] }}">
            <a class="portfolio-box" href="{{ $p['img_full'] }}">
              <img class="img-fluid" src="{{ $p['img_thumb'] }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    {{ $p['category'] }}
                  </div>
                  <div class="project-name">
                    {{ $p['name'] }}
                  </div>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endif

<div class="call-to-action bg-dark">
  <div class="container text-center">
    <h2>Free Download at Start Bootstrap!</h2>
    <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
  </div>
</div>

@endsection

@section('scripts')

  <script src="{{ 'public/js/creative.min.js' }}"></script>
  <script src="{{ 'public/js/isotope.pkgd.min.js' }}"></script>

  <script type="text/javascript">
    var $grid = $('.grid').isotope({
      // options
      itemSelector: '.grid-item',
      layoutMode: 'fitRows'
    });

    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
      // Ponemos todos los rojos a verdes // Ponemos rojo el seleccionado
      $(".filter-button-group button.btn-secondary").removeClass("btn-secondary").addClass("btn-primary btn-sm");
      $(this).removeClass("btn-primary btn-sm").addClass("btn-secondary");

      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });
  </script>

@endsection
