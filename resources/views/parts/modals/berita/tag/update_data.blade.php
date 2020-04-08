<!---Modal-->
    <div class="modal fade" id="updateTagModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title">Location (<span id="location_name_modal_title"></span>) - Facility (<span id="facility_name_modal_title"></span>) - Client (<span id="client_name_modal_title"></span>)</h5> --}}
                        <h5 class="modal-title">Perbarui Data Tag</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--card begins-->
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="u_nama_tag">Nama Tag</label>
                                <input autocomplete="off" type="text" class="form-control" name="u_nama_tag" id="u_nama_tag"
                                    placeholder="Nama Tag" required disabled>
                                <div class="valid-feedback">
                                    Terisi, silahkan cek kembali!
                                </div>
                                <div class="invalid-feedback">
                                    Masih kosong, silahkan diisi!!
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row w-100">
                            <div class="col-md-12" id="button-modals" style="padding:0px 0px">
                                <div id="btn_perbarui_hapus">
                                    <button type="button" id="hapus_data_tag" class="btn ml-2 btn-danger float-right">
                                        <i class="mdi mdi-cube-outline"></i> Hapus Data
                                    </button>
                                    <button type="button" id="perbarui_data_tag" class="btn ml-2 btn-warning float-right">
                                        <i class="mdi mdi-cube-outline"></i> Perbarui Data
                                    </button>
                                </div>
                                <button type="button" id="simpan_data_tag" class="btn ml-2 btn-success float-right d-none">
                                    <i class="mdi mdi-cube-outline"></i> Simpan Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
