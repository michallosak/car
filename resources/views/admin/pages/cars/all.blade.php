@extends('layouts.app')
@section('title')
    {{ __('Added cars') }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 mt-5">
                <div class="card shadow-lg mt-5">
                    <div class="card-header">
                        Add car
                    </div>
                    @include('layouts.admin')

                        <div class="title-page">
                            {{__('Added cars')}} ({{ $cars->count() }})
                        </div>
                        <div class="row">
                            @foreach($cars as $car)
                                <div class="col-lg-4 col-md-6 con suv mpv">
                                    <div class="single-popular-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="{{ asset('img/car/car-1.jpg') }}">
                                                <img src="https://f1.media.brightcove.com/8/1078702682/1078702682_6004950245001_6004956161001-vs.jpg?pubId=1078702682&videoId=6004956161001" alt="{{ $car->model }}">
                                            </a>
                                        </div>

                                        <div class="p-car-content">
                                            <h3>
                                                <a href="{{ route('car', ['id' => $car->id, 'title' => $car->model]) }}" title="{{ $car->model }}">{{ $car->model }}</a>
                                                <span class="price"><i class="fa fa-tag"></i> ${{ $car->rent }}/Day</span>
                                            </h3>

                                            <h5>{{ $car->s->body_type }}</h5>

                                            <div class="p-car-feature">
                                                <span>{{ $car->s->year_production }}</span>
                                                <span>{{ $car->s->transmission }}</span>
                                                <span>{{ $car->s->power }} {{ __('KM') }}</span>
                                                <span>{{ $car->quantity }}</span>
                                            </div>
                                            <div class="mt-2">
                                                <a href="{{ route('car_edit', ['id' => $car->id]) }}" title="Edit">{{ __('Edit') }}</a>
                                                <form method="post" action="{{ route('car.destroy', ['id' => $car->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn-delete-car">{{__('DELETE')}}</button>
                                                </form>
                                            </div>
                                            @if($car->status === 404)
                                                <div class="error-text">inaccessible</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
