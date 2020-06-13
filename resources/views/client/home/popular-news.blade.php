<h3 class="mb-30 mt-50 clearfix"><b>Teknologi Populer, Seriusan!</b></h3>

<div class="row">

{{-- @foreach($popular_articles as $articles) --}}
    <!-- START OF SECOND PARA -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 mb-30">
        <div class="card h-100 h-xs-500x">
            <div class="sided-half sided-xs-half h-100 bg-white">

                <!-- SETTING IMAGE WITH bg-2 -->
                <div class="s-left w-50 w-xs-100 h-100 h-xs-50 pos-relative">
                    <div class="abs-tblr" style="background: url('{{ $popular_articles->image }}')
                        no-repeat center; background-size: cover;">
                    </div>
                </div>
                <div class="s-right w-50 w-xs-100 h-xs-50">
                    <div class="plr-25 ptb-25 h-100">
                        <div class="dplay-tbl">
                            <div class="dplay-tbl-cell">

                                <h5 class="color-ash"><b>{{ $popular_articles->category_name }}</b></h5>
                                <h2 class="mtb-10"><a href="#">
                                        <b>{{ $popular_articles->judul }}</b></a></h2>
                                <ul class="list-li-mr-10 color-lt-black">
                                    {{-- <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                                    <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li> --}}
                                </ul>

                            </div><!-- dplay-tbl-cell -->
                        </div><!-- dplay-tbl -->
                    </div><!-- plr-25 ptb-25 -->
                </div><!-- s-right -->
            </div><!-- sided-half -->
        </div><!-- card -->
    </div><!-- col-lg-8 col-md-12 -->
{{-- @endforeach --}}

@foreach($popular_articles2 as $articles)
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
        <div class="card h-100 h-xs-350x">
            <div class="bg-white h-100">

                <!-- SETTING IMAGE WITH bg-3 -->
                <div class="h-50 dplay-lg-none dplay-xs-block" style="background: url('{{ $articles->image }}')
                    no-repeat center; background-size: cover;"></div>

                <div class="plr-25 ptb-15 h-50">
                    <div class="dplay-tbl">
                        <div class="dplay-tbl-cell">

                            <h5 class="color-ash"><b>{{ $articles->category_name }}</b></h5>
                            <h4 class="mtb-10">
                                <a href="#"><b>{{ $articles->judul }}</b></a></h4>
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

@foreach($popular_articles3 as $articles)
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">

        <!-- SETTING IMAGE WITH bg-4 -->
        <div class="card h-100 pos-relative bg-layer-4 color-white"
             style="background: url('{{ $articles->image }}') no-repeat center; background-size: cover;">
            <div class="plr-25 ptb-15">
                <h5 class="color-grey"><b>{{ $articles->category_name }}</b></h5>
                <h4 class="mtb-10"><a href="#"><b>{{ $articles->judul }}</b></a></h4>
                <ul class="list-li-mr-10 color-grey">
                    {{-- <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                    <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li> --}}
                </ul>
            </div><!-- hot-news -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->
@endforeach

    <!-- END OF THIRD PARA -->
</div><!-- row -->
