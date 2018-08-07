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
                                        desde
                                        <span class="font-weight-semibold">{{ Carbon\Carbon::parse($item->fecha_inicio)->format('M Y') }}</span>
                                    </span>
                                    <span class="to text-color-dark text-uppercase">
                                        al
                                        <span class="font-weight-semibold">
                                        @if ($item->vigente == 'SI')
                                            Actualmente
                                        @else
                                            {{ Carbon\Carbon::parse($item->fecha_fin)->format('M Y') }}
                                        @endif
                                        </span>
                                    </span>
                                    <p class="text-color-dark">(3 Years 9 Months)</p>
                                    <span class="company text-color-dark font-weight-semibold">
                                        {{ $item->nombre_corto }}
                                        <span class="company-location text-color-dark font-weight-normal text-uppercase">{{ $item->oficina }}</span>
                                    </span>
                                </div>
                                <div class="experience-description col-lg-9 col-sm-7 background-color-light"
                                        data-toggle="modal"
                                        data-target="#ExperienciaDetalle"
                                        data-nombre='luis'>
                                    <h4 class="text-color-dark font-weight-semibold">{{ $item->institucion }}</h4>
                                    {!! $item->resumen !!}
                                    {{-- <a href="#" class="btn-tertiary text-uppercase custom-btn-style-1 text-1">Ver más</a> --}}
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
<!-- Modal -->
<div class="modal fade" id="ExperienciaDetalle" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Default Modal Title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
