<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Definición</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="definition" value="{{ $ingredient->definition ?? '' }}">
    </div>
</div>
