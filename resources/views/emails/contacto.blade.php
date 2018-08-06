@extends('layouts.email')

@section('title')
Tienes un mensaje de {{ $datos['nombre'] }}
@stop

@section('content')
<p><strong>Asunto:</strong> {{ $datos['asunto'] }} </p></br>
{{ $datos['mensaje'] }}

<p>Este mensaje se ha enviado desde la pagina web.</p>
@stop

@section('notes','Para mayor detalles comuniquese al siguiente correo luis.mayta@gmail.com')
