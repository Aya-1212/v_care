<nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <img src="{{ asset('site/images/logo.png') }}" alt="Logo" style="width: 35px; height: 35px;">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{ route('home') }}">VCare</a>
        </div>
        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('home') }}">Home</a>
                <a type="button" class="btn btn-outline-light navigation--button"
                    href="{{ route('majors.all') }}">majors</a>
                <a type="button" class="btn btn-outline-light navigation--button"
                    href="{{ route('doctors.all') }}">Doctors</a>
                @guest
                    <a type="button" class="btn btn-outline-light navigation--button"
                        href="{{ route('login') }}">login</a>
                    <a type="button" class="btn btn-outline-light navigation--button"
                        href="{{ route('auth.register') }}">Register</a>
                @endguest
                @auth
                    <a type="button" class="btn btn-outline-light navigation--button"
                        href="{{ route('appointments.index') }}">History</a>
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
