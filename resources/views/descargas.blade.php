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
            <div class="column one column_column">
                {!! Form::open(['route' => 'lista', 'method' => 'POST']) !!}
                    {!! Field::text('codigo',null,['placeholder'=>'ingresar código token','label'=>'Ingresar código token','style'=>'width:33rem;']) !!}
                    {!! Field::submit('Buscar',['label'=>'']) !!}
                {!! Form::close() !!}
            </div>
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
                        <td><a href="{{ $item->enlace }}" class="button button_blue button_js"><span class="button_label">Descargar</span></a> </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
