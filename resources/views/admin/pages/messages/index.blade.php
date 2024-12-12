@extends('admin.app')

@section('title', 'All Messages')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                        <h1 class="font-weight-bold" style="font-size: 2em; color: #007bff;">Messages</h1>
                        <p class="font-weight-normal" style="font-size: 1.2em;">All messages sent by users</p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Messages -->
        <section class="content">
            <div class="container-fluid">
                <div class="container-fluid">
                    <x-success />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title text-center" style="font-size: 1.5em;">Messages</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    @if (empty($messages->items()))
                                        <x-empty-state />
                                    @else
                                        <table class="table table-sm" style="width: 100%; border: 1px solid #ddd;">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Id</th>
                                                    <th style="text-align: center;">Name</th>
                                                    <th style="text-align: center;">Email</th>
                                                    <th style="text-align: center;">Subject</th>
                                                    <th style="text-align: center;">Content</th>
                                                    <th style="text-align: center; width: 40px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($messages as $message)
                                                    <tr>
                                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                                        <td style="text-align: center;">{{ $message->name }}</td>
                                                        <td style="text-align: center;">{{ $message->email }}</td>
                                                        <td style="text-align: center;">{{ $message->subject }}</td>
                                                        <td style="text-align: center;">{{ $message->content }}</td>
                                                        <td style="text-align: center;">
                                                            <form action="{{ route('messages.destroy', $message->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
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
        <!-- end messages -->

    </div>
@endsection
