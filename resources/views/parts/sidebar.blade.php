<!--sidebar Begins-->
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="{{ asset('atmos/getting started/light/assets/img/logo.png') }}" width="40" alt="atmos Logo">
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
            <li class="menu-item ">
                <a href="{{ route("home") }}" class="menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Dashboard</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-view-dashboard "></i>
                    </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Berita Desa
                            <span class="menu-arrow"></span>
                        </span>
                        <span class="menu-info" style="font-size:12px">Memiliki Sub-Menu</span>
                    </span>
                    <span class="menu-icon">
                            <i class="icon-placeholder mdi mdi-newspaper "></i>
                    </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="{{ route('berita.desa.index') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Semua Berita</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-view-list "></i>
                            </span>
                        </a>
                    </li>
                    {{-- <li class="menu-item">
                        <a href="{{ route('berita.desa.create') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Buat Berita Baru</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-playlist-plus "></i>
                            </span>
                        </a>
                    </li> --}}
                    <li class="menu-item">
                        <a href="{{ route('kategori.berita.desa') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Semua Kategori Berita</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-format-list-checks "></i>
                            </span>
                        </a>
                    </li>
                    {{-- <li class="menu-item">
                        <a href="{{ route('buat.kategori.berita.desa') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Buat Kategori Berita Baru</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-playlist-plus "></i>
                            </span>
                        </a>
                    </li> --}}
                    <li class="menu-item">
                        <a href="{{ route('tag.berita.desa') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Semua Tag Berita</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-format-list-bulleted-type "></i>
                            </span>
                        </a>
                    </li>
                    {{-- <li class="menu-item">
                        <a href="{{ route('buat.tag.berita.desa') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Buat Tag Berita Baru</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-playlist-plus "></i>
                            </span>
                        </a>
                    </li> --}}
                </ul>
            </li>

            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Pemerintah Desa
                            <span class="menu-arrow"></span>
                        </span>
                        <span class="menu-info" style="font-size:12px">Memiliki Sub-Menu</span>
                    </span>
                    <span class="menu-icon">
                            <i class="icon-placeholder mdi mdi-office-building "></i>
                    </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Semua Informasi</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-hexagon-multiple "></i>
                            </span>
                        </a>
                    </li>
                    {{-- <li class="menu-item">
                        <a href="#" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Informasi Disembunyikan</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-checkbook "></i>
                            </span>
                        </a>
                    </li> --}}
                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Buat Informasi Baru</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-hexagon-slice-5 "></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Kategori Informasi</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-hexagon-slice-1 "></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Penduduk Desa
                            <span class="menu-arrow"></span>
                        </span>
                        <span class="menu-info" style="font-size:12px">Memiliki Sub-Menu</span>
                    </span>
                    <span class="menu-icon">
                            <i class="icon-placeholder mdi mdi-account-heart "></i>
                    </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="{{route('penduduk.desa.index')}}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Semua Penduduk Desa</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account-group-outline "></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('penduduk.desa.create')}}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Tambah Penduduk Baru</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account-multiple-plus-outline "></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Tutorials
                            <span class="menu-arrow"></span>
                        </span>
                    </span>
                    <span class="menu-icon">
                            <i class="icon-placeholder fe fe-toggle-left"></i>
                    </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ route('tutorials.create.letter') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Buat Surat
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-webpack "></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('tutorials.admin') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Admin
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-webpack "></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </li> --}}

        </ul>

    </div>

</aside>
<!--sidebar Ends-->
