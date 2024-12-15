@extends('admin.app')

@section('title', 'Edit Appointment')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-8 mx-auto">
                <h1 class="font-weight-bold text-center" style="font-size: 2em; color: #007bff;">
                    Edit Appointment
                </h1>
                <form class="form border p-3" method="POST" action="{{ route('appointments.update', $appointment->id) }}">
                    @csrf
                    @method('PUT')
                <div class="mb-3">
                        <label for="MyStatus">Status</label>
                        <br>
                        <select name="status" id="MyStatus">
                                <option value="{{ $appointment->status }}" selected>{{ $appointment->status }}</option>
                                <option value="pending">Pending</option>
                                <option value="approved">Approved</option>
                                <option value="rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Update" class="form-control text-white bg-success">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


@endsection
