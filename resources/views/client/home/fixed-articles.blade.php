<!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
<div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget">
        <a href="https://demov2.suratdigital.id/" target="__blank" class="add-img"><img src="{{ asset('mapp/img/bg-img/surat-digital-add.jpg') }}" alt=""></a>
    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Lembaga Desa</h5>
        </div>

        <!-- Single YouTube Channel -->
        @foreach($info_pemerintahan as $lembaga)
            @if($lembaga->kategori_id == 3)
            {{-- @foreach($category->artikels_ci()->orderBy('created_at', 'desc')->take(4)->get() as $post) --}}
            <div class="single-youtube-channel d-flex">
                <div class="youtube-channel-thumbnail">
                    <img src="{{ $lembaga->image }}" style="height: 60px; object-fit: cover;" alt="">
                </div>
                <div class="youtube-channel-content">
                    <a href="#!" class="channel-title">{{ $lembaga->judul }}</a>
                    <a href="" onclick="detilInfo('{{ $lembaga->slug }}')" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Lihat Detil</a>
                </div>
            </div>
            @endif
            {{-- @endforeach --}}
        @endforeach

    </div>

    <!-- Sidebar Widget -->
    {{-- <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Subscribe</h5>
        </div>

        <div class="newsletter-form">
            <p>Anda akan mendapatkan email setiap kali ada informasi terbaru dari website ini.</p>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="search" name="email" placeholder="Masukkan email anda">
                <button type="submit" class="btn mag-btn w-100">Subscribe</button>
            </form>
        </div>

    </div> --}}
</div>

