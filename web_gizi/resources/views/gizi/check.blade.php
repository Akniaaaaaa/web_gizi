@extends('template/layout')
@section('content')
<form action="{{route('calculate_activity')}}" method="post">
    <div class="row">
        <div class="col-6">
            <b>Identitas </b>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="nama_pelapor" placeholder="Masukan Nama Anda" required>
            </div>
            <div class="form-group mt-3 mb-3">
                <input type="number" class="form-control" name="nomor_telepon" placeholder="Masukan Nomor Telpon Anda" required>
            </div>
            <b>Penyu</b>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="jenis_penyu" id="jenis_penyu" placeholder="Jenis Penyu" value="" required readonly>
            </div>
            <div class="form-group mt-3">
                <input type="number" class="form-control" name="jumlah_penyu" placeholder="Jumlah Penyu yang ditemukan" required>
            </div>


            <div class="form-group mt-3">
                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi" required>
            </div>
            <input type="hidden" class="form-control" name="status" id="status" placeholder="status" value="Belum ditangani" required>
            <!-- <div class="form-group mt-3">
                  <select class="form-control " id="inputGroupSelect01" 
                  name="jenis_temuan" required autocomplete="jenis_temuan" autofocus>
                  <option value="Telur Penyu" selected>Telur</option>
                  <option value="Penyu" selected>Penyu</option>
                  <option value="Pilih Jenis Penyu" selected>Jenis Temuan</option>
                </select>
              </div> -->
        </div>
        <div class="col-6">
            <div class="form-group mt-5">
                <select class="form-control " id="inputGroupSelect01" name="kondisi" required autocomplete="kondisi" autofocus>
                    <option value="Hidup" selected>Hidup</option>
                    <option value="Mati" selected>Mati</option>
                    <option value="Pilih kondisi" selected>Pilih kondisi</option>
                </select>
            </div>

            <div class="form-group ">
                <input type="date" class="form-control" name="tanggal_temuan" id="tanggal_temuan" placeholder="" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="summernote" name="keterangan" required></textarea>
            </div>
            <center>
        </div>
    </div>
    <button class="btn btn-primary btn-block mt-3" style="border-radius: 30px;">
        Lapor
    </button>
    </center>
</form>
<div class="col-lg-12">
    <div class="row">
        <div class="col-6">
            <div class="" data-aos="fade-up" data-aos-delay="200">
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
@endsection