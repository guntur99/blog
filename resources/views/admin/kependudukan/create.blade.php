@extends('layouts.admin')


@section('content')

    <section class="admin-content">
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="bg-dark m-b-30">
            <div class="container-fluid">
                <div class="row p-b-60 p-l-30 p-t-60">
                    <div class="col-md-6 text-white p-b-30">
                        <div class="media">
                            <div class="media-body m-auto">
                                <h1>Tambah Penduduk</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-r-40">
                        <button type="button" id="import_excel_button" class="btn  m-b-30 ml-2 mr-2 btn-success float-right"><i
                                class="mdi mdi-cake-variant"></i> Import Excel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pull-up">
            <div class="row p-l-30 p-r-30">
                <div class="col-12">

                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-body">
                            {{-- <form id="location-create"> --}}

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nik">NIK</label>
                                    <input rules="number-only" type="number" class="form-control" name="nik" id="nik"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Nomor Induk Kependudukan" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="nama">Nama Penduduk</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Nama Penduduk" required>
                                    {{-- <input rules="number-only" type="number" class="form-control" name="phone" id="phone" placeholder="Phone"> --}}
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" name="agama" id="agama"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Agama" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="status_perkawinan">Status Perkawinan</label>
                                    <input type="text" class="form-control" name="status_perkawinan" id="status_perkawinan"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Status Perkawinan" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control select" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="L">LAKI-LAKI</option>
                                        <option value="P">PEREMPUAN</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Tempat Lahir" required>
                                    {{-- <textarea id="address" name="address" class="form-control" cols="30" rows="10"></textarea> --}}
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control value_modal tgl" name="tanggal_lahir"
                                    id="tanggal_lahir" placeholder="Tanggal Lahir" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="rt">RT</label>
                                    <input rules="number-only" type="number" class="form-control" name="rt" id="rt" placeholder="RT" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="rw">RW</label>
                                    <input rules="number-only" type="number" class="form-control" name="rw" id="rw" placeholder="RW" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Alamat" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="kelurahan">Kelurahan</label>
                                    <input type="text" class="form-control" name="kelurahan" id="kelurahan"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Kelurahan" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Kecamatan" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Kewarganegaraan" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" id="btn_submit" class="btn btn-primary ml-3 text-right float-right">Simpan Data</button>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </section>


    @include('parts.modals.kependudukan.import_excel')


