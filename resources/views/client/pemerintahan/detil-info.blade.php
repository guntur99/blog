@extends('layouts.app')

@section('content')

    <!-- ********** Cover Artikel Area Start ********** -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('{{ $detil_info->image }}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{ $detil_info->category_name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('client') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="" onclick="categoryBerita('{{ $detil_info->category_name }}')">{{ $detil_info->category_name }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $detil_info->judul }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ********** Cover Artikel Area End ********** -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-xl-8 mb-30">

                    <!-- ********** Latest Area Start ********** -->
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                        <div class="blog-thumb mb-30">
                            <img src="{{ $detil_info->image }}" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#">{{ Carbon\Carbon::parse($detil_info->created_at)->format('d M Y') }}</a>
                                <a href="#">{{ $detil_info->category_name }}</a>
                            </div>
                            <h4 class="post-title">{{ $detil_info->judul }}</h4>
                            <!-- Post Meta -->
                            {{--<div class="post-meta-2">--}}
                                {{--<a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $post->user->name }}</a>--}}
                                {{--<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>--}}
                                {{--<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
                            {{--</div>--}}

                            <p>{!! $detil_info->desc !!}</p>

                            <!-- Like Dislike Share -->
                            {{--<div class="like-dislike-share my-5">--}}
                                {{--@foreach($tags as $tag)--}}
                                    {{--<a class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> {{ $tag->tag }}</a>--}}
                                    {{--<a href="#">{{ $tag->tag }}</a>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}

                            <!-- Post Author -->
                            <div class="post-author d-flex align-items-center">
                                <div class="post-author-thumb">
                                    <img src="" alt="">
                                    {{-- <img src="{!! asset($post->user->profile->avatar) !!}" alt=""> --}}
                                </div>
                                <div class="post-author-desc pl-4">
                                    <a href="#" class="author-name">{{ $detil_info->created_by }}</a>
                                    {{-- <p>{{ $post->user->profile->about }}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ********** Latest Area End ********** -->

                    <!-- ============== Artikel Lain Terkait Start ============== -->
                    <!-- Related Post Area -->
                    <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Artikel Lainnya</h5>
                        </div>

                        <div class="row">

                        @foreach($info_lain as $article)
                            {{-- @foreach($category->artikels_kh()->orderBy('created_at', 'desc')->take(3)->get() as $post) --}}
                            <!-- Single Blog Post -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail">
                                        <a href="#" onclick="detilInfo('{{ $article->slug }}')">
                                        {{-- <a href="{{ route('clients.artikel-kh', ['slug' => $post->slug]) }}"> --}}
                                            <img src="{{ $article->image }}" style="height: 140px; object-fit: cover;" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="#" onclick="detilInfo('{{ $article->slug }}')" class="post-title">{{ $article->judul }}</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ Carbon\Carbon::parse($article->created_at)->format('d M Y') }}</a>
                                            <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $article->created_by }}</a>
                                            {{--<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                        @endforeach

                        </div>
                    </div>


                    {{-- @include('includes.disqus') --}}
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4" style="margin-top: -30px;">
                    {{--<!-- ********** Latest Area Start ********** -->--}}
                    @include('client.home.fixed-articles')
                    {{--<!-- ********** Latest Area End ********** -->--}}
                </div>
            </div>
        </div>
    </section>
    <!--================End News Area =================-->

@endsection


@section('custom_script')

    <!--Additional Page includes-->
    <script>

        function categoryBerita(data){
            axios.get('{{url("daftar-berita")}}/'+data).then((res) => {
                window.location.href = '{{url("daftar-berita")}}/'+data;
            });
        }

        function detilInfo(data){
            axios.get('{{url("pemerintahan/detil-informasi")}}/'+data).then((res) => {
                window.location.href = '{{url("pemerintahan/detil-informasi")}}/'+data;
            });
        }

    </script>
@endsection
