@extends('site.app')

@section('title', 'Profile')

@section('content')
    <div class="container my-2">
        <div class="d-flex flex-column gap-3 details-card doctor-details">
            <div class="details d-flex gap-2 align-items-center">
                <img src="{{ asset('uploads/doctors/' . $doctor->image) }}" alt="doctor" class="img-fluid rounded-circle"
                    height="150" width="150" />
                <div class="details-info d-flex flex-column gap-3">
                    <h4 class="card-title fw-bold">{{ $doctor->name }}</h4>
                    <h5 class="card-title fw-bold">
                        {{ $doctor->major->title }}
                    </h5>
                </div>
            </div>
            <hr />
            <h6 class="card-title fw-bold">
                {{ $doctor->description }}
            </h6>
            <div class="details d-flex gap-2 align-items-center">
                <h5><a href="{{ $doctor->location }}" target="_blank">Location of the clinic</a></h5>
            </div>
            <a href="{{ route('doctors.appointments', $doctor->id) }}" class="btn btn-outline-primary card-button">Book an
                appointment
            </a>
        </div>
    </div>
@endsection
