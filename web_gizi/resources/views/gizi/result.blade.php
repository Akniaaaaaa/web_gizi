@extends('template/layout')
@section('content')
<section id="values" class="values">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Hasil</h2>
            <p>Perhitungan Tingkat Aktivitas Fisik </p>
        </header>

        <div class="row">

            <div class="col-lg-6">
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{url('assets/assets/img/values-1.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="footer-newsletter col-6">

                Tingkat Aktivitas Fisik Anda
                @if($total>1.4 && $total <=1.69) <h3>Ringan</h3>
                    @elseif($total>=1.70 && $total <=1.99) <h3>Sedang</h3>
                        @elseif($total>=2.00)
                        <h3>Berat</h3>
                        @endif
            </div>



        </div>

    </div>

</section><!-- End Values Section -->

@endsection