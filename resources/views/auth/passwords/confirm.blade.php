@extends('layouts.app')

@section('content')
    <div class="hero-wrap auth" id="password-confirm" style="background-image: url('{{ asset('images/bg_1.jpg') }}');"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center">
                        <div class="card">
                            <div class="card-header">{{ __('Confirm Password') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="password" hidden></label>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               placeholder="{{ __('placeholder-password') }}">
                                        @error('password')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="{{ __('Confirm Password') }}"
                                               class="btn btn-primary py-3 px-5">
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
