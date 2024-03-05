@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>{{ $chollo->titulo }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Descripción:</strong> {{ $chollo->descripcion }}</p>
                <p><strong>Categoría:</strong> {{ $chollo->categoria }}</p>
                <p><strong>Puntuación:</strong> {{ $chollo->puntuacion }}</p>
                <p><strong>Precio:</strong> {{ $chollo->precio }}</p>
                <p><strong>Precio con descuento:</strong> {{ $chollo->precio_descuento }}</p>
                <p><strong>URL:</strong> <a href="{{ $chollo->url }}" target="_blank">{{ $chollo->url }}</a></p>
            </div>
        </div>
    </div>
@endsection
