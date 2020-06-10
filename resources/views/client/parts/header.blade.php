<!-- ##### Header Area Start ##### -->
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
                                {{-- <li class="{{ Request::is('/') ? 'active' : null }}"><a href="{{ url('/') }}">Home</a></li> --}}
                                <li><a href="#">Berita Desa</a>
                                    {{-- <ul class="dropdown {{ Request::is('berita-desa/*') ? 'active' : null }}"> --}}
                                    <ul class="dropdown">
                                        @if($category_berita->count() > 0)
                                            @foreach($category_berita as $category)
                                                <li><a href="#" onclick="categoryBerita('{{ $category->nama }}')">{{  $category->nama }}</a></li>
                                                {{-- <li><a href="{{ route('clients.kajian-harian.sub-kajian-harian', ['id' => $category->id]) }}">{!! $category->name  !!}</a></li> --}}
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
                                                <li><a href="#">{{ $info->judul }}</a></li>
                                                {{-- <li><a href="{{ route('clients.artikel-ci', ['slug' => $post->slug]) }}">{{ $post->title }}</a></li> --}}
                                                @endif
                                            @endforeach
                                        </ul>
                                            @endforeach
                                        @endif
                                    </div>
                                </li>
                                <li><a href="#">Inovasi Desa</a>
                                    <ul class="dropdown ">
                                    {{-- <ul class="dropdown {{ Request::is('inovasi-desa/*') ? 'active' : null }}"> --}}
                                        <li>
                                            <a class="" href="#!">Cek Kependudukan</a>
                                        </li>
                                        <li>
                                            <a class="" href="#!">Surat Digital</a>
                                            {{-- <a class="{{ Request::is('berita-desa/surat-digital') ? 'active' : null }}" href="{{ route('surat-digital.create') }}">Surat Digital</a> --}}
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
                            <form method="GET" action="/results">
                                <input type="search" name="query" id="topSearch" placeholder="Cari Artikel ...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
