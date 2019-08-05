@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Register</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area End -->
    <!-- Login Account Area Start -->
    <div class="login-account-area section-padding">
        <div class="container">
            <div class="row">
                <div class="account-details">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <form method="post" class="login-form" action="{{ route('register') }}">
                            @csrf
                            <h1 class="heading-title">Register your account</h1>
                            <p class="form-row">
                                <label>Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>
                            <p class="lost-password form-group"><a rel="nofollow" href="{{ route('password.request') }}">Forgot your password?</a></p>
                            {{-- <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label> --}}

                            <div class="submit">
                                <button type="submit" class="btn btn-default" style="padding:3px 18px">
                                    <span><i class="fa fa-lock"></i> Sign In</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="login-form">
                            <h1 class="heading-title" style="text-align:center">Continue as Guest</h1>
                            <div class="submit" style="text-align:center">
                                <a class="btn btn-default" href="{{ route('guestCheckout.index')}}" role="button" style="padding:3px 18px">
                                    <span><i class="fa fa-user left"></i> Guest</span>
                                </a>
                            </div>
                            <br><p style="text-align:center">or</p>
                            <h1 class="heading-title" style="text-align:center">Create an account</h1>
                            <div class="submit"style="text-align:center">
                                <a class="btn btn-default" href="{{ route('register')}}" role="button" style="padding:3px 18px">
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        Register
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Account Area End -->
@endsection
