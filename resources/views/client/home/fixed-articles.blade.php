<!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
<div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget">
        <a href="#!" class="add-img"><img src="" alt=""></a>
    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Lembaga Desa</h5>
        </div>

        <!-- Single YouTube Channel -->
        {{-- @foreach($categories_ci1 as $category)
            @foreach($category->artikels_ci()->orderBy('created_at', 'desc')->take(4)->get() as $post) --}}
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="" style="height: 60px; object-fit: cover;" alt="">
            </div>
            <div class="youtube-channel-content">
                <a href="#!" class="channel-title"></a>
                <a href="#!" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Lihat Detil</a>
            </div>
        </div>
            {{-- @endforeach
        @endforeach --}}

    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Subscribe</h5>
        </div>

        <div class="newsletter-form">
            <p>Anda akan mendapatkan email setiap kali ada informasi terbaru dari website ini.</p>
            <form action="" method="post" enctype="multipart/form-data">
                {{-- {{ csrf_field() }} --}}
                <input type="search" name="email" placeholder="Masukkan email anda">
                <button type="submit" class="btn mag-btn w-100">Subscribe</button>
            </form>
        </div>

    </div>
</div>

