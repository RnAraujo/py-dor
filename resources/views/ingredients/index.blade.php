@extends('layouts.master')

@section('content')


    <div class="card">
        <div class="card-header">
            Formulario de Ingredientes
        </div>
        <div class="card-body">
            <a href="{{ route('ingredientes.create') }}"><i class="fas fa-plus-square"></i> Crear nuevo ingrediente</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 100px">#</th>
                    <th>Definicion</th>
                    <th style="width: 200px">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ingredients as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->definition }}</td>
                        <td>
                            <a href="{{ route('ingredientes.edit', $item) }}"><i class="fas fa-edit"></i> Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
