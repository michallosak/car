@extends('layouts.app')

@section('content')
    <section id="slider-area">
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form action="{{ route('search') }}" method="get">

                                <!--== Model Car ==-->
                                <div class="pick-up-date book-item">
                                    <h4>MODEL CAR:</h4>
                                    <input id="model" placeholder="Car model" name="model"/>

                                </div>
                                <!--== Model Car ==-->

                                <!--== Category Choose ==-->
                                <div class="choose-car-type book-item">
                                    <h4>CHOOSE CAR TYPE:</h4>
                                    <select class="custom-select" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{$category->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <!--== Category Choose ==-->

                                <div class="book-button text-center">
                                    <button type="submit" class="book-now-btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h1>BOOK A CAR TODAY!</h1>
                                    <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi aliquid debitis optio praesentium, voluptate repellat accusantium deserunt eius.</p>
                                <div class="about-btn">
                                    <a href="#">Book a Car</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe src="https://player.vimeo.com/video/121982328?title=0&byline=0&portrait=0"></iframe>
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Choose your Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">
                        <!-- Choose Area Tab Menu -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">popular Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">newest cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Our Office</a>
                            </li>
                        </ul>
                        <!-- Choose Area Tab Menu -->

                        <!-- Choose Area Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Popular Cars Tab Start -->
                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Popular Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="popucar-menu text-center">
                                        <a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".con">Conver</a>
                                        <a href="#" data-filter=".hat">Truck</a>
                                        <a href="#" data-filter=".mpv">MPV</a>
                                        <a href="#" data-filter=".sedan">Sedan</a>
                                        <a href="#" data-filter=".suv">SUV</a>
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- PopularCars Tab Content Start -->
                                    <div class="row popular-car-gird">
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-1.jpg') }}">
                                                        <img src="{{ asset('img/car/car-1.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat sedan">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-2.jpg') }}">
                                                        <img src="{{ asset('img/car/car-2.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 suv con mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-3.jpg') }}">
                                                        <img src="{{ asset('img/car/car-3.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con hat">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-4.jpg') }}">
                                                        <img src="{{ asset('img/car/car-4.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con sedan mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-5.jpg') }}">
                                                        <img src="{{ asset('img/car/car-5.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-5.jpg') }}">
                                                        <img src="{{ asset('img/car/car-5.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
                                    </div>
                                    <!-- PopularCars Tab Content End -->
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->

                            <!-- Newest Cars Tab Start -->
                            <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Newest Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="newcar-menu text-center">
                                        <a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".toyota">toyota</a>
                                        <a href="#" data-filter=".bmw">bmw</a>
                                        <a href="#" data-filter=".audi">audi</a>
                                        <a href="#" data-filter=".tata">Tata</a>
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- NewestCars Tab Content Start -->
                                    <div class="row newest-car-gird">
                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 tata audi">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-6.jpg') }}">
                                                        <img src="{{ asset('img/car/car-6.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->

                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 bmw tata toyota">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-5.jpg') }}">
                                                        <img src="{{ asset('img/car/car-5.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->

                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 bmw">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ asset('img/car/car-4.jpg') }}">
                                                        <img src="{{ asset('img/car/car-4.jpg') }}" alt="JSOFT">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->
                                    </div>
                                    <!-- NewestCars Tab Content End -->
                                </div>
                                <!-- Newest Cars Content Wrapper End -->
                            </div>
                            <!-- Newest Cars Tab End -->

                            <!-- Office Map Tab -->
                            <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="map-area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6538067244583!2d90.37092511435942!3d23.79533919297639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cce3251ab1%3A0x7a2aa979862a9643!2sJSoft!5e0!3m2!1sen!2sbd!4v1516771096779"></iframe>
                                </div>
                            </div>
                            <!-- Office Map Tab -->
                        </div>
                        <!-- Choose Area Tab content -->
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->



@endsection
