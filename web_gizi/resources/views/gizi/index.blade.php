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

                        <!-- <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a> -->
                        @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            <!-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> -->
                            <a class="getstarted scrollto" href="{{ route('check_gizi') }}">Periksa Sekarang</a>
                            @else
                            <!-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> -->
                            <a class="getstarted scrollto" href="{{ route('login') }}">Masuk</a>

                            @if (Route::has('register'))
                            <a class="getstarted scrollto" href="{{ route('register') }}">Get Started </a>
                            <!-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> -->
                            @endif
                            @endauth
                        </div>
                        @endif
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