<!---Modal-->
    <div class="modal fade" id="kependudukanModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
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
                            <div class="col-md-12 mb-10 p-0">
                                <div style="background:#2e384d; color:#ffffff; margin-top: -5px;">
                                    <div class="row mb-3 w-100" style="padding:20px 20px;">
                                        <div class="col-md-3 pl-3">
                                            <span class="list_modal">NIK</span> :<br><span class="value_modal" id="nik" style="font-size:16px;font-weight:bold;"></span>
                                        </div>
                                        <div class="col-md-3 pl-3">
                                            <span class="list_modal">Nama Warga</span> :<br><span class="value_modal" id="nama_warga" style="font-size:16px;font-weight:bold;"></span><br>
                                        </div>
                                        <div class="col-md-3 pl-3">
                                            <span class="list_modal">Agama</span> :<br><span class="value_modal" id="agama" style="font-size:16px;font-weight:bold;"></span><br>
                                        </div>
                                        <div class="col-md-3 pl-3">
                                            <span class="list_modal">Status Perkawinan</span> :<br><span class="value_modal" id="status_perkawinan" style="font-size:16px;font-weight:bold;"></span><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 w-100" style="padding:0px 20px;">
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Jenis Kelamin</span> :<br><span class="value_modal" id="jenis_kelamin" style="font-size:16px;font-weight:bold;"></span>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Tempat Lahir</span> :<br><span class="value_modal" id="tempat_lahir" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Tanggal Lahir</span> :<br><span class="value_modal" id="tanggal_lahir" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">RT/RW</span> :<br><span class="value_modal" id="rt_rw" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                </div>
                                <div class="row mb-3 w-100" style="padding:0px 20px;">
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Alamat</span> :<br><span class="value_modal" id="alamat" style="font-size:16px;font-weight:bold;"></span>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Kelurahan Desa</span> :<br><span class="value_modal" id="kelurahan_desa" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 mb-2 pl-3">
                                        <span class="list_modal">Kecamatan</span> :<br><span class="value_modal" id="kecamatan" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 mb-2 pl-3">
                                        <span class="list_modal">Kewarganegaraan</span> :<br><span class="value_modal" id="kewarganegaraan" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="row w-100">
                            <div class="col-md-12" id="button-modal" style="padding:20px 20px">
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
