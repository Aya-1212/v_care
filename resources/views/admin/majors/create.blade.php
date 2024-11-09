@extends('site.app')

@section('title', 'Majors')

@section('content')
    <div class="container">
        <x-error />
        <x-success />
        <div class="col-12">
            <form method="POST" action="{{ route('majors.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Major Name</label>
                    <input type="text" value="{{ old('title') }}" name="title" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input type="file" value="{{ old('image') }}" name="image" class="form-control" id="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
