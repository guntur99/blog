@extends('layouts.app')

@section('custom_css')
<style>
    .unselectable {
    -webkit-user-select: none;
    -webkit-touch-callout: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }
</style>
@endsection

@section('content')

<div class="slider-main h-800x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-layer-6"
         style="background: url('{{ $all_articles->image }}')
             no-repeat center; background-size: cover;"></div>
		<div class="container-fluid h-100 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">

							<div class="bg-white p-40 psm-30">
								<h5 class="color-ash"><b>{{ $all_articles->category_name }}</b></h5>
								<h1 class="mt-20 lh-1-2"><b>{{ $all_articles->judul }}</b></h1>

							</div><!-- bg-white -->
						</div><!-- col-lg-4 -->
					</div><!-- row -->
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->


	<section class="bg-1-white ptb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">

					<div class="row">
						<div class="col-sm-12 col-md-6">

							<div class="sided-70x">
								<div class="s-left">
									<img src="{{ asset('atmos/demos/default/assets/img/users/user-2.jpg') }}" alt="">
								</div><!-- s-left-->

								<div class="s-right">
									<p class="ptb-20 color-ash"><b>{{ $all_articles->created_by }} on {{ Carbon\Carbon::parse($all_articles->created_at)->format('M d, Y') }}</b></p>
								</div>
							</div><!-- sided-80x-->
						</div><!-- col-md-6-->

						<div class="col-sm-12 col-md-6">
							<ul class="color-ash lh-70 text-right text-sm-left list-a-plr-10 font-13">
								<li><b>SHARE</b></li>
								<li><a href="#"><i class="color-facebook ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="color-twitter ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="color-google ion-social-google"></i></a></li>
							</ul>
						</div><!-- col-md-6-->
					</div><!-- row-->

                    <p class="mt-40 mt-sm-10 unselectable">{!! $all_articles->desc !!}</p>

                    {!! $all_articles->desc_video !!}

					<ul class="tag mtb-50">

                        @foreach($tag_selected as $tags)
                            <li><a href="#!"><b>{{ $tags->nama }}</b></a></li>
                        @endforeach
					</ul>

					<div class="row">
						<div class="col-sm-12 col-md-6">

							<div class="sided-70x">
								<div class="s-left">
									<img src="{{ asset('atmos/demos/default/assets/img/users/user-2.jpg') }}" alt="">
								</div><!-- s-left-->

								<div class="s-right">
									<p class="ptb-20 color-ash"><b>{{ $all_articles->created_by }} on {{ Carbon\Carbon::parse($all_articles->created_at)->format('M d, Y') }}</b></p>
								</div>
							</div><!-- sided-80x-->
						</div><!-- col-md-6-->

						<div class="col-sm-12 col-md-6">
							<ul class="color-ash lh-70 text-right text-sm-left list-a-plr-10 font-13">
								<li><b>SHARE</b></li>
								<li><a href="#"><i class="color-facebook ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="color-twitter ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="color-google ion-social-google"></i></a></li>
							</ul>
						</div><!-- col-md-6-->
                    </div><!-- row-->

					<div class="brdr-grey-1 mt-50 mt-sm-20"></div>

					<div class="mt-50 mb-20">
						<div class="row">
                            @foreach($other_articles as $articles)
							<div class=" col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
								<div class="card h-100 min-h-350x">
									<div class="bg-white h-100">

										<!-- SETTING IMAGE WITH bg-10 -->
										<div class="h-50" style="background: url('{{ $articles->image }}')
                                            no-repeat center; background-size: cover;">
                                        </div>

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

						</div><!-- row-->
					</div><!-- mt-50 mb-20-->

					{{-- <a class="mt-30 mb-50 mb-sm-20 btn-b-lg btn-brdr-grey plr-25 color-ash" href="#"><b>Load More</b></a> --}}

				</div><!-- col-sm-9 -->

				@include('client.home.side-menu')
			</div><!-- row -->
		</div><!-- container -->
	</section>

@endsection
