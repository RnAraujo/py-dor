@extends('layouts.master')

@section('content-fluid')


    <div class="card">
        <div class="card-header">
            Formulario de Beneficiados
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-8">
                    <a href="{{ route('beneficiados.create') }}"><i class="fas fa-plus-square"></i> Crear nuevo beneficiado</a>
                </div>
                <div class="col-2">
                    <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-warning btn-block">
                        <i class="fas fa-search"></i> Filtrar
                    </button>
                </div>
            </div>
            <p class="text-muted"><strong>{{ $count }}</strong> registros en la base de datos.</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 100px">ID</th>
                    <th style="width: 120px">DNI</th>
                    <th>Apellidos y Nombres</th>
                    <th style="width: 120px">Estado</th>
                    <th style="width: 350px">Tipo</th>
                    <th style="width: 180px">Ración</th>
                    <th style="width: 180px">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($benefited as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->card }}</td>
                        <td>
                            {{ $item->full_name }}
                            <abbr title="{{ $item->dependence->definition }}"><i class="fas fa-university text-info"></i></abbr>
                        </td>
                        <td>
                            @if ($item->is_active)
                                <span class="badge badge-success">Activo</span>
                            @else
                                <span class="badge badge-danger">Inactivo</span>
                            @endif
                        </td>
                        <td>{{ $item->typeBeneficiary->definition }}</td>
                        <td>{{ $item->ration->definition }}</td>
                        <td>
                            <a href="{{ route('grupos.edit', $item) }}"><i class="fas fa-edit"></i> Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $benefited->links() }}
        </div>
    </div>
@endsection
