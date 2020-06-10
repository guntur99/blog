@extends('layouts.app')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('{{ asset('mapp/img/bg_1.jpg') }}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{ $category_berita_now->nama }}</h2>
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
                            <li class="breadcrumb-item"><a href="{{ route('client') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $category_berita_now->nama }}</a></li>
                            {{-- <li class="breadcrumb-item active" aria-current="page">{{ $categories_kh->title }}</li> --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">

                    <div class="col-12 col-xl-8">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                        @foreach($berita as $post)
                            <!-- Single Catagory Post -->
                            <div class="single-catagory-post d-flex flex-wrap">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail bg-img" style="background-image: url('{{ $post->image }}');">
                                </div>
                                    {{--<a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>--}}

                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">{{ Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</a>
                                        <a href="#">{{ $post->category_name }}</a>
                                    </div>
                                    <a href="#" class="post-title">{{ $post->judul }}</a>
                                    {{-- <a href="{{ route('clients.artikel-kh', ['slug' => $post->slug]) }}" class="post-title">{{ $post->title }}</a> --}}
                                    <!-- Post Meta -->
                                    <div class="post-meta-2">
                                        <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $post->created_by }}</a>
                                        {{-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a> --}}
                                    </div>
                                    <p>{{ $post->desc_singkat }}</p>
                                </div>
                            </div>
                        @endforeach

                            {{--<!-- Pagination -->--}}
                            {{--<nav>--}}
                                {{--<ul class="pagination">--}}
                                    {{--<li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</nav>--}}

                        </div>
                    </div>

                 <div class="col-12 col-md-6 col-lg-5 col-xl-4" style="margin-top: -30px;">
                    {{--<!-- ********** Latest Area Start ********** -->--}}
                    @include('client.home.fixed-articles')
                    {{--<!-- ********** Latest Area End ********** -->--}}
                </div>

                </div>


            </div>
        </div>
    </section>

@endsection
