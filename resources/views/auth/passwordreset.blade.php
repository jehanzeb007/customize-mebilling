@extends('auth.layout')
@section('title', 'Reset Password')
@section('content')
    <div class="col-xl-12">
        <div class="auth-form">
            <div class="text-center mb-3">
                <a href="index.html"><img src="{{ asset('assets/images/dev-design-logo.png') }}" alt=""></a>
            </div>
            <h4 class="text-center mb-4">Reset Password</h4>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}" required>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary light btn-block">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
@endsection
