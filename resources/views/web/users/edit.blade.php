@extends('web.layouts.app')

@section('title', 'Air Sydney')

@section('content')
    <section id="user-edit" class="ftco-section ftco-property-details no-hero-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">

                        {{-- Nav Pills --}}
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-information-tab" data-toggle="pill"
                                       href="#pills-information" role="tab" aria-controls="pills-information"
                                       aria-expanded="true">{{ __('users.profile.personal_info') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-listings-tab" data-toggle="pill"
                                       href="#pills-listings" role="tab" aria-controls="pills-listings"
                                       aria-expanded="true">{{ __('users.profile.my_listings') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-blog-tab" data-toggle="pill"
                                       href="#pills-blog"
                                       role="tab" aria-controls="pills-blog"
                                       aria-expanded="true">{{ __('users.profile.my_blog') }}</a>
                                </li>
                            </ul>
                        </div>
                        {{-- Nav Pills End --}}

                        {{-- Tab Content --}}
                        <div class="tab-content" id="pills-tabContent">

                            {{-- Personal Information --}}
                            <div class="tab-pane fade show active" id="pills-information" role="tabpanel"
                                 aria-labelledby="pills-information-tab">
                                <form action="{{ route('web.users.update', $user->id) }}" method="POST"
                                      accept-charset="UTF-8">
                                    @csrf
                                    {{ method_field('PUT') }}

                                    <div class="row">

                                        {{-- Left Side --}}
                                        <div class="col-md-4">
                                            <div class="bio agent">
                                                <div class="img">
                                                    <img src="{{ asset('images/web/theme/team-1.jpg') }}"
                                                         class="img-fluid"
                                                         alt="Colorlib Template" width="100%">
                                                </div>
                                                <div class="desc">
                                                    <h3>{{ __('users.profile.update_avatar') }}</h3>
                                                </div>
                                            </div>

                                            <div class="form-group edit-form-btn">
                                                <input type="submit" value="{{ __('operations.save') }}"
                                                       class="btn btn-primary py-2 px-3">
                                                <button
                                                    class="btn btn-outline-secondary py-2 px-3">{{ __('operations.cancel') }}</button>
                                            </div>
                                        </div>

                                        {{-- Right Side --}}
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="edit_name">{{ __('Name') }}</label>
                                                <input type="text"
                                                       class="form-control  @error('name') is-invalid @enderror"
                                                       placeholder="{{ __('placeholders.name') }}"
                                                       value="{{ $user->name }}"
                                                       name="name" id="edit-name">
                                                @error('name')
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="edit_location">{{ __('users.profile.location') }}</label>
                                                <input type="text" class="form-control"
                                                       placeholder="{{ __('placeholders.location') }}"
                                                       value="{{ $user->location }}"
                                                       name="location" id="edit-location">
                                            </div>
                                            <div class="form-group">
                                                <label for="edit_lang">{{ __('users.profile.lang') }}</label>
                                                <div class="tagcloud" id="edit_lang">
                                                    <a href="#" class="tag-cloud-link">English</a>
                                                    <a href="#" class="tag-cloud-link">中文</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="edit-intro">{{ __('users.profile.introduction') }}</label>
                                                <textarea id="" cols="30" rows="7"
                                                          class="form-control @error('introduction') is-invalid @enderror"
                                                          placeholder="{{ __('placeholders.introduction') }}"
                                                          name="introduction"
                                                          id="edit-intro">{{ $user->introduction }}</textarea>
                                                @error('introduction')
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Personal Information End --}}

                                {{-- My Listings --}}
                                <div class="tab-pane fade" id="pills-listings" role="tabpanel"
                                     aria-labelledby="pills-listings-tab">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost
                                        unorthographic life One day however a small line of blind text by the name
                                        of
                                        Lorem
                                        Ipsum decided to leave for the far World of Grammar.</p>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view
                                        back on
                                        the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village
                                        and
                                        the
                                        subline of her own road, the Line Lane. Pityful a rethoric question ran over
                                        her
                                        cheek, then she continued her way.</p>
                                </div>
                                {{-- My Listings End --}}

                                {{-- My Blog --}}
                                <div class="tab-pane fade" id="pills-blog" role="tabpanel"
                                     aria-labelledby="pills-review-tab">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h3 class="head">23 Reviews</h3>
                                            <div class="review d-flex">
                                                <div class="user-img"
                                                     style="background-image: url('{{ asset('images/web/theme/person_1.jpg') }}')"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Jacob Webb</span>
                                                        <span class="text-right">14 March 2018</span>
                                                    </h4>
                                                    <p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
                                                        <span class="text-right"><a href="#" class="reply"><i
                                                                    class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>When she reached the first hills of the Italic Mountains, she
                                                        had
                                                        a
                                                        last view back on the skyline of her hometown
                                                        Bookmarksgrov</p>
                                                </div>
                                            </div>
                                            <div class="blog d-flex">
                                                <div class="user-img"
                                                     style="background-image: url('{{ asset('images/web/theme/person_2.jpg') }}')"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Jacob Webb</span>
                                                        <span class="text-right">14 March 2018</span>
                                                    </h4>
                                                    <p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
                                                        <span class="text-right"><a href="#" class="reply"><i
                                                                    class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>When she reached the first hills of the Italic Mountains, she
                                                        had
                                                        a
                                                        last view back on the skyline of her hometown
                                                        Bookmarksgrov</p>
                                                </div>
                                            </div>
                                            <div class="review d-flex">
                                                <div class="user-img"
                                                     style="background-image: url('{{ asset('images/web/theme/person_2.jpg') }}')"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Jacob Webb</span>
                                                        <span class="text-right">14 March 2018</span>
                                                    </h4>
                                                    <p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
                                                        <span class="text-right"><a href="#" class="reply"><i
                                                                    class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>When she reached the first hills of the Italic Mountains, she
                                                        had
                                                        a
                                                        last view back on the skyline of her hometown
                                                        Bookmarksgrov</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="rating-wrap">
                                                <h3 class="head">Give a Review</h3>
                                                <div class="wrap">
                                                    <p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(98%)
								   					</span>
                                                        <span>20 Reviews</span>
                                                    </p>
                                                    <p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(85%)
								   					</span>
                                                        <span>10 Reviews</span>
                                                    </p>
                                                    <p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(70%)
								   					</span>
                                                        <span>5 Reviews</span>
                                                    </p>
                                                    <p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(10%)
								   					</span>
                                                        <span>0 Reviews</span>
                                                    </p>
                                                    <p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(0%)
								   					</span>
                                                        <span>0 Reviews</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- My Blog End --}}

                            </div>
                            {{-- Tab Content End--}}

                        </div>
                        {{-- Tab Content End --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
