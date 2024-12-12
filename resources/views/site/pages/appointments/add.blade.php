@extends('site.app')

@section('title', 'Make an Appointment')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('home') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('doctors.all') }}">doctors</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $doctor->name }}
            </li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 details-card doctor-details">
        <div class="details d-flex gap-2 align-items-center">
            <img src="{{ asset('uploads/doctors/' . $doctor->image) }}" alt="doctor" class="img-fluid rounded-circle"
                height="150" width="150" />
            <div class="details-info d-flex flex-column gap-3">
                <h4 class="card-title fw-bold">{{ $doctor->name }}</h4>
                <h5 class="card-title fw-bold">Major: {{ $doctor->major->title }}</h5>
                <h6 class="card-title fw-bold">
                    {{ $doctor->description }}
                </h6>
            </div>
        </div>
        <hr />
        <form class="form" action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control"
                        id="name" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" />
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control" id="email" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
            <button type="submit" class="btn btn-primary">
                Confirm Booking
            </button>
        </form>
    </div>
@endsection

@push('footer-scripts')
    <script>
        const stars = document.querySelectorAll(".star");

        stars.forEach((star, index) => {
            star.addEventListener("click", () => {
                const isActive = star.classList.contains("active");
                if (isActive) {
                    star.classList.remove("active");
                } else {
                    star.classList.add("active");
                }
                for (let i = 0; i < index; i++) {
                    stars[i].classList.add("active");
                }
                for (let i = index + 1; i < stars.length; i++) {
                    stars[i].classList.remove("active");
                }
            });
        });
    </script>
@endpush
