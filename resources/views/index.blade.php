<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Demo Resume | Porto - Responsive HTML5 Template 6.2.1</title>

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        @include('layouts.css')

        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.min.js"></script>

    </head>
    <body data-spy="scroll" data-target=".wrapper-spy">

        <div class="body">
            @include('web.header')
            <div role="main" class="main">

            @include('web.aboutme')

            @include('web.custom-about-me')
            <section class="section section-no-border background-color-light m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="custom-box-details background-color-light custom-box-shadow-1 col-lg-6 ml-5 mb-5 mb-lg-4 float-right clearfix">
                                <h4>Personal Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="custom-list-style-1 p-0 mb-0">
                                            <li>
                                                <span class="text-color-dark">Edad:</span>
                                                <span class="custom-text-color-2">{{ $datos->edad }}</span>
                                            </li>
                                            <li>
                                                <span class="text-color-dark">Estado Civil:</span>
                                                <span class="custom-text-color-2">{{ $datos->estado_civil }}</span>
                                            </li>
                                            <li>
                                                <span class="text-color-dark">Nacionalidad:</span>
                                                <span class="custom-text-color-2">{{ $datos->nacionalidad }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="custom-list-style-1 p-0 mb-0">
                                            <li>
                                                <span class="text-color-dark">Skype:</span>
                                                <span class="custom-text-color-2"><a class="custom-text-color-2" href="skype:yourskype?chat">yourskype</a></span>
                                            </li>
                                            <li>
                                                <span class="text-color-dark">Teléfono:</span>
                                                <span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:{{ $datos->telefono }}">{{ $datos->telefono }}</a></span>
                                            </li>
                                            <li>
                                                <span class="text-color-dark">Email:</span>
                                                <span class="custom-text-color-2"><a class="custom-text-color-2 texto-email" href="mailto:{{ $datos->email }}">{{ $datos->email }}</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Acerca de mi</h2>

                            <p class="custom-text-color-2">{{ $datos->resumen }}</p>

                            <div class="about-me-more" id="aboutMeMore">
                                {!! $datos->descripcion !!}
                            </div>

                            <a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">Ver más</a>

                        </div>
                    </div>
                </div>
            </section>


            @include('web.experience')
            @include('web.education')
            @include('web.skills')
            @include('web.portfolio')
            @include('web.recommendations')
            @include('web.blog')
            @include('web.say-hello')
            @include('web.footer')
        </div>

        @include('layouts.js')

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
         -->


    </body>
</html>
