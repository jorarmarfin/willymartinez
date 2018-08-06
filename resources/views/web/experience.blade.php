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
                                        From
                                        <span class="font-weight-semibold">{{ Carbon\Carbon::parse($item->fecha_inicio)->format('M Y') }}</span>
                                    </span>
                                    <span class="to text-color-dark text-uppercase">
                                        To
                                        <span class="font-weight-semibold">
                                        @if ($item->vigente == 'SI')
                                            Actualmente
                                        @else
                                            {{ Carbon\Carbon::parse($item->fecha_inicio)->format('M Y') }}
                                        @endif
                                        </span>
                                    </span>
                                    <p class="text-color-dark">(3 Years 9 Months)</p>
                                    <span class="company text-color-dark font-weight-semibold">
                                        {{ $item->nombre_corto }}
                                        <span class="company-location text-color-dark font-weight-normal text-uppercase">{{ $item->oficina }}</span>
                                    </span>
                                </div>
                                <div class="experience-description col-lg-9 col-sm-7 background-color-light">
                                    <h4 class="text-color-dark font-weight-semibold">{{ $item->institucion }}</h4>
                                    {!! $item->descripcion !!}
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
