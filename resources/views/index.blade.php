<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Demo Resume | Porto - Responsive HTML5 Template 6.0.0</title>

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/animate/animate.min.css">
        <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/theme-elements.css">
        <link rel="stylesheet" href="css/theme-blog.css">
        <link rel="stylesheet" href="css/theme-shop.css">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
        <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

        <!-- Demo CSS -->
        <link rel="stylesheet" href="css/demos/demo-resume.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/skin-resume.css">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.min.js"></script>

    </head>
    <body data-spy="scroll" data-target=".wrapper-spy">

        <div class="body">
            <header id="header" class="header-floating" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '60px', 'stickyChangeLogo': false}">
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-nav pt-1">
                                        <div class="header-nav-main">
                                            <nav class="wrapper-spy collapse">
                                                <ul class="nav" id="mainNav">
                                                    <li>
                                                        <a data-hash href="#about-me" class="nav-link text-color-dark background-color-primary">
                                                            <i class="icon-home icons"></i>
                                                            <span class="custom-tooltip">Sobre Mi</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-hash href="#experience" class="nav-link text-color-dark background-color-primary">
                                                            <i class="icon-eye icons"></i>
                                                            <span class="custom-tooltip">Experiencia</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-hash href="#education" class="nav-link text-color-dark background-color-primary">
                                                            <i class="icon-briefcase icons"></i>
                                                            <span class="custom-tooltip">Educación</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-hash href="#skills" class="nav-link text-color-dark background-color-primary">
                                                            <i class="icon-graduation icons"></i>
                                                            <span class="custom-tooltip">Habilidades e idiomas</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-hash href="#portfolio" class="nav-link text-color-dark background-color-primary">
                                                            <i class="icon-diamond icons"></i>
                                                            <span class="custom-tooltip">Portafolio</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-hash href="#recommendations" class="nav-link text-color-dark background-color-primary">
                                                            <i class="icon-pencil icons"></i>
                                                            <span class="custom-tooltip">Recomendaciones</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-hash href="#blog" class="nav-link text-color-dark background-color-primary">
                                                            <i class="icon-bubbles icons"></i>
                                                            <span class="custom-tooltip">Blog</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-hash href="#say-hello" class="nav-link text-color-dark background-color-primary">
                                                            <i class="icon-envelope-open icons"></i>
                                                            <span class="custom-tooltip">Contactame</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div role="main" class="main">

            <section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ $configuracion->fondo }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 custom-sm-margin-bottom-1">
                            <img src="{{ $datos->foto }}" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <h1 class="text-color-primary custom-font-size-1">{{ $datos->nombre_corto }}</h1>
                            <p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">{{ $exp_des->cargo }}</p>
                            <span class="custom-about-me-infos">
                                <span class="custom-text-color-1 text-uppercase">{{ $exp_des->institucion }}</span>
                                <span class="custom-text-color-1 text-uppercase mb-3">{{ $exp_des->rubro }}</span>
                                <span class="custom-text-color-1 text-uppercase">
                                    <strong class="text-color-light">Previous: </strong>
                                    Front-End Developer at Porto
                                    <a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
                                </span>
                                <span class="custom-text-color-1 text-uppercase">
                                    <strong class="text-color-light">Education: </strong>
                                    Porto School
                                    <a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
                                </span>
                            </span>
                        </div>
                        <div class="col-lg-2 col-xl-3 d-none d-lg-block">
                            <img src="{{ $configuracion->imagen_secundaria }}" custom-anim class="img-fluid custom-image-pos-1" alt />
                        </div>
                    </div>
                </div>
                <ul class="social-icons custom-social-icons">
                    <li class="social-icons-facebook">
                        <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="social-icons-twitter">
                        <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social-icons-youtube">
                        <a href="http://www.youtube.com/" target="_blank" title="Youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </section>

            <div class="custom-about-me-links background-color-light">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-3 text-center custom-xs-border-bottom p-0">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button text-color-dark">
                                    <i class="icon-earphones-alt icons text-color-primary"></i>
                                    Información de Contacto
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-2 text-center custom-xs-border-bottom p-0">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button custom-divisors text-color-dark">
                                    <i class="icon-envelope-open icons text-color-primary"></i>
                                    Enviar Mensaje
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-3 text-center p-0">
                            <a href="#" class="text-decoration-none">
                                <span class="custom-nav-button text-color-dark">
                                    <i class="icon-cloud-download icons text-color-primary"></i>
                                    Descargar CV
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section section-no-border background-color-light m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="custom-box-details background-color-light custom-box-shadow-1 col-lg-6 ml-5 mb-5 mb-lg-4 float-right clearfix">
                                <h4>Detalles Personales</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="custom-list-style-1 p-0 mb-0">
                                            <li>
                                                <span class="text-color-dark">Fecha Nacimiento:</span>
                                                <span class="custom-text-color-2">{{ $datos->fecha_nacimiento }}</span>
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
                                                <span class="text-color-dark">Telefono:</span>
                                                <span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:123456789">{{ $datos->telefono }}</a></span>
                                            </li>
                                            <li>
                                                <span class="text-color-dark">EMAIL:</span>
                                                <span class="custom-text-color-2"><a class="custom-text-color-2" href="mailto:{{ $datos->email }}" style="font-size: 11px; text-decoration:  unset; text-transform:  lowercase;">{{ $datos->email }}</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Sobre Mi</h2>

                            <p class="custom-text-color-2">{!! $datos->resumen !!}</p>

                            <div class="about-me-more" id="aboutMeMore">
                                {!! $datos->sobre_mi !!}
                            </div>

                            <a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">Ver Más</a>

                        </div>
                    </div>
                </div>
            </section>
            @if ((bool)$configuracion->experiencia)
            <section id="experience" class="section section-secondary section-no-border m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Experiencia</h2>
                            <section class="timeline custom-timeline" id="timeline">
                                <div class="timeline-body">
                                    @foreach ($experiencia as $item)
                                        <article class="timeline-box right custom-box-shadow-2">
                                            <div class="row">
                                                <div class="experience-info col-lg-3 col-sm-5 background-color-primary">
                                                    <span class="from text-color-dark text-uppercase">
                                                        Desde
                                                        <span class="font-weight-semibold">{{ getDateText($item->fecha_inicio) }}</span>
                                                    </span>
                                                    <span class="to text-color-dark text-uppercase">
                                                        Hasta
                                                        <span class="font-weight-semibold">{{ getDateText($item->fecha_fin) }}</span>
                                                    </span>
                                                    <p class="text-color-dark">(3 Years 9 Months)</p>
                                                    <span class="company text-color-dark font-weight-semibold">
                                                        {{ $item->institucion }}
                                                        <span class="company-location text-color-dark font-weight-normal text-uppercase">{{ $item->rubro }}</span>
                                                    </span>
                                                </div>
                                                <div class="experience-description col-lg-9 col-sm-7 background-color-light">
                                                    <h4 class="text-color-dark font-weight-semibold">{{ $item->cargo }}</h4>
                                                    {!! $item->body !!}
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                    <div class="timeline-bar"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            @if ((bool)$configuracion->formacion)
            <section id="education" class="section section-no-border custom-background-color-1 m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">Formación académica</h2>
                            <div class="owl-carousel nav-bottom custom-dots-style-1 mb-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                                @foreach ($educacion as $item)
                                    @if ($loop->iteration%2!=0)
                                    <div class="row ">
                                    @endif
                                        <div class="col-lg-6 col-sm-6 pb-4">
                                            <div class="custom-box-details-2 background-color-light custom-box-shadow-3">
                                                <i class="icon-graduation icons text-color-primary"></i>
                                                <h4 class="font-weight-semibold text-color-dark m-0">{{ $item->institucion }}</h4>
                                                <p class="custom-text-color-2 mb-1">{{ $item->carrera}}</p>
                                                <strong class="text-color-primary">{{ getDateText($item->fecha_inicio,'year').' - '.getDateText($item->fecha_fin,'year') }}</strong>
                                            </div>
                                        </div>
                                    @if ($loop->iteration%2==0 || $loop->count==1)
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            @if ((bool)$configuracion->habilidades)
            <section id="skills" class="section section-no-border background-color-light m-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Habilidades & Idiomas</h2>
                                    @for ($i = 0; $i < mitad(count($habilidades)); $i++)
                                    <div class="progress-bars custom-progress-bars">
                                        <div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
                                            <span>{{ $habilidades[$i]->habilidad }}</span>
                                        </div>

                                        <div class="progress mb-2">
                                            <div class="progress-bar" data-appear-progress-animation="{{ $habilidades[$i]->cantidad }}%"></div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                                <div class="col-lg-6">
                                    @for ($i = mitad(count($habilidades)); $i < count($habilidades); $i++)
                                    <div class="progress-bars custom-progress-bars custom-md-margin-top-1">
                                        <div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
                                            <span>{{ $habilidades[$i]->habilidad }}</span>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" data-appear-progress-animation="{{ $habilidades[$i]->cantidad }}%"></div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @if ((bool)$configuracion->idiomas)
                        <div class="col-md-6 col-lg-4">
                            <div class="row">
                                <div class="col">
                                    <div class="custom-box-details background-color-light custom-box-shadow-1">
                                        <h4 class="text-color-dark">Idiomas</h4>
                                        <ul class="custom-list-style-1 p-0">
                                            @foreach ($idiomas as $item)
                                            <li>
                                                <span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-{{ flags($item->idioma) }} mr-1" alt="English">{{ $item->idioma }}:</span>
                                                <span class="custom-text-color-2">{{ $item->nivel }}</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
            @endif
            @if ((bool)$configuracion->portafolio)
            <section id="portfolio" class="section section-no-border background-color-secondary m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Portafolio</h2>

                            <ul class="nav nav-pills sort-source custom-nav-sort mb-4" data-sort-id="portfolio" data-option-key="filter">
                                <li class="nav-item active" data-option-value="*"><a class="nav-link text-dark active" href="#">Show All</a></li>
                                <li class="nav-item" data-option-value=".websites"><a class="nav-link text-dark" href="#">Websites</a></li>
                                <li class="nav-item" data-option-value=".logos"><a class="nav-link text-dark" href="#">Logos</a></li>
                                <li class="nav-item" data-option-value=".brands"><a class="nav-link text-dark" href="#">Brands</a></li>
                            </ul>
                            <div class="sort-destination-loader sort-destination-loader-showing">
                                <div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-1.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item logos">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-2.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item brands">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-3.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-4.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-5.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-6.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-7.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-8.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            @if ((bool)$configuracion->recomendaciones)
            <section id="recommendations" class="section section-no-border background-color-primary m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Recommendations</h2>
                        </div>
                        <div class="col-lg-12 p-0">
                            <div class="owl-carousel custom-dots-style-1 custom-dots-color-1 custom-dots-position-1 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                                <div>
                                    <div class="col">
                                        <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                            <blockquote class="pb-2">
                                                <p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>
                                            </blockquote>
                                            <div class="testimonial-author float-left">
                                                <p><strong class="text-uppercase">Bob Doe</strong><span class="custom-text-color-3">Director of Engineering</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col">
                                        <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                            <blockquote class="pb-2">
                                                <p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>
                                            </blockquote>
                                            <div class="testimonial-author float-left">
                                                <p><strong class="text-uppercase">Bob Doe</strong><span class="custom-text-color-3">Director of Engineering</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            @if ((bool)$configuracion->blog)
            <section id="blog" class="section section-no-border background-color-light m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">My Blog</h2>

                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                                        <div class="thumb-info-wrapper">
                                            <a href="#">
                                                <img src="img/demos/resume/blog/blog-1.jpg" alt class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-2">
                                                    <a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
                                                        Design Driven
                                                    </a>
                                                </h4>
                                                <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapib...</p>
                                            </div>
                                            <hr class="solid m-0 mt-4 mb-2">
                                            <div class="row justify-content-between">
                                                <div class="col-auto custom-blog-post-date text-uppercase font-weight-semibold text-color-dark text-2">
                                                    July 12-2017
                                                </div>
                                                <div class="col-auto custom-blog-post-share text-uppercase font-weight-semibold text-color-dark text-2">
                                                    Share:
                                                    <ul class="mb-0">
                                                        <li>
                                                            <a class="item-facebook text-decoration-none text-uppercase" href="#" title="Share on Facebook">Facebook</a>
                                                        </li>
                                                        <li>
                                                            <a class="item-twitter text-decoration-none text-uppercase" href="#" title="Share on Twitter">Twitter</a>
                                                        </li>
                                                        <li>
                                                            <a class="item-google-plus text-decoration-none text-uppercase" href="#" title="Share on Google Plus">Google Plus</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6">
                                    <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                                        <div class="thumb-info-wrapper">
                                            <a href="#">
                                                <img src="img/demos/resume/blog/blog-2.jpg" alt class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-2">
                                                    <a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
                                                        UI, UX Concepts
                                                    </a>
                                                </h4>
                                                <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique...</p>
                                            </div>
                                            <hr class="solid m-0 mt-4 mb-2">
                                            <div class="row justify-content-between">
                                                <div class="col-auto custom-blog-post-date text-uppercase font-weight-semibold text-color-dark text-2">
                                                    July 12-2017
                                                </div>
                                                <div class="col-auto custom-blog-post-share text-uppercase font-weight-semibold text-color-dark text-2">
                                                    Share:
                                                    <ul class="mb-0">
                                                        <li>
                                                            <a class="item-facebook text-decoration-none text-uppercase" href="#" title="Share on Facebook">Facebook</a>
                                                        </li>
                                                        <li>
                                                            <a class="item-twitter text-decoration-none text-uppercase" href="#" title="Share on Twitter">Twitter</a>
                                                        </li>
                                                        <li>
                                                            <a class="item-google-plus text-decoration-none text-uppercase" href="#" title="Share on Google Plus">Google Plus</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 pt-4 mt-4 text-center">
                            <a class="btn btn-primary btn-outline text-color-dark custom-btn-style-2 font-weight-bold custom-border-radius-1 text-uppercase">View All</a>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            <div id="say-hello" class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <section class="section section-no-border background-color-primary h-100 m-0">
                            <div class="row justify-content-end m-0">
                                <div class="col-half-section col-half-section-right mr-3">
                                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Contactame</h2>
                                    {!! Form::open(['route'=>'contactame','method'=>'POST','class'=>'custom-form-style']) !!}
                                        <div class="alert alert-success d-none mt-4" id="contactSuccess">
                                            <strong>Enviado!</strong> Su mensaje ha sido enviado.
                                        </div>

                                        <div class="alert alert-danger d-none mt-4" id="contactError">
                                            <strong>Error!</strong> There was an error sending your message.
                                            <span class="text-1 mt-2 d-block" id="contactErrorMessage"></span>
                                        </div>
                                        <div class="form-content">
                                            <div class="form-control-custom">
                                                <input type="text" class="form-control" name="nombre" placeholder="Tu nombre *" data-msg-required="This field is required." id="callName" required="" />
                                            </div>
                                            <div class="form-control-custom">
                                                <input type="text" class="form-control" name="asunto" placeholder="Asunto *" data-msg-required="This field is required." id="callSubject" required="" />
                                            </div>
                                            <div class="form-control-custom">
                                                <textarea maxlength="5000" data-msg-required="por favor ingresa tu mensaje." rows="10" class="form-control" name="mensaje" placeholder="Mensaje*" id="message" required="" aria-required="true"></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" value="Enviar" />
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6 p-0">
                        <section class="section section-no-border h-100 m-0" style="background: url(img/demos/resume/contact/contact-bg-1.jpg); background-size: cover;">
                            <div class="row m-0">
                                <div class="col-half-section col-half-section-left ml-3">
                                    <a href="mailto:you@domain.com" class="text-decoration-none">
                                        <span class="feature-box custom-feature-box align-items-center mb-4">
                                            <span class="custom-feature-box-icon">
                                                <i class="icon-envelope icons text-color-light"></i>
                                            </span>
                                            <span class="feature-box-info">
                                                <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Email</span>
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">you@domain.com</strong>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="tel:+1234657890" class="text-decoration-none">
                                        <span class="feature-box custom-feature-box align-items-center mb-4">
                                            <span class="custom-feature-box-icon">
                                                <i class="icon-phone icons text-color-light"></i>
                                            </span>
                                            <span class="feature-box-info">
                                                <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Phone</span>
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">123-456-7890</strong>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="skype:yourskype?chat" class="text-decoration-none">
                                        <span class="feature-box custom-feature-box align-items-center mb-4">
                                            <span class="custom-feature-box-icon">
                                                <i class="icon-social-skype icons text-color-light"></i>
                                            </span>
                                            <span class="feature-box-info">
                                                <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Skype</span>
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">yourskype</strong>
                                            </span>
                                        </span>
                                    </a>
                                    <span class="feature-box custom-feature-box align-items-center">
                                        <span class="custom-feature-box-icon">
                                            <i class="icon-share icons text-color-light"></i>
                                        </span>
                                        <a href="http://www.facebook.com" class="d-flex text-decoration-none">
                                            <span class="feature-box-info">
                                                <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Follow me</span>
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">Facebook</strong>
                                            </span>
                                        </a>
                                        <a href="http://www.twitter.com" class="d-flex text-decoration-none">
                                            <span class="feature-box-info custom-both-side-border mt-2">
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">Twitter</strong>
                                            </span>
                                        </a>
                                        <a href="http://www.linkedin.com" class="d-flex text-decoration-none">
                                            <span class="feature-box-info p-0 mt-2">
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">Linkedin</strong>
                                            </span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <footer id="footer" class="m-0 p-0">
                <div class="footer-copyright background-color-light m-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 m-0">
                                <p class="custom-text-color-2">© Copyright 2017. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Vendor -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
        <script src="vendor/popper/umd/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/common/common.min.js"></script>
        <script src="vendor/jquery.validation/jquery.validation.min.js"></script>
        <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
        <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
        <script src="vendor/isotope/jquery.isotope.min.js"></script>
        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendor/vide/vide.min.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Demo -->
        <script src="js/demos/demo-resume.js"></script>

        <!-- Theme Custom -->
        <script src="js/custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>


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
