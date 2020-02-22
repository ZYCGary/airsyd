{{-- Personal Information --}}
<div class="sidebar-box ftco-animate profile-card">
    <h1>{{ __('users.profile.hi') }}, {{ __('users.profile.i_am') }} {{ $user->name }}</h1>
    <h3><span class="flaticon-bed mr-1"></span>{{ __('users.profile.lives_in') }} Sydney</h3>
    <h3>
        <span class="flaticon-bed mr-1"></span>{{ __('users.profile.speaks') }}
        @foreach($user->can_speak as $lang)
            @if($loop->last)
                {{ $lang }}
            @else
                {{ $lang }},
            @endif
        @endforeach
    </h3>
    <a href="{{ route('web.users.edit', Auth::user()->id) }}"
       class="btn btn-primary py-2 px-3">{{ __('users.update', ['attr' => __('users.profile.information')]) }}</a>
</div>

<div class="sidebar-box ftco-animate profile-card">
    <div class="categories">
        <h3>{{ __('users.profile.contact') }}</h3>
        <ul>
            <li><span class="flaticon-bed mr-1"></span><span>{{ __('Email') }}</span><a
                    href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
            <li><a href="#">Visual Assistant <span>(22)</span></a></li>
        </ul>
    </div>
</div>
{{-- Personal Information End --}}

{{-- Property Listing --}}
<div class="sidebar-box ftco-animate profile-card">
    <div id="listings">
        <h3>{{ __('users.profile.somebody_listing', ['name' => $user->name]) }}</h3>
        <div class="row ftco-animate">
            @if(count($user->properties) > 3)
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach($user->properties as $property)
                            <a href="" class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <img src="{{ asset('images/web/theme/image_1.jpg') }}" alt="listing_property">
                                        <div>
                                            <h3>
                                                <span>
                                                    Property title
                                                </span>
                                                <br>
                                                <span>{{ $property->suburb->name }}</span>
                                            </h3>
                                        </div>
                                        <div>
                                            <h3>
                                                <span
                                                    class="flaticon-bed mr-1"></span><span>{{ $property->type }}</span>
                                                <span
                                                    class="flaticon-bed mr-1"></span><span>{{ $property->category->name }}</span>
                                                @if($property->category->id == 1)
                                                    <span>{{ count($property->rooms) }} </span> Rooms for rent
                                                @endif

                                            </h3>
                                        </div>
                                        <div>
                                            <span><span class="flaticon-bed mr-1"></span> {{ $property->total_bedrooms }}</span>
                                            <span><span class="flaticon-bed mr-1"></span> {{ $property->total_bathrooms }}</span>
                                            <span><span
                                                    class="flaticon-bed mr-1"></span> {{ $property->max_load }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @else
                @foreach($user->properties as $property)
                    <div class="col-md-4">
                        <a href="" class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <img src="{{ asset('images/web/theme/image_1.jpg') }}" alt="listing_property">
                                    <div>
                                        <h3>
                                                <span>
                                                    Property title
                                                </span>
                                            <br>
                                            <span>{{ $property->suburb->name }}</span>
                                        </h3>
                                    </div>
                                    <div>
                                        <h3>
                                                <span
                                                    class="flaticon-bed mr-1"></span><span>{{ $property->type }}</span>
                                            <span
                                                class="flaticon-bed mr-1"></span><span>{{ $property->category->name }}</span>
                                            @if($property->category->id == 1)
                                                <span>{{ count($property->rooms) }} </span> Rooms for rent
                                            @endif

                                        </h3>
                                    </div>
                                    <div>
                                        <span><span
                                                class="flaticon-bed mr-1"></span> {{ $property->total_bedrooms }}</span>
                                        <span><span
                                                class="flaticon-bed mr-1"></span> {{ $property->total_bathrooms }}</span>
                                        <span><span
                                                class="flaticon-bed mr-1"></span> {{ $property->max_load }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
{{-- Property Listing End --}}

<div class="sidebar-box ftco-animate profile-card">
    <div class="categories">
        <h3>{{ __('users.profile.reviews', ['num' => '6']) }}</h3>
        <li><span>{{ __('Email') }}</span><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
        <li><a href="#">Visual Assistant <span>(22)</span></a></li>
    </div>
</div>
