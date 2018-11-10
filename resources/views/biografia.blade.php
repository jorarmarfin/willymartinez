@extends('themes.base.index')
@section('content')
<div class="section" style="padding-top:90px; padding-bottom:40px; background-color:#020202; background-image:url({{ $biografia[4]->imagen }}); background-repeat:no-repeat; background-position:center top; background-attachment:fixed;">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">
                    <h2 style="font-weight: bold; font-family: 'Poiret One'; font-size: 70px; line-height: 76px; margin-bottom: 40px; color: #fff;">
                        WILLY MARTINEZ
                        <br>
                        SÁNCHEZ</h2>
                    <h3 style="color: #b38534; margin-bottom: 40px; font-family: italic;" class="themecolor">"Siempre firmes en la fe".</h3>
                    <h3 style="color: #fff;">INFORMACIÓN GENERAL</h3>
                    <p style="color: #fff;">
                        Nació en Lima Perú en 1965, casado con María Cuya, está dedicado a tiempo completo a predicar la Palabra de Dios. Es miembro del Movimiento de la Renovación Carismática Católica del Perú desde 1982.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fff">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_image">
                <div class="image_frame no_link scale-with-grid no_border aligncenter">
                    <div class="image_wrapper"><img class="scale-with-grid" src="{{ $biografia[0]->imagen }}" alt="">
                    </div>
                </div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">
                    <h3 style="margin-top: 15px;">{{ $biografia[0]->titulo }}</h3>
                    {!! $biografia[0]->descripcion !!}
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" />
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">
                    <h3 style="margin-top: 15px;">{{ $biografia[1]->titulo }}</h3>
                    {!! $biografia[1]->descripcion !!}
                </div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_image">
                <div class="image_frame no_link scale-with-grid no_border aligncenter">
                    <div class="image_wrapper"><img class="scale-with-grid" src="{{ $biografia[1]->imagen }}" alt="">
                    </div>
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" />
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_image">
                <div class="image_frame no_link scale-with-grid no_border aligncenter">
                    <div class="image_wrapper"><img class="scale-with-grid" src="{{ $biografia[2]->imagen }}" alt="">
                    </div>
                </div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">
                    {!! $biografia[2]->descripcion !!}
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" />
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">
                    {!! $biografia[3]->descripcion !!}
                </div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_image">
                <div class="image_frame no_link scale-with-grid no_border aligncenter">
                    <div class="image_wrapper"><img class="scale-with-grid" src="{{ $biografia[3]->imagen }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section full-width dark sections_style_0 ">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_hover_color">
                <div class="hover_color" style="background:#0c0c63;">
                    <div class="hover_color_bg" style="background:#000046;">
                        <a href="{{ route('productos') }}">
                            <div class="hover_color_wrapper">
                                <h2 style="margin: 20px 0;">QUIERES COMPRAR MATERIAL CATÓLICO HAZ CLIC AQUI</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection