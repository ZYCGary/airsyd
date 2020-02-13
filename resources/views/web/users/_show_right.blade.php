<div class="sidebar-box ftco-animate">
    <h1>{{ __('users.profile.hi') }}, {{ __('users.profile.i_am') }} {{ $user->name }}</h1>
</div>

<div class="sidebar-box ftco-animate profile-card">
    <div class="categories">
        <h3>{{ __('users.profile.contact') }}</h3>
        <li><span>{{ __('Email') }}</span><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
        <li><a href="#">Visual Assistant <span>(22)</span></a></li>
    </div>
</div>

<div class="sidebar-box ftco-animate profile-card">
    <div id="listings">
        <h3>{{ __('users.profile.his_her_listings', ['name' => $user->name]) }}</h3>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <a href="" class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <img src="{{ asset('images/web/theme/image_1.jpg') }}" alt="listing_property">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <img src="{{ asset('images/web/theme/image_1.jpg') }}" alt="listing_property">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </a>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <img src="{{ asset('images/web/theme/image_1.jpg') }}" alt="listing_property">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                         style="background-image: url('{{ asset('images/web/theme/person_2.jpg') }}')"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sidebar-box ftco-animate profile-card">
    <div id="blogs">
        <h3>{{ __('users.profile.his_her_blog', ['name' => $user->name]) }}</h3>
        <div class="row ftco-animate">
            <div class="col-md-4">
                <a href="" class="item">
                    <div class="testimony-wrap py-4">
                        <div class="text">
                            <img src="{{ asset('images/web/theme/image_1.jpg') }}" alt="listing_property">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="item">
                    <div class="testimony-wrap py-4">
                        <div class="text">
                            <img src="{{ asset('images/web/theme/image_1.jpg') }}" alt="listing_property">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="item">
                    <div class="testimony-wrap py-4">
                        <div class="text">
                            <img src="{{ asset('images/web/theme/image_1.jpg') }}" alt="listing_property">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="sidebar-box ftco-animate profile-card">
    <div class="categories">
        <h3>{{ __('users.profile.reviews', ['num' => '6']) }}</h3>
        <li><span>{{ __('Email') }}</span><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
        <li><a href="#">Visual Assistant <span>(22)</span></a></li>
    </div>
</div>
