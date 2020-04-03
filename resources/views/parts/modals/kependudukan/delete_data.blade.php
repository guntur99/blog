<!---Modal-->
    <div class="modal fade" id="deleteKependudukanModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title">Location (<span id="location_name_modal_title"></span>) - Facility (<span id="facility_name_modal_title"></span>) - Client (<span id="client_name_modal_title"></span>)</h5> --}}
                        <h5 class="modal-title">Mode Penghapusan Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--card begins-->
                        <div class="row">
                            <div id="delete_data_penduduk" class="col-md-12 bg-dark m-b-30 d-none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-8 m-auto text-white p-t-40 p-b-90">

                                            <h1 class="fw-300 text-center">Masukkan NIK orang yang anda cari!
                                            </h1>
                                            <p id="delete_id_hide" hidden></p>
                                            <p class="p-t-30 form-dark">
                                                <input type="search" id="delete_search_by_nik" placeholder="Search Something" class=" form-control form-control-lg">
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="container-pull col-md-12 mb-10 p-0" id="delete_form">
                                <div class="row mb-3 w-100" style="padding:20px 20px;">
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">NIK</span> :<br><span class="value_modal" id="d_nik" style="font-size:16px;font-weight:bold;"></span>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Nama Warga</span> :<br><span class="value_modal" id="d_nama_warga" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Agama</span> :<br><span class="value_modal" id="d_agama" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Status Perkawinan</span> :<br><span class="value_modal" id="d_status_perkawinan" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                </div>
                                <div class="row mb-3 w-100" style="padding:0px 20px;">
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Jenis Kelamin</span> :<br><span class="value_modal" id="d_jenis_kelamin" style="font-size:16px;font-weight:bold;"></span>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Tempat Lahir</span> :<br><span class="value_modal" id="d_tempat_lahir" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Tanggal Lahir</span> :<br><span class="value_modal" id="d_tanggal_lahir" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">RT/RW</span> :<br><span class="value_modal" id="d_rt_rw" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                </div>
                                <div class="row mb-3 w-100" style="padding:0px 20px;">
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Alamat</span> :<br><span class="value_modal" id="d_alamat" style="font-size:16px;font-weight:bold;"></span>
                                    </div>
                                    <div class="col-md-3 pl-3">
                                        <span class="list_modal">Kelurahan Desa</span> :<br><span class="value_modal" id="d_kelurahan_desa" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 mb-2 pl-3">
                                        <span class="list_modal">Kecamatan</span> :<br><span class="value_modal" id="d_kecamatan" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-3 mb-2 pl-3">
                                        <span class="list_modal">Kewarganegaraan</span> :<br><span class="value_modal" id="d_kewarganegaraan" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                </div>
                                <hr>
                                <div class="row w-100">
                                    <div class="col-md-12" id="button-modals" style="padding:20px 20px">
                                        <button type="button" id="hapus-data" class="btn ml-2 mr-2 btn-danger float-right">
                                            <i class="mdi mdi-cube-outline"></i> Hapus Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
