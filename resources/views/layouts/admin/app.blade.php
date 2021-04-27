<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') - Bunda Florist</title>

  <!-- SEO Meta Tags-->
  <meta name="description" content="Toko Bunga terpercaya">
  <meta name="keywords" content="bunda florist, toko bunga, toko bunga terpercaya , toko bunga 24 jam, papan bunga, papan bunga murah, karangan bunga, hand buket">
  <meta name="author" content="Createx Studio">

  <!-- Favicon and Touch Icons-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('zilla/img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('zilla/img/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('zilla/img/favicon/favicon-16x16') }}">
  <link rel="mask-icon" color="#fe6a6a" href="{{ asset('zilla/img/favicon/safari-pinned-tab.svg') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <meta name="turbolinks-visit-control" content="reload">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>



  <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
  <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/simplebar.min.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('zilla/vendor/tiny-slider/dist/tiny-slider.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/drift-basic.min.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/lightgallery.min.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/custom.css') }}" />
  <!-- Main Theme Styles + Bootstrap-->
  <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/theme.min.css') }}">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

  {{-- <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet"> --}}

  <!-- Styles -->
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  {{-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> --}}

  @yield('css')
  @livewireStyles
</head>

<body class="handheld-toolbar-enabled">
  <div id="app">

    <livewire:admin.navbar />

    <!-- Dashboard header-->
    <div class="page-title-overlap bg-accent pt-4">
      <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
        <div class="d-flex align-items-center pb-3">
          <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="width: 6.375rem">
            <img class="rounded-circle" src="{{ asset('zilla/zilla/img/marketplace/account/avatar.png') }}" alt="Createx Studio" />
          </div>
          <div class="ps-3">
            <h3 class="text-light fs-lg mb-0">Createx Studio</h3>
            <span class="d-block text-light fs-ms opacity-60 py-1">Member since November 2019</span>
          </div>
        </div>
        <div class="d-flex">
          <div class="text-sm-end me-5">
            <div class="text-light fs-base">Total sales</div>
            <h3 class="text-light">426</h3>
          </div>
          <div class="text-sm-end">
            <div class="text-light fs-base">Seller rating</div>
            <div class="star-rating">
              <i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
            </div>
            <div class="text-light opacity-60 fs-xs">Based on 98 reviews</div>
          </div>
        </div>
      </div>
    </div>

    @yield('content')

  </div>

  @livewireScripts
  {{-- Js Livewire --}}

  <!-- Vendor scrits: js libraries and plugins-->
  <script src="{{ asset('zilla/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('zilla/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('zilla/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
  <script src="{{ asset('zilla/js/smooth-scroll.polyfills.min.js') }}"></script>
  <script src="{{ asset('zilla/vendor/drift-zoom/dist/Drift.min.js') }}"></script>
  <script src="{{ asset('zilla/js/lightgallery.min.js') }}"></script>
  <script src="{{ asset('zilla/js/popper.min.js') }}"></script>

  <!-- Main theme script-->
  <script src="{{ asset('zilla/js/theme.min.js') }}"></script>

  @yield('javascript')

</body>

</html>