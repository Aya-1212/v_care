@extends('site.app')

@section('title', 'Docotors')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">doctors</li>
        </ol>
    </nav>
    <div class="doctors-grid">
        @forelse ($doctors as $doctor)
            <div class="card p-2" style="width: 18rem;">
                <a href="{{ route('doctors.profile', $doctor->id) }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                    <img src="{{ asset('uploads/doctors/' . $doctor->image) }}"
                        class="card-img-top rounded-circle card-image-circle" alt="major"></a>
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $doctor->name }}</h4>
                    <h6 class="card-title fw-bold text-center">{{ $doctor->major->title }}</h6>
                    <a href="{{ route('doctors.appointments', $doctor->id) }}"
                        class="btn btn-outline-primary card-button">Book an
                        appointment</a>
                </div>
            </div>
        @empty
            <div class="container">
                <div class="container-fluid bg-light py-5">
                    <div class="col-md-6 m-auto text-center">
                        <section class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h4>No Doctors Until Now</h4>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </section>
                    </div>
                </div>
            </div>
        @endforelse

        {{ $doctors->links() }}

    </div>
@endsection

@push('footer-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
