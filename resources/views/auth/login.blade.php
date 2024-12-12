@extends('site.app')

@section('title', 'Login')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">login</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
        <form class="form" method="POST" action="{{ route('auth.submit.login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email"
                    required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="password">password</label>
                <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="password"
                    required >
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
            <span>don't have an account?</span><a class="link" href="{{ route('auth.register') }}">create account</a>
        </div>
    </div>
@endsection
