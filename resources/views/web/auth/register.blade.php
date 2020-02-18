@extends('web.layouts.app')

@section('content')
    <div class="hero-wrap auth" id="register" style="background-image: url('{{ asset('images/web/theme/bg_1.jpg') }}');"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center">
                        <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('web.register') }}">
                                    @csrf

                                    <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
                                    <input type="hidden" name="speaks" value="{{ get_speaks()[app()->getLocale()] }}">

                                    <div class="form-group">
                                        <label for="name" hidden></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ old('name') }}" required autocomplete="name"
                                               autofocus placeholder="{{ __('placeholders.name') }}">
                                        @error('name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email" hidden></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               autofocus placeholder="{{ __('placeholders.email') }}">
                                        @error('email')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" hidden></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               placeholder="{{ __('placeholders.password') }}">
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
                                        <input type="submit" value="{{ __('Register') }}"
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
