@extends('layouts.master')

@section('content')


    <div class="card">
        <div class="card-header">
            Formulario de Raciones
        </div>
        <div class="card-body">
            <a href="{{ route('raciones.create') }}"><i class="fas fa-plus-square"></i> Crear nueva ración</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 100px">#</th>
                    <th>Definicion</th>
                    <th style="width: 180px">Ver</th>
                    <th style="width: 200px">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rations as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->definition }}</td>
                        <td><i class="fas fa-clipboard-list"></i> Ingredientes</td>
                        <td>
                            <a href="{{ route('raciones.edit', $item) }}"><i class="fas fa-edit"></i> Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
