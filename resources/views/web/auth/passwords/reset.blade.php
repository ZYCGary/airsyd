@extends('web.layouts.app')

@section('content')
<div class="hero-wrap auth" id="password-reset" style="background-image: url('{{ asset('images/bg_1.jpg') }}');"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                <div class="text text-center">
                    <div class="card">
                        <div class="card-header">{{ __('Reset Password') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('web.password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <label for="email" hidden></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('email-placeholder') }}">
                                    @error('email')
                                    <span class="invalid-feedback"
                                          role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" hidden></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password"
                                           placeholder="{{ __('placeholder-password') }}">
                                    @error('password')
                                    <span class="invalid-feedback"
                                          role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" hidden></label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password"
                                           placeholder="{{ __('Confirm Password') }}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="{{ __('Reset Password') }}"
                                           class="btn btn-primary py-3 px-5">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
