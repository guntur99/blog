<!--sidebar Begins-->
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="{{ asset('quitelight/images/teknonlogis_favicon.ico') }}" width="40" alt="atmos Logo">
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
                        <span class="menu-name">News Articles
                            <span class="menu-arrow"></span>
                        </span>
                        <span class="menu-info" style="font-size:12px">Have Sub-Menu</span>
                    </span>
                    <span class="menu-icon">
                            <i class="icon-placeholder mdi mdi-newspaper "></i>
                    </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="{{ route('artikel.index') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">List News</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-view-list "></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('kategori.artikel') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Categories News</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-format-list-checks "></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('tag.artikel') }}" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name" style="font-size:14px">Tag News</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-format-list-bulleted-type "></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>

</aside>
<!--sidebar Ends-->
