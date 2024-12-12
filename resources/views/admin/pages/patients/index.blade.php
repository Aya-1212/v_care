@extends('admin.app')

@section('title', 'All Patients')


@section('content')

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                        <h1 class="font-weight-bold" style="font-size: 2em; color: #007bff;">Patients</h1>
                        <p class="font-weight-normal" style="font-size: 1.2em;">List of all registered patients</p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Doctors -->
        <section class="content">
            <div class="container-fluid">
                <x-success />
                <x-error />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center" style="font-size: 1.5em;">Patients</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                {{-- @dd($users->) --}}
                                @if (empty($users->items()))
                                    <x-empty-state>{{ 'Patients' }}</x-empty-state>
                                @else
                                    <table class="table table-sm  table-bordered border-primary "
                                        style="table-layout: fixed; width: 100%; border: 1px solid #ddd;">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%; text-align: center; padding: 10px;">#</th>
                                                <th style="width: 20%; text-align: center; padding: 10px;">Name</th>
                                                <th style="width: 25%; text-align: center; padding: 10px;">Email</th>
                                                <th style="width: 10%; text-align: center; padding: 10px;">Delete</th>
                                                <th style="width: 10%; text-align: center; padding: 10px;">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $loop->iteration }}</td>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $user->name }}
                                                    </td>
                                                    <td style="text-align: center; word-wrap: break-word;">
                                                        {{ $user->email }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <form action="{{ route('users.destroy', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-success">Edit</a>
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
                {{ $users->links() }}
            </div>
        </section>
    </div>
@endsection
