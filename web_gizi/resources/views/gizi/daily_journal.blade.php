@extends('template/layout')
@section('content')
<section id="features" class="features">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Harian</h2>
            <p>Data Konsumsi Harian Anda</p>
        </header>

        <div class="row">

            <div class="col-lg-6">
                <div class="box" data-aos="fade-up" data-aos-delay="200" w>
                    <img src="{{url('assets/assets/img/values-1.png')}}" class="img-fluid" style="width: 200px;" alt="">
                </div>
                <a class="btn btn-success mt-3" align="left" href="{{route('profile.data')}}">Ubah</a>
                <!-- Modal Add Data Diri -->
                <div class=" modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Data Diri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="{{route('add_alumni', $user->id)}} " enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <label for="floatingInputValue">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="floatingInputValue" placeholder="Alamat Perusahaan" name="date_of_birth">
                                    <label for="floatingInputValue">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="floatingInputValue" placeholder="Tempat Lahir" name="place_of_birth">
                                    <label for="floatingInputValue">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" name="gender">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="Wanita">Wanita</option>
                                        <option value="Pria">Pria</option>
                                    </select>
                                    <label for="floatingInputValue">No Telepon</label>
                                    <input type="text" class="form-control" id="floatingInputValue" placeholder="Nomor Handphone" name="num_hp">
                                    <label for="floatingInputValue">Usia</label>
                                    <input type="text" class="form-control" id="floatingInputValue" placeholder="Usia Anda" name="age">
                                    <label for="floatingInputValue">Photo</label>
                                    <input type="file" class="form-control" id="floatingInputValue" placeholder="Alamat Perusahaan" name="photo_profile">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Simpan </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box" data-aos="fade-up" data-aos-delay="200" w>
                    Nama : {{auth()->user()->name}}<br>
                    Usia :<br>
                    Jenis Kelamin :<br>
                    No. Telp :<br>
                    Alamat :<br>
                    Tinggi Badan :<br>
                    Berat Badan :<br>


                </div>

            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                <div class="row align-self-center gy-4">
                    <a class="getstarted scrollto" href="{{ route('fastFood_track') }}">Konsumsi Hari Ini</a>
                    @foreach ($daily_journal as $item)
                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h5>{{$item->date_day}}</h5><br>
                            <p>{{$item->fastfood}}
                                Jumlah : {{$item->sum}}
                            </p>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>

        </div> <!-- / row -->



        @endsection