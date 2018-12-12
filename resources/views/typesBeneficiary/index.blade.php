@extends('layouts.master')

@section('content')


    <div class="card">
        <div class="card-header">
            Formulario de Tipos de Beneficiario
        </div>
        <div class="card-body">
            <a href="{{ route('tipos.create') }}"><i class="fas fa-plus-square"></i> Crear nuevo tipo</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 100px">#</th>
                    <th>Definicion</th>
                    <th style="width: 200px">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($typesBeneficiary as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->definition }}</td>
                        <td>
                            <a href="{{ route('tipos.edit', $item) }}"><i class="fas fa-edit"></i> Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
