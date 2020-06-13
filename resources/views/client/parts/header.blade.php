
<header>
    <a class="logo" href="{{ url('/') }}"><img src="{{ asset('quitelight/images/logo_teknonlogis_white.png') }}" class="ml-15 mt-10" style="width: 220px; height: 50px;" alt="Logo"></a>

    <div class="right-area">
        <div class="src-form">
            <button type="button"><i class="ion-search"></i></button>
            <input type="text" id="topSearch" placeholder="Search here">
        </div><!-- src-form -->
    </div><!-- right-area -->

    <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
    {{--{{ asset('quitelight/') }}--}}
    <ul class="main-menu" id="main-menu">
        <li><a href="{{ url('/') }}">Home</a></li>
        @foreach($category_berita as $category)
            <li><a href="#" onclick="categoryNews('{{ $category->nama }}')">{{ $category->nama }}</a></li>
        @endforeach
        <li><a href="{{ route('client.kontak') }}">Kontak</a></li>
    </ul>

    <div class="clearfix"></div>
</header>
