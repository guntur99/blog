<h3 class="mb-30 mt-50 clearfix"><b>Info Teknologi Canggih</b></h3>

<div class="row">
    <div class="col-sm-12 mb-30 swiper-area ">

        <!-- SETTING IMAGE WITH bg-6 -->
        <div class="bg-6 p-40 bg-layer-4 pos-relative z-1 oflow-hidden pr-0 color-white"
             style="background: url('{{ $high_tech_articles->image }}')
                 no-repeat center; background-size: cover;">
            <div class="mx-w-200x">
                <h5 class="color-grey"><b>{{ $high_tech_articles->category_name }}</b></h5>
                <h2 class="mtb-10"><a href="" onclick="detailNews('{{ $high_tech_articles->slug }}')">
                        <b>{{ $high_tech_articles->judul }}</b></a></h2>
            </div><!-- mx-w-200x -->

            <div class="all-scroll pos-relative mt-50">
                <h5 class="mb-50"><b>HIGH TECH NEWS</b></h5>

                <div class="swiper-scrollbar"></div>

                <div class="swiper-container oflow-visible" data-slide-effect="slide" data-autoheight="false"
                     data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="3"
                     data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true"
                     data-swpr-responsive="[1, 2, 2, 2]">


                    <div class="swiper-wrapper">
                        @foreach($high_tech_articles2 as $articles)
                        <div class="swiper-slide">
                            <div class="pos-relative">
                                <a class="abs-center circle-50 bg-tp-5 text-center" href="#!" onclick="detailNews('{{ $articles->slug }}')">
                                    <i class="lh-50 font-12 ion-play"></i></a>
                                <img src="{{ $articles->image }}" style="object-fit: cover; height: 150px;" alt="">
                            </div><!-- pos-relative -->
                        </div><!-- swiper-slide -->
                        @endforeach

                    </div><!-- swiper-wrapper -->
                </div><!-- swiper-container -->

            </div><!-- swiper-area -->

        </div><!-- bg-4 -->
    </div><!-- col-lg-4 col-md-6 -->
</div><!-- row -->
