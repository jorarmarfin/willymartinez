<section id="education" class="section section-no-border custom-background-color-1 m-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">Educación</h2>
                <div class="owl-carousel nav-bottom custom-dots-style-1 mb-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                    @foreach ($educacion as $item)
                        @if ($loop->index%2 == 0 || $loop->index==0)
                        <div class="row">
                        @endif
                        <div class="col-lg-6 col-sm-6 pb-4">
                            <div class="custom-box-details-2 background-color-light custom-box-shadow-3">
                                <i class="icon-graduation icons text-color-primary"></i>
                                <h4 class="font-weight-semibold text-color-dark m-0">{{ $item->institucion }}</h4>
                                <p class="custom-text-color-2 mb-1">{{ $item->resumen }}</p>
                                <strong class="text-color-primary">{{ Carbon\Carbon::parse($item->fecha_inicio)->format('Y') }}-{{ Carbon\Carbon::parse($item->fecha_fin)->format('Y') }}</strong>
                            </div>
                        </div>
                        @if ($loop->index%2 != 0)
                        </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
