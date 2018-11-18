@extends('themes.base.email')

@section('title')
Se ha generado un pedido de {{ $datos['nombre'] }}
@stop

@section('content')
<p><strong>Email:</strong>{{ $datos['email'] }}  </p>
<p><strong>Telefono:</strong> {{ $datos['telefono'] }} </p>
<p><strong>Producto:</strong> {{ $datos['producto'] }} </p>
<p><strong>Cantidad:</strong> {{ $datos['cantidad'] }} </p>
<p><strong>Código:</strong> {{ $datos['_token'] }} </p>
<p><strong>Descripcion:</strong>  </p>
{{ $datos['descripcion'] }}

<p>Este mensaje se ha enviado desde la pagina web.</p>
@stop

@section('notes','Para mayor detalles comuniquese al siguiente correo luis.mayta@gmail.com')
