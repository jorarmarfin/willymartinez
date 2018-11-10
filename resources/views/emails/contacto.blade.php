@extends('themes.base.email')

@section('title')
Tienes un mensaje de {{ $datos['nombre'] }}
@stop

@section('content')
<p><strong>Asunto:</strong> {{ $datos['asunto'] }} </p></br>
<p><strong>Email:</strong> {{ $datos['email'] }} </p></br>
{{ $datos['mensaje'] }}

<p>Este mensaje se ha enviado desde la pagina web.</p>
@stop

@section('notes','Para mayor detalles comuniquese al siguiente correo luis.mayta@gmail.com')
