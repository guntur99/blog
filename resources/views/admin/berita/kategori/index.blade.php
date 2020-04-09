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
                                <h2><strong>Daftar Kategori Berita</strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-r-40">
                        <button id="buat_kategori_baru" type="button" class="btn  m-b-30 ml-2 mr-2 btn-primary text-white float-right"><i
                                class="mdi mdi-playlist-plus"></i> Buat Kategori Berita
                        </button>
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
                                <table id="kategori-berita-table" class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kategori</th>
                                        <th>Dibuat Tanggal</th>
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

    @include('parts.modals.berita.kategori.create_data')
    @include('parts.modals.berita.kategori.update_data')

@endsection

@section('custom_script')

    <!--Additional Page includes-->
    <script src="{{ asset('atmos/getting started/light/assets/vendor/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('atmos/demos/light/assets/vendor/apexchart/apexcharts.min.js') }}"></script>
    <script>

        var dataTable = $('#kategori-berita-table').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "searchDelay": 350,
            "scrollX": true,
            "searching": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: '{{route("kategori.desa.datatable")}}',
                // dataSrc: '',
                // draw: 'original.draw'
            },
            "columns": [
                { "name": "id", "data": "id"},
                { "name": "nama", "data": "nama" },
                { "name": "created_at", "data": function(data){
                    var created_at = data.created_at;

                    return moment(created_at).format('DD MMMM YYYY');
                } },
            ],
            "order" :[[ 0, 'desc' ]]
        });

        var nama_kategori = $('#nama_kategori');

        nama_kategori.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                nama_kategori.addClass('is-invalid');
                nama_kategori.removeClass('is-valid');
            }else{
                nama_kategori.addClass('is-valid');
                nama_kategori.removeClass('is-invalid');
            }

        });

        var u_nama_kategori = $('#u_nama_kategori');

        $('.dataTable').on('click', 'tbody tr', function() {
            var data = dataTable.row(this).data();
            // console.log(data.nama);

            $('#updateKategoriModalViewer').modal('show');
            $('#u_nama_kategori').val(data.nama);
            $('#id_hide').val(data.id);

            $('#perbarui_data_kategori').click((e)=>{
                $('#u_nama_kategori').prop("disabled", false);
                $('#btn_perbarui_hapus').addClass('d-none');
                $('#simpan_data_kategori').removeClass('d-none');

                u_nama_kategori.on('input', (e)=> {
                    var value = e.target.value

                    if (value.length === 0) {
                        u_nama_kategori.addClass('is-invalid');
                        u_nama_kategori.removeClass('is-valid');
                    }else{
                        u_nama_kategori.addClass('is-valid');
                        u_nama_kategori.removeClass('is-invalid');
                    }

                })

            });

            $('#simpan_data_kategori').click((e)=>{
                e.preventDefault();

                $('#u_nama_kategori').prop("disabled", true);
                $('#btn_perbarui_hapus').removeClass('d-none');
                $('#simpan_data_kategori').addClass('d-none');
                $('#updateKategoriModalViewer').modal('hide');

                ((u_nama_kategori.val() == "") ? u_nama_kategori.addClass('is-invalid') : u_nama_kategori.addClass('is-valid'));

                // console.log($('#id_hide').val());
                var formData = new FormData()
                formData.append('id', $('#id_hide').val());
                formData.append('nama', u_nama_kategori.val());

                axios.post('{{route("update.kategori.berita.desa")}}', formData).then((res) => {

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
                            ((u_nama_kategori.val() == "") ? u_nama_kategori.removeClass('is-invalid') : u_nama_kategori.removeClass('is-valid'));
                        }
                    });

                }).catch((err) => {
                    return showModal('error', err.response.data.message);
                });
            });

            $('#hapus_data_kategori').click((e)=>{
                e.preventDefault();

                $('#updateKategoriModalViewer').modal('hide');

                var formData = new FormData()
                formData.append('id', $('#id_hide').val());

                axios.post('{{route("delete.kategori.berita.desa")}}', formData).then((res) => {

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
                            dataTable.draw();
                            // location.reload();
                        }
                    });

                }).catch((err) => {
                    return showModal('error', err.response.data.message);
                });
            });

        });

        $('#buat_kategori_baru').click(()=>{
            $('#createKategoriModalViewer').modal('show');
        });

        $('#buat_data_kategori').click((e)=>{
            e.preventDefault();

            ((nama_kategori.val() == "") ? nama_kategori.addClass('is-invalid') : nama_kategori.addClass('is-valid'));

            var formData = new FormData()
            formData.append('nama', nama_kategori.val());

            axios.post('{{route("store.kategori.berita.desa")}}', formData).then((res) => {

                Swal.fire({
                    title: 'Success',
                    text: "Buat Kategori Berhasil!",
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
                    if(result.value){
                        $('#createKategoriModalViewer').modal('hide');
                        dataTable.draw();
                    }
                });

            }).catch((err) => {
                return 'error';
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
