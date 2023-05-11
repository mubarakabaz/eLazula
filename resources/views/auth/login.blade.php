@extends('layouts.auths')

@section('content')

<div class="row w-100 mx-0 mt-5 pt-5">
    <div class="card col-lg-4 mx-auto">
        <div class="auth-form-light text-center py-5 px-4 px-sm-5">
            <h2 class="text-uppercase font-weight-bold mb-4 px-2">Halaman Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="yourname@mail.com" required
                        autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="********" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="submit"
                        class="btn btn-block btn-outline-success btn-lg font-weight-medium auth-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>

                <div class="mt-3">
                    <a href="{{route('register')}}"
                        class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">{{__('Register')}}</a>
                </div>

                <div class="mt-3">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
