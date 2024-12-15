@extends('admin.app')

@section('title', 'Doctors with Scheduled Appointments')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                        <h1 class="font-weight-bold" style="font-size: 2em; color: #007bff;">Doctors</h1>
                        <p class="font-weight-normal" style="font-size: 1.2em;">List of all scheduled </p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Appointments -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center" style="font-size: 1.5em;">Doctors Who Have Scheduled
                                    Appointments</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                @if (empty($doctors->items()))
                                <x-empty-state>{{ 'Doctors' }}</x-empty-state>
                                @else
                                <table class="table table-sm  table-bordered border-primary "
                                style="width: 100%; border: 1px solid #ddd;">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;  word-wrap: break-word; ">#</th>
                                        <th style="text-align: center;  word-wrap: break-word; ">Image</th>
                                        <th style="text-align: center; word-wrap: break-word;">Name</th>
                                        <th style="text-align: center; word-wrap: break-word;">Major</th>
                                        <th style="text-align: center; word-wrap: break-word;">Email</th>
                                        <th style="text-align: center;  word-wrap: break-word;">Count of App.</th>
                                        <th style="text-align: center; width: 40px;  word-wrap: break-word; ">View
                                            Appointments
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: center;">
                                            <img src="{{ asset('uploads/doctors/' . $doctor->image) }}"
                                                alt="doctors" class="img-fluid " height="100" width="120">
                                        </td>
                                        <td style="text-align: center;">{{ $doctor->name }}</td>
                                        <td style="text-align: center;">{{ $doctor->major->title }}</td>
                                        <td style="text-align: center;">{{ $doctor->email }}</td>
                                        <td style="text-align: center;">{{ $doctor->appointments->count() }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('doctors.appointments.show', $doctor->id) }}" class="btn btn-success">View</a>
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
            </div>
        </section>
        <!-- end appointments -->
            {{ $doctors->links() }}
    </div>
    <!-- /.content-wrapper -->


@endsection
