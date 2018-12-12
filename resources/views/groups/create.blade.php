@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Formulario de Dependencias
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('grupos.store') }}">
                @csrf

                @include('groups.partials.fields')

                <div class="form-group row">
                    <div class="col-md-10 offset-md-2">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-cloud"></i> Registrar
                        </button>
                        <button class="btn btn-warning" type="reset">
                            <i class="fas fa-broom"></i> Limpiar
                        </button>
                        <button class="btn btn-info" type="button" onclick="history.back()">
                            <i class="fas fa-undo-alt"></i> Cancelar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->any())
        <div class="card text-white bg-danger mb-3 mt-3">
            <div class="card-header">Errores encontrados</div>
            <div class="card-body">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@endsection
