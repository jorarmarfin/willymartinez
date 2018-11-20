@extends('themes.base.index')
@section('content')
{{-- Cabecera --}}
<div class="section" style="padding-top:90px; padding-bottom:40px; background-color:#75aaeb">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading fancy_heading_icon">
                    <h2 class="title">Descargas</h2>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Libro destacado --}}
<div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fff">
    <div class="section_wrapper clearfix">
        <div class="wrap mcb-wrap one valign-top clearfix">
            <!-- One Second (1/2) Column -->
            <div class="column one">
                {!! Alert::render() !!}
            </div>
            <div class="column one column_column">
                {!! Form::open(['route' => 'lista', 'method' => 'POST']) !!}
                <div class="column one-second">
                    {!! Field::text('codigo',null,['placeholder'=>'ingresar código token','label'=>'Ingresar código token','style'=>'width:100%;']) !!}
                </div>
                <div class="column one-second" style="margin-top: 1.5rem">
                    {!! Field::submit('Buscar',['label'=>'']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            @isset($despacho)
            <div class="column one column_column">
                <table>
                    <tr>
                        <th>Producto</th>
                        <th>Pago</th>
                        <th>Descarga</th>
                    </tr>
                    @foreach ($despacho as $item)
                    <tr>
                        <td>{{ $item->titulo }}</td>
                        <td>{{ $item->pago }}</td>
                        <td>
                            @if ($item->pago=='Si')
                                @if ($item->fecha_limite>=date('d-m-Y'))
                                <a href="{{ route('archivo',$item->token) }}"  class="button button_blue button_js">
                                    <span class="button_label">Descargar</span>
                                </a> 
                                @else                                    
                                    Termino el tiempo asignado para descargar
                                @endif
                            @else
                                Esperando pago                                
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endisset
        </div>
    </div>
</div>


@endsection
