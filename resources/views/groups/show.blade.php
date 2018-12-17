@extends('layouts.master')

@section('content-fluid')


    <div class="card">
        <div class="card-header">
            Grupo de Beneficiados
        </div>
        <div class="card-body">
            @if ($is_open)
                <a class="btn btn-primary" href="#"><i class="fas fa-plus-square"></i> Agregar</a>
            @endif

            <table class="table table-bordered mt-3">
                <caption>{{ $count }} registros en el grupo.</caption>
                <thead class="thead-light">
                <tr>
                    <th style="width: 100px">ID</th>
                    <th>Beneficiados</th>
                    <th style="width: 270px">Ración</th>
                    <th style="width: 120px">Boleto</th>
                    <th style="width: 170px">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($benefited as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->benefited->full_name }}</td>
                        <td>{{ $item->benefited->ration->definition }}</td>
                        <td>
                            <i class="fas fa-cat"></i>&ensp;{{ $item->turkey_ticket }}
                        </td>
                        <td>
                            @if ($is_open)
                                <a href="{{ route('grupos.edit', $item) }}"><i class="fas fa-trash"></i> Eliminar</a>
                            @else
                                <span class="text-muted"><i class="fas fa-lock"></i>&ensp;Restringido</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
