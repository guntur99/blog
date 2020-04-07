<!---Modal-->
    <div class="modal fade" id="updateBeritaModalViewer" data-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            {{-- <form id="manageLeads_filter" class="w-100"> --}}
                <div class="modal-content">
                    <div class="modal-header">
                        <p id="update_id_hide" hidden></p>
                        <h5 class="modal-title">Mode Pembaruan Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--card begins-->
                        <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="u_judul">Judul Berita</label>
                                    <input autocomplete="off" type="text" class="form-control" name="u_judul" id="u_judul"
                                     placeholder="Judul Berita" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-row col-md-12">
                                    <div class="form-group col-md-6">
                                        <div>
                                            <label for="u_kategori_id">Kategori Berita</label>
                                            <dv class="col-md-12">
                                                <select class="form-control" id="u_kategori_id" name="u_kategori_id" required>
                                                    {{-- @foreach($kategori as $k)
                                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </dv>
                                            <div class="valid-feedback">
                                                Terisi, silahkan cek kembali!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masih kosong, silahkan diisi!!
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <label>Tag Berita</label>
                                            <select class="form-control select2" multiple="multiple" id="tag-berita-picker"
                                                name=tag_berita_id[]>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <label for="u_desc_singkat">Deskripsi Singkat </label>
                                            <textarea id="u_desc_singkat" class="form-control" rows="10" name="u_desc_singkat" required></textarea>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <div>
                                            <label for="last_name">Cover Berita*</label>
                                            <div class="custom-file" id="custom_file">
                                                <input type="file" class="custom-file-input" id="file_gambar" accept=".png,.jpg,.jpeg" onchange="fileGambar(this)">
                                                <label class="custom-file-label" for="file_gambar"
                                                    >Pilih Gambar</label>
                                                <textarea id="file_gambar_lain" style="display: none;"></textarea>

                                                <div class="valid-feedback">
                                                    Terisi, silahkan cek kembali!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Masih kosong, silahkan diisi!!
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="p-b-10 text-center">
                                            <img class="rounded" id="cover_berita" src="{{ asset('img/dummy-image-landscape-1-1024x800.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="u_desc">Isi Berita </label>
                                    <textarea id="u_desc" class="form-control desc_berita" rows="5" name="u_desc" required></textarea>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    </div>
