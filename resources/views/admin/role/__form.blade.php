@csrf
<div class="row mb-3">
    <label for="name_id" class="col-sm-2 col-form-label">Nome do Cargo</label>
    <div class="col-sm-10">
        <input type="text" class="form-control shadow-sm h100" id="name_id" name="name" value="{{ $role->name ?? old('role') }}" required>
        <div class="invalid-feedback">
            - O Campo nome cargo está vazio
        </div>
    </div>
</div>

<div class="row mb-3">
    <label for="description_id" class="col-sm-2 col-form-label">Descrição</label>
    <div class="col-sm-10">
        <textarea class="form-control shadow-sm" id="description_id" name="description" rows="5">{{ $role->description ?? old('role') }}</textarea>
    </div>
</div>
<div class="row mb-3">
    {{--                        <label for="description_id" class="col-sm-2 col-form-label">Descrição</label>--}}
    <div class="col-sm-10 offset-2">
        <button type="submit" class="btn btn-success p-2">Cadastrar</button>
    </div>
</div>
