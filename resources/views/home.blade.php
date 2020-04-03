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
    <div class="bg-dark m-b-30">
        <div class="container-fluid">
            <div class="row p-b-60 p-l-30 p-t-60">

                <div class="col-md-12 text-white p-b-30">
                    <div class="media">
                        <div class="media-body m-auto">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container pull-up">
        <div class="row p-l-30 p-r-30">

            <div class="col-md-12">
                <div class="card m-b-30">
                    {{-- <div class="card-header">
                        <h5 class="m-b-0">
                            <i class="mdi mdi-checkbox-intermediate"></i> Tables
                        </h5>

                    </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">

                            {{-- <table class="table table-hover ">
                                <thead>
                                <tr>
                                    <th>Thumbnail</th>
                                    <th>Surat</th>
                                    <th>Total Tercetak</th>
                                    <th>Progres Surat Tercetak</th>
                                    <th>Progres(%)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">S</span>
                                            </div>
                                    </td>
                                    <td>SKCK</td>
                                    <td>{{ $skck }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_s }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="3000"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_s,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">IK</span>
                                            </div>
                                    </td>
                                    <td>Ijin Kerja</td>
                                    <td>{{ $ijin_kerja }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_ik }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="3000"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_ik,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">BPN</span>
                                            </div>
                                    </td>
                                    <td>Belum Pernah Nikah</td>
                                    <td>{{ $belum_pernah_nikah }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_bpn }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_bpn,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">TM</span>
                                            </div>
                                    </td>
                                    <td>Tidak Mampu</td>
                                    <td>{{ $tidak_mampu }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_tm }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_tm,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">K</span>
                                            </div>
                                    </td>
                                    <td>Kematian</td>
                                    <td>{{ $kematian }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_k }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_k,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">PN</span>
                                            </div>
                                    </td>
                                    <td>Perbedaan Nama</td>
                                    <td>{{ $perbedaan_nama }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_pn }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_pn,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">DN</span>
                                            </div>
                                    </td>
                                    <td>Diluar Negeri</td>
                                    <td>{{ $diluar_negeri }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_dn }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_dn,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">D</span>
                                            </div>
                                    </td>
                                    <td>Domisili</td>
                                    <td>{{ $domisili }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_d }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_d,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">IOT</span>
                                            </div>
                                    </td>
                                    <td>Izin Orang Tua</td>
                                    <td>{{ $izin_orang_tua }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_iot }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_iot,2) }}%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-md">
                                                <span class="avatar-title bg-danger rounded-circle">U</span>
                                            </div>
                                    </td>
                                    <td>Usaha</td>
                                    <td>{{ $usaha }} Surat</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{ $p_u }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ round($p_u,2) }}%</td>
                                </tr>


                                </tbody>
                            </table> --}}
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
        {{-- <div class="jumbotron">
            <div class="row">

                <div class="col-xlg-12  m-b-30 col-lg-12">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card m-b-30">
                                <div class="card-body bg-dark rounded ">
                                    <h3 class="text-white"> <i class="mdi mdi-chart-gantt"></i> Overview </h3>
                                    <div id="chart-01" class="invert-colors"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-3 m-b-20 ">
                                                <div class="rounded p-all-15 text-white text-center bg-white-translucent">
                                                    <div class="h1 fw-300">16K</div>
                                                    <h6 class="text-white-50"> Weekly Visitors</h6>
                                                </div>

                                            </div>
                                            <div class="col-md-3 m-b-20 ">
                                                <div class="rounded p-all-15 text-white text-center bg-white-translucent">
                                                    <div class="h1 fw-300">205</div>
                                                    <h6 class="text-white-50">Average Conversions</h6>
                                                </div>

                                            </div>
                                            <div class="col-md-3 m-b-20 ">
                                                <div class="rounded p-all-15 text-white text-center bg-white-translucent">
                                                    <div class="h1 fw-300">680</div>
                                                    <h6 class="text-white-50">New Sign Ups</h6>
                                                </div>

                                            </div>
                                            <div class="col-md-3 m-b-20 ">
                                                <div class="rounded p-all-15 text-white text-center bg-white-translucent">
                                                    <div class="h1 fw-300">19k</div>
                                                    <h6 class="text-white-50">IO Request</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                                class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                    class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                    class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
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
