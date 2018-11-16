@extends('themes.base.index')
@section('content')
{{-- Cabecera --}}
<div class="section" style="padding-top:90px; padding-bottom:40px; background-color:#75aaeb">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading fancy_heading_icon">
                    <h2 class="title">MATERIAL CATÓLICO</h2>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Libro destacado --}}
<div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fff">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_image">
                <div class="image_frame no_link scale-with-grid no_border aligncenter">
                    <div class="image_wrapper"><img class="scale-with-grid" src="{{ $producto->imagen  }}" alt="">
                    </div>
                </div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">
                    <h2 style="margin-bottom: 7px; margin-top: 15px;">{{ $producto->titulo }}</h2>
                    <p class="big themecolor">
                        {{ $producto->categoria }}, {{ $producto->year }}
                    </p>
                    <p>
                        {!! $producto->descripcion !!}
                    </p>
                    <hr class="no_line hrmargin_b_20" />
                    <p style="font-style: italic;">
                        {!! $producto->fragmento !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section mcb-section  section-border-top " style="padding-top:40px; padding-bottom:0px; background-color:#f9f9f9">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one-third column_column">
                    <div class="column_attr clearfix align_right">
                        <h2>REALIZA TU PEDIDO</h2>
                        <p class="big">
                            Ingrese sus datos y se te enviará un email con las instrucciones para poder realizar el deposito y adquirir este producto</span> !
                        </p>
                        <p class="big" style="color: #a8a8a8;">
                            Mis redes sociales:
                        </p>
                        <a href="https://www.facebook.com/willy.martinezsanchez" class="icon_bar  icon_bar_facebook icon_bar_small" target="_blank">
                            <span class="t"><i class="fab fa-facebook-f"></i></span>
                            <span class="b"><i class="fab fa-facebook-f"></i></span>
                        </a>
                    </div>
                </div>
                <div class="column mcb-column two-third column_column">
                    <div id="contactWrapper">
                        {!! Form::open(['route' => 'pedido', 'method' => 'POST','id'=>'contactform']) !!}
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                {!! Form::text('nombre',null,['placeholder'=>'Nombre completo','size'=>'40','aria-required'=>'true']) !!}
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                {!! Form::email('email',null,['placeholder'=>'Ingresar Email','size'=>'40','aria-required'=>'true']) !!}
                            </div>
                            <div class="column one-fifth">
                                {!! Form::number('cantidad',null,['placeholder'=>'Cantidad','size'=>'40','aria-required'=>'true']) !!}
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column four-fifth">
                                {!! Form::text('telefono',null,['placeholder'=>'Ingresar sus números de telefono','size'=>'40','aria-required'=>'true']) !!}
                            </div>
                            <div class="column one">
                                {!! Form::textarea('descripcion',null,['placeholder'=>'Ingrese descripcion','rows'=>'10','style'=>'width:100%;','aria-required'=>'true']) !!}
                            </div>
                            <div class="column one">
                                {!! Form::hidden('nid',$producto->nid) !!}
                                {!! Form::hidden('uuid',$producto->uuid) !!}
                                {!! Form::submit('ENVIAR',['style'=>'background-color:#000046']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection