@extends('web.layouts.app')

@section('title', 'Profile')

@section('content')
    <section id="user-show" class="ftco-section ftco-degree-bg no-hero-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-md-last ftco-animate">
                    @include('web.users._show_right')
                </div>

                <div class="col-md-4 sidebar ftco-animate">
                    @include('web.users._show_left')
                </div>

            </div>
        </div>
    </section>
@stop
