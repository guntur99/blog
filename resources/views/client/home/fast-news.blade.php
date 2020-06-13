<div class="row">

    @foreach($fast_news_articles as $articles)
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

    <!-- END OF FIRST PARA -->
</div><!-- row -->
