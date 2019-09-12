@extends('layouts.app')
@section('title', 'Activate account')
@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Activate account</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <form method="POST" action="{{ route('activate') }}">
                                @csrf
                                <div class="username">
                                    <label for="key" class="w-100">
                                        <input id="key" type="text" placeholder="Activation key" class="@error('key') is-invalid @enderror" name="key" value="{{ old('key') }}" required autocomplete="key" minlength="15" maxlength="15" autofocus>

                                        @error('key')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-sign-in"></i> Activate</button>
                                </div>
                            </form>
                        </div>
                        <div class="login-menu">
                            <a href="about.html">About</a>
                            <span>|</span>
                            <a href="contact.html">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
@endsection
