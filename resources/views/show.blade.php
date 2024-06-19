@extends('layout')
@section('title','personas | ' . $persona->cPerApellido  )
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Detalles de la persona</h2>
        <p><strong>Dirección:</strong> {{ $persona->cPerDireccion }}</p>
        <p><strong>Fecha de nacimiento:</strong> {{ $persona->cPerFecNac }}</p>
        <p><strong>Edad:</strong> {{ $persona->nPerEdad }}</p>
        <p><strong>Sexo:</strong> {{ $persona->cPerSexo }}</p>
        <p><strong>Sueldo:</strong> {{ $persona->nPerSueldo }}</p>
        <p><strong>RND:</strong> {{ $persona->cPerRnd }}</p>
        <p><strong>Estado:</strong> {{ $persona->cPerEstado }}</p>
    </div>
</div>

@endsection