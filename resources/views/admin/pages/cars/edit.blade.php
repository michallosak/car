@extends('layouts.app')
@section('title')
    {{ __('Edit ').$car->model  }}
    @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 mt-5">
                <div class="card shadow-lg mt-5">
                    <div class="card-header">
                        Edit {{ $car->model }}
                    </div>
                    @include('layouts.admin')
                    <div class="card-body">
                        <form method="post" action="{{ route('car.update', $car->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <div class="col-lg-8 pr-1">
                                    <label for="model" class="w-100">
                                        <input id="model" type="text"
                                               placeholder="Model" name="model"
                                               required autofocus autocomplete="model"
                                               class="form-control @error('model') is-invalid @enderror"
                                               value="{{ $car->model }}"/>
                                    </label>
                                    @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 pl-1">
                                    <label for="category" class="w-100">
                                        <select id="category" name="category_id"
                                                required
                                                class="form-control @error('category_id') is-invalid @enderror">
                                            <option>{{ __('Select category') }}</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->category_id }}"></option>
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="w-100">
                                <textarea id="description" placeholder="Description"
                                          required name="description"
                                          class="form-control @error('description') is-invalid @enderror" rows="10">{{ $car->description }}</textarea>
                                </label>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 pr-1">
                                    <div class="row">
                                        <div class="col-lg-7 pr-0">
                                            <label for="rent" class="w-100">
                                                <input id="rent" type="number"
                                                       class="form-control @error('rent') is-invalid @enderror"
                                                       name="rent"
                                                       value="{{ $car->rent }}"
                                                       placeholder="Rent" style="border-top-right-radius: 0; border-bottom-right-radius: 0;"/>
                                            </label>
                                            @error('rent')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-5 pl-0">
                                            <label for="unit" class="w-100">
                                                <input id="unit" type="text" value="{{ __('Day') }}" disabled="" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pl-1">
                                    <label for="quantity" class="w-100">
                                        <input id="quantity" type="number"
                                               class="form-control @error('quantity') is-invalid @enderror"
                                               value="{{ $car->quantity }}"
                                               name="quantity"
                                               placeholder="Quantity"/>
                                    </label>
                                    @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="title-page">
                                {{__('Specific data car')}}
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 pr-1">
                                    <label for="year" class="w-100">
                                        <input id="year" type="number"
                                               placeholder="Year of production"
                                               name="year_production"
                                               value="{{ $car->s->year_production }}"
                                               required
                                               class="form-control @error('year_production') is-invalid @enderror"/>
                                    </label>
                                </div>

                                <div class="col-lg-3 pr-1 pl-1">
                                    <label for="year" class="w-100">
                                        <input id="year" type="number"
                                               placeholder="Engine capacity"
                                               name="engine_capacity"
                                               value="{{ $car->s->engine_capacity }}"
                                               required
                                               class="form-control @error('engine_capacity') is-invalid @enderror"/>
                                    </label>
                                </div>

                                <div class="col-lg-2 pl-1 pr-1">
                                    <label for="fuel" class="w-100">
                                        <select id="fuel" class="form-control @error('fuel') is-invalid @enderror" name="fuel">
                                            <option>{{ $car->s->fuel }}</option>
                                            <option>Petrol</option>
                                            <option>Diesel</option>
                                            <option>LPG</option>
                                            <option>DNG & Hybrid</option>
                                            <option>Electric</option>
                                        </select>
                                    </label>
                                </div>

                                <div class="col-lg-2 pr-1 pl-1">
                                    <label for="power" class="w-100">
                                        <input id="power" type="number"
                                               placeholder="Power"
                                               name="power"
                                               value="{{ $car->s->power }}"
                                               required
                                               class="form-control @error('power') is-invalid @enderror"/>
                                    </label>
                                </div>

                                <div class="col-lg-2 pl-1">
                                    <label for="course" class="w-100">
                                        <input id="course" type="number"
                                               placeholder="Course"
                                               name="course"
                                               value="{{ $car->s->course }}"
                                               required
                                               class="form-control @error('course') is-invalid @enderror"/>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 pr-1">
                                    <label for="body_type" class="w-100">
                                        <select id="body_type" class="form-control @error('body_type') is-invalid @enderror"
                                                required name="body_type">
                                            <option>{{ $car->s->body_type }}</option>
                                            <option>Cabriolet</option>
                                            <option>Sedan</option>
                                            <option>Coupe</option>
                                            <option>Pickup</option>
                                            <option>Hatchback</option>
                                            <option>Combo</option>
                                            <option>Off-road</option>
                                            <option>Minibus</option>
                                            <option>Minivan</option>
                                            <option>SUV</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-lg-3 pr-1 pl-1">
                                    <label for="course" class="w-100">
                                        <input id="color" type="text"
                                               placeholder="Color"
                                               name="color"
                                               value="{{ $car->s->color }}"
                                               required
                                               class="form-control @error('color') is-invalid @enderror"/>
                                    </label>
                                </div>
                                <div class="col-lg-3 pr-1 pl-1">
                                    <label for="transmission" class="w-100">
                                        <select id="transmission" class="form-control @error('transmission') is-invalid @enderror"
                                                required name="transmission">
                                            <option>{{ $car->s->transmission }}</option>
                                            <option>Select transmission</option>
                                            <option>Manual</option>
                                            <option>Automatic</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-lg-3 pl-1">
                                    <label for="driver" class="w-100">
                                        <select id="driver" class="form-control @error('driver') is-invalid @enderror"
                                                required name="driver">
                                            <option>{{ $car->s->driver }}</option>
                                            <option>Select driver</option>
                                            <option>Left</option>
                                            <option>Right</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="country" class="w-100">
                                        <input id="country" type="text"
                                               placeholder="Country"
                                               name="country"
                                               value="{{ $car->s->country }}"
                                               required
                                               class="form-control @error('country') is-invalid @enderror"/>
                                    </label>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                    <button type="submit" class="btn btn-success">
                                        {{__('Edit')}}
                                    </button>

                            </div>
                        </form>
                        <div class="title-page">{{__('Photos - ' . $car->model)}}}</div>
                        <div class="form-group row" style="margin: 0 -4px">
                            @foreach($car->photos as $photo)
                                <div class="col-lg-2 pr-1 pl-1">
                                    <div class="photo-edit">
                                        <form method="post" action="{{ route('photo.destroy', $photo->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="trash-photo">X</button>
                                        </form>
                                        <img src="{{ asset('image/'.$photo->src) }}" alt="{{ $photo->src }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="title-page">{{ __('Add photo - ') . $car->model }}</div>
                        <form method="post" action="{{ route('photo.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="car_id" value="{{ $car->id }}"/>
                                <div class="col-lg-10">
                                    <input required type="file" class="form-control" name="images[]" multiple>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-success w-100"> {{__('Add')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
