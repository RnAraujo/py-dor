@extends('layouts.master')

@section('content')


    <div class="card">
        <div class="card-header">
            Formulario de Grupos
        </div>
        <div class="card-body">
            <a href="{{ route('grupos.create') }}"><i class="fas fa-plus-square"></i> Crear nuevo grupo</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 100px">ID</th>
                    <th style="width: 450px">Creador</th>
                    <th style="width: 120px">Estado</th>
                    <th style="width: 180px">Ver</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($groups as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            <details>
                                <summary>
                                    {{ $item->user->name }} <i class="fas fa-comment text-info"></i>
                                    <small class="text-info">{{ $item->created_at }}</small>
                                </summary>

                                <p class="observations"><strong>OBS: </strong> {{ $item->observations }}</p>
                            </details>
                        </td>
                        <td>
                            @if ($item->is_open)
                                <span class="badge badge-success">Abierto</span>
                            @else
                                <span class="badge badge-danger">Cerrado</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('grupos.show', $item) }}"><i class="fas fa-clipboard-list"></i> Beneficiados</a>
                        </td>
                        <td>
                            <a href="{{ route('grupos.edit', $item) }}"><i class="fas fa-edit"></i> Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $groups->links() }}
        </div>
    </div>
@endsection
