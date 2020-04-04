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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                <h3><strong>Hi {{ $user_name }}, Selamat Datang!</strong></h3>
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
                        <h1 class="display-4 fw-600">1200</h1>
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
                        <h1 class="display-4 fw-600">186k</h1>
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
                    <h5><strong>Berita Desa Terbaru</strong></h5>
                    <div class="table-responsive">
                        <table class="table align-td-middle table-card">
                            <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Judul Berita</th>
                                <th>Kategori</th>
                                <th>Dibuat Oleh</th>
                                <th>Dibuat Tanggal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="avatar avatar-sm "><img src="{{ asset('atmos/getting started/light/assets/img/users/user-1.jpg') }}"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </td>
                                <td>Senam Kesegaran Jasmani</td>
                                <td>Kegiatan Desa</td>
                                <td>Ken Abdullah</td>
                                <td>Feb 20, 2019</td>
                            </tr>


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
    <!--chart data for current dashboard-->
    {{-- <script src="{{ asset('atmos/demos/light/assets/js/dashboard-02.js') }}" type="text/javascript"></script> --}}
    <script>

        (function ($) {
    'use strict';
    if ($("#chart-01").length) {
        var options = {
            chart: {
                height: 350,
                type: 'area',

                animations: {
                    enabled: true,
                },
            },
            colors: "#fff",
            dataLabels: {
                enabled: false
            },


            stroke: {
                colors: ["#fff"],
                curve: 'straight',
                width: 3
            },
            series: [{
                name: "Units",
                data: [8107.85, 8128, 8122.9, 8165.5, 8340.7, 8423.7, 8423.5, 8514.3, 8481.85, 8487.7, 8506.9, 8626.2, 8668.95, 8602.3, 8607.55, 8512.9, 8496.25, 8600.65, 8881.1, 9340.85]
            }],
            grid: {
                borderColor: 'rgba(255,225,255,0.2)',
                strokeDashArray: '3',

            },

            labels: ["13 Nov 2017", "14 Nov 2017", "15 Nov 2017", "16 Nov 2017", "17 Nov 2017", "20 Nov 2017", "21 Nov 2017", "22 Nov 2017", "23 Nov 2017", "24 Nov 2017", "27 Nov 2017", "28 Nov 2017", "29 Nov 2017", "30 Nov 2017", "01 Dec 2017", "04 Dec 2017", "05 Dec 2017", "06 Dec 2017", "07 Dec 2017", "08 Dec 2017"],
            xaxis: {
                type: 'datetime',

            },
            yaxis: {},
            legend: {
                horizontalAlign: 'left'
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-01"),
            options
        );

        chart.render();

    }

})(window.jQuery);

    </script>
@endsection
