<input type="hidden" name="user_id" value="{{ $user->id }}">

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Creador</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" value="{{ $user->name }}" disabled>
    </div>
</div>

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
        <div class="custom-control custom-radio">
            <input type="radio" id="opt-open" name="is_open" class="custom-control-input" value="1" checked>
            <label class="custom-control-label" for="opt-open">Abierto</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="opt-close" name="is_open" class="custom-control-input" value="0" disabled>
            <label class="custom-control-label" for="opt-close">Cerrado</label>
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Observaciones</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="observations" value="{{ $group->observations ?? 'Sin observaciones.' }}" minlength="5" maxlength="700" required>
    </div>
</div>
