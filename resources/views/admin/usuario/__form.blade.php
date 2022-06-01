@csrf
<div class="row mb-3">
    <div class="col-sm-3">
        <label for="name" class="col-form-label text-font_menu_color">{{ __('Name') }}</label>
        <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
    </div>
    <div class="col-sm-9">
        <input id="name" type="text" class="form-control shadow-sm @error('name') is-invalid @enderror" name="name" value="{{ $user->name ?? old('name') }}" autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-3">
        <label for="email" class="col-form-label text-font_menu_color">{{ __('Email Address') }}</label>
        <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
    </div>

    <div class="col-sm-9">
        <input id="email" type="email" class="form-control shadow-sm @error('email') is-invalid @enderror" name="email" value="{{ $user->email ?? old('email') }}" autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-3">
        <label for="phone" class="col-form-label text-font_menu_color">{{ __('Phone') }}</label>
        <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
    </div>
    <div class="col-sm-5">
        <input id="phone" type="text" class="form-control shadow-sm @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone ?? old('phone') }}" autocomplete="phone">

        @error('phone')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-3">
        <label for="cpf_id" class="col-form-label text-font_menu_color">{{ __('CPF') }}</label>
        <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
    </div>

    <div class="col-sm-5">

        <input id="cpf_id" type="text" class="form-control shadow-sm @error('cpf') is-invalid @enderror" name="cpf" value="{{ $user->cpf ?? old('cpf') }}" autocomplete="cpf">

        @error('cpf')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-3">
        <label for="rg_id" class="col-form-label text-font_menu_color">{{ __('RG') }}</label>
        <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
    </div>

    <div class="col-sm-5">
        <input id="rg_id" type="text" class="form-control shadow-sm @error('rg') is-invalid @enderror" name="rg" value="{{ $user->rg ?? old('rg') }}" autocomplete="rg">
        @error('rg')
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
    <div class="col-sm-3">
        <label for="password" class="col-form-label text-font_menu_color">{{ __('Password') }}</label>
        <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
    </div>

    <div class="col-sm-5">
        <input id="password" type="password" class="form-control shadow-sm @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-3">
        <label for="password-confirm" class="col-form-label text-font_menu_color">{{ __('Confirm Password') }}</label>
        <i class="fa-solid fa-circle-exclamation text-blue float-md-end mt-sm-2 fs-6" title="Necessários" aria-label="Necessários"></i>
    </div>

    <div class="col-sm-5">
        <input id="password-confirm" type="password" class="form-control shadow-sm" name="password_confirmation" autocomplete="new-password">
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-10 offset-3">
        <button type="submit" class="btn btn-success">
            {{ __('Register') }}
        </button>
    </div>
</div>
