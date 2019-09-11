@extends('layouts.app')
@section('title')
    {{ __('Add category') }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 mt-5">
                <div class="card shadow-lg mt-5">
                    <div class="card-header">
                        Add category
                    </div>
                    @include('layouts.admin')
                    <div class="card-body">
                        <form method="post" action="{{ route('category.store') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label for="name" class="w-100">
                                        <input id="name" class="form-control" placeholder="Name category" value="{{ old('name') }}"
                                               name="name"/>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-success w-100">{{ __('ADD') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
