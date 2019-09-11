@extends('layouts.app')
@section('title')
    {{ $car->model }}
    @endsection

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="photo">
                            <img class="w-100" src="{{ asset('img/car/car-1.jpg') }}" alt="{{ $car->model }}">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="display-table-cell">
                            <div class="car-list-info">
                                <h2><a href="#">{{ $car->model }}</a></h2>
                                <h5>{{ $car->rent }}$ Rent /per a {{ $car->unit }}</h5>
                                <p>{{ Str::limit($car->description, 200) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card mt-5">
                        <div class="card-header">
                            {{__('Rent ')}} {{ $car->model }}
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('rent.store') }}">
                                @csrf
                                <div class="title-page">
                                    {{__('Date of rent')}}
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6 pr-1">
                                       <div class="row">
                                           <label for="from" class="col-sm-4 pr-1 col-form-label w-100">From</label>
                                           <div class="col-sm-8 pl-1">
                                               <input type="date" class="form-control" id="from" name="from" value="">
                                           </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 pl-1">
                                        <div class="row">
                                            <label for="to" class="col-sm-3 pr-1 col-form-label">To</label>
                                            <div class="col-sm-9 pl-1">
                                                <input type="date" class="form-control" id="to" name="to" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{ $car->rent }}" name="fee"/>
                                <input type="hidden" value="{{ $car->id }}" name="car_id"/>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mt-2">{{ __('Rent') }}</button>
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
