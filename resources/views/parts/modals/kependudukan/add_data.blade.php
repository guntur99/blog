<!---Modal-->
    <div class="modal fade" id="addKependudukanModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title">Location (<span id="location_name_modal_title"></span>) - Facility (<span id="facility_name_modal_title"></span>) - Client (<span id="client_name_modal_title"></span>)</h5> --}}
                        <h5 class="modal-title">Mode Penambahan Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--card begins-->
                        <div class="row">
                            <div class="col-md-12 mb-10 p-0">
                                <div class="row mb-3 w-100" style="padding:20px 20px;">
                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">NIK</span> :<br>
                                        <input rules="number-only" type="number" class="form-control value_modal" id="a_nik"
                                        onkeyup="this.value = this.value.toUpperCase();" placeholder="NIK" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>

                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Nama Warga</span> :<br>
                                        <input type="text" class="form-control value_modal" id="a_nama_warga"
                                        onkeyup="this.value = this.value.toUpperCase();" placeholder="Nama Warga" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>

                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Agama</span> :<br>
                                        <input type="text" class="form-control value_modal" id="a_agama"
                                            onkeyup="this.value = this.value.toUpperCase();" placeholder="Agama" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 w-100" style="padding:0px 20px;">
                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Status Perkawinan</span> :<br>
                                        <input type="text" class="form-control value_modal" id="a_status_perkawinan"
                                         onkeyup="this.value = this.value.toUpperCase();" placeholder="Status Perkawinan" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Jenis Kelamin</span> :<br>
                                        <select  class="form-control select" id="a_jenis_kelamin">
                                            <option selected disabled>Pilih Gender</option>
                                            <option value="L" id="l_gender">LAKI-LAKI</option>
                                            <option value="P" id="p_gender">PEREMPUAN</option>
                                        </select>
                                        {{-- <input type="text" class="form-control value_modal" id="a_jenis_kelamin"
                                            onkeyup="this.value = this.value.toUpperCase();" placeholder="Jenis Kelamin"> --}}
                                    </div>
                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Tempat Lahir</span> :<br>
                                        <input type="text" class="form-control value_modal" id="a_tempat_lahir"
                                        onkeyup="this.value = this.value.toUpperCase();" placeholder="Tempat Lahir" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 w-100" style="padding:0px 20px;">
                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Tanggal Lahir</span> :<br>
                                        <input type="text" class="form-control value_modal tgl" id="a_tanggal_lahir"
                                        onkeyup="this.value = this.value.toUpperCase();" placeholder="Tanggal Lahir" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>
                                    <div class="col-md-2 pl-3">
                                        <span class="list_modal">RT</span> :<br>
                                        <input rules="number-only" type="number" class="form-control value_modal" id="a_rt" placeholder="RT" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                        <span class="value_modal" id="a_rt" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-2 pl-3">
                                        <span class="list_modal">RW</span> :<br>
                                        <input rules="number-only" type="number" class="form-control value_modal" id="a_rw" placeholder="RW" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                        <span class="value_modal" id="a_rw" style="font-size:16px;font-weight:bold;"></span><br>
                                    </div>
                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Alamat</span> :<br>
                                        <input type="text" class="form-control value_modal" id="a_alamat"
                                        onkeyup="this.value = this.value.toUpperCase();" placeholder="Alamat" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 w-100" style="padding:0px 20px;">
                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Kelurahan Desa</span> :<br>
                                        <input type="text" class="form-control value_modal" id="a_kelurahan_desa"
                                        onkeyup="this.value = this.value.toUpperCase();" placeholder="Kelurahan Desa" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2 pl-3">
                                        <span class="list_modal">Kecamatan</span> :<br>
                                        <input type="text" class="form-control value_modal" id="a_kecamatan"
                                        onkeyup="this.value = this.value.toUpperCase();" placeholder="Kecamatan" required>
                                        <div class="valid-feedback">
                                            Terisi, silahkan cek kembali!
                                        </div>
                                        <div class="invalid-feedback">
                                            Masih kosong, silahkan diisi!!
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-3">
                                        <span class="list_modal">Kewarganegaraan</span> :<br>
                                        <input type="text" class="form-control value_modal" id="a_kewarganegaraan"
                                        onkeyup="this.value = this.value.toUpperCase();" placeholder="Kewarganegaraan" required>
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
                                    <div class="col-md-12" id="button-modals" style="padding:20px 20px">
                                        <button type="button" id="btn_store_data" class="btn ml-2 mr-2 btn-success float-right">
                                            <i class="mdi mdi-cube-outline"></i> Tambah Data
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