@endsection
@section('custom_script')

    <script>

        $('.tgl').datepicker({
            format: 'yyyy-mm-dd'
        });

        $('#importExcelModalViewer').on('hidden.bs.modal', function (e) {
        });

        $('#address').trumbowyg();

        $('select').select2();

        $('#import_excel_button').click(()=>{
            $('#importExcelModalViewer').modal('show');
        })

        var nik = $('#nik');
        var nama = $('#nama');
        var agama = $('#agama');
        var rt = $('#rt');
        var rw = $('#rw');
        var kelurahan = $('#kelurahan');
        var status_perkawinan = $('#status_perkawinan');
        var jenis_kelamin = $('#jenis_kelamin');
        var alamat = $('#alamat');
        var kecamatan = $('#kecamatan');
        var kewarganegaraan = $('#kewarganegaraan');
        var tempat_lahir = $('#tempat_lahir');
        var tanggal_lahir = $('#tanggal_lahir');

        nik.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                nik.addClass('is-invalid');
                nik.removeClass('is-valid');
            }else{
                nik.addClass('is-valid');
                nik.removeClass('is-invalid');
            }

        })

        nama.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                nama.addClass('is-invalid');
                nama.removeClass('is-valid');
            }else{
                nama.addClass('is-valid');
                nama.removeClass('is-invalid');
            }

        })

        agama.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                agama.addClass('is-invalid');
                agama.removeClass('is-valid');
            }else{
                agama.addClass('is-valid');
                agama.removeClass('is-invalid');
            }

        })

        rt.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                rt.addClass('is-invalid');
                rt.removeClass('is-valid');
            }else{
                rt.addClass('is-valid');
                rt.removeClass('is-invalid');
            }

        })

        rw.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                rw.addClass('is-invalid');
                rw.removeClass('is-valid');
            }else{
                rw.addClass('is-valid');
                rw.removeClass('is-invalid');
            }

        })

        kelurahan.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                kelurahan.addClass('is-invalid');
                kelurahan.removeClass('is-valid');
            }else{
                kelurahan.addClass('is-valid');
                kelurahan.removeClass('is-invalid');
            }

        })

        status_perkawinan.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                status_perkawinan.addClass('is-invalid');
                status_perkawinan.removeClass('is-valid');
            }else{
                status_perkawinan.addClass('is-valid');
                status_perkawinan.removeClass('is-invalid');
            }

        })

        jenis_kelamin.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                jenis_kelamin.addClass('is-invalid');
                jenis_kelamin.removeClass('is-valid');
            }else{
                jenis_kelamin.addClass('is-valid');
                jenis_kelamin.removeClass('is-invalid');
            }

        })

        alamat.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                alamat.addClass('is-invalid');
                alamat.removeClass('is-valid');
            }else{
                alamat.addClass('is-valid');
                alamat.removeClass('is-invalid');
            }

        })

        kecamatan.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                kecamatan.addClass('is-invalid');
                kecamatan.removeClass('is-valid');
            }else{
                kecamatan.addClass('is-valid');
                kecamatan.removeClass('is-invalid');
            }

        })

        kewarganegaraan.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                kewarganegaraan.addClass('is-invalid');
                kewarganegaraan.removeClass('is-valid');
            }else{
                kewarganegaraan.addClass('is-valid');
                kewarganegaraan.removeClass('is-invalid');
            }

        })

        tempat_lahir.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                tempat_lahir.addClass('is-invalid');
                tempat_lahir.removeClass('is-valid');
            }else{
                tempat_lahir.addClass('is-valid');
                tempat_lahir.removeClass('is-invalid');
            }

        })

        $('#btn_submit').click((e) => {
            e.preventDefault();
                console.log(nik.val());

            ((nik.val() == "") ? nik.addClass('is-invalid') : nik.addClass('is-valid'));
            ((nama.val() == "") ? nama.addClass('is-invalid') : nama.addClass('is-valid'));
            ((agama.val() == "") ? agama.addClass('is-invalid') : agama.addClass('is-valid'));
            ((rt.val() == "") ? rt.addClass('is-invalid') : rt.addClass('is-valid'));
            ((rw.val() == "") ? rw.addClass('is-invalid') : rw.addClass('is-valid'));
            ((kelurahan.val() == "") ? kelurahan.addClass('is-invalid') : kelurahan.addClass('is-valid'));
            ((status_perkawinan.val() == "") ? status_perkawinan.addClass('is-invalid') : status_perkawinan.addClass('is-valid'));
            ((jenis_kelamin.val() == "") ? jenis_kelamin.addClass('is-invalid') : jenis_kelamin.addClass('is-valid'));
            ((alamat.val() == "") ? alamat.addClass('is-invalid') : alamat.addClass('is-valid'));
            ((kecamatan.val() == "") ? kecamatan.addClass('is-invalid') : kecamatan.addClass('is-valid'));
            ((kewarganegaraan.val() == "") ? kewarganegaraan.addClass('is-invalid') : kewarganegaraan.addClass('is-valid'));
            ((tempat_lahir.val() == "") ? tempat_lahir.addClass('is-invalid') : tempat_lahir.addClass('is-valid'));

            if(tanggal_lahir.val() == ""){
                tanggal_lahir.addClass('is-invalid');
                tanggal_lahir.removeClass('is-valid');
            }else{
                tanggal_lahir.addClass('is-valid')
                tanggal_lahir.removeClass('is-invalid');
            }
            var formData = new FormData()

            formData.append('nik', nik.val());
            formData.append('nama', nama.val());
            formData.append('agama', agama.val());
            formData.append('rt', rt.val());
            formData.append('rw', rw.val());
            formData.append('kelurahan_desa', kelurahan.val());
            formData.append('status_perkawinan', status_perkawinan.val());
            formData.append('jenis_kelamin', jenis_kelamin.val());
            formData.append('alamat', alamat.val());
            formData.append('kecamatan', kecamatan.val());
            formData.append('kewarganegaraan', kewarganegaraan.val());
            formData.append('tempat_lahir', tempat_lahir.val());
            formData.append('tanggal_lahir', tanggal_lahir.val());

            axios.post('{{route("penduduk.desa.store")}}', formData).then((res) => {
                hideLoader();
                // return false;
                Swal.fire({
                    title: 'Success',
                    text: "Add Data Success",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonText: 'Close',
                    allowOutsideClick: false,
                    buttonsStyling: false,
                    customClass: {
                        confirmButton: 'btn btn-success px-3 ml-2',
                        title: 'swal-title-custom',
                        content: 'swal-text-custom mb-2',
                        popup: 'swal-popup-custom'
                    }
                }).then((result) => {
                    // return false;
                    window.location.href = "{{route('penduduk.desa.index')}}";
                });

            }).catch((err) => {
                // hideLoader();
            return 'error';
            });

        });

    </script>
@endsection
