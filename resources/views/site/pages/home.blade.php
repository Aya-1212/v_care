@extends('site.app')

@section('title', 'Home')

@push('card details')
    <div class="container-fluid bg-blue text-white pt-3">
        <div class="container pb-5">
            <div class="row gap-2">
                <div class="col-sm order-sm-2">
                    <img src="{{ asset('site/images/banner.jpg') }}" class="img-fluid banner-img banner-img" alt="banner-image"
                        height="200">
                </div>
                <div class="col-sm order-sm-1">
                    <h1 class="h1">Welcome to VCare!</h1>
                    <p>
                        Welcome to VCare! We offer you an excellent experience to book appointments with the best specialist
                        doctors.
                        Choose the doctor that suits your needs, book your appointment easily, and share your ratings to
                        help others choose the best.
                        We're here to support you every step !
                    </p>
                </div>
            </div>
        </div>
    </div>
@endpush

@section('content')
    <h2 class="h1 fw-bold text-center my-4">majors</h2>
    <div class="d-flex flex-wrap gap-4 justify-content-center">
        @forelse ($majors as $major)
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('uploads/majors/' . $major->image) }}"
                    class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $major->title }}</h4>
                    <a href="{{ route('majors.doctors', $major->id) }}" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
        @empty
            <h3>NO majors yet</h3>
        @endforelse
    </div>


    <h2 class="h1 fw-bold text-center my-4">doctors</h2>
    <section class="splide home__slider__doctors mb-5">
        <div class="splide__track ">
            <ul class="splide__list">
                @forelse ($doctors as $doctor)
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <a href="{{ route('doctors.profile', $doctor->id) }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major"> <img
                                    src="{{ asset('uploads/doctors/' . $doctor->image) }}"
                                    class="card-img-top rounded-circle card-image-circle" alt="major"></a>
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">{{ $doctor->name }}</h4>
                                <h6 class="card-title fw-bold text-center">{{ $doctor->major->title }}</h6>
                                <a href="{{ route('doctors.appointments', $doctor->id) }}"
                                    class="btn btn-outline-primary card-button">Book
                                    an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                @empty
                    <h3>NO doctors yet</h3>
                @endforelse
            </ul>
        </div>
    </section>
    </div>
    <div class="banner container d-block d-lg-grid d-md-block d-sm-block">
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    It is important to keep drinking enough water daily,
                    as this helps improve the body's functions and supports skin health.
                    Make sure to drink at least 8 glasses of water per day, especially on hot days.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    Eating balanced diets containing a variety of fruits and vegetables,
                    providing your body with vitamins and necessary minerals.
                    Try to include different colors in your plate for the greatest nutritional benefit.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    Regular physical activity is a major step towards a healthy life.
                    Try to devote 30 minutes a day to any activity you like, whether that's walking, running, or even
                    dancing.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    Get enough sleep every night, as good sleep plays a vital role in promoting your overall health.
                    Try to sleep 7 to 9 hours a day to improve your energy and raise your focus.
                </p>
            </div>
        </div>
        <div class="bottom--left bottom--content bg-blue text-white">
            <h4 class="title">download the application now</h4>
            <p>"Enjoy the experience of booking easy and fast appointments,
                and always keep in touch with your favorite doctors!"</p>
            <div class="app-group">
                <div class="app"><img
                        src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/google-play-logo.svg"
                        alt="">Google Play</div>
                <div class="app"><img
                        src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/apple-logo.svg"
                        alt="">App Store</div>
            </div>
        </div>
        <div class="bottom--right bg-blue text-white">
            <img src="{{ asset('site/images/banner.jpg') }}" class="img-fluid banner-img">
        </div>
    </div>
@endsection

@push('footer-scripts')
    <script src="{{ asset('site/scripts/home.js') }}"></script>
@endpush
