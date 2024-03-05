@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Listado de Chollos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chollos as $chollo)
                <tr>
                    <td>{{ $chollo->id }}</td>
                    <td>{{ $chollo->titulo }}</td>
                    <td>{{ $chollo->descripcion }}</td>
                    <td>
                        <a href="{{ route('chollos.show', $chollo->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
