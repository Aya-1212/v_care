@extends('site.app')

@section('title', 'Majors')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">majors</li>
        </ol>
    </nav>
    {{-- <div class="row">
        <div class="col-12 text-center py-5">
            <a href="{{ route('majors.create') }}" class="btn btn-success">Add Major</a>
        </div>
    </div> --}}
    <div class="majors-grid">
        @forelse ($majors as $major)
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('uploads/majors/' . $major->image) }}"
                    class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $major->title }}</h4>
                    <a href="{{ route('majors.doctors', $major->id) }}" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
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
                                        <h4>No Majors Until Now</h4>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </section>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    <div class="py-2">{{ $majors->links() }}</div>
@endsection
