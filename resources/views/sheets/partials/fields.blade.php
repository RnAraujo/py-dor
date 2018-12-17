<div class="form-group row">
    <label class="col-sm-2 col-form-label">DNI</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="card" value="{{ $group->observations ?? '' }}" minlength="8" maxlength="8" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Apellidos</label>
    <div class="col-sm-10">
        <input type="text" class="form-control text-uppercase" name="lastname" value="{{ $group->observations ?? '' }}" minlength="5" maxlength="60" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombres</label>
    <div class="col-sm-10">
        <input type="text" class="form-control text-uppercase" name="firstname" value="{{ $group->observations ?? '' }}" minlength="3" maxlength="40" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
        <div class="custom-control custom-radio">
            <input type="radio" id="opt-open" name="is_active" class="custom-control-input" value="1" checked>
            <label class="custom-control-label" for="opt-open">Activo</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="opt-close" name="is_active" class="custom-control-input" value="0">
            <label class="custom-control-label" for="opt-close">Inactivo</label>
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Racion</label>
    <div class="col-sm-10">
        <select class="custom-select" name="ration_id" required>
            <option selected>--- Seleccionar ---</option>

            @foreach ($rations as $item)
                <option value="{{ $item->id }}">{{ $item->definition }}</option>
            @endforeach        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Tipo de beneficiado</label>
    <div class="col-sm-10">
        <select class="custom-select" name="type_benefited_id" required>
            <option selected>--- Seleccionar ---</option>

            @foreach ($typesBeneficiary as $item)
                <option value="{{ $item->id }}">{{ $item->definition }}</option>
            @endforeach        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Dependencia</label>
    <div class="col-sm-10">
        <select class="custom-select" name="dependence_id" required>
            <option selected>--- Seleccionar ---</option>

            @foreach ($dependences as $item)
                <option value="{{ $item->id }}">{{ $item->definition }}</option>
            @endforeach        </select>
    </div>
</div>

