@extends('layouts.app')

@section('title', 'Rental cars')
@section('content')
    <div class="container-fluid" style="margin-top: 100px">
        <div class="row">
            <div class="col-lg-8">
                <div class="display-table">
                    @if($cars->count() < 1)
                        <div class="alert alert-danger w-100 text-center">
                            {{ __('No cars to rent!') }}
                        </div>
                    @endif
                    <div class="row">
                        @foreach($cars as $car)
                            <div class="col-lg-4">
                                <div class="photo">
                                    <img class="w-100" src="{{ asset('img/car/car-1.jpg') }}" alt="{{ $car->model }}">
                                </div>

                                <a href="{{ route('rent_view', ['id' => $car->id, 'title' => $car->model]) }}"
                                   class="rent-btn w-100 text-center">Book It</a>

                            </div>
                            <div class="col-lg-8">
                                <div class="display-table-cell">
                                    <div class="car-list-info">
                                        <h2>
                                            <a href="{{ route('car', ['id' => $car->id, 'title' => $car->model]) }}">{{ $car->model }}</a>
                                        </h2>
                                        <h5>{{ $car->rent }}$ Rent /per a {{ $car->unit }}</h5>
                                        <p>{{ Str::limit($car->description, 300) }}</p>
                                        <ul class="car-info-list">
                                            <li>{{ $car->s->year_production }}</li>
                                            <li>{{ $car->s->color }}</li>
                                            <li>{{ $car->s->power }} {{ __('KM') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $cars->links() }}
                </div>
            </div>
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
                                        <a href="#"><img src="{{ asset('img/we-do/service1-img.png') }}"
                                                         alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="{{ asset('img/we-do/service3-img.png') }}"
                                                         alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="{{ asset('img/we-do/service2-img.png') }}"
                                                         alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="{{ asset('img/we-do/service3-img.png') }}"
                                                         alt="JSOFT"></a>
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
        </div>
    </div>
@endsection
