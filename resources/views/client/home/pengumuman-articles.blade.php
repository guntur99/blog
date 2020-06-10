<!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
<div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Pengumuman</h5>
        </div>

    @foreach($all_articles as $article)
        @if($article->kategori_id == 3)
        {{-- @foreach($category->artikels_kh()->orderBy('created_at', 'desc')->take(4)->get() as $post) --}}
        <!-- Single Blog Post -->
        <div class="single-blog-post d-flex">
            <div class="post-thumbnail">
                <a href="#" onclick="detilBerita('{{ $article->slug }}')">
                    <img src="{{ $article->image }}" style="width: 70px; height: 70px; object-fit: cover;" alt="">
                </a>
            </div>
            <div class="post-content">
                <a href="#" onclick="detilBerita('{{ $article->slug }}')" class="post-title">{{ $article->judul }}</a>
                <div class="post-meta d-flex justify-content-between">
                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{ Carbon\Carbon::parse($article->created_at)->format('d M Y') }}</a>
                </div>
            </div>
        </div>
        @endif
        {{-- @endforeach --}}
    @endforeach

    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget">
        <a href="#!" class="add-img"><img src="{{ asset('mapp/img/bg-img/cek-kependudukan-add.jpg') }}" alt=""></a>
    </div>

</div>
