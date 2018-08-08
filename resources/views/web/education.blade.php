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
                            <div class="custom-box-details-2 background-color-light custom-box-shadow-3"
                                data-toggle="modal"
                                data-target="#EducacionDetalle"
                                data-institucion="{{ $item->institucion }}"
                                data-descripcion="{{ $item->descripcion }}"
                                data-curso="{{ $item->curso }}"

                                >
                                <i class="icon-graduation icons text-color-primary"></i>
                                <h4 class="font-weight-semibold text-color-dark m-0">{{ $item->curso }}</h4>
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
<!-- Modal -->
<div class="modal fade" id="EducacionDetalle" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header background-color-primary">
                <h4 class="modal-title" id="m_curso">Default Modal Title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4"><h4>Institución: </h4></div><!--span-->
                    <div class="col-md-8"><span id="m_institucion" class="text-uppercase"></span></div><!--span-->
                </div><!--row-->
                <h4>Detalles</h4>
                <div id="m_descripcion"></div>
                <h4>Referencia</h4>
                <div id="m_referencia"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>