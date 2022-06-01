@extends('layouts.app')

{{--@extends('layouts.header')--}}

@section('login')
{{--@section('login')--}}
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-md-4">
                @error('phone')
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                </div>
                @enderror
{{--                @error('invalid_phone')--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="alert alert-danger text-center" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @enderror--}}
                <div class="card border-azul_mod">
                    <div class="card-header bg-azul_mod p-3"><i class="fa-solid fa-user-lock"></i><span> LOGIN</span></div>

                    <div class="card-body pt-4 pb-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                                <div class="col-md-12">--}}
{{--                                    <input id="email" type="text"--}}
{{--                                           class="form-control border-azul_mod form-control-lg @error('invalid_email') is-invalid @enderror mobile"--}}
{{--                                           name="email" value="{{ old('email') }}" autocomplete="email" autofocus>--}}
{{--                                    <i class="fa fa-mobile-retro"></i>--}}
{{--                                </div>--}}
                                <div class="col-md-12">
                                    <input id="phone" type="text"
                                           class="form-control border-azul_mod form-control-lg @error('phone') is-invalid @enderror mobile"
                                           name="phone" value="{{ old('phone') }}"
                                           placeholder="(00) 00000-0000"
                                           autocomplete="phone" autofocus>
                                    <i class="fa fa-mobile-retro"></i>
                                </div>
                            </div>

                            <div class="row mb-3">
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                           class="form-control border-azul_mod form-control-lg @error('phone') is-invalid @enderror mobile"
                                           name="password" required
                                           placeholder="Password"
                                           autocomplete="current-password">
                                    <i class="fa fa-lock"></i>
                                </div>

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}
{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit"
                                            class="btn btn-lg btn-azul_mod w-100">{{ __('ENTRAR') }}</button>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6">
                                    <div class="form-check mt-2 fs-6">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label fs-6" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link login_link mt-1" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
