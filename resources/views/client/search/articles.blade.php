@extends('layouts.app')

@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('{{ asset('mapp/img/bg_1.jpg') }}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Mencari: {{ $query }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Berita Desa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Semua Arikel yang ditemukan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Video Submit Area Start ##### -->
    <div class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <!-- Video Submit Content -->
                    <div class=" mb-50 p-30 bg-white box-shadow">
                        <section class="wedding_megazin d-flex mt-30 flex-wrap">
                            @foreach($articles as $article)
                                {{-- <div class="col-lg-3 col-md-6 mb-4">
                                    <a href="">
                                        <img src="{{ $post->image }}" style="height: 180px; object-fit: cover;" alt="">
                                    </a>
                                    <div class="post-content mt-1">
                                        <a href="" class="post-title">{{ $post->judul }}</a>
                                    </div>
                                </div> --}}
                            <div class="single-blog-post style-4 col-lg-3 col-md-6 mb-4">
                                <div class="post-thumbnail">
                                    <a href="#" onclick="detilBerita('{{ $article->slug }}')">
                                        <img src="{{ $article->image }}" style="height: 180px; object-fit: cover;" alt="">
                                    </a>
                                    {{--<a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>--}}
                                    {{--<span class="video-duration">09:27</span>--}}
                                </div>
                                <div class="post-content">
                                    <a href="#" onclick="detilBerita('{{ $article->slug }}')" class="post-title">{{ $article->judul }}</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ Carbon\Carbon::parse($article->created_at)->format('d M Y') }} </a>
                                        <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $article->created_by }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
