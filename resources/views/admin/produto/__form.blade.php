@csrf
{{--<div class="row mb-3">--}}
{{--    <div class="col-sm-3">--}}
{{--        <label for="id_created_at" class="col-form-label text-font_menu_color">{{ __('Data de criação') }}</label>--}}
{{--        <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>--}}
{{--    </div>--}}
{{--    <div class="col-sm-9">--}}
{{--        <input id="id_created_at" type="date" class="form-control shadow-sm" name="name" value="{{ $produto->created_at}}">--}}

{{--        @error('name')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--            {{ $message }}--}}
{{--        </span>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--</div>--}}
<div class="row cad_reverse" style="display: flex; flex-direction: row-reverse;">
    <div class="col-sm-4">
        <div class="row mb-3">
            <div class="col-sm-12" style="height: 410px;">
                <div class="bg-light h-100 w-75 shadow-sm centralizar">
                    <i class="fa-solid fa-camera"></i>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-9">
                <input type="file" class="form-control" name="img" id="id_img"  onclick=event_imagem()>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="row mb-3">
            <div class="col-sm-4">
                <label for="name" class="col-form-label text-font_menu_color">{{ __('Produto') }}</label>
                <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
            </div>
            <div class="col-sm-8">
                <input id="name" type="text" class="form-control shadow-sm @error('name') is-invalid @enderror" name="name" value="{{ $produto->name ?? old('name') }}" autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4">
                <label for="id_categoria_id" class="col-form-label text-font_menu_color">{{ __('Categoria') }}</label>
                <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
            </div>
            <div class="col-sm-8">
                <select id="id_categoria_id" class="form-select shadow-sm @error('categoria_id') is-invalid @enderror" name="categoria_id">
                    <option value="">--Selecione--</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                    @endforeach
                </select>


                @error('categoria_id')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <label for="id_estoque" class="col-form-label text-font_menu_color">{{ __('Qtd. Estoque') }}</label>
                <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
            </div>

            <div class="col-sm-8">
                <input id="id_estoque" type="number" class="form-control shadow-sm @error('estoque') is-invalid @enderror"
                       name="estoque" value="{{ $produto->estoque ?? old('estoque') }}" autocomplete="estoque"
                >
                @error('estoque')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4">
                <label for="id_preco_custo" class="col-form-label text-font_menu_color">{{ __('Preço de Custo') }}</label>
                <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
            </div>
            <div class="col-sm-8">
                <input id="id_custo" type="text" class="form-control shadow-sm @error('custo') is-invalid @enderror"
                       name="custo" value="{{ $produto->custo ?? old('custo') }}" autocomplete="custo"
                       onkeyup="formatarMoeda(this)">
                @error('custo')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <label for="id_preco_venda" class="col-form-label text-font_menu_color">{{ __('Preço de Venda') }}</label>
                <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
            </div>

            <div class="col-sm-8">

                <input id="id_venda" type="text" class="form-control shadow-sm @error('preco_venda') is-invalid @enderror"
                       name="venda" value="{{ $produto->venda ?? old('venda') }}" autocomplete="venda"
                       onkeyup="formatarMoeda(this)">

                @error('venda')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4">
                <label for="id_desconto" class="col-form-label text-font_menu_color">{{ __('% de Desconto') }}</label>
                <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
            </div>

            <div class="col-sm-8">
                <input id="id_desconto" type="text" class="form-control shadow-sm @error('desconto') is-invalid @enderror"
                       name="desconto" value="{{ $produto->desconto ?? old('desconto') }}" autocomplete="desconto">
                @error('desconto')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        {{--                            <div class="row mb-3">--}}
        {{--                                <label for="Role" class="col-sm-2 col-form-label text-font_menu_color">{{ __('Perfil de acesso') }}</label>--}}

        {{--                                <div class="col-sm-10">--}}
        {{--                                    <select class="form-control shadow-sm" name="role_id" id="role_id">--}}
        {{--                                        <option value="">-- Selecte --</option>--}}
        {{--                                        @foreach ($roles as $role)--}}
        {{--                                            <option value="{{ $role->id }}">{{ $role->name }}</option>--}}
        {{--                                        @endforeach--}}
        {{--                                    </select>--}}
        {{--                                    --}}{{--                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role_id" value="{{ old('role') }}" required autocomplete="role">--}}

        {{--                                    @error('role')--}}
        {{--                                    <span class="invalid-feedback" role="alert">--}}
        {{--                                        <strong>{{ $message }}</strong>--}}
        {{--                                    </span>--}}
        {{--                                    @enderror--}}
        {{--                                </div>--}}
        {{--                            </div>--}}

        <div class="row mb-3">
            <div class="col-sm-4">
                <label for="id_descricao" class="col-form-label text-font_menu_color">{{ __('Descrição') }}</label>
            </div>
            <div class="col-sm-8">
                <textarea class="form-control shadow-sm" id="id_descricao" name="descricao" rows="5">{{ $produto->descricao ?? old('descricao') }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-8 offset-4">
                <button type="submit" class="btn btn-success">
                    {{ __('Register') }}
                </button>
            </div>
        </div>

    </div>

</div>
