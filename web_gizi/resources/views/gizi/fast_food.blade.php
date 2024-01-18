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
            <h2>Fast Food</h2>
            <p>Skala Fast Food</p>
        </header>

        <div class="row">

            <div class="col-lg-6">
                <div class="box" data-aos="fade-up" data-aos-delay="200" w>
                    <img src="{{url('assets/assets/img/values-1.png')}}" class="img-fluid" alt="">
                </div>


            </div>
            <div class="footer-newsletter col-6">

                <form action="{{route('daily_jurnal')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- <h3></h3> -->
                    <p>Makan Apa Hari Ini?.</p>
                    <div class="row gy-4">
                        <label for="floatingInputValue">Tanggal</label>
                        <input type="date" class="form-control" id="floatingInputValue" placeholder="Nama Perusahaan" name="date_day">
                        <div class="row">
                            <label class="form-check-label mt-2">
                                Jenis Makanan
                            </label>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Burger">
                                    <label class="form-check-label">
                                        Burger
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Nugget">
                                    <label class="form-check-label">
                                        Nugget
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Pizza">
                                    <label class="form-check-label">
                                        Pizza
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Fried Chicken">
                                    <label class="form-check-label">
                                        Fried Chicken
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Friend French">
                                    <label class="form-check-label">
                                        Friend French
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Spaghetti">
                                    <label class="form-check-label">
                                        Spaghetti
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Sosis">
                                    <label class="form-check-label">
                                        Sosis
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Sandwich">
                                    <label class="form-check-label">
                                        Sandwich
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Ice cream">
                                    <label class="form-check-label">
                                        Ice Cream
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Cokelat">
                                    <label class="form-check-label">
                                        Cokelat
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="Permen">
                                    <label class="form-check-label">
                                        Permen
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="donat">
                                    <label class="form-check-label">
                                        Donat
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fastfood" id="fastfood1" value="soda">
                                    <label class="form-check-label">
                                        Soda
                                    </label>
                                </div>
                            </div>

                        </div>
                        <label for="floatingInputValue">Jumlah</label>
                        <input type="number" class="form-control" id="floatingInputValue" placeholder="Jumlah " name="sum">
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