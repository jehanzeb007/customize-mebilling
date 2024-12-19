@extends('auth.layout')
@section('title', 'Forgot Password')
@section('content')
    <div class="col-xl-12">
        <div class="auth-form">
            <div class="text-center mb-3">
                <a href="index.html"><img src="{{ asset('admin-assets/images/dev-design-logo.png') }}" alt=""></a>
            </div>
            <h4 class="text-center mb-4">Forgot Password</h4>
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary light btn-block">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
@endsection
