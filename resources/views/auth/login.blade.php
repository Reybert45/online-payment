@extends('layouts.auth')

@section('contents')
    <h2 class="fs-6 text-body-emphasis">Welcome to Online Payment!</h2>
    <div class="mb-5 text-body-secondary">Please sign in to continue to the system.</div>
    <form class="mb-5" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3 position-relative"> 
            <i class="fs-3 left-0 m-2.5 ph ph-user-circle position-absolute text-body-secondary top-0"></i> 
            <input type="text" name="email" class="form-control ps-10" value="{{ old('email') }}" placeholder="Email Address" /> 
            @error('email')
                <span role="alert" style="color: white;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-5 position-relative">
            <i class="fs-3 left-0 m-2.5 ph ph-keyhole position-absolute text-body-secondary top-0"></i> 
            <input type="password" name="password" class="form-control ps-10" placeholder="Password" /> 
            @error('password')
                <span role="alert" style="color: white;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> 
        <button type="submit" class="bg-opacity-50 btn btn-dark w-100">Sign In</button>
    </form>
    <div class="fs-7 text-center">
        <a href="register.html" class="d-block link-muted mb-2">Register for a new account</a> 
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="d-block link-muted">{{ __('Forgot Your Password?') }}</a>
        @endif
    </div>
@endsection
