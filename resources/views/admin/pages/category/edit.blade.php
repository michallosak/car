@extends('layouts.app')
@section('title')
    {{ __('Edit ') . $category->name }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 mt-5">
                <div class="card shadow-lg mt-5">
                    <div class="card-header">
                        {{ __('Edit ') . $category->name }}
                    </div>
                    @include('layouts.admin')
                    <div class="card-body">
                        <form method="post" action="{{ route('category.update', $category->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label for="name" class="w-100">
                                        <input id="name" class="form-control" placeholder="Name category" value="{{ $category->name }}"
                                               name="name"/>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-success w-100">{{ __('Edit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
