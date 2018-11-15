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

@endsection