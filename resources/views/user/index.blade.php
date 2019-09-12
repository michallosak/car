@extends('layouts.app')
@section('title')
    {{ Auth::user()->name . ' ' . Auth::user()->last_name }}
    @endsection

@section('content')
<div class="container" style="margin-top: 100px">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('profile_user') }}">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('rented_cars_u') }}">Rented cars</a>
        </li>
    </ul>
</div>
    @endsection
