@extends('admin.app')

@section('title', 'All Doctors')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                        <h1 class="font-weight-bold" style="font-size: 2em; color: #007bff;">Doctors</h1>
                        <p class="font-weight-normal" style="font-size: 1.2em;">List of all registered doctors</p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <x-success />
        <x-error />
        <!-- Doctors -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center" style="font-size: 1.5em;">Doctors</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                @if (empty($doctors->items()))
                                    <x-empty-state>{{ 'Doctors' }}</x-empty-state>
                                @else
                                    <table class="table table-sm table-bordered border-primary "
                                        style="width: 100%; border: 1px solid #ddd;">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%; text-align: center; padding: 10px;">Id</th>
                                                <th style="width: 30%; text-align: center; padding: 10px;">Image</th>
                                                <th style="width: 20%; text-align: center; padding: 10px;">Name</th>
                                                <th style="width: 20%; text-align: center; padding: 10px;">Email</th>
                                                <th style="width: 30%; text-align: center; padding: 10px;">Description</th>
                                                <th style="width: 30%; text-align: center; padding: 10px;">Location</th>
                                                <th style="width: 30%; text-align: center; padding: 10px;">Major Name</th>
                                                <th style="width: 30%; text-align: center; padding: 10px;">Delete</th>
                                                <th style="width: 20%; text-align: center; padding: 10px;">Edit</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($doctors as $doctor)
                                                <tr>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $loop->iteration }}</td>
                                                    <td style="text-align: center;">
                                                        <img src="{{ asset('uploads/doctors/' . $doctor->image) }}"
                                                            alt="doctors" class="img-fluid " height="100" width="120">
                                                    </td>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $doctor->name }}
                                                    </td>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $doctor->email }}
                                                    </td>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $doctor->description }}</td>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $doctor->location }}</td>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $doctor->major->title }}</td>
                                                    <td style="text-align: center;">
                                                        <form action="{{ route('doctors.destroy', $doctor->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="{{ route('doctors.edit', $doctor->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                {{ $doctors->links() }}
            </div>
        </section>
        <!-- end doctors -->

    </div>
@endsection
