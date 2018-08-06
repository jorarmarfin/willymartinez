<section id="skills" class="section section-no-border background-color-light m-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Habilidades & Idiomas</h2>
                        <div class="progress-bars custom-progress-bars">
                            @foreach ($habilidades as $item)
                            @if ($loop->index%2==0)
                            <div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
                                <span>{{ $item->habilidad }}</span>
                            </div>
                            <div class="progress mb-2">
                                <div class="progress-bar" data-appear-progress-animation="{{ $item->porcentaje }}"></div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress-bars custom-progress-bars custom-md-margin-top-1">
                            @foreach ($habilidades as $item)
                            @if ($loop->index%2!=0)
                            <div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
                                <span>{{ $item->habilidad }}</span>
                            </div>
                            <div class="progress mb-2">
                                <div class="progress-bar" data-appear-progress-animation="{{ $item->porcentaje }}"></div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="row">
                    <div class="col">
                        <div class="custom-box-details background-color-light custom-box-shadow-1">
                            <h4 class="text-color-dark">Idiomas</h4>
                            <ul class="custom-list-style-1 p-0">
                                @foreach ($idiomas as $item)
                                <li>
                                    <span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-{{ flags($item->idioma) }} mr-1" alt="{{ $item->idioma }}">{{ $item->idioma }}:</span>
                                    <span class="custom-text-color-2">{{ $item->nivel }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
