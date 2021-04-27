<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

        <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

		@yield('css')
        @livewireStyles
    </head>

    <body>
        <div id="app">

			<div class="container-fluid bg-dark">
				<div class="row">
					<h2>segesg</h2>
				</div>
			</div>
            <livewire:navbar />

            <main class="py-4">
                @yield('content')

                @include('layouts.footer')
            </main>
        </div>

        @livewireScripts
        {{-- Js Livewire --}}

        <!-- GetButton.io widget -->
        <script type="text/javascript">
            (function () {
        var options = {
            whatsapp: "+628111961139", // WhatsApp number
            call_to_action: "Pesan Via WhatsApp", // Call to action
            position: "right", // Position may be 'right' or 'left'
            pre_filled_message: "Halo Bunda Florist, Saya Ingin Order Bunga", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    	})();
        </script>
        <!-- /GetButton.io widget -->

		@yield('javascript')
    </body>

</html>
