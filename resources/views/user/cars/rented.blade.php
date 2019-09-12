@extends('layouts.app')

@section('title', 'Rental cars')
@section('content')
    <div class="container-fluid" style="margin-top: 100px">
        <div class="row">
            <div class="col-lg-8">
                <div class="display-table">
                    <div class="row">
                        @foreach($rents as $rent)
                            <div class="col-lg-4 mb-3">
                                <div class="photo">
                                    <img class="w-100" src="{{ asset('img/car/car-1.jpg') }}" alt="{{ $rent->car['model'] }}">
                                </div>

                            </div>
                            <div class="col-lg-8">
                                <div class="display-table-cell">
                                    <div class="car-list-info">
                                        <h2><a href="#">{{ $rent->car['model'] }}</a></h2>
                                        <h5>{{ $rent->price }} $ /per a {{ $rent->day }} @if($rent->day > 1) {{ __('Days')  }} @else {{ __('Day') }} @endif</h5>
                                        <p>{{ Str::limit($rent->car['description'], 100) }}</p>
                                        <ul class="car-info-list">
                                            Rent from: {{ $rent->from }} to: {{ $rent->to }}
                                        </ul>
                                        <ul class="car-info-list">
                                            <a href="" title="Return the car">Return the car</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $rents->links() }}
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
                                        <a href="#"><img src="{{ asset('img/we-do/service1-img.png') }}" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="{{ asset('img/we-do/service3-img.png') }}" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="{{ asset('img/we-do/service2-img.png') }}" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="{{ asset('img/we-do/service3-img.png') }}" alt="JSOFT"></a>
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
