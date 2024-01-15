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
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{url('assets/assets/img/values-1.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="footer-newsletter col-6">
                <form action="{{route('calculate_activity')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3>Fast Food</h3>
                    <p>Skala jumlah konsumsi fastfood dalam kurun waktu seminggu terakhir.</p>
                    <div class="row gy-4">

                        <!-- <h3>Burger</h3> -->
                        <div class="col-md-12">
                            Burger
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="burger" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="burger" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="burger" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="burger" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="burger" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="burger" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="burger" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Nugget
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nugget" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nugget" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nugget" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nugget" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nugget" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nugget" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nugget" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Pizza
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pizza" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pizza" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pizza" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pizza" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pizza" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pizza" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pizza" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Fried Chicken
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fried_chicken" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fried_chicken" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fried_chicken" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fried_chicken" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fried_chicken" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fried_chicken" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fried_chicken" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Friend French
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="friend_fries" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="friend_fries" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="friend_fries" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="friend_fries" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="friend_fries" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="friend_fries" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="friend_fries" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Spaghetti
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spaghetti" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spaghetti" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spaghetti" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spaghetti" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spaghetti" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spaghetti" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spaghetti" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Sosis
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sosis" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sosis" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sosis" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sosis" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sosis" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sosis" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sosis" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Sandwich
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sandwich" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sandwich" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sandwich" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sandwich" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sandwich" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sandwich" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sandwich" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Ice Cream
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ice_cream" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ice_cream" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ice_cream" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ice_cream" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ice_cream" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ice_cream" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ice_cream" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Cokelat
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cokelat" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cokelat" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cokelat" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cokelat" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cokelat" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cokelat" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cokelat" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Permen
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permen" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permen" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permen" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permen" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permen" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permen" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permen" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Donat
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="donat" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="donat" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="donat" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="donat" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="donat" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="donat" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="donat" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Soda
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soda" id="inlineRadio1" value="1"><br>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soda" id="inlineRadio1" value="2"><br>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soda" id="inlineRadio1" value="3"><br>
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soda" id="inlineRadio1" value="4"><br>
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soda" id="inlineRadio1" value="5"><br>
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soda" id="inlineRadio1" value="6"><br>
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soda" id="inlineRadio1" value="7"><br>
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
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