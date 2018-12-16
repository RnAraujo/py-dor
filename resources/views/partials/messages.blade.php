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