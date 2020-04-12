{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.admin')

@section('custom_css')
{{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
<style>
    .progress {
    width: 400px;
    }
    .progress header span {
        color: #666;
        float: right;
    }
    .progress .bar {
        position: relative;
        background-color: #ccc;
    }
    .progress .bar .percent {
        color: white;
        background-color: #0c0;
        width: 70%;
    }
</style>
@endsection

@section('content')
<section class="admin-content ">
    <div class="container p-t-20">
        <div class="row">
            <div class="col-12 m-b-10">
                <h3>Hi <strong class="text-primary">{{ $user_name }}</strong>, Selamat Datang.</h3>
            </div>

            <div class="col-md-6 col-lg-4">
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col my-auto">
                                <div class="h6 text-muted ">Total Berita yang telah dibuat</div>
                            </div>

                            <div class="col-auto my-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle bg-primary"><i
                                                class="mdi mdi-buffer  "></i></div>

                                </div>
                            </div>
                        </div>
                        <h1 class="display-4 fw-600">{{ $total_berita }}</h1>
                        <div class="h6">
                            <span class="text-primary"> <i class="mdi mdi-buffer"></i> Total dalam semua kategori berita </span>
                            {{-- Less activity than usual. --}}
                        </div>
                    </div>
                </div>
                <!--widget card ends-->

            </div>
            <div class="col-md-6 col-lg-4">

                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col my-auto">
                                <div class="h6 text-muted ">Total Penduduk terinput di sistem</div>
                            </div>

                            <div class="col-auto my-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle badge-soft-dark"><i
                                                class="mdi mdi-account-group "></i></div>

                                </div>
                            </div>
                        </div>
                        <h1 class="display-4 fw-600">{{ $total_penduduk }}</h1>
                        <div class="h6">
                            <span class="text-dark"> <i class="mdi mdi-account-group"></i> Total penduduk yang bisa cek statusnya </span>
                        </div>
                    </div>
                </div>
                <!--widget card ends-->

            </div>

            <div class="col-md-6 col-lg-4">

                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col my-auto">
                                <div class="h6 text-muted ">Media Reach (Last 30 Days)</div>
                            </div>

                            <div class="col-auto my-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle badge-soft-success"><i
                                                class="mdi mdi-heart  "></i></div>

                                </div>
                            </div>
                        </div>
                        <h1 class="display-4 fw-600">186k</h1>
                        <div class="h6">
                            <span class="text-success"> <i class="mdi mdi-arrow-top-right"></i> +0.65% </span>
                            More activity than usual.
                        </div>
                    </div>
                </div>
                <!--widget card ends-->

            </div>


                <div class="col-md-12 m-b-30">
                    {{-- <h5><strong>Berita Desa Terbaru</strong></h5> --}}
                    <div class="table-responsive">
                        <table class="table align-td-middle table-card">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Judul Berita Desa Terbaru</th>
                                <th>Kategori</th>
                                <th>Dibuat Oleh</th>
                                <th>Dibuat Tanggal</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita->take(5) as $b)
                                    <tr>
                                        <td>
                                            <div class="avatar">
                                    <div class="avatar-title rounded-circle bg-dark"><i
                                                class="mdi mdi-new-box "></i></div>

                                </div>
                                        </td>
                                        <td>{{ $b->judul }}</td>
                                        <td>{{ $b->category_name }}</td>
                                        <td>{{ $b->user_created_by }}</td>
                                        <td>{{ $b->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
        </div>
    </div>
</section>
@endsection

@section('custom_script')

    <!--Additional Page includes-->
    <script src="{{ asset('atmos/demos/light/assets/vendor/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('atmos/getting started/light/assets/vendor/DataTables/datatables.min.js') }}"></script>

    <!--chart data for current dashboard-->
    {{-- <script src="{{ asset('atmos/demos/light/assets/js/dashboard-02.js') }}" type="text/javascript"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
