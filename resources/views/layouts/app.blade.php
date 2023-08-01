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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <div id="app" class="{{ Request::path() == 'apartment-preview' || Request::path() == 'faq' || Request::path() == 'rules'? 'ap-page': '' }}">

        <div class="right-corner">
            <img src="{{ asset('images/the smile purple.png') }}" alt="smile" class="smile-p">
            <p>40° 48’ 17.0964’’ N 73° 56’ 10.8528’’ W<br> 158 E 126TH ST, NEW YORK<br> NY 10035</p>
        </div>

        <div class="spotify-player">
            <iframe style="border-radius:12px; position: relative;top: 80px;" src="https://open.spotify.com/embed/playlist/37i9dQZF1DZ06evO3DbIU8?utm_source=generator" width="100%" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            <p><i class="fa-solid fa-play"></i> Tracks</p>
        </div>

        <div class="noise">
            <p>Powered by</p>
            <img src="{{ asset('images/logo-new.png') }}" alt="noise" width="130">
        </div>

        <div class="navigation">
            <div class="burger-bar">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-x hidden"></i>
            </div>
            <div class="menu-inner hidden">
                <li><a href="{{ route('show-homepage') }}">Home</a></li>
                <li><a href="{{ route('show-apply') }}">Apply</a></li>
                <li><a href="{{ route('show-apartment-preview') }}">Apartment</a></li>
                <li><a href="{{ route('show-faq') }}">FAQ</a></li>
                <li><a href="{{ route('show-rules') }}">Official rules</a></li>
            </div>
        </div>

{{--        <main>--}}
            @yield('content')
{{--        </main>--}}
    </div>

    <script type="text/javascript" src="{{ asset('js/navigation.js') }}"></script>
    @yield('scriptsBottom')
</body>
</html>
