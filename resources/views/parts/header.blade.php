 <!--site header begins-->
    <header class="admin-header">

        <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

        <nav class=" mr-auto my-auto">
            <ul class="nav align-items-center">

                <li class="nav-item">
                    <a class="nav-link  " id="search_id" href="#">
                        <i class="mdi mdi-google-assistant mdi-24px align-middle"></i>
                        Butuh Bantuan? Klik Aku!
                    </a>
                </li>
            </ul>
        </nav>
        <nav class=" ml-auto">
            <ul class="nav align-items-center">

                <li class="nav-item">
                    {{-- <div class="dropdown"> --}}
                        {{-- <a href="{{ route('index') }}" target="_blank" class="nav-link"> <i class="mdi mdi-24px mdi-web"></i> --}}
                        </a>
                    {{-- </div> --}}
                </li>
                {{-- <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-24px mdi-bell-outline"></i>
                            <span class="notification-counter"></span>
                        </a>

                        <div class="dropdown-menu notification-container dropdown-menu-right">
                            <div class="d-flex p-all-15 bg-white justify-content-between border-bottom ">
                                <a href="#!" class="mdi mdi-18px mdi-settings text-muted"></a>
                                <span class="h5 m-0">Notifications</span>
                                <a href="#!" class="mdi mdi-18px mdi-notification-clear-all text-muted"></a>
                            </div>
                            <div class="notification-events bg-gray-300">
                                <div class="text-overline m-b-5">today</div>
                                <a href="#" class="d-block m-b-10">
                                    <div class="card">
                                        <div class="card-body"> <i class="mdi mdi-check-circle text-success"></i> Alessa | Surat Keterangan A</div>
                                    </div>
                                </a>
                                <a href="#" class="d-block m-b-10">
                                    <div class="card">
                                        <div class="card-body"> <i class="mdi mdi-check-circle text-success"></i> Ken | Surat Keterangan B</div>
                                    </div>
                                </a>
                                <a href="#" class="d-block m-b-10">
                                    <div class="card">
                                        <div class="card-body"> <i class="mdi mdi-check-circle text-success"></i> Jhon | Surat Keterangan C</div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </li> --}}
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <span class="avatar-title rounded-circle bg-dark">V</span>

                        </div>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right"   >
                        {{-- <a class="dropdown-item" href="{{route('index')}}" target="_blank">  Buat Surat</a> --}}
                        {{-- <a class="dropdown-item" href="#">  Reset Password</a> --}}
                        <a class="dropdown-item" href="#">  Pengaturan </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" method="POST" id="logoutLink"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                </li>

            </ul>

        </nav>
    </header>
    <!--site header ends -->
    <section class="admin-content">
        <div class="container">
        </div>
    </section>
