<h3 class="mb-30 mt-20 clearfix"><b>Teknologi Masa Depan</b></h3>

<div class="row">
    @foreach($future_tech_articles as $articles)
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
        <div class="card pos-relative h-100 bg-layer-4 color-white" style="background: url('{{ $articles->image }}')
            no-repeat center; background-size: cover;">
            <div class="plr-25 ptb-15 h-100">
                <div class="dplay-tbl">
                    <div class="dplay-tbl-cell">
                        <h5 class="color-ash"><b>{{ $articles->category_name }}</b></h5>
                        <h2 class="mtb-10"><a href="#"><b>{{ $articles->judul }}</b></a></h2>
                        <ul class="list-li-mr-10 color-ash">
                            {{-- <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                            <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li> --}}
                        </ul>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- plr-25 ptb-15 -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->
    @endforeach

    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
        <div class="card h-100">

            @foreach($future_tech_articles2 as $articles)
            <div class="h-50 pb-15">
                <div class="plr-25 h-100 ptb-15 bg-white">
                    <div class="dplay-tbl">
                        <div class="dplay-tbl-cell">

                            <h5 class="color-ash"><b>{{ $articles->category_name }}</b></h5>
                            <h4 class="mtb-10"><a href="#"><b>{{ $articles->judul }}</b></a></h4>
                            <ul class="list-li-mr-10 color-ash">
                                {{-- <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                                <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li> --}}
                            </ul>

                        </div><!-- dplay-tbl-cell -->
                    </div><!-- dplay-tbl -->
                </div><!-- plr-25 ptb-15 -->
            </div><!--h-50 bg-white -->
            @endforeach

            @foreach($future_tech_articles3 as $articles)
            <div class="h-50 pt-15">
                <!-- SETTING IMAGE WITH bg-7 -->
                <div class="plr-25 ptb-15 pos-relative h-100 bg-layer-4 color-white"
                     style="background: url('{{ $articles->image }}')
                    no-repeat center; background-size: cover;">
                    <div class="dplay-tbl">
                        <div class="dplay-tbl-cell">

                            <h5 class="color-grey"><b>{{ $articles->category_name }}</b></h5>
                            <h4 class="mtb-10"><a href="#"><b>{{ $articles->judul }}</b></a></h4>
                            <ul class="list-li-mr-10 color-grey">
                                {{-- <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                                <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li> --}}
                            </ul>

                        </div><!-- dplay-tbl-cell -->
                    </div><!-- dplay-tbl -->
                </div><!-- plr-25 ptb-15 -->
            </div><!--h-50 bg-white -->
            @endforeach

        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">

        @foreach($future_tech_articles4 as $articles)
        <!-- SETTING IMAGE WITH bg-8 -->
        <div class="card pos-relative h-100 bg-layer-4 color-white"
             style="background: url('{{ $articles->image }}')
                 no-repeat center; background-size: cover;">
            <div class="plr-25 ptb-15 h-100">
                <div class="dplay-tbl">
                    <div class="dplay-tbl-cell">

                        <h5 class="color-grey"><b>{{ $articles->category_name }}</b></h5>
                        <h2 class="mtb-10"><a href="#">
                                <b>{{ $articles->judul }}</b></a></h2>
                        <ul class="list-li-mr-10 color-grey">
                            {{-- <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                            <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li> --}}
                        </ul>

                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- plr-25 ptb-15 -->
        </div><!-- card -->
        @endforeach
    </div><!-- col-lg-4 col-md-6 -->


    @foreach($future_tech_articles5 as $articles)
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
</div><!-- row -->

{{-- <h6 class="text-center mt-20"><a class="btn-brdr-grey color-ash plr-30" href="#"><b>LOAD MORE</b></a></h6> --}}
