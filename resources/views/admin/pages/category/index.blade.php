@extends('layouts.app')
@section('title')
    {{ __('Added car') }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 mt-5">
                <div class="card shadow-lg mt-5">
                    <div class="card-header">
                        Added category
                    </div>
                    @include('layouts.admin')
                    <div class="card-body">
                        <ul>
                            @foreach($categories as $category)
                                <li>{{$category->id}} | {{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
