@extends('auth.layout')
@section('title', 'Login')

@section('content')
    <div class="col-xl-12">
        <div class="auth-form">
            <div class="text-center mb-3">
                <a href="index.html"><img src="{{ asset('assets/images/dev-design-logo.png') }}" alt=""></a>
            </div>
            <h4 class="text-center mb-4">Sign in your account</h4>
            <form action="{{ route('auth.login.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="adminemail" class="mb-1 form-label"> Email</label>
                    <input type="email" name="email" id="adminemail" class="form-control" value="{{ old('email') }}">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-4 position-relative">
                    <label for="adminpassword" class="mb-1 form-label">Password</label>
                    <div class="position-relative">
                        <input type="password" name="password" id="userpassword" class="form-control">
                        <span class="show-pass eye">
                            <i class="fa fa-eye-slash"></i>
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-row d-flex justify-content-between mt-4 mb-2">
                    <div class="form-group">
                        <div class="form-check custom-checkbox ms-1">
                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1" name="remember">
                            <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary light btn-block">Sign Me In</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
            </div>
        </div>
    </div>
@endsection
