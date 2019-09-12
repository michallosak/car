@extends('layouts.app')

@section('content')
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Login</h2>
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
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Sign Up</h3>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name" class="w-100">
                                                <input id="name" type="text" placeholder="Name"
                                                       name="name" value="{{ old('name') }}"
                                                       class="@error('name') is-invalid @enderror"
                                                       required autocomplete="name"
                                                       autofocus/>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                     </span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="last_name" class="w-100">
                                                <input id="last_name" type="text" placeholder="Last Name"
                                                       name="last_name" value="{{ old('last_name') }}"
                                                       class="@error('last_name') is-invalid @enderror"
                                                       required autocomplete="name"
                                                       autofocus/>
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                     </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="username">
                                    <label for="email" class="w-100">
                                        <input id="last_name" type="email" placeholder="Email"
                                               name="email" value="{{ old('email') }}"
                                               class="@error('email') is-invalid @enderror"
                                               required autocomplete="email"
                                               autofocus/>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                     </span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="username">
                                    <label for="username" class="w-100">
                                        <input id="username" type="text" placeholder="Username"
                                               name="username" value="{{ old('username') }}"
                                               class="@error('username') is-invalid @enderror"
                                               autocomplete="username"
                                               autofocus/>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                     </span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="password">
                                    <label for="password" class="w-100">
                                        <input id="password" type="password" placeholder="Password"
                                               name="password" value="{{ old('password') }}"
                                               class="@error('password') is-invalid @enderror"
                                               required autocomplete="password"
                                               autofocus/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                     </span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="password-confirm">
                                    <label for="password-confirm" class="w-100">
                                        <input id="password-confirm" type="password" placeholder="Password Confirm"
                                               name="password_confirmation" value="{{ old('password_confirmation') }}"
                                               class="@error('password_confirmation') is-invalid @enderror"
                                               required autocomplete="password"
                                               autofocus/>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                     </span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-check-square"></i> Sign Up</button>
                                </div>
                            </form>
                        </div>

                        <div class="create-ac">
                            <p>Have an account? <a href="{{ route('login') }}">Sign In</a></p>
                        </div>
                        <div class="login-menu">
                            <a href="">About</a>
                            <span>|</span>
                            <a href="">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

@endsection
