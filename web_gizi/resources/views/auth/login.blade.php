@extends('template/layout')
@section('header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection

@section('content')
<!-- ======= Values Section ======= -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Form Aktivitas</h2>
            <p>Silahkan isi form di bawah ini</p>
        </header>

        <div class="row">

            <div class="col-lg-6">
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{url('assets/assets/img/values-1.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="footer-newsletter col-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3>Login</h3>
                    <div class="row gy-4">
                        <div class="col-md-12">
                            Email
                            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        </div>

                        <div class="col-md-12 ">
                            Password
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
                        </div>

                        <button type="submit" class="btn btn-success">Login </button>


                    </div>
                </form>

            </div>



        </div>

    </div>

</section><!-- End Values Section -->


@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection