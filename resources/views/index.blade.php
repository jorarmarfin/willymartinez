@extends('themes.base.index')

@section('content')
{{-- Mensaje --}}
<div class="section full-screen " id="start" style="padding-top:0px; padding-bottom:0px; background-color:#1d1813; background-image:url({{ $mensaje->imagen }}); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover; -webkit-background-size:cover">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One Second (1) Column -->
            <div class="column one column_column">
                <div class="column_attr animate" data-anim-type="fadeInLeft">
                    <h2 style="color: #fff; margin-bottom: 90px; font-family: italic; margin-left: 26rem;">{!! $mensaje->descripcion !!}</h2>      
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Productos --}}
<div class="section sections_style_3">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_column">
                <div class="column_attr align_center">
                    <h2 style="border-bottom: 4px solid #21437D; display: inline-block; padding: 0 20px 10px;">Material para formación Católica</h2>
                </div>
            </div>
            @foreach ($productos as $producto)
            <!-- One Fourth (1/4) Column -->
            <div class="column one-fourth column_icon_box">
                <!-- Animated area -->
                <div class="animate" data-anim-type="zoomIn">
                    <div class="icon_box icon_position_top no_border">
                        <a href="{{ route('productos') }}">
                            <div class="image_wrapper"><img src="{{ $producto->imagen }}" alt="" class="scale-with-grid" />
                            </div>
                            <div class="desc_wrapper">
                                <div class="desc">
                                    <h3 style="margin: 0">{{ $producto->titulo }}</h3>
                                    <p class="themecolor" style="margin: 0 0 5px; font-style: italic;">
                                        {{ $producto->categoria }}, {{ $producto->year }}
                                    </p>
                                    {!! $producto->resumen !!}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Frase 1 --}}
<div class="section" style="padding-top:70px; padding-bottom:20px; background-color:#000046">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_column">
                <div class="column_attr align_center">
                    <h2 style="font-style: italic; margin-bottom: 35px; color: #fff">" {{ $frases[0]->observacion }} "</h2>
                    <h3 style="color:#fff">{{ $frases[0]->referencia }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Biografia --}}
<div class="section" style="padding-top:100px; padding-bottom:60px; ">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_image">
                <!-- Animated area -->
                <div class="animate" data-anim-type="fadeIn">
                    <div class="image_frame no_link scale-with-grid no_border aligncenter">
                        <div class="image_wrapper"><img class="scale-with-grid" src="{{ $biografia->imagen }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr align_center animate" data-anim-type="fadeInRight">
                    <div style="margin: 0 5%;">
                        <h2 style="margin-top: 15px; font-family: 'Poiret One', cursive;">BIOGRAFÍA
                            <br>
                            WILLY MARTINEZ
                            <br>
                            SANCHEZ</h2>
                        <h4 style="color: #b38534; margin-bottom: 30px;">{{ $biografia->resumen }}</h4>
                        <h3>Experiencia Profesional</h3>
                        <p class="hrmargin_b_30">
                            {!! $biografia->descripcion !!}
                        </p>
                        <a class="mfn-link mfn-link-4 " href="{{ route('biografia') }}" data-hover="READ MORE"><span data-hover="READ MORE">Leer más</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Eventos --}}
<div class="section" style="padding-top:50px; padding-bottom:60px; background-color:#ededed">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_column">
                <div class="column_attr align_center">
                    <h2 class="hrmargin_0">ÚLTIMOS EVENTOS</h2>
                </div>
            </div>
            @foreach ($eventos as $evento)                
            <!-- One Third (1/2) Column -->
            <div class="column one-second column_article_box">
                <div class="article_box">
                    <!-- Animated area -->
                    <div class="animate" data-anim-type="zoomIn">
                        <a href="{{ route('eventos') }}">
                            <div class="photo_wrapper">
                                <img class="scale-with-grid" src="{{ $evento->imagen }}" alt="{{ $evento->titulo }}" />
                            </div>
                            <div class="desc_wrapper">
                                <p>
                                    <i class="fas fa-calendar-alt"></i>  {{ $evento->fecha }}
                                </p>
                                <h4>{{ $evento->titulo }} </h4>{{ $evento->resumen }}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Blog --}}
<div class="section" id="reviews" style="padding-top:80px; padding-bottom:50px; background-color:#fff">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- Two Third (2/3) Column -->
            <div class="column two-third column_column">
                <div class="column_attr ">
                    <h2 style="margin: 0 0 50px; text-align: center;">BLOG - NOTICIAS - REFLEXIONES</h2>
                    @foreach ($blog as $item)                        
                    <!-- One Second (1/2) Column -->
                    <div class="column one-second">
                        <div class="blockquote">
                            <p class="author">
                                <i class="icon-user"></i><a href="#">{{ $item->titulo }}</a>
                            </p>
                            <blockquote>
                                {!! $item->resumen !!}
                            </blockquote>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- One Third (1/3) Column -->
            <div class="column one-third column_image">
                <!-- Animated area -->
                <div class="animate" data-anim-type="fadeInRight">
                    <div class="image_frame no_link scale-with-grid no_border">
                        <div class="image_wrapper"><img class="scale-with-grid" src="images/blog.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Frase 2 --}}
<div class="section" style="padding-top:70px; padding-bottom:20px; background-color:#000046">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_column">
                <div class="column_attr align_center">
                    <h2 style="font-style: italic; margin-bottom: 35px; color:#fff">{{ $frases[1]->observacion }}</h2>
                    <h3 style="color:white">{{ $frases[1]->referencia }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection