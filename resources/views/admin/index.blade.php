@extends('layouts.app')

@section('title')
    {{ __('Admin profile') }}
@endsection
@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-10 mt-5">
            <div class="card shadow-lg mt-5">
                <div class="card-header">
                    {{ Auth::user()->name . ' ' . Auth::user()->last_name }}
                </div>
                    <!-- nav admin account -->
                    @include('layouts.admin')
                    <!-- end nav admin account -->
            </div>
        </div>
    </div>
</div>
@endsection
