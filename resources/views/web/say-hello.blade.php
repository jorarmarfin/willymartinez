<div id="say-hello" class="container-fluid">
    <div class="row">
        <div class="col-lg-6 p-0">
            <section class="section section-no-border background-color-primary h-100 m-0">
                <div class="row justify-content-end m-0">
                    <div class="col-half-section col-half-section-right mr-3">
                        <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Contactame</h2>
                        {!! Form::open(['route'=>'contactame','method'=>'POST','class'=>'custom-form-style']) !!}
                            <div class="form-content">
                                <div class="form-control-custom">
                                    <input type="text" class="form-control" name="nombre" placeholder="Tu nombre *" data-msg-required="This field is required." id="callName" required="" />
                                </div>
                                <div class="form-control-custom">
                                    <input type="text" class="form-control" name="asunto" placeholder="Asunto *" data-msg-required="This field is required." id="callSubject" required="" />
                                </div>
                                <div class="form-control-custom">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="mensaje" placeholder="Mensaje*" id="message" required="" aria-required="true"></textarea>
                                </div>
                                <input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" value="Enviar" />
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6 p-0">
            <section class="section section-no-border h-100 m-0" style="background: url({{ $configuracion->imagen_contacto }}); background-size: cover;">
                <div class="row m-0">
                    <div class="col-half-section col-half-section-left ml-3">
                        <a href="mailto:{{ $datos->email }}" class="text-decoration-none">
                            <span class="feature-box custom-feature-box align-items-center mb-4">
                                <span class="custom-feature-box-icon">
                                    <i class="icon-envelope icons text-color-light"></i>
                                </span>
                                <span class="feature-box-info">
                                    <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Email</span>
                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">{{ $datos->email }}</strong>
                                </span>
                            </span>
                        </a>
                        <a href="tel:+1234657890" class="text-decoration-none">
                            <span class="feature-box custom-feature-box align-items-center mb-4">
                                <span class="custom-feature-box-icon">
                                    <i class="icon-phone icons text-color-light"></i>
                                </span>
                                <span class="feature-box-info">
                                    <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Teléfono</span>
                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">{{ $datos->telefono }}</strong>
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
                                    <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Contactame</span>
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
