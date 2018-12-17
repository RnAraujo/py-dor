@extends('layouts.master')

@section('content-fluid')
    @if ($is_open)
    <a class="btn btn-danger mb-3" href="{{ route('grupos.close', $group_id) }}"><i class="fas fa-fingerprint"></i> Cerrar grupo</a>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            Grupo de Beneficiados
        </div>
        <div class="card-body">
            @if ($is_open)
                <form class="form-inline" method="post" action="{{ route('hojas.check') }}">
                    @csrf

                    <input type="text" class="form-control form-control-lg mb-2 mr-sm-2" pattern="[0-9]{1,8}" name="id" placeholder="DNI" autofocus required>

                    <button type="submit" class="btn btn-primary btn-lg mb-2"><i class="fas fa-plus-square"></i> Agregar</button>
                </form>
            @endif

            @if (session('message'))
                <div class="alert alert-warning">
                    {{ session('message') }}
                </div>
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
                        <td>
                            {{ $item->benefited->full_name }}
                            <small class="text-info observations">{{ $item->observations }}</small>
                        </td>
                        <td>{{ $item->benefited->ration->definition }}</td>
                        <td>
                            <i class="fas fa-cat"></i>&ensp;{{ $item->turkey_ticket }}
                        </td>
                        <td>
                            @if ($is_open)
                                <form action="{{ route('hojas.destroy', $item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
                                </form>

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
