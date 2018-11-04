<!DOCTYPE html>
<html class="no-js" lang="es">
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Willy Martinez Sanchez</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Crimson+Text:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- CSS -->
    <link rel='stylesheet' href='{{ asset("css/global.css") }}'>
    <link rel='stylesheet' href='{{ asset("css/structure.css") }}'>
    <link rel='stylesheet' href='{{ asset("css/book.css") }}'>
    <link rel='stylesheet' href='{{ asset("css/custom.css") }}'>

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
                            <h1><a id="logo" href="{{ route('index.home') }}" title="BeBook - BeTheme"><img class="scale-with-grid" src="images/book.png" alt="BeBook - BeTheme" /></a></h1>
                        </div>
                        <!-- Main menu-->
                        @include('themes.menu.main')
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
                        <div class="section full-screen " id="start" style="padding-top:0px; padding-bottom:0px; background-color:#1d1813; background-image:url(images/home_book_about.jpg); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover; -webkit-background-size:cover">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Second (1) Column -->
                                    <div class="column one column_column">
                                        <div class="column_attr animate" data-anim-type="fadeInLeft">
                                            <h3 style="color: #fff; margin-bottom: 90px; font-family: italic; margin-left: 26rem;">El Señor te haga triunfar en el momento del peligro, que el nombre del Dios de Jacob sea tu baluarte.
												<br>Que satisfaga todos tus deseos y cumpla todos sus proyecto
                                                non felis mae cenas.<br> Salmo 20,1.5</h3>
                                                
                                                <a class="mfn-link mfn-link-4 " href="content/book/books.html" data-hover="SEE MY BOOKS"><span data-hover="SEE MY BOOKS">SEE MY BOOKS</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section sections_style_3">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr align_center">
                                            <h2 style="border-bottom: 4px solid #21437D; display: inline-block; padding: 0 20px 10px;">Material para formación Católica</h2>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_icon_box">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="zoomIn">
                                            <div class="icon_box icon_position_top no_border">
                                                <a href="content/book/books.html">
                                                    <div class="image_wrapper"><img src="images/home_book_s_book_1.jpg" alt="" class="scale-with-grid" />
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <div class="desc">
                                                            <h3 style="margin: 0">Girl of shadow</h3>
                                                            <p class="themecolor" style="margin: 0 0 5px; font-style: italic;">
                                                                fantasy, 2009
                                                            </p>
                                                            Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum...
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_icon_box">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="zoomIn">
                                            <div class="icon_box icon_position_top no_border">
                                                <a href="content/book/books.html">
                                                    <div class="image_wrapper"><img src="images/home_book_s_book_2.jpg" alt="" class="scale-with-grid" />
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <div class="desc">
                                                            <h3 style="margin: 0">Castle</h3>
                                                            <p class="themecolor" style="margin: 0 0 5px; font-style: italic;">
                                                                fantasy, 2009
                                                            </p>
                                                            Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum...
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_icon_box">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="zoomIn">
                                            <div class="icon_box icon_position_top no_border">
                                                <a href="content/book/books.html">
                                                    <div class="image_wrapper"><img src="images/home_book_s_book_3.jpg" alt="" class="scale-with-grid" />
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <div class="desc">
                                                            <h3 style="margin: 0">The Woods</h3>
                                                            <p class="themecolor" style="margin: 0 0 5px; font-style: italic;">
                                                                fantasy, 2009
                                                            </p>
                                                            Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum...
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_icon_box">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="zoomIn">
                                            <div class="icon_box icon_position_top no_border">
                                                <a href="content/book/books.html">
                                                    <div class="image_wrapper"><img src="images/home_book_s_book_4.jpg" alt="" class="scale-with-grid" />
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <div class="desc">
                                                            <h3 style="margin: 0">Afibia</h3>
                                                            <p class="themecolor" style="margin: 0 0 5px; font-style: italic;">
                                                                fantasy, 2009
                                                            </p>
                                                            Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum...
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:70px; padding-bottom:20px; background-color:#21437D">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr align_center">
                                            <h2 style="font-style: italic; margin-bottom: 35px; color: #fff">'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.'</h2>
                                            <h3 style="color:#fff">CURSED WARRIOR</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:100px; padding-bottom:60px; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_image">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="fadeIn">
                                            <div class="image_frame no_link scale-with-grid no_border aligncenter">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/home_book_bio1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column">
                                        <div class="column_attr align_center animate" data-anim-type="fadeInRight">
                                            <div style="margin: 0 5%;">
                                                <h2 style="margin-top: 15px;">BIOGRAFÍA
													<br>
													WILLY MARTINEZ
													<br>
													SANCHEZ</h2>
                                                <h4 style="color: #b38534; margin-bottom: 30px;">Science fiction and fantasy writer born 1st april 1956 in Spain. Awarded for his novells and tells</h4>
                                                <h3>CHILDHOOD</h3>
                                                <p class="hrmargin_b_30">
                                                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                                                </p>
                                                <h3>EDUCATION AND CAREER</h3>
                                                <p class="hrmargin_b_30">
                                                    Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                                                </p>
                                                <a class="mfn-link mfn-link-4 " href="content/book/bio.html" data-hover="READ MORE"><span data-hover="READ MORE">READ MORE</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:70px; padding-bottom:60px; background-color:#ededed">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr align_center">
                                            <h2 class="hrmargin_0">LATEST EVENTS</h2>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_article_box">
                                        <div class="article_box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="content/book/events.html">
                                                    <div class="photo_wrapper"><img class="scale-with-grid" src="images/home_book_events1.jpg" alt="Aenean ferme ntum elit eget" />
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <p>
                                                            Aliqu tincid mauris
                                                        </p>
                                                        <h4>Aenean ferme ntum elit eget</h4><i class="icon-right-open themecolor"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_article_box">
                                        <div class="article_box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="content/book/events.html">
                                                    <div class="photo_wrapper"><img class="scale-with-grid" src="images/home_book_events2.jpg" alt="Nulla imperdiet sit amet" />
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <p>
                                                            Lorem ipsum primi
                                                        </p>
                                                        <h4>Nulla imperdiet sit amet</h4><i class="icon-right-open themecolor"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_article_box">
                                        <div class="article_box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <a href="content/book/events.html">
                                                    <div class="photo_wrapper"><img class="scale-with-grid" src="images/home_book_events3.jpg" alt="Vitae adipiscing turpis aen" />
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <p>
                                                            Nec malesuada fames
                                                        </p>
                                                        <h4>Vitae adipiscing turpis aen</h4><i class="icon-right-open themecolor"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" id="reviews" style="padding-top:80px; padding-bottom:50px; background-color:#fff">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- Two Third (2/3) Column -->
                                    <div class="column two-third column_column">
                                        <div class="column_attr ">
                                            <h2 style="margin: 0 0 50px; text-align: center;">REVIEWS</h2>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="blockquote">
                                                    <blockquote>
                                                        Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In in leo ultrices posuere ante viverra ipsum ...
                                                    </blockquote>
                                                    <p class="author">
                                                        <i class="icon-user"></i><a href="#">Ultrices Posuere</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="blockquote">
                                                    <blockquote>
                                                        Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fer commod mentum in, dolor. Pellentesque facilisis ...
                                                    </blockquote>
                                                    <p class="author">
                                                        <i class="icon-user"></i><a href="#">Aenean Ligula</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <hr class="no_line" />
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="blockquote">
                                                    <blockquote>
                                                        Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam ...
                                                    </blockquote>
                                                    <p class="author">
                                                        <i class="icon-user"></i><a href="#">Morbi Tristique</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="blockquote">
                                                    <blockquote>
                                                        Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis ...
                                                    </blockquote>
                                                    <p class="author">
                                                        <i class="icon-user"></i><a href="#">Luctus Diam</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_image">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="fadeInRight">
                                            <div class="image_frame no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/home_book_book_big.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:70px; padding-bottom:20px; background-color:#00B8E6">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr align_center">
                                            <h2 style="font-style: italic; margin-bottom: 35px; color:#fff">'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.'</h2>
                                            <h3 style="color:white">CURSED WARRIOR</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

</body>

</html>