<!---Modal-->
    <div class="modal fade" id="updateBeritaModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title">Location (<span id="location_name_modal_title"></span>) - Facility (<span id="facility_name_modal_title"></span>) - Client (<span id="client_name_modal_title"></span>)</h5> --}}
                        <h5 class="modal-title" id="mode_pembaruan_berita">Mode Pembaruan Data</h5>
                        <h5 class="modal-title d-none" id="mode_penghapusan_berita">Mode Penghapusan Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--card begins-->
                        <div class="row">
                            <div id="update_data_berita" class="col-md-12 bg-dark m-b-10 d-none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-8 m-auto text-white p-t-40 p-b-20">

                                            <h3 class="fw-300 text-center">Masukkan Judul Berita yang anda cari!
                                            </h3>
                                            <p class="p-t-30 form-dark">
                                                <input type="search" id="search_by_berita" placeholder="Judul Berita" class=" form-control form-control-lg" style="text-transform: lowercase;">
                                                <input type="search" id="search_by_berita_hapus" placeholder="Judul Berita" class="d-none form-control form-control-lg" style="text-transform: lowercase;">
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div id="all_result_berita"></div>

                            <div class=" m-b-10 mt-4" id="form_berita_desa">
                                <hr>
                                <div class="card-header pt-3">
                                    <div class="media">
                                        <div class="avatar mr-3 my-auto  avatar-xs " id="u_avatar_cover_global">
                                            <img src="{{ asset('atmos/getting started/light/assets/img/users/user-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body m-auto">
                                            <h5 class="m-0" id="u_judul_global"> </h5>
                                            <div class="opacity-75 text-muted" id="u_created_at_global"></div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-2 card-controls pt-1">
                                        <a href="#!" class="text-warning">
                                            <i class="mdi mdi-font-awesome"></i>
                                        </a>
                                        <div class="dropdown">
                                            <p class=" text-warning" style="font-weight:800" id="kategori">  </p>

                                        </div>
                                    </div> --}}
                                </div>
                                <div class="card-body">
                                    <div class="p-b-10 text-center" id="u_image_cover_global">
                                        <img class="rounded" id="image" src="" alt="">
                                    </div>
                                    <br>
                                    <p id="u_desc_singkat_global"></p>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="opacity-75" id="u_tags_berita_global"></div>
                                        </div>
                                        <div class="col-md-4 d-flex align-items-center">
                                        </div>

                                    </div>
                                    <hr>
                                </div>
                                <div class="row col-md-12 w-100 m-b-30">
                                    <div class="col-md-4">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-xs">
                                                    <img src="{{ asset('atmos/getting started/light/assets/img/users/user-2.jpg') }}" alt="..."
                                                        class="avatar-img rounded-circle">
                                                </div>
                                                <strong><p id="u_created_by_global" class="ml-1" style="margin-top:1px;"></p></strong>
                                            </div>
                                    </div>
                                    <div class="col-md-8" id="u_button_modal_global" style="padding:2px 2px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row w-100" id="btn_form_berita_desa">
                        <hr>
                            <div class="col-md-12" id="button-modals" style="padding:0px 0px">
                                <div id="btn_perbarui_hapus_kategori">
                                    <button type="button" id="hapus_data_kategori" class="btn ml-2 btn-danger float-right">
                                        <i class="mdi mdi-cube-outline"></i> Hapus Data
                                    </button>
                                    <button type="button" id="perbarui_data_kategori" class="btn ml-2 btn-warning float-right">
                                        <i class="mdi mdi-cube-outline"></i> Perbarui Data
                                    </button>
                                </div>
                                <button type="button" id="simpan_data_kategori" class="btn ml-2 btn-success float-right d-none">
                                    <i class="mdi mdi-cube-outline"></i> Simpan Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
