@extends('admin.app')

@section('title', 'Add Patient')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-8 mx-auto">
                <x-success/>
                <h1 class="font-weight-bold text-center" style="font-size: 2em; color: #007bff;">
                    Add Patient
                </h1>
                <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                    <form class="form" action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-items">
                            <div class="mb-3">
                                <label class="form-label required-label" for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label required-label" for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label required-label" for="password">Password</label>
                                <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label required-label" for="password_confirm">Password Confirmation</label>
                                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" id="password_confirm" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Create account</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection




