@extends('layouts.app')

@section('content')

    <!-- ********** Slide Area Start ********** -->
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('{{ asset('mapp/img/bg_1.jpg') }}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Cek Status Kependudukan Anda</h2>
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
                            <li class="breadcrumb-item"><a href="#">Inovasi Desa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cek Status Kependudukan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ********** Slide Area End ********** -->

    <!-- ********** Features Area Start ********** -->
    <section class="top-post-area pt-10" style="margin-top: 30px; margin-bottom: 100px;">
        <div class="container no-padding">
            <div class="search-nik-bar">
                <input type="text" id="input_nik" placeholder="Masukkan Nik Anda.." name="search">
                <button id="btn_search_nik"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </section>
    <!-- ********** Features Area End ********** -->

    <div class="video-submit-area d-none" id="result_nik">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <!-- Video Submit Content -->
                    <div class="video-submit-content mb-50 p-30 bg-white box-shadow">
                        <section class="mag-posts-area d-flex mt-30 flex-wrap">

                                <div class="col-lg-4 mb-0">
                                    <div class="feature-image-thumb relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img style="height: 310px; object-fit: cover;" class="img-fluid" src="{{ asset('mapp/img/profile.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="top-post-details ml-15">
                                        {{-- <h4>Title</h4> --}}
                                        <ul class="meta">
                                            {{--<li><a href="#"><span class="lnr lnr-user"></span>{{ $post->user->name }}</a></li>--}}
                                            {{--<li><span class="lnr lnr-calendar-full"></span>MAJALENGKA</li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 single-top-post mb-30">

                                    <h4 style="font-size: 16px;">NIK</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">Nama</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">TTL</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">Jenis Kelamin</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">Alamat</h4>
                                    <h4 style="margin-top: 25px; font-size: 16px;">RT/RW</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">KEL/DESA</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">Kecamatan</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">Agama</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">Status Perkawinan</h4>
                                    <h4 style="margin-top: 2px; font-size: 16px;">Kewarganegaraan</h4>
                                </div>
                                <div class="col-lg-4 single-top-post">
                                    <h4 id="d-nik" style="font-size: 16px;"> : nik</h4>
                                    <h4 id="d-nama" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-ttl" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-jk" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-alamat" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-rtrw" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-kelurahan" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-kecamatan" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-agama" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-status" style="margin-top: 2px; font-size: 16px;"></h4>
                                    <h4 id="d-kewarganegaraan" style="margin-top: 2px; font-size: 16px;"></h4>
                                </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    <div id="nik_not_match" class="col-lg-12 single-top-post text-center d-none" style="margin-bottom: 100px;">
                        <h1>NIK Tidak Cocok dengan Penduduk Desa Ini</h1>
                    </div>
@endsection

@section('custom_script')
    <script>

        $('#btn_search_nik').click((e) => {

            $('#result_nik').addClass('d-none');
            nik = $('#input_nik').val();
            if(nik !== null && nik !== undefined && nik !== ''){
                axios.get('{{url("inovasi/cek-status-kependudukan")}}/'+nik).then((res) => {

                    data = res.data;
                    if(data == 'not found'){
                        $('#result_nik').addClass('d-none');
                        $('#nik_not_match').removeClass('d-none');
                        return false;
                    }

                    $('#nik_not_match').addClass('d-none');
                    $('#result_nik').removeClass('d-none');
                    $('#d-nik').html(' : '+data.nik);
                    $('#d-nama').html(' : '+data.nama);
                    $('#d-ttl').html(' : '+data.tempat_lahir+', '+data.tanggal_lahir);
                    jk = '';
                    if(data.jenis_kelamin == 'L'){
                        jk = "Laki-laki";
                    }else{
                        jk = "Perempuan";
                    }
                    $('#d-jk').html(' : '+jk);
                    $('#d-alamat').html(' : '+data.alamat);
                    $('#d-rtrw').html(' : '+data.rt+'/'+data.rw);
                    $('#d-kelurahan').html(' : '+data.kelurahan_desa);
                    $('#d-kecamatan').html(' : '+data.kecamatan);
                    $('#d-agama').html(' : '+data.agama);
                    $('#d-status').html(' : '+data.status_perkawinan);
                    $('#d-kewarganegaraan').html(' : '+data.kewarganegaraan);

                }).catch((err) => {
                    alert(error)
            });
            }else{
                $('#result_nik').addClass('d-none');
                $('#nik_not_match').removeClass('d-none');
            }
        })

    </script>
@endsection
