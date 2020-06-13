

<div class="slider-main h-800x h-sm-auto pos-relative pt-95 pb-25">
    {{-- @foreach($popular_articles as $articles) --}}
		<div class="img-bg bg-layer-4" style="background: url('{{ $popular_articles->image }}')
                        no-repeat center; background-size: cover;"></div>
		<div class="container-fluid h-100 mt-xs-50">

			<div class="row h-100">
				<div class="col-md-1"></div>
				<div class="col-sm-12 col-md-5 h-100 h-sm-50">
					<div class="dplay-tbl">
						<div class="dplay-tbl-cell color-white mtb-30">
							<div class="mx-w-400x">
								<h5><b>{{ $popular_articles->category_name }}</b></h5>
								<h1 class="mt-20 mb-30"><b>{{ $popular_articles->judul }}</b></h1>
								<h6><a class="plr-20 btn-brdr-grey color-white" href="" onclick="detailNews('{{ $popular_articles->slug }}')"><b>Lihat Detil Artikel</b></a></h6>
							</div><!-- mx-w-200x -->
						</div><!-- dplay-tbl-cell -->
					</div><!-- dplay-tbl -->
				</div><!-- col-sm-6 -->

				<div class="col-sm-12 col-md-6 h-sm-50 oflow-hidden swiper-area pos-relative">

					<div class="abs-blr pos-sm-static">
						<div class="row pos-relative mt-50 all-scroll">

							<div class="swiper-scrollbar resp"></div>
							<div class="col-md-10">

								<h5 class="mb-50 color-white"><b>HOT NEWS</b></h5>

								<div class="swiper-container oflow-visible" data-slide-effect="slide" data-autoheight="false"
									data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="2"
									data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true"
									data-swpr-responsive="[1, 2, 1, 2]">



									<div class="swiper-wrapper">
                                        <!-- data-swiper-autoplay="1000"  -->
                                        @foreach($hot_articles as $articles)
										<div class="swiper-slide">
											<div class="bg-white">
												<img src="{{ $articles->image }}" style="height: 180px; object-fit: cover;" alt="">

												<div class="plr-25 ptb-15">
													<h5 class="color-ash"><b>{{ $articles->category_name }}</b></h5>
													<h4 class="mtb-10">
														<a href="" onclick="detailNews('{{ $articles->slug }}')"><b>{{ $articles->judul }}</b></a></h4>
													<ul class="list-li-mr-10 color-lt-black">
														{{-- <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
														<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li> --}}
													</ul>
												</div><!-- hot-news -->
											</div><!-- hot-news -->
										</div><!-- swiper-slide -->
                                        @endforeach

									</div><!-- swiper-wrapper -->
								</div><!-- swiper-container -->

							</div><!-- col-sm-6 -->
						</div><!-- all-scroll -->
					</div><!-- row -->
				</div><!-- col-sm-6 -->

			</div><!-- row -->
        </div><!-- container -->
        {{-- @endforeach --}}
	</div><!-- slider-main -->
