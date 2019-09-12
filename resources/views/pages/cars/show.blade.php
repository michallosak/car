@extends('layouts.app')

@section('title')
    {{ $car->model }}
    @endsection
@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>{{ $car->model }}</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2>{{ $car->model }}</h2>
                            <div class="row" style="margin: 0 -4px;">
                                @foreach($car->photos as $photo)
                                    <div class="col-lg-2 pl-1 pr-1">
                                        <div class="photo-edit">
                                            <img src="{{ asset('image/'.$photo->src) }}" alt="{{ $car->model }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        <div class="car-details-info blog-content">

                            <p class="thme-blockquote">{{ $car->description }}</p>

                            <div class="title-page">
                                Specific data car
                            </div>
                            <div class="specific-car">
                                <div class="row">
                                    <div class="col-lg-4"><span>{{ __('Year production: ').$car->s->year_production }}</span></div>
                                    <div class="col-lg-4"><span>{{ __('Engine capacity: ').$car->s->engine_capacity }}</span></div>
                                    <div class="col-lg-4"><span>{{ __('Fuel: ').$car->s->fuel }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"><span>{{ __('Power: ').$car->s->power . __(' KM') }}</span></div>
                                    <div class="col-lg-4"><span>{{ __('Course: ').$car->s->course }}</span></div>
                                    <div class="col-lg-4"><span>{{ __('Body type: ').$car->s->body_type }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"><span>{{ __('Color: ').$car->s->color }}</span></div>
                                    <div class="col-lg-4"><span>{{ __('Transmission: ').$car->s->transmission }}</span></div>
                                    <div class="col-lg-4"><span>{{ __('Driver: ').$car->s->driver }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4"><span>{{ __('Country production: ').$car->s->country }}</span></div>
                                </div>
                            </div>
                            <a href="{{ route('rent_view', ['id' => $car->id, 'title' => $car->model]) }}" class="rent-btn w-100 mt-3 text-center">Book It</a>
                            <div class="review-area">
                                <h3>{{ __('Ask about this car') }}</h3>
                                <div class="review-form">
                                    @auth
                                        <form method="post" action="">
                                            @csrf
                                            <div class="message-input">
                                                <textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
                                            </div>
                                            <input type="hidden" name="car_id" value="{{ $car->id }}"/>
                                            <div class="input-submit">
                                                <button type="submit">Ask</button>
                                            </div>
                                        </form>
                                        @else
                                        <form action="index.html">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="name-input">
                                                        <input type="text" placeholder="Full Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="email-input">
                                                        <input type="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-input">
                                                <textarea name="review" cols="30" rows="5" placeholder="Message"></textarea>
                                            </div>

                                            <div class="input-submit">
                                                <button type="submit">Ask</button>
                                            </div>
                                        </form>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>For More Informations</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> +8801816 277 243</p>
                                <p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Rental Tips</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service1-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service2-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Connect with Us</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->
    @endsection
