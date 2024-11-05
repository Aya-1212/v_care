@extends('site.app')

@section('title',"Contact")

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">contact</li>
    </ol>
</nav>
<div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
    <form class="form" novalidate method="POST" action="{{ route('contact.store')}}" >
        @csrf
        <div class="form-items">
            @if (isset($_SESSION['success']))
                    <div class="alert alert-success">{{ $_SESSION['success']}}</div>   
            @endif
            <div class="mb-3">
                <label class="form-label required-label" for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="subject">subject</label>
                <input type="text" name="subject" class="form-control" id="subject" required>
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="message">message</label>
                <textarea class="form-control" name="content" id="message" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection
    
