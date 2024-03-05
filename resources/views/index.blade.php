@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Listado de Chollos</h1>
    <div class="row">
        @foreach($chollos as $chollo)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" class="card-img-top" alt="Imagen del chollo">
                <div class="card-body">
                    <h5 class="card-title">{{ $chollo->titulo }}</h5>
                    <p class="card-text">{{ $chollo->descripcion }}</p>
                    <div class="btn-group" role="group">
                        <a href="{{ route('chollos.show', $chollo) }}" class="btn btn-primary">Ver Chollo</a>
                        <a href="{{ route('chollos.edit', $chollo) }}" class="btn btn-secondary">Editar Chollo</a>
                        <form action="{{ route('chollos.destroy', $chollo) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar Chollo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

