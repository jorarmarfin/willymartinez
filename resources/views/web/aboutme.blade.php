<section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ $configuracion->imagen }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 custom-sm-margin-bottom-1">
                <img src="{{ $datos->foto }}" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
            </div>
            <div class="col-lg-6 col-xl-5">
                <h1 class="text-color-primary custom-font-size-1">{{ $datos->nombre_corto }}</h1>
                <p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">{{ $datos->perfil }}</p>
                <span class="custom-about-me-infos">
                    <span class="custom-text-color-1 text-uppercase">{{ $datos->primer_slogan }}</span>
                    <span class="custom-text-color-1 text-uppercase mb-3">{!! $datos->segundo_slogan !!}</span>
                    <span class="custom-text-color-1 text-uppercase">
                        <strong class="text-color-light">Anterior: </strong>
                        Front-End Developer at Porto
                        <a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">Ver más</a>
                    </span>
                    <span class="custom-text-color-1 text-uppercase">
                        <strong class="text-color-light">Educación: </strong>
                        Porto School
                        <a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">Ver más</a>
                    </span>
                </span>
            </div>
            <div class="col-lg-2 col-xl-3 d-none d-lg-block">
                <img src="{{ $configuracion->imagen_secundaria }}" custom-anim class="img-fluid custom-image-pos-1" alt />
            </div>
        </div>
    </div>
    <ul class="social-icons custom-social-icons">
        @foreach ($redes as $item)
        <li class="social-icons-{{ $item['slug']}}">
            <a href="{{ $item['vinculo'] }}" target="_blank" title="{{ $item['red']}}">
                @if ($item['slug']=='facebook')
                <i class="fab fa-{{ $item['slug']}}-f"></i>
                @else
                <i class="fab fa-{{ $item['slug']}}"></i>
                @endif
            </a>
        </li>
        @endforeach
    </ul>
</section>

