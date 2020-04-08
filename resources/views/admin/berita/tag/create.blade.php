@extends('layouts.admin')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/ui/trumbowyg.min.css') }}">
@endsection

@section('content')

    <section class="admin-content">
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="bg-dark m-b-30">
            <div class="container-fluid">
                <div class="row p-b-60 p-l-30 p-t-60">
                    <div class="col-md-6 text-white p-b-30">
                        <div class="media">
                            <div class="media-body m-auto">
                                <h2><strong>Buat Tag Baru</strong></h2>
                            </div>
                        </div>
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
                                <div class="form-group col-md-12">
                                    <label for="nama_tag">Nama Tag</label>
                                    <input autocomplete="off" type="text" class="form-control" name="nama_tag" id="nama_tag"
                                     placeholder="Nama Tag" required>
                                    <div class="valid-feedback">
                                        Terisi, silahkan cek kembali!
                                    </div>
                                    <div class="invalid-feedback">
                                        Masih kosong, silahkan diisi!!
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="form-group">
                                <button type="submit" id="btn_buat_berita" class="btn btn-primary ml-3 text-right float-right">Buat Berita</button>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </section>


@endsection
@section('custom_script')

    <script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/trumbowyg.min.js') }}"></script>
    <script>

        $('.tgl').datepicker({
            format: 'yyyy-mm-dd'
        });



        var nama_tag = $('#nama_tag');

        nama_tag.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                nama_tag.addClass('is-invalid');
                nama_tag.removeClass('is-valid');
            }else{
                nama_tag.addClass('is-valid');
                nama_tag.removeClass('is-invalid');
            }

        })

        $('#btn_buat_berita').click((e) => {
            e.preventDefault();

            ((nama_tag.val() == "") ? nama_tag.addClass('is-invalid') : nama_tag.addClass('is-valid'));

            var formData = new FormData()
            formData.append('nama', nama_tag.val());

            axios.post('{{route("store.tag.berita.desa")}}', formData).then((res) => {

                Swal.fire({
                    title: 'Success',
                    text: "Buat Berita Berhasil!",
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
                    window.location.href = "{{route('tag.berita.desa')}}";
                });

            }).catch((err) => {
                return 'error';
            });

        });

    </script>
@endsection
