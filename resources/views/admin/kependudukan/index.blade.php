@extends('layouts.admin')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">
    <style>
        tr:hover{
            cursor: pointer;
            background-color: #e3ebf6 !important;
            transition: background-color 200ms;
        }
        .datepicker{z-index:9999 !important}

    </style>
@endsection

@section('content')
<section class="admin-content ">

        <div class="bg-dark m-b-30">
            <div class="container-fluid">
                <div class="row p-b-60 p-l-30 p-t-60">

                    <div class="col-md-6 text-white p-b-30">
                        <div class="media">
                            <div class="media-body m-auto">
                                <h2><strong>Daftar Penduduk Desa</strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-r-40">
                        <a href="{{route('penduduk.desa.create')}}" type="button" class="btn  m-b-30 ml-2 mr-2 btn-primary text-white float-right"><i
                                class="mdi mdi-playlist-plus"></i> Tambah Penduduk
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid pull-up">
            <div class="row p-l-30 p-r-30">
                <div class="col-12">
                    <p id="id_hide" hidden></p>
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="table-responsive p-t-10">
                                <table id="kependudukan-table" class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>ALAMAT</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </section>

    @include('parts.modals.kependudukan.detail_data')
    @include('parts.modals.kependudukan.update_data')

@endsection

@section('custom_script')

    <!--Additional Page includes-->
    <script src="{{ asset('atmos/getting started/light/assets/vendor/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('atmos/demos/light/assets/vendor/apexchart/apexcharts.min.js') }}"></script>
    <script>

        var dataTable = $('#kependudukan-table').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "searchDelay": 350,
            "searching": true,
            "scrollX": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: '{{route("penduduk.desa.datatable")}}',
                // dataSrc: '',
                // draw: 'original.draw'
            },
            "columns": [
                { "name": "id", "data": "id"},
                { "name": "nik", "data": "nik" },
                { "name": "nama", "data": "nama" },
                { "name": "jenis_kelamin", "data": function(data){
                    var gender = data.jenis_kelamin;
                    var res = "";

                    if(gender == "L"){
                        res = "LAKI-LAKI"
                    }else{
                        res = "PEREMPUAN"
                    }

                    return res;
                } },
                { "name": "rt", "data": "rt" },
                { "name": "rw", "data": "rw" },
                { "name": "alamat", "data": "alamat" },
            ],
            "order" :[[ 0, 'desc' ]]
        });

        var nik = $('#u_nik');
        var nama = $('#u_nama_warga');
        var agama = $('#u_agama');
        var rt = $('#u_rt');
        var rw = $('#u_rw');
        var kelurahan = $('#u_kelurahan_desa');
        var status_perkawinan = $('#u_status_perkawinan');
        var jenis_kelamin = $('#u_jenis_kelamin');
        var alamat = $('#u_alamat');
        var kecamatan = $('#u_kecamatan');
        var kewarganegaraan = $('#u_kewarganegaraan');
        var tempat_lahir = $('#u_tempat_lahir');
        var tanggal_lahir = $('#u_tanggal_lahir');

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

        $('.dataTable').on('click', 'tbody tr', function() {
            var data = dataTable.row(this).data();
            var res = "";

            if(data.jenis_kelamin == "L"){
                res = "LAKI-LAKI"
            }else{
                res = "PEREMPUAN"
            }

            $('#kependudukanModalViewer').modal('show');
            $('#nama_warga').html(data.nama);
            $('#agama').html(data.agama);
            $('#rt_rw').html(data.rt+'/'+data.rw);
            $('#kelurahan_desa').html(data.kelurahan_desa);
            $('#status_perkawinan').html(data.status_perkawinan);
            $('#nik').html(data.nik);
            $('#status_nikah').html(data.status_nikah);
            $('#jenis_kelamin').html(res);
            $('#alamat').html(data.alamat);
            $('#kecamatan').html(data.kecamatan);
            $('#tempat_lahir').html(data.tempat_lahir);
            $('#tanggal_lahir').html(data.tanggal_lahir);
            $('#kewarganegaraan').html(data.kewarganegaraan);

            $('#id_hide').val(data.id)

            $('#button-modal').html(`
            <button type="button" id="hapus-data" class="btn ml-2 mr-2 btn-danger float-right">
                <i class="mdi mdi-cube-outline"></i> Hapus Data
            </button>
            <button type="button" id="perbarui-data" class="btn ml-2 mr-2 btn-primary float-right">
                <i class="mdi mdi-comment-outline"></i> Perbarui Data
            </button>
            `);

            $('#perbarui-data').click(()=>{
                $('#kependudukanModalViewer').modal('hide');
                $('#updateKependudukanModalViewer').modal('show');

                var res2
                if(data.jenis_kelamin == "PEREMPUAN"){
                    res2 = "P"
                }else{
                    res2 = "L"
                }

                $('#u_nama_warga').val(data.nama);
                $('#u_agama').val(data.agama);
                $('#u_rt').val(data.rt);
                $('#u_rw').val(data.rw);
                $('#u_kelurahan_desa').val(data.kelurahan_desa);
                $('#u_status_perkawinan').val(data.status_perkawinan);
                $('#u_nik').val(data.nik);
                $('#u_status_nikah').val(data.status_nikah);
                $('#u_jenis_kelamin').val(data.jenis_kelamin);
                $('#u_alamat').val(data.alamat);
                $('#u_kecamatan').val(data.kecamatan);
                $('#u_tempat_lahir').val(data.tempat_lahir);
                $('#u_tanggal_lahir').val(data.tanggal_lahir);
                $('#u_kewarganegaraan').val(data.kewarganegaraan);

            });

            $('#hapus-data').click((e)=>{
                e.preventDefault();

                var formData = new FormData()
                formData.append('id', $('#id_hide').val());

                axios.post('{{route("penduduk.desa.delete")}}', formData).then((res) => {

                    $('#kependudukanModalViewer').modal('hide');
                    Swal.fire({
                        title: 'Success',
                        text: "Data Berhasil Dihapus!",
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
                        if (result.value) {
                            // dataTable.draw();
                            location.reload();
                        }
                    });

                }).catch((err) => {
                    return showModal('error', err.response.data.message);
                });
            })

            $('#simpan-data-update').click((e)=>{
                e.preventDefault();

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

                // console.log($('#id_hide').val());
                var formData = new FormData()
                formData.append('id', $('#id_hide').val());
                formData.append('nama', $('#u_nama_warga').val());
                formData.append('agama', $('#u_agama').val());
                formData.append('rt', $('#u_rt').val());
                formData.append('rw', $('#u_rw').val());
                formData.append('kelurahan_desa', $('#u_kelurahan_desa').val());
                formData.append('status_perkawinan', $('#u_status_perkawinan').val());
                formData.append('nik', $('#u_nik').val());
                formData.append('jenis_kelamin', $('#u_jenis_kelamin').val());
                formData.append('alamat', $('#u_alamat').val());
                formData.append('kecamatan', $('#u_kecamatan').val());
                formData.append('tempat_lahir', $('#u_tempat_lahir').val());
                formData.append('tanggal_lahir', $('#u_tanggal_lahir').val());

                axios.post('{{route("penduduk.desa.update")}}', formData).then((res) => {

                    $('#updateKependudukanModalViewer').modal('hide');
                    Swal.fire({
                        title: 'Success',
                        text: "Data Berhasil Diperbarui!",
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
                        if (result.value) {
                            dataTable.draw();
                            location.reload();
                        }
                    });

                }).catch((err) => {
                    // hideLoader();
                    // alert(err.response.data.message)
                    return showModal('error', err.response.data.message);
                });
            })
        })


    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
