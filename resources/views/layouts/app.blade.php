<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   {!! SEOMeta::generate() !!}

   <meta property="og:title" content="Bunda Florist" />
   <meta property="og:url" content="http://bundaflorist.net" />

   <!-- Favicon and Touch Icons-->
   <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('zilla/img/favicon/apple-touch-icon.png') }}">
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('zilla/img/favicon/favicon-32x32.png') }}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('zilla/img/favicon/favicon-16x16') }}">
   <link rel="mask-icon" color="#fe6a6a" href="{{ asset('zilla/img/favicon/safari-pinned-tab.svg') }}">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="theme-color" content="#ffffff">
   <!-- <meta name="turbolinks-visit-control" content="reload"> -->

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>



   <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
   <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/simplebar.min.css') }}" defer />
   <link rel="stylesheet" media="screen" href="{{ asset('zilla/vendor/tiny-slider/dist/tiny-slider.css') }}" defer />
   <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/drift-basic.min.css') }}" defer />
   <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/lightgallery.min.css') }}" defer />
   <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/custom.css') }}" defer />
   <!-- Main Theme Styles + Bootstrap-->
   <link rel="stylesheet" media="screen" href="{{ asset('zilla/css/theme.min.css') }}" defer>

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

      <livewire:navbar></livewire:navbar>

      @yield('content')

      <livewire:footer></livewire:footer>
   </div>

   @livewireScripts
   {{-- Js Livewire --}}

   <!-- Vendor scrits: js libraries and plugins-->
   <script src="{{ asset('zilla/js/bootstrap.bundle.min.js') }}" defer></script>
   <script src="{{ asset('zilla/js/simplebar.min.js') }}" defer></script>
   <script src="{{ asset('zilla/vendor/tiny-slider/dist/min/tiny-slider.js') }}" defer></script>
   <script src="{{ asset('zilla/js/smooth-scroll.polyfills.min.js') }}" defer></script>
   <script src="{{ asset('zilla/vendor/drift-zoom/dist/Drift.min.js') }}" defer></script>
   <script src="{{ asset('zilla/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
   <script src="{{ asset('zilla/vendor/shufflejs/dist/shuffle.min.js') }}"></script>
   <script src="{{ asset('zilla/js/lightgallery.min.js') }}" defer></script>
   <script src="{{ asset('zilla/js/popper.min.js') }}" defer></script>

   <!-- Main theme script-->
   <script src="{{ asset('zilla/js/theme.min.js') }}" defer></script>

   <script type="text/javascript">
      function getWA() {
         var win = windows.open('https://api.whatsapp.com/send/?phone=628111961139&text=Halo+Bunda+Florist%2C+Saya+Ingin+Order+Bunga&app_absent=0', '_blank');
         win.focus();
      }
   </script>


   @yield('javascript')

</body>

</html>