@extends('layouts.master')

@section('content')


    <div class="card">
        <div class="card-header">
            Beneficiados
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="#"><i class="fas fa-plus-square"></i> Agregar</a>

            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th style="width: 100px">ID</th>
                    <th style="width: 450px">Bene</th>
                    <th style="width: 120px">Ración</th>
                    <th style="width: 120px">Boleto</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($benefited as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->benefited->full_name }}</td>
                        <td>{{ $item->benefited->ration->definition }}</td>
                        <td>{{ $item->turkey_ticket }}</td>
                        <td>
                            <a href="{{ route('grupos.edit', $item) }}"><i class="fas fa-trash"></i> Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
