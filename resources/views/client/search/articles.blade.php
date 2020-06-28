@extends('layouts.app')

@section('content')

<div class="slider-main h-500x h-sm-auto pos-relative pt-95 pb-25">
    <div class="img-bg bg-layer-4"
         style="background: url('{{ asset('quitelight/images/slider_7_1900x600.jpg') }}')
             no-repeat center; background-size: cover;"></div>
    <div class="container-fluid h-100 mt-xs-50">
        <div class="dplay-tbl">
            <div class="dplay-tbl-cell color-white text-center">

                <h1 class="ptb-50">Mencari: <b style="color: rgb(255, 174, 0)">{{ $query }}</b></h1>

            </div><!-- dplay-tbl-cell -->
        </div><!-- dplay-tbl -->
    </div><!-- container -->
</div><!-- slider-main -->

<section class="bg-1-white ptb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-md-12 col-lg-10 pt-30 pb-50 pr-30 pr-md-15">

                <div class="row">

                    @foreach($all_articles as $articles)
                    <div class=" col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <div class="card h-100 min-h-350x">
                            <div class="bg-white h-100">

                                <!-- SETTING IMAGE WITH bg-10 -->
                                <div class="h-50 bg-la"
                                    style="background: url('{{ $articles->image }}')
                                        no-repeat center; background-size: cover;"></div>

                                <div class="plr-25 ptb-15 h-50">
                                    <div class="dplay-tbl">
                                        <div class="dplay-tbl-cell">

                                            <h5 class="color-ash"><b>{{ $articles->category_name }}</b></h5>
                                            <h4 class="mtb-10">
                                                <a href="#!" onclick="detailNews('{{ $articles->slug }}')"><b>{{ $articles->judul }}</b></a></h4>
                                            <ul class="list-li-mr-10 color-lt-black">
                                                {{-- <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                                                <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li> --}}
                                            </ul>

                                        </div><!-- dplay-tbl-cell -->
                                    </div><!-- dplay-tbl -->
                                </div><!-- plr-25 ptb-15 -->
                            </div><!-- hot-news -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                    @endforeach

                    <!-- END OF SECOND PARA -->
                </div><!-- row -->

                {{-- <h6 class="text-center mt-20"><a class="btn-brdr-grey color-ash plr-30" href="#"><b>LOAD MORE</b></a></h6> --}}


            </div><!-- col-sm-9 -->

            {{-- @include('client.home.side-menu') --}}

        </div><!-- row -->
    </div><!-- container -->
</section>
@endsection
