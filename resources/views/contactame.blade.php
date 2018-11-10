@extends('themes.base.index')
@section('content')
<div class="section dark " style="padding-top:90px; padding-bottom:40px; background-image:url({{ $contacto->imagen }}); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover; -webkit-background-size:cover">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading fancy_heading_icon">
                    <h2 class="title" style="text-transform: uppercase;">{{ $contacto->titulo }}</h2>
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" style="margin: 0 auto 50px;" />
            </div>
            <!-- One full width row-->
            <div class="column one column_column">
                <div class="column_attr align_center">
                    {!! $contacto->descripcion !!}
                    <h3>Mis Redes sociales</h3>
                    <p style="font-size: 30px; line-height: 30px;">
                        <a href="https://www.facebook.com/willy.martinezsanchez"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section sections_style_2">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One Fourth (1/4) Column -->
            <div class="column one-fourth column_column">
                <div class="column_attr "></div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr align_center">
                    <h2>ENVIAME UN MENSAJE</h2>
                    <p>
                        {!! $contacto->resumen !!}
                    </p>
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" />
            </div>
            <!-- One Fourth (1/4) Column -->
            <div class="column one-fourth column_column">
                <div class="column_attr "></div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">

                    <div id="contactWrapper">
                        {!! Alert::render() !!}
                        @include('alerts.errors')
                        {!! Form::open(['route' => 'email','method'=>'POST']) !!}
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <input placeholder="Tu nombre" type="text" name="nombre" id="nombre" size="40" aria-required="true" aria-invalid="false" required/>
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <input placeholder="Tu e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" required/>
                            </div>
                            <div class="column one">
                                <input placeholder="Asunto" type="text" name="asunto" id="subject" size="40" aria-invalid="false" required/>
                            </div>
                            <div class="column one">
                                <textarea placeholder="Mensaje" name="mensaje" id="body" style="width:100%;" rows="10" aria-invalid="false" required></textarea>
                            </div>
                            <div class="column one">
                                {!! Recaptcha::render() !!}
                            </div>

                            {{--  --}}
                            <div class="column one" style="text-align: center;">
                                {!! Form::submit('ENVIAR',['style'=>'background-color: #000046;']); !!}
                            </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection