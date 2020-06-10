<!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
    <!-- Trending Now Posts Area -->
    <div class="trending-now-posts mb-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>BERITA DESA</h5>
        </div>

        <div class="trending-post-slides owl-carousel">

        @foreach($all_articles as $article)
            @if($article->kategori_id == 1)
            {{-- @foreach($category->artikels_kh()->orderBy('created_at', 'desc')->take(4)->get() as $post) --}}
            <!-- Single Trending Post -->
            <div class="single-trending-post">
                <a href="#" onclick="detilBerita('{{ $article->slug }}')">
                    <img src="{{ $article->image }}" style="height: 180px; object-fit: cover;" alt="">
                </a>
                <div class="post-content">
                    <a href="#" class="post-cata">{{ $article->category_name }}</a>
                    <a href="#" onclick="detilBerita('{{ $article->slug }}')" class="post-title">{{ $article->judul }}</a>
                </div>
            </div>
            @endif
            {{-- @endforeach --}}
        @endforeach

        </div>
    </div>

    <!-- Sports Videos -->
    <div class="sports-videos-area">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Kegiatan Desa</h5>
        </div>

        <div class="sports-videos-slides owl-carousel mb-30">

        @foreach($all_articles as $article)
            {{-- @foreach($category->artikels_kh()->orderBy('created_at', 'desc')->take(3)->get() as $post) --}}
            @if($article->kategori_id == 2)
            <!-- Single Featured Post -->
            <div class="single-featured-post">
                <!-- Thumbnail -->
                <div class="post-thumbnail mb-50">
                    <a href="#" onclick="detilBerita('{{ $article->slug }}')">
                        <img src="{{ $article->image }}" style="height: 350px; object-fit: cover;" alt="">
                    </a>
                    {{--<a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>--}}
                </div>
                <!-- Post Contetnt -->
                <div class="post-content">
                    <div class="post-meta">
                        <a>{{ Carbon\Carbon::parse($article->created_at)->format('d M Y') }}</a>
                        <a href="#">{{ $article->category_name }}</a>
                    </div>
                    <a href="#" onclick="detilBerita('{{ $article->slug }}')" class="post-title">{{ $article->judul }}</a>
                    <p></p>
                </div>
            </div>
            @endif
                {{-- @endforeach --}}
            @endforeach

        </div>

        <div class="row">

        @foreach($all_articles as $article)
            @if($article->kategori_id == 2)
            {{-- @foreach($category->artikels_kh()->orderBy('created_at', 'desc')->skip(3)->take(4)->get() as $post) --}}
            <!-- Single Blog Post -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-post d-flex style-3 mb-30">
                    <div class="post-thumbnail">
                        <a href="#" onclick="detilBerita('{{ $article->slug }}')">
                            <img src="{{ $article->image }}" style="height: 50px; object-fit: cover;" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <a href="#" onclick="detilBerita('{{ $article->slug }}')" class="post-title">{{ $article->judul }}</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ Carbon\Carbon::parse($article->created_at)->format('d M Y') }} </a>
                            <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $article->created_by }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            {{-- @endforeach --}}
        @endforeach

        </div>

    </div>

    <!-- Most Viewed Videos -->
    <div class="most-viewed-videos mb-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Berita Lainnya</h5>
        </div>

        <div class="most-viewed-videos-slide owl-carousel">

        @foreach($all_articles as $article)
            @if($article->kategori_id == 4)
            {{-- @foreach($category->artikels_kh()->orderBy('created_at', 'desc')->take(4)->get() as $post) --}}
            <!-- Single Blog Post -->
            <div class="single-blog-post style-4">
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
            @endif
            {{-- @endforeach --}}
        @endforeach

        </div>
    </div>

</div>
