@extends('admin.app')

@section('title', 'Edit Doctor')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <x-success />
            <div class="container-fluid">
                <div class="col-8 mx-auto">
                    <h1 class="font-weight-bold text-center" style="font-size: 2em; color: #007bff;">
                        Edit Doctor
                    </h1>
                    <form class="form border p-3" method="POST" action="{{ route('doctors.update', 100) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" value="{{ $doctor->name }}" name="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" value="{{ $doctor->email }}" readonly name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Location</label>
                            <input type="url" name="location" value="{{ $doctor->location }}" class="form-control">
                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="7" class="form-control">{{ $doctor->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Major</label>
                            <select name="major_id">
                                <option value="{{ $doctor->major_id }}" selected>{{ $doctor->major->title }}</option>
                                @foreach ($majors as $major)
                                    <option value="{{ $major->id }}">{{ $major->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="mb-3"><img src="{{ asset('uploads/doctors/' . $doctor->image) }}" alt="major"
                                    class="img-fluid " height="200" width="200"></div>
                            <div class="mb-3">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" value="{{ $doctor->image }}" class="form-control">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Update Doctor" class="form-control text-white bg-success">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection
