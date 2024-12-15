@extends('site.app')
@section('title','History')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">history</li>
    </ol>
</nav>

@if (empty($appointments->items()))
<x-empty-state/>
@else
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">major</th>
            <th scope="col">location</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($appointments as $appointment)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $appointment->appointment_time	 }}</td>
        <td class="d-flex align-items-center gap-2"><img src="{{ asset("uploads/doctors/".$appointment->doctor->image) }}" alt="" width="50"
                height="50" class="rounded-circle">
            <a href="{{ route('doctors.profile', $appointment->doctor->id) }}">{{ $appointment->doctor->name }}</a>
        </td>
        <td>{{ $appointment->doctor->major->title }}</td>
        <td><a href="{{ $appointment->doctor->location }}" target="_blank">location</a></td>
        <td>{{ $appointment->status }}</td>
    </tr>
      @endforeach
    </tbody>
  </table>    
@endif

{{ $appointments->links() }}
@endsection
    
