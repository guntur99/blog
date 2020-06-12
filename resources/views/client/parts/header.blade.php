{{-- <!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Navbar Area -->
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="magNav">

                <!-- Nav brand -->
                <a href="{{ url('/') }}" class="nav-brand"><img src="{{ asset('mapp/img/logo-desa-waringin.png') }}" style="width: 230px;" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Nav Content -->
                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class=""><a href="{{ route('client') }}">Home</a></li>
                                <li><a href="#">Berita Desa</a>
                                    <ul class="dropdown">
                                        @if($category_berita->count() > 0)
                                            @foreach($category_berita as $category)
                                                <li><a href="#" onclick="categoryBerita('{{ $category->nama }}')">{{  $category->nama }}</a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                                <li><a href="#">Pemerintah Desa</a>
                                    <div class="megamenu">

                                        @if($category_pemerintahan->count() > 0)
                                            @foreach($category_pemerintahan as $category)
                                        <ul class="single-mega cn-col-5">
                                            <li><a style="color: #ff8855; text-transform: uppercase;">{{  $category->nama }}</a></li>
                                            <hr style="margin-top: -5px;">

                                            @foreach($info_pemerintahan as $info)
                                                @if($info->kategori_id == $category->id)
                                                <li><a href="#" onclick="detilInfo('{{ $info->slug }}')">{{ $info->judul }}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                            @endforeach
                                        @endif
                                    </div>
                                </li>
                                <li><a href="#">Inovasi Desa</a>
                                    <ul class="dropdown ">
                                        <li>
                                            <a class="" href="{{ route('client.cek.kependudukan') }}">Cek Kependudukan</a>
                                        </li>
                                        <li>
                                            <a class="" href="https://demov2.suratdigital.id/" target="__blank">Surat Digital</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('client.contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <div class="top-meta-data d-flex align-items-center">
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form >
                                <input type="search" name="query" id="topSearch" placeholder="Cari Artikel ...">
                                <button type="button" id="search_articles" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### --> --}}

<header>
    <a class="logo" href="{{ url('/') }}"><img src="{{ asset('quitelight/images/logo_teknonlogis_white.png') }}" class="ml-15 mt-10" style="width: 220px; height: 50px;" alt="Logo"></a>

    <div class="right-area">
        <form class="src-form">
            <button type="submit"><i class="ion-search"></i></button>
            <input type="text" placeholder="Search here">
        </form><!-- src-form -->
    </div><!-- right-area -->

    <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
    {{--{{ asset('quitelight/') }}--}}
    <ul class="main-menu" id="main-menu">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('clients.populer') }}">Populer</a></li>
        {{--<li class="drop-down"><a href="#">Populer<i class="ion-arrow-down-b"></i></a>--}}
            {{--<ul class="drop-down-menu drop-down-inner">--}}
                {{--<li><a href="#">PAGE 1</a></li>--}}
                {{--<li><a href="#">PAGE 2</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li><a href="{{ route('clients.canggih') }}">Canggih</a></li>
        <li><a href="{{ route('clients.masaDepan') }}">Masa Depan</a></li>
        <li><a href="{{ route('clients.kreatif') }}">Kreatif</a></li>
        <li><a href="{{ route('clients.unik') }}">Unik</a></li>
        {{--<li><a href="#">Fashion</a></li>--}}
        <li><a href="{{ route('clients.kontak') }}">Kontak</a></li>
    </ul>

    <div class="clearfix"></div>
</header>
