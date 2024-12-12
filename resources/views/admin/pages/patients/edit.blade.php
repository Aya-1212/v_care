@extends('admin.app')

@section('title', 'Edit Patient')


@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="col-8 mx-auto">
                    <h1 class="font-weight-bold text-center" style="font-size: 2em; color: #007bff;">
                        Edit Patient
                    </h1>
                    <form class="form border p-3" method="POST" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-items">
                            <div class="mb-3">
                                <label class="form-label required-label" for="name">Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                    id="name" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label required-label" for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                    id="email" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label required-label" for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" >
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label required-label" for="password_confirm">Password
                                    Confirmation</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password_confirm" >
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Update Patient" class="form-control text-white bg-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection
