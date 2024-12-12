@extends('admin.app')

@section('title', 'Add Doctor')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <x-success />
            <div class="container-fluid">
                <div class="col-8 mx-auto">
                    <h1 class="font-weight-bold text-center" style="font-size: 2em; color: #007bff;">
                        Add Doctor
                    </h1>
                    <form class="form border p-3" method="POST" action="{{ route('doctors.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Location</label>
                            <input type="url" name="location" value="{{ old('location') }}" class="form-control">
                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="7" class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="major_id">Major</label>
                            <select name="major_id">
                                @foreach ($majors as $major)
                                    <option value="{{ $major->id }}">{{ $major->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Add Doctor" class="form-control text-white bg-success">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection
