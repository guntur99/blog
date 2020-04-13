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
                                <h2><strong>Daftar Informasi Desa</strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-r-40">
                        <a href="{{ route('pemerintahan.desa.create') }}" type="button" class="btn  m-b-30 ml-2 mr-2 btn-primary text-white float-right"><i
                                class="mdi mdi-playlist-plus"></i> Buat Informasi
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
                                <table id="pemerintahan-table" class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Informasi</th>
                                        <th>Kategori</th>
                                        <th>Dibuat Oleh</th>
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

    @include('parts.modals.pemerintahan.detail_data')

@endsection

@section('custom_script')

    <!--Additional Page includes-->
    <script src="{{ asset('atmos/getting started/light/assets/vendor/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('atmos/demos/light/assets/vendor/apexchart/apexcharts.min.js') }}"></script>
    <script>

        var dataTable = $('#pemerintahan-table').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "searchDelay": 350,
            "scrollX": true,
            "searching": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: '{{route("pemerintahan.desa.datatable")}}',
                // dataSrc: '',
                // draw: 'original.draw'
            },
            "columns": [
                { "name": "id", "data": "id"},
                { "name": "judul", "data": "judul" },
                { "name": "category_name", "data": "category_name" },
                { "name": "user_created_by", "data": "user_created_by" },
                { "name": "created_at", "data": function(data){
                    var created_at = data.created_at;

                    return moment(created_at).format('DD MMMM YYYY');
                } },
            ],
            "order" :[[ 0, 'desc' ]]
        });


        $('.desc_berita').trumbowyg();

        $('.select2').select2();

        let product = [];

        function strip(html){
            var doc = new DOMParser().parseFromString(html, 'text/html');
            return doc.body.textContent || "";
        }

        $('.dataTable').on('click', 'tbody tr', function() {
            var data = dataTable.row(this).data();
            // console.log(data);

            var res = "";

            $('#pemerintahanModalViewer').modal('show');
            $('#judul').html(data.judul);
            $('#desc_singkat').html(data.desc_singkat);
            $('#kategori').html('Preview : '+'<b class="text-warning">'+data.category_name+'</b>');
            var created_at = moment(data.created_at).format('DD MMMM YYYY');
            $('#created_at').html(created_at);
            $('#created_by').html(data.user_created_by);
            $('#kategori_id').html('<a href="#!" class="badge badge-soft-primary mr-2"><strong>@'+data.category_name+'</strong></a>');
            // console.log(data.image);

            $('#avatar_cover').html(`
                <img src="`+data.image+`" alt="..." class="avatar-img rounded-circle">
            `);
            // console.log(data.image);

            $('#image_cover').html(`
                <img class="rounded" id="image" src="`+data.image+`" alt="">
            `);
            $('#id_hide').val(data.id)
            $('#button-modal').html(`
            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                <label id="btn_perbarui_berita" class="btn  btn-light active">
                    <i class="mdi mdi-file-check"></i>
                    <input type="radio" name="radio2" id="option1"   checked>
                    Perbarui Berita
                </label>
                <label id="btn_hapus_berita" class="btn  btn-dark">
                    <i class="mdi mdi-file-remove"></i>
                    <input type="radio" name="radio2" id="option2"  > Hapus Berita
                </label>
            </div>
            `);
            $('#btn_perbarui_berita').click(()=>{

                $('#pemerintahanModalViewer').modal('hide');
                axios.get('{{url("edit-info-pemerintahan")}}/'+data.id).then((res) => {
                    window.location.href = '{{url("edit-info-pemerintahan")}}/'+data.id;
                });

            });

            $('#btn_hapus_berita').click((e)=>{
                e.preventDefault();

                $('#pemerintahanModalViewer').modal('hide');

                var formData = new FormData()
                formData.append('id', $('#id_hide').val());

                axios.post('{{route("pemerintahan.desa.delete")}}', formData).then((res) => {

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


    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
