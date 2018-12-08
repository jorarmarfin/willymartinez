@extends('themes.base.index')
@section('content')
{{-- Cabecera --}}
<div class="section" style="padding-top:90px; padding-bottom:40px; background-color:#75aaeb">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading fancy_heading_icon">
                    <h2 class="title">Blog</h2>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Lista de eventos --}}
<div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fff">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            @foreach ($blog as $evento)                
            <!-- One Third (1/3) Column -->
            <!-- Two Third (2/3) Column -->
            <div class="column one column_column">
                <div class="column_attr ">
                    <a href="{{ route('post',$evento->nid) }}">
                        <h2 style="margin-bottom: 7px; margin-top: 7px;">{{ $evento->titulo }}</h2>
                    </a>
                    <p class="big themecolor">
                        
                    </p>
                    {!! $evento->resumen !!}
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" />
            </div>
            @endforeach
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