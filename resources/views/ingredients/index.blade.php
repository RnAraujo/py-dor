@extends('layouts.master')

@section('content')

    <a href="{{ route('ingredientes.create') }}">Crear nuevo ingrediente</a>
    <div class="card">
        <div class="card-header">
            Formulario de Ingredientes
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Definicion</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ingredients as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->definition }}</td>
                        <td>
                            <a href="{{ route('ingredientes.edit', 2) }}">Editar</a>
                            <a href="{{ route('ingredientes.destroy', 3) }}">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
