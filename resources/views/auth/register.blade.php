@extends('site.app')

@section('title', 'Register')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">register</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" action="{{ route('auth.store') }}" method="POST">
            @csrf
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                        required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email"
                        required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="password">Password</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="password"
                        required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="password_confirm">Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        value="{{ old('password_confirmation') }}" id="password_confirm" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create account</button>
        </form>
        <div class="d-flex justify-content-center gap-2">
            <span>already have an account?</span><a class="link" href="{{ route('login') }}"> login</a>
        </div>
    </div>
@endsection
