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
                <form action="{{route('calculate_activity')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3>Aktivitas Pribadi</h3>
                    <div class="row gy-4">
                        <div class="col-md-6">
                            Tidur
                            <input type="number" name="sleep" class="form-control" placeholder="Lama Tidur" required>
                        </div>

                        <div class="col-md-6 ">
                            Berbaring
                            <input type="number" class="form-control" name="sleeping" placeholder="Lama Tidur" required>
                        </div>
                        <div class="col-md-6">
                            Makan dan Minum
                            <input type="number" name="eating" class="form-control" placeholder="Lama Makan dan Minum" required>
                        </div>
                        <div class="col-md-6">
                            Mandi dan Berpakaian
                            <input type="number" name="take_bath" class="form-control" placeholder="Lama Mandi dan Berpakaian" required>
                        </div>
                        <div class="col-md-12">
                            Ibadah
                            <input type="number" name="pray" class="form-control" placeholder="Lama ibadah" required>
                        </div>
                        <h3>Transportasi</h3>
                        <div class="col-md-6">
                            Berjalan-jalan
                            <input type="number" name="walking" class="form-control" placeholder="Lama Berjalan-jalan" required>
                        </div>
                        <div class="col-md-6">
                            Naik Tangga
                            <input type="number" name="climbing" class="form-control" placeholder="Lama Naik Tangga" required>
                        </div>
                        <div class="col-md-6">
                            Duduk di Bus/Kereta
                            <input type="number" name="sit_down" class="form-control" placeholder="Lama Duduk" required>
                        </div>
                        <div class="col-md-6">
                            Bersepeda
                            <input type="number" name="bike" class="form-control" placeholder="Lama Bersepeda" required>
                        </div>
                        <div class="col-md-6">
                            Mengendarai Sepeda Motor
                            <input type="number" name="motorcycle" class="form-control" placeholder="Lama Mengendarai Sepeda Motor" required>
                        </div>
                        <div class="col-md-6">
                            Mengendarai Mobil/Truk
                            <input type="number" name="drive" class="form-control" placeholder="Lama Mobil/Truk" required>
                        </div>
                        <h3>Aktivitas Pekerjaan Rumah Tangga</h3>
                        <div class="col-md-6">
                            Berbelanja
                            <input type="number" name="shopping" class="form-control" placeholder="Lama Berbelanja" required>
                        </div>
                        <div class="col-md-6">
                            Mencuci Piring
                            <input type="number" name="dishes" class="form-control" placeholder="Lama Mencuci Piring" required>
                        </div>
                        <div class="col-md-6">
                            Mengasuh Anak
                            <input type="number" name="parenting" class="form-control" placeholder="Lama Mengasuh Anak" required>
                        </div>
                        <div class="col-md-6">
                            Menyapu Lantai
                            <input type="number" name="sweeping_floor" class="form-control" placeholder="Lama Menyapu Lantai" required>
                        </div>
                        <div class="col-md-6">
                            Mengepel Lantai
                            <input type="number" name="swap_floor" class="form-control" placeholder="Lama Mengepel Lantai" required>
                        </div>
                        <div class="col-md-6">
                            Mencuci Pakaian
                            <input type="number" name="wash_cloth" class="form-control" placeholder="Lama Mencuci Pakaian" required>
                        </div>
                        <div class="col-md-12">
                            Menyetrika Pakaian
                            <input type="number" name="iron_cloth" class="form-control" placeholder="Lama Menyetrika Pakaian" required>
                        </div>
                        <h3>Aktivitas Kantoran</h3>
                        <div class="col-md-6">
                            Membaca
                            <input type="number" name="reading" class="form-control" placeholder="Lama Membaca" required>
                        </div>
                        <div class="col-md-6">
                            Mengetik
                            <input type="number" name="typing" class="form-control" placeholder="Lama Mengetik" required>
                        </div>
                        <div class="col-md-12">
                            Menulis
                            <input type="number" name="writing" class="form-control" placeholder="Lama Menulis" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan </button>


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