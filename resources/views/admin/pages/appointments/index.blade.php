@extends('admin.app')

@section('title', 'All Appointments of this Doctor')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 text-center">
          <h1 class="font-weight-bold" style="font-size: 2em; color: #007bff;">Appointments</h1>
          <p class="font-weight-normal" style="font-size: 1.2em;">List of all scheduled appointments</p>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
     <x-success/>
  <!-- Appointments -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-center" style="font-size: 1.5em;">Appointments</h3>
            </div>
             
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm  table-bordered border-primary " style="width: 100%; border: 1px solid #ddd;">
                <thead>
                  <tr>
                    <th style="text-align: center;  word-wrap: break-word; ">#</th>
                    <th style="text-align: center;  word-wrap: break-word;">Patient Name</th>
                    <th style="text-align: center;  word-wrap: break-word;">Patient Email</th>
                    <th style="text-align: center;  word-wrap: break-word;">Patient Phone</th>
                    <th style="text-align: center;  word-wrap: break-word; ">Time</th>
                    <th style="text-align: center; word-wrap: break-word;">Status</th>
                    <th style="text-align: center; width: 40px;  word-wrap: break-word; ">Edit</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                      <tr>
                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                    <td style="text-align: center;">{{ $appointment->name }}</td>
            <td style="text-align: center;">{{ $appointment->email }}</td>
                    <td style="text-align: center;">{{ $appointment->phone }}</td>
                    <td style="text-align: center;">{{ $appointment->appointment_time }}</td>
                    <td style="text-align: center;">{{ $appointment->status }}</td>
                    <td style="text-align: center;">
                      <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-success">Edit</a>
                    </td>
                  </tr>  
                    @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  {{ $appointments->links() }}
  <!-- end appointments -->
</div>
<!-- /.content-wrapper -->

@endsection
