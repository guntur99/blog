<!---Modal-->
    <div class="modal fade" id="importExcelModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title">Location (<span id="location_name_modal_title"></span>) - Facility (<span id="facility_name_modal_title"></span>) - Client (<span id="client_name_modal_title"></span>)</h5> --}}
                        <h5 class="modal-title">Detil Informasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--card begins-->
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="last_name">File Name*</label>
                                <div class="custom-file" id="custom_file">
                                    <input type="file" class="custom-file-input" id="input" accept=".xls,.xlsx,.ods" onchange="readURL(this)">
                                    <label class="custom-file-label" for="file-name-picker"
                                        >Choose file</label>
                                    <textarea id="file_name_storage" style="display: none;"></textarea>

                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="row w-100">
                            <div class="col-md-12" id="button-modals" style="padding:20px 20px">
                                <button type="button" id="import_excel_data" class="btn ml-2 mr-2 btn-success float-right">
                                    <i class="mdi mdi-cube-outline"></i> Masukkan Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
