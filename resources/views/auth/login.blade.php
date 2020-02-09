@extends('layouts.app')

@section('content')
    <div class="hero-wrap" id="login" style="background-image: url('{{ asset('images/bg_1.jpg') }}'); height: 100%"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center">
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email" hidden></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               autofocus placeholder="{{ __('placeholder-email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" hidden></label>
                                        <input type="password" class="form-control @error('email') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               placeholder="{{ __('placeholder-password') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="{{ __('Login') }}" class="btn btn-primary py-3 px-5">
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div>
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
