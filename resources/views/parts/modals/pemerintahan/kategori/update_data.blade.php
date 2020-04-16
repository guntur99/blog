<!---Modal-->
    <div class="modal fade" id="updateKategoriPemerintahanModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title">Location (<span id="location_name_modal_title"></span>) - Facility (<span id="facility_name_modal_title"></span>) - Client (<span id="client_name_modal_title"></span>)</h5> --}}
                        <h5 class="modal-title" id="mode_pembaruan_kategori_informasi">Mode Pembaruan Data</h5>
                        <h5 class="modal-title d-none" id="mode_penghapusan_kategori_informasi">Mode Penghapusan Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--card begins-->
                        <div class="row">
                            <div id="update_data_kategori_informasi" class="col-md-12 bg-dark m-b-10 d-none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-8 m-auto text-white p-t-40 p-b-20">

                                            <h3 class="fw-300 text-center">Masukkan Nama Kategori yang anda cari!
                                            </h3>
                                            <p class="p-t-30 form-dark">
                                                <input type="search" id="search_by_kategori_informasi" placeholder="Nama Kategori" class=" form-control form-control-lg" autocapitalize="off">
                                                <input type="search" id="search_by_kategori_informasi_hapus" placeholder="Nama Kategori" class="d-none form-control form-control-lg" autocapitalize="off">
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div id="all_result_kategori_informasi"></div>

                            <div class="form-group col-md-12" id="form_nama_kategori_informasi">
                                <label for="u_nama_kategori_info">Nama Kategori</label>
                                <input autocomplete="off" type="text" class="form-control" name="u_nama_kategori_info" id="u_nama_kategori_info"
                                    placeholder="Nama Kategori" required disabled>
                                <div class="valid-feedback">
                                    Terisi, silahkan cek kembali!
                                </div>
                                <div class="invalid-feedback">
                                    Masih kosong, silahkan diisi!!
                                </div>
                            </div>
                        </div>
                        <div class="row w-100" id="btn_form_nama_kategori_informasi">
                        <hr>
                            <div class="col-md-12" id="button-modals" style="padding:0px 0px">
                                <div id="btn_perbarui_hapus_kategori_informasi">
                                    {{-- <button type="button" id="hapus_data_kategori_informasi" class="btn ml-2 btn-danger float-right">
                                        <i class="mdi mdi-cube-outline"></i> Hapus Data
                                    </button> --}}
                                    <button type="button" id="perbarui_data_kategori_informasi" class="btn ml-2 btn-warning float-right">
                                        <i class="mdi mdi-cube-outline"></i> Perbarui Data
                                    </button>
                                </div>
                                <button type="button" id="simpan_data_kategori_informasi" class="btn ml-2 btn-success float-right d-none">
                                    <i class="mdi mdi-cube-outline"></i> Simpan Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
