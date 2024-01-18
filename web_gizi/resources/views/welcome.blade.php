@extends('template/layout')
@section('corosel')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Periksa Gizimu</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">lorem ipsum lorem ipsum lorem ipsum lorem ipsum</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="navbar mt-2 ml-5">

                        <a class="getstarted scrollto" href="{{ route('check_gizi') }}">Periksa Sekarang</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{url('assets/assets/img/hero-img.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->
@endsection