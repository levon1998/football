<!DOCTYPE HTML>
<html lang="en-gb" dir="ltr"  data-config='{"twitter":0,"plusone":0,"facebook":0,"style":"default"}'>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Football data" />
    <title>@yield('title')</title>

    <link href="{{ asset('components/com_jcomments/tpl/sportak/style4021.css?v=3002') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('modules/mod_akslider/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('media/system/css/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('components/com_cobalt/library/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('components/com_cobalt/fields/gallery/gallerybox/gallerybox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('components/com_cobalt/fields/gallery/gallerybox/gallerybox-Dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('components/com_cobalt/fields/gallery/gallerybox/thumb-themes/book.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('modules/mod_teamdonate/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('media/mint/js/lightbox/css/lightbox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('media/com_acymailing/css/module_defaultea70.css?v=1468226731') }}" rel="stylesheet" type="text/css" />

    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3&amp;language=en-GB&amp;libraries=places'></script>
    <script src="{{ asset('media/jui/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/jui/js/jquery-noconflict.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/jui/js/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/jui/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/system/js/mootools-core.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/system/js/core.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/system/js/mootools-more.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/system/js/modal.js') }}" type="text/javascript"></script>
    <script src="{{ asset('components/com_cobalt/library/js/felixrating.js') }}" type="text/javascript"></script>

    <script src="{{ asset('components/com_cobalt/fields/gallery/gallerybox/gallerybox.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/mint/js/lightbox/js/lightbox.js') }}" type="text/javascript"></script>
    <script src="{{ asset('templates/sport.ak/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('media/com_acymailing/js/acymailing_module02de.js?v=550') }}" type="text/javascript" async="async"></script>
    <script src="{{ asset('media/mint/js/moocountdown/SimpleCounter.js') }}" type="text/javascript"></script>

    <link rel="apple-touch-icon-precomposed" href="{{ asset('templates/sport.ak/apple_touch_icon.png') }}">
    <link rel="stylesheet" href="{{ asset('templates/sport.ak/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/sport.ak/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/sport.ak/warp/vendor/highlight/highlight.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/sport.ak/css/custom.css') }}">

    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/uikit.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/components/autocomplete.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/components/search.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/components/tooltip.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/components/sticky.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/components/slideshow.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/components/slideset.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/components/slider.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/vendor/uikit/js/components/accordion.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/warp/js/social.js') }}"></script>
    <script src="{{ asset('templates/sport.ak/js/theme.js') }}"></script>
</head>

<body class="tm-isblog">

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <div class="over-wrap">
        @include('users.layout.header')
        @yield('content')
        @include('users.layout.footer')
    </div>
</body>
</html>