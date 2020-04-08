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
                                <h2><strong>Buat Berita Baru</strong></h2>
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
                                    <label for="judul">Judul Berita</label>
                                    <input autocomplete="off" type="text" class="form-control" name="judul" id="judul"
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
                                            <label for="kategori_id">Kategori Berita</label>
                                            <select class="form-control select2" id="kategori_id" name="kategori_id" required>
                                                @foreach($kategori as $k)
                                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                                @endforeach
                                            </select>
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
                                            <label for="desc">Deskripsi Singkat </label>
                                            <textarea id="desc_singkat" class="form-control" rows="10" name="desc" id="desc" required></textarea>
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
                                    <label for="desc">Isi Berita </label>
                                    <textarea id="desc" class="form-control desc_berita" rows="5" name="desc" id="desc" required></textarea>
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


    @include('parts.modals.kependudukan.import_excel')


@endsection
@section('custom_script')

    <script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/trumbowyg.min.js') }}"></script>
    <script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/plugins/pasteembed/trumbowyg.pasteembed.min.js') }}"></script>
    <script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/plugins/pasteimage/trumbowyg.pasteimage.min.js') }}"></script>
    <script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/plugins/resizimg/trumbowyg.resizimg.min.js') }}"></script>
    <script>

        $('.tgl').datepicker({
            format: 'yyyy-mm-dd'
        });

        $('#importExcelModalViewer').on('hidden.bs.modal', function (e) {
        });

        function fileGambar(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    if(e.target.result == undefined){
                        alert('Something Wrong!')
                    }
                    // console.log(e.target.result);

                    $('#cover_berita')
                        .attr('src', e.target.result)
                        // .width(150)
                        // .height(200)
                        ;

                    $('#file_gambar_lain').val(e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('.desc_berita').trumbowyg();

        $('.select2').select2();

        let tagsId = $('#tag-berita-picker');
        let product = [];

        tagsId.select2({
            // tags: true,
            placeholder: 'Pilih Tag Berita',
            width: '100%',
            // multiple: true,
            // MultipleSelection: true,
            // tokenSeparators: ['+1'],
            // dropdownParent: $('#addWishlistsViewer'),
            ajax: {
                url: '{{route("tag.berita.desa.datatable")}}',
                dataType: 'json',
                data: function(params) {
                    return {
                        start: params.page == undefined || params.page != NaN ? 0 : (params.page-1) * 25,
                        length: 25,
                        columns: {
                            0:{
                                name: 'nama',
                                orderable: true,
                                searchable: true
                            },
                        },
                        search: {value: params.term},
                        order: {0:{dir:'asc'}}
                    }
                },
                processResults: function (data, params) {
                    // console.log(data.data);
                    // console.log(params);

                    params.page = params.page || 1;
                    var newData = []
                    $.each(data.data, function(key, val){
                        newData[key] = {'id' : val.id, 'text' : val.nama };
                    })

                    data.results = newData;

                    return {
                        results: data.results,
                        pagination: {
                            more: (params.page * 25) < data.recordsFiltered
                        }
                    }

                },
                // cache: true
            },
            // insertTag: function (data, tag) {
            //     data.push(tag);
            // },
        });

        $('#import_excel_button').click(()=>{
            $('#importExcelModalViewer').modal('show');
        })

        var judul = $('#judul');
        var kategori_id = $('#kategori_id');
        var desc_singkat = $('#desc_singkat');
        var desc = $('#desc');
        var image = $('#file_gambar_lain');

        judul.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                judul.addClass('is-invalid');
                judul.removeClass('is-valid');
            }else{
                judul.addClass('is-valid');
                judul.removeClass('is-invalid');
            }

        })

        kategori_id.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                kategori_id.addClass('is-invalid');
                kategori_id.removeClass('is-valid');
            }else{
                kategori_id.addClass('is-valid');
                kategori_id.removeClass('is-invalid');
            }

        })

        desc_singkat.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                desc_singkat.addClass('is-invalid');
                desc_singkat.removeClass('is-valid');
            }else{
                desc_singkat.addClass('is-valid');
                desc_singkat.removeClass('is-invalid');
            }

        })

        desc.on('input', (e)=> {
            var value = e.target.value

            if (value.length === 0) {
                desc.addClass('is-invalid');
                desc.removeClass('is-valid');
            }else{
                desc.addClass('is-valid');
                desc.removeClass('is-invalid');
            }

        })

        $('#btn_buat_berita').click((e) => {
            e.preventDefault();

            ((judul.val() == "") ? judul.addClass('is-invalid') : judul.addClass('is-valid'));
            ((kategori_id.val() == "") ? kategori_id.addClass('is-invalid') : kategori_id.addClass('is-valid'));
            ((desc_singkat.val() == "") ? desc_singkat.addClass('is-invalid') : desc_singkat.addClass('is-valid'));
            ((desc.val() == "") ? desc.addClass('is-invalid') : desc.addClass('is-valid'));

            var formData = new FormData()
            formData.append('judul', judul.val());
            formData.append('kategori_id', kategori_id.val());
            formData.append('tag_id', tagsId.val());
            formData.append('desc_singkat', desc_singkat.val());
            formData.append('desc', desc.val());
            formData.append('image', image.val());
            formData.append('slug', string_to_slug(judul.val()));

            axios.post('{{route("berita.desa.store")}}', formData).then((res) => {

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
                    window.location.href = "{{route('berita.desa.index')}}";
                });

            }).catch((err) => {
                return 'error';
            });

        });

        function string_to_slug (str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
            var to   = "aaaaeeeeiiiioooouuuunc------";
            for (var i=0, l=from.length ; i<l ; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        }

    </script>
@endsection
