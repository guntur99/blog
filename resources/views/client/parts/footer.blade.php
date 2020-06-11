<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="foo-logo"><img class="mw-100" src="{{ asset('mapp/img/logo-desa-waringinid.png') }}" style="margin-top: -10px;" alt=""></a>
                    <p>Desa Waringin adalah salah satu desa yang terdapat di Kecamatan Palasah Kabupaten Majalengka Provinsi Jawa Barat.</p>
                    <div class="footer-social-info">
                        <a href="https://www.facebook.com/pemdes.waringin.3" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        {{--<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>--}}
                        <a href="https://instagram.com/pemdeswaringin?utm_source=ig_profile_share&igshid=4qlrw8xa1r8g" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/pemdes_waringin" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Link Terkait</h6>
                    <nav class="footer-widget-nav">
                        <ul>
                            @if($category_berita->count() > 0)
                                @foreach($category_berita as $category)
                                    <li><a href="" onclick="categoryBerita('{{ $category->nama }}')"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{  $category->nama }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Lembaga Masyarakat</h6>

                     @foreach($info_pemerintahan as $lembaga)
                        @if($lembaga->kategori_id == 3)
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <a href="" onclick="detilInfo('{{ $lembaga->slug }}')">
                                    <img style="width: 700px; height: 70px; object-fit: cover;" src="{{ $lembaga->image }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <a href="" onclick="detilInfo('{{ $lembaga->slug }}')" class="post-title">{{ $lembaga->judul }}</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ Carbon\Carbon::parse($lembaga->created_at)->format('d M Y') }}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach

                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Pemerintahan</h6>
                    <ul class="footer-tags">
                        @if($category_pemerintahan->count() > 0)
                            @foreach($category_pemerintahan as $category)
                                <li><a href="#">{{ $category->nama }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <p class="copywrite-text">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
                {{--<div class="col-12 col-sm-6">--}}
                    {{--<nav class="footer-nav">--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Home</a></li>--}}
                            {{--<li><a href="#">Privacy</a></li>--}}
                            {{--<li><a href="#">Advertisement</a></li>--}}
                            {{--<li><a href="#">Contact Us</a></li>--}}
                        {{--</ul>--}}
                    {{--</nav>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->
