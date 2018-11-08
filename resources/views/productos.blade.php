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
                    <div class="image_wrapper"><img class="scale-with-grid" src="{{ $p_estrella->imagen  }}" alt="">
                    </div>
                </div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">
                    <h2 style="margin-bottom: 7px; margin-top: 15px;">{{ $p_estrella->titulo }}</h2>
                    <p class="big themecolor">
                        {{ $p_estrella->categoria }}, {{ $p_estrella->year }}
                    </p>
                    <p>
                        {!! $p_estrella->descripcion !!}
                    </p>
                    <p class="hrmargin_b_30">
                        Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id.
                    </p>
                    <div class="progress_icons" data-active="8" data-color="">
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                        <span class="progress_icon"><i class="fas fa-star"></i></span>
                    </div>
                    <hr class="no_line hrmargin_b_20" />
                    <p style="font-style: italic;">
                        {!! $p_estrella->fragmento !!}
                    </p>
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" />
            </div>
            @foreach ($productos as $producto)                
            <!-- One Fourth (1/4) Column -->
            <div class="column one-fourth column_icon_box">
                <div class="icon_box icon_position_top no_border">
                    <a href="#">
                        <div class="image_wrapper"><img src="{{ $producto->imagen }}" alt="" class="scale-with-grid" />
                        </div>
                        <div class="desc_wrapper">
                            <div class="desc">
                                <h3 style="margin: 0">{{ $producto->titulo }}</h3>
                                <p style="margin: 0 0 5px; font-style: italic;" class="themecolor">
                                    {{ $producto->categoria }}, {{ $producto->year }} <br>
                                    {{ $producto->precio }}
                                </p>
                                {!! $producto->resumen !!}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection