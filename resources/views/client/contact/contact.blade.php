@extends('layouts.app')

@section('content')

<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('{{ asset('mapp/img/bg_1.jpg') }}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Informasi Kontak</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="contact-content-area bg-white mb-30 p-30 box-shadow">
                    <!-- Google Maps -->
                    <div class="map-area mb-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1466999926547!2d108.29001021429487!3d-6.751957367898717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f277147456e1f%3A0x5518582605f0110!2sKantor+Desa+Waringin!5e0!3m2!1sid!2sid!4v1550740017799" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Contact Info</h5>
                    </div>

                    <div class="contact-information mb-30">
                        <p>Desa Waringin adalah salah satu desa yang terdapat di Kecamatan Palasah Kabupaten Majalengka Provinsi Jawa Barat.
                            Dengan batas desa sebelah Utara: Desa Karamat dan Desa Pasir, sebelah Timur: Desa Pasir dan Desa Tarikolot,
                            sebelah Selatan: Desa Tarikolot dan Desa Weragati, sebelah Barat: Sungai Cikerum dan Desa Leuweung Gede Kec. Jatiwangi.</p>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Lokasi Kantor:</p>
                                <h6>Jln. Desa Waringin No.01 Desa Waringin Kecamatan Palasah - Kab.Majalengka
                                Kode Pos: 45474</h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Email:</p>
                                <h6>desawaringin009@gmail.com</h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Phone:</p>
                                <h6>(0233) 8281900</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4" style="margin-top: -30px;">
                {{--<!-- ********** Latest Area Start ********** -->--}}
                @include('client.home.fixed-articles')
                {{--<!-- ********** Latest Area End ********** -->--}}
            </div>

        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->


@endsection
