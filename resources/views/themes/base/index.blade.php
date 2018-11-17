<!DOCTYPE html>
<html class="no-js" lang="es">
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Willy Martinez Sanchez</title>
    <meta name="description" content="Predicador Catolico">
    <meta name="author" content="Willy Martinez">
    @yield('metatags')
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Crimson+Text:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One" >
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- CSS -->
    <link rel='stylesheet' href='{{ asset("css/global.css") }}'>
    <link rel='stylesheet' href='{{ asset("css/structure.css") }}'>
    <link rel='stylesheet' href='{{ asset("css/book.css") }}'>
    <link rel='stylesheet' href='{{ asset("css/custom.css") }}'>

    {{-- ReCaptcha --}}
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body class="home page layout-full-width header-creative header-open minimalist-header sticky-white no-content-padding">
    <div id="Header_creative">
        <a href="#" class="creative-menu-toggle"><i class="icon-menu"></i></a>
        <!--Social info area-->
        <ul class="social creative-social"></ul>
        <div class="creative-wrapper">
            <!-- Header -  Logo and Menu area -->
            <div id="Top_bar">
                <div class="one">
                    <div class="top_bar_left">
                        <!-- Logo-->
                        <div class="logo">
                            <h1><a id="logo" href="{{ route('index.home') }}" title="Willy Martinez Sanchez"><img class="scale-with-grid" src="{{ asset('images/book.png') }}" alt="Willy Martinez Sanchez" /></a></h1>
                        </div>
                        <!-- Main menu-->
                        @include('themes.base.menu.main')
                        <!-- Header Searchform area-->
                        <div class="search_wrapper">
                            <form method="get" action="#">
                                <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                <input type="text" class="field" name="s" placeholder="Enter your search" />
                                <input type="submit" class="submit flv_disp_none" value="" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top -  Info Area -->
            <div id="Action_bar">
                <!--Social info area-->
                <ul class="social"></ul>
            </div>
        </div>
    </div>
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">
            <!-- Header -->
            <header id="Header"></header>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        {{-- Mensaje --}}
                        @yield('content')
                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer id="Footer" class="clearfix">
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                        <div class="copyright">
                            &copy; 2017 BeBook - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>
                        <!--Social info area-->
                        <ul class="social"></ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JS -->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

    <script src="{{ asset('js/mfn.menu.js') }}"></script>
    <script src="{{ asset('js/jquery.plugins.js') }}"></script>
    <script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('js/animations/animations.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-book.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
    </script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
</body>

</html>