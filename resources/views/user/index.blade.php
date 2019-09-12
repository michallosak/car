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
    <div class="card mt-5">
        <div class="card-header">
            {{ Auth::user()->name . ' ' . Auth::user()->last_name }}
        </div>
        <div class="card-body">
            <div class="acc-block">
                Name & Last name <span>{{ Auth::user()->name . ' ' . Auth::user()->last_name }}</span> <a href="" title="{{__('Edit name')}}">{{__('Edit')}}</a>
            </div>
            <div class="acc-block">
                Email <span>{{ Auth::user()->email}}</span> <a href="{{ route('edit_email_v') }}" title="{{__('Edit email')}}">{{__('Edit')}}</a>
            </div>
            <div class="acc-block">
                Created account <span>{{ Auth::user()->created_at}}</span>
            </div>
            <div class="acc-block">
                Activated account:
                @if(Auth::user()->is_activated != 1)
                    <span class="color-r"><strong>{{__('No')}}</strong></span>
                @else
                    <span class="color-g"><strong>{{__('Yes')}}</strong></span>
                @endif
            </div>
            <div class="acc-block">
                <a href="" title="Edit password" class="color-r">{{__('Edit password')}}</a>
            </div>
        </div>
    </div>
</div>
    @endsection
