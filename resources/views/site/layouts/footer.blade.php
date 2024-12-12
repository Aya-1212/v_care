<footer class="container-fluid bg-blue text-white py-3">
    <div class="row gap-2">

        <div class="col-sm order-sm-1">
            <h1 class="h1">About Us</h1>
            <p>"At VCare, we are committed to providing an innovative platform that makes it easier for patients to communicate with the best specialist doctors.
                We strive to offer an easy and seamless appointment booking experience,
                where users can choose the right doctor, book appointments, and share their ratings to support others.
                Our goal is to improve each patient's health care experience. "</p>
        </div>
        <div class="col-sm order-sm-2">
            <h1 class="h1">Links</h1>
            <div class="links d-flex gap-2 flex-wrap">
                <a href="{{ route('home') }}" class="link text-white">Home</a>
                <a href="{{ route('majors.index') }}" class="link text-white">Majors</a>
                <a href="./doctors/index.html" class="link text-white">Doctors</a>
                @guest
                    <a href="{{ route('login') }}" class="link text-white">Login</a>
                    <a href="{{ route('auth.register') }}" class="link text-white">Register</a>
                @endguest
                <a href="{{ route('contact.index') }}" class="link text-white">Contact</a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
    integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@stack('footer-scripts')
