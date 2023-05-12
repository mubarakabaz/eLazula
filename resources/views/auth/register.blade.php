@extends('layouts.auths')

@section('content')

<div class="row w-100 mx-0 mt-5 pt-5">
    <div class="card col-lg-4 mx-auto">
        <div class="auth-form-light text-center py-5 px-4 px-sm-5">
            {{-- <h2 class="text-uppercase font-weight-bold mb-4 px-2">Halaman Login</h2> --}}
            <div class="brand-logo mb-4">
                <img src="{{ asset('back/images/logo-text.png') }}" alt="">
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" placeholder="Nama Lengkap Anda" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="yourname@gmail.com" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" placeholder="********" required
                        autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="*******"
                        required autocomplete="new-password">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-outline-success btn-lg font-weight-medium auth-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>
                <div class="mt-3">
                    <a href="{{route('login')}}"
                        class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">{{__('Login')}}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
