<div class="form-group row">
    <label class="col-sm-2 col-form-label">Grupo</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{{ $group_id }}" disabled>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Beneficiado</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{{ $benefited->full_name }}" disabled>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Boleto (Pavo)</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" name="turkey_ticket" value="{{ $group->observations ?? '' }}" min="0" autofocus required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Observaciones</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="observations" value="{{ $group->observations ?? 'Sin observaciones.' }}" onfocus="this.select();" minlength="3" maxlength="100" required>
    </div>
</div>



