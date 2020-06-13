
@include('parts.modals.asisten')
@include('parts.modals.menu_berita')

@include('parts.modals.berita.tag.create_data')
@include('parts.modals.berita.tag.update_data')

@include('parts.modals.berita.kategori.create_data')
@include('parts.modals.berita.kategori.update_data')

@include('parts.modals.berita.detail_data')
@include('parts.modals.berita.update_data')

<script src="{{ asset('atmos/getting started/light/assets/vendor/jquery/jquery.min.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/jquery-ui/jquery-ui.min.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/popper/popper.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/bootstrap/js/bootstrap.min.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/select2/js/select2.full.min.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/listjs/listjs.min.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/moment/moment.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/js/atmos.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/blockui/jquery.blockUI.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/js/blockui-data.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/js/axios.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/js/main.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/trumbowyg.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/js/form-data.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/datedropper/datedropper.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/dropzone/dropzone.js') }}"   ></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/jquery.mask/jquery.mask.min.js') }}"></script>

<script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/trumbowyg.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/plugins/pasteembed/trumbowyg.pasteembed.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/plugins/pasteimage/trumbowyg.pasteimage.min.js') }}"></script>
<script src="{{ asset('atmos/getting started/light/assets/vendor/trumbowyg/plugins/resizimg/trumbowyg.resizimg.min.js') }}"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('trumbowyg/js/vendor/jquery-3.3.1.min.js') }}"><\/script>')</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.5/xlsx.full.min.js"></script>
<script src="https://compressjs.herokuapp.com/compress.js"></script>
<script src="{{ asset('js/compress.js') }}"></script>
<script src="{{asset('js/berita.js')}}"></script>

<!------------ START JS FOR BERITA DESA -------------->
<script>

    /*---------------- START MODAL SHOW -----------------*/
    // $('#search_id').click(() => {
    //     $('#search_id').addClass('d-none');
    //     $('#asistenModalViewer').modal('show');
    // });

    // $('#asistenModalViewer').on('hidden.bs.modal', function (e) {
    //     $('#search_id').removeClass('d-none');
    // });
    /*---------------- END MODAL SHOW -----------------*/

    // START ADD TAG BERITA
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
    });

    $('#buat_data_tag_global').click((e) => {
        e.preventDefault();

        ((nama_tag.val() == "") ? nama_tag.addClass('is-invalid') : nama_tag.addClass('is-valid'));

        var formData = new FormData()
        formData.append('nama', nama_tag.val());

        axios.post('{{route("store.tag.artikel")}}', formData).then((res) => {

            $('#createTagModalViewer').modal('hide');

            Swal.fire({
                title: 'Success',
                text: "Buat Tag Berhasil!",
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
                    $('#buat_data_tag').removeClass('d-none');
                    $('#buat_data_tag_global').addClass('d-none');
                    ((nama_tag.val() == "") ? nama_tag.addClass('is-valid') : nama_tag.removeClass('is-invalid'), nama_tag.removeClass('is-valid'));
                    window.location.href = "{{route('tag.artikel')}}";
                }
            });

        }).catch((err) => {
            return 'error';
        });

    });
    // END ADD TAG BERITA


    // START UPDATE TAG BERITA
    $("#search_by_tag").keypress(function(event) {
        if (event.keyCode === 13) {

            var tag_now = $("#search_by_tag").val();

            axios.get("{{ route('tag.artikel.datatable') }}").then((res) => {

                var dataTag = res.data.data;
                var test = 0;
                // console.log(dataTag);
                // console.log(tag_now);

                var arrayTag = [];
                for (let index = 0; index < dataTag.length; index++) {
                    arrayTag.push(dataTag[index].nama);
                }

                var arrayResult = arrayTag.filter(item => item.toLowerCase().indexOf(tag_now) > -1);
                // console.log(arrayResult);

                var res = '';

                $.each(arrayResult, function(key, val){

                    // console.log('key: '+key+', => value: '+val);
                    res += `<div class="option-box ml-1 mr-1">
                                <input id="`+key+`" name="bigradios" type="radio" value="`+val+`" onclick="checkTag(`+key+`)">
                                <label for="`+key+`">
                                    <span class="radio-content">
                                        <span class="h6 d-block">`+val+`
                                        </span>
                                    </span>
                                </label>
                            </div>`;

                })


                $('#all_result_tag').html(res);

                $('#simpan_data_tag').click((e)=>{
                    e.preventDefault();

                    var formData = new FormData()
                    formData.append('old_name', $('#update_id_hide').val());
                    formData.append('nama', $('#u_nama_tag').val());

                    axios.post('{{route("update.tag.artikel")}}', formData).then((res) => {

                        $('#updateTagModalViewer').modal('hide');

                        Swal.fire({
                            title: 'Success',
                            text: "Nama Tag Berhasil Diperbarui!",
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
                                window.location.href = "{{route('tag.artikel')}}";
                                // $('#updateKependudukanModalViewer').modal('hide');
                                // location.reload();
                            }
                        });

                    }).catch((err) => {
                        return showModal('error', err.response.data.message);
                    });
                })
            });
        }
    });


    function checkTag(id){

        var checkBox = document.getElementById(id);
        var valueTag = document.getElementById(id).value;

        if (checkBox.checked == true){

            $('#form_nama_tag').removeClass('d-none');
            $('#btn_form_nama_tag').removeClass('d-none');
            $('#btn_perbarui_hapus').addClass('d-none');
            $('#simpan_data_tag').removeClass('d-none');
            $('#u_nama_tag').val(valueTag);
            $('#u_nama_tag').prop('disabled', false);
            $('#update_id_hide').val(valueTag);

        }

    }
    // END UPDATE TAG BERITA


    // START DELETE TAG BERITA
    $("#search_by_tag_hapus").keypress(function(event) {
        if (event.keyCode === 13) {

            var tag_now = $("#search_by_tag_hapus").val();

            axios.get("{{ route('tag.artikel.datatable') }}").then((res) => {

                var dataTag = res.data.data;
                // console.log(dataTag);
                // console.log(tag_now);

                var arrayTag = [];
                for (let index = 0; index < dataTag.length; index++) {
                    arrayTag.push(dataTag[index].nama);
                }

                var arrayResult = arrayTag.filter(item => item.toLowerCase().indexOf(tag_now) > -1);
                // console.log(arrayResult);

                var res = '';

                $.each(arrayResult, function(key, val){

                    // console.log('key: '+key+', => value: '+val);
                    res += `<div class="option-box ml-1 mr-1">
                                <input id="`+key+`" name="bigradios" type="radio" value="`+val+`" onclick="removeTag(`+key+`)">
                                <label for="`+key+`">
                                    <span class="radio-content">
                                        <span class="h6 d-block">`+val+`
                                        </span>
                                    </span>
                                </label>
                            </div>`;

                })


                $('#all_result_tag').html(res);

                $('#hapus_data_tag').click((e)=>{
                    e.preventDefault();

                    var formData = new FormData()
                    formData.append('old_name', $('#update_id_hide').val());
                    formData.append('nama', $('#u_nama_tag').val());

                    axios.post('{{route("delete.tag.artikel")}}', formData).then((res) => {

                        $('#updateTagModalViewer').modal('hide');

                        Swal.fire({
                            title: 'Success',
                            text: "Nama Tag Berhasil Dihapus!",
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
                                window.location.href = "{{route('tag.artikel')}}";
                                // $('#updateKependudukanModalViewer').modal('hide');
                                // location.reload();
                            }
                        });

                    }).catch((err) => {
                        return showModal('error', err.response.data.message);
                    });
                })
            });
        }
    });


    function removeTag(id){

        var checkBox = document.getElementById(id);
        var valueTag = document.getElementById(id).value;

        if (checkBox.checked == true){

            // $('#form_nama_tag').removeClass('d-none');
            $('#btn_form_nama_tag').removeClass('d-none');
            $('#perbarui_data_tag').addClass('d-none');
            $('#simpan_data_tag').addClass('d-none');
            $('#hapus_data_tag').removeClass('d-none');
            $('#u_nama_tag').val(valueTag);
            $('#u_nama_tag').prop('disabled', true);
            $('#update_id_hide').val(valueTag);

        }

    }
    // END DELETE TAG BERITA


     // START ADD KATEGORI BERITA
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

    $('#buat_data_kategori_global').click((e)=>{
        e.preventDefault();

        ((nama_kategori.val() == "") ? nama_kategori.addClass('is-invalid') : nama_kategori.addClass('is-valid'));

        var formData = new FormData()
        formData.append('nama', nama_kategori.val());

        axios.post('{{route("store.kategori.artikel")}}', formData).then((res) => {

            $('#createKategoriModalViewer').modal('hide');

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
                    $('#buat_data_kategori').removeClass('d-none');
                    $('#buat_data_kategori_global').addClass('d-none');
                    ((nama_kategori.val() == "") ? nama_kategori.addClass('is-valid') : nama_kategori.removeClass('is-invalid'), nama_kategori.removeClass('is-valid'));
                    window.location.href = "{{route('kategori.artikel')}}";
                }
            });

        }).catch((err) => {
            return 'error';
        });
    });
    // END ADD KATEGORI BERITA


    // START UPDATE KATEGORI BERITA
    var u_nama_kategori = $('#u_nama_kategori');
    $("#search_by_kategori").keypress(function(event) {
        if (event.keyCode === 13) {

            var tag_now = $("#search_by_kategori").val();

            axios.get("{{ route('kategori.artikel.datatable') }}").then((res) => {

                var dataKategori = res.data.data;
                var test = 0;
                // console.log(dataKategori);
                // console.log(tag_now);

                var arrayKategori = [];
                for (let index = 0; index < dataKategori.length; index++) {
                    arrayKategori.push(dataKategori[index].nama);
                }

                var arrayResult = arrayKategori.filter(item => item.toLowerCase().indexOf(tag_now) > -1);
                // console.log(arrayResult);

                var res = '';

                $.each(arrayResult, function(key, val){

                    // console.log('key: '+key+', => value: '+val);
                    res += `<div class="option-box ml-3 mr-1">
                                <input id="`+key+`" name="bigradios" type="radio" value="`+val+`" onclick="checkKategori(`+key+`)">
                                <label for="`+key+`">
                                    <span class="radio-content  p-all-15 text-center mr-4">
                                        <span class="mdi h1 d-block mdi-new-box"></span>
                                        <span class="h5">`+val+`</span>
                                    </span>
                                </label>
                            </div>`;

                })

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

                $('#all_result_kategori').html(res);

                $('#simpan_data_kategori').click((e)=>{
                    e.preventDefault();

                    ((u_nama_kategori.val() == "") ? u_nama_kategori.addClass('is-invalid') : u_nama_kategori.addClass('is-valid'));

                    var formData = new FormData()
                    formData.append('old_name', $('#update_id_hide').val());
                    formData.append('nama', $('#u_nama_kategori').val());

                    axios.post('{{route("update.kategori.artikel")}}', formData).then((res) => {

                        $('#updateKategoriModalViewer').modal('hide');

                        Swal.fire({
                            title: 'Success',
                            text: "Nama Kategori Berhasil Diperbarui!",
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
                                window.location.href = "{{route('kategori.artikel')}}";
                                // $('#updateKependudukanModalViewer').modal('hide');
                                // location.reload();
                            }
                        });

                    }).catch((err) => {
                        return showModal('error', err.response.data.message);
                    });
                })
            });
        }
    });


    function checkKategori(id){

        var checkBox = document.getElementById(id);
        var valueKategori = document.getElementById(id).value;

        if (checkBox.checked == true){

            $('#form_nama_kategori').removeClass('d-none');
            $('#btn_form_nama_kategori').removeClass('d-none');
            $('#btn_perbarui_hapus_kategori').addClass('d-none');
            $('#simpan_data_kategori').removeClass('d-none');
            $('#u_nama_kategori').val(valueKategori);
            $('#u_nama_kategori').prop('disabled', false);
            $('#update_id_hide').val(valueKategori);

        }

    }
    // END UPDATE KATEGORI BERITA


    // START DELETE KATEGORI BERITA
    $("#search_by_kategori_hapus").keypress(function(event) {
        if (event.keyCode === 13) {

            var tag_now = $("#search_by_kategori_hapus").val();

            axios.get("{{ route('kategori.artikel.datatable') }}").then((res) => {

                var dataKategori = res.data.data;
                // console.log(dataKategori);
                // console.log(tag_now);

                var arrayKategori = [];
                for (let index = 0; index < dataKategori.length; index++) {
                    arrayKategori.push(dataKategori[index].nama);
                }

                var arrayResult = arrayKategori.filter(item => item.toLowerCase().indexOf(tag_now) > -1);
                // console.log(arrayResult);

                var res = '';

                $.each(arrayResult, function(key, val){

                    // console.log('key: '+key+', => value: '+val);
                    res += `<div class="option-box ml-3 mr-1">
                                <input id="`+key+`" name="bigradios" type="radio" value="`+val+`" onclick="removeKategori(`+key+`)">
                                <label for="`+key+`">
                                    <span class="radio-content  p-all-15 text-center mr-4">
                                        <span class="mdi h1 d-block mdi-new-box"></span>
                                        <span class="h5">`+val+`</span>
                                    </span>
                                </label>
                            </div>`;

                })


                $('#all_result_kategori').html(res);

                $('#hapus_data_kategori').click((e)=>{
                    e.preventDefault();

                    var formData = new FormData()
                    formData.append('old_name', $('#update_id_hide').val());
                    formData.append('nama', $('#u_nama_kategori').val());

                    axios.post('{{route("delete.kategori.artikel")}}', formData).then((res) => {

                        $('#updateKategoriModalViewer').modal('hide');

                        Swal.fire({
                            title: 'Success',
                            text: "Nama Kategori Berhasil Dihapus!",
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
                                window.location.href = "{{route('kategori.artikel')}}";
                                // $('#updateKependudukanModalViewer').modal('hide');
                                // location.reload();
                            }
                        });

                    }).catch((err) => {
                        return showModal('error', err.response.data.message);
                    });
                })
            });
        }
    });


    function removeKategori(id){

        var checkBox = document.getElementById(id);
        var valueKategori = document.getElementById(id).value;

        if (checkBox.checked == true){

            // $('#form_nama_tag').removeClass('d-none');
            $('#btn_form_nama_kategori').removeClass('d-none');
            $('#perbarui_data_kategori').addClass('d-none');
            $('#simpan_data_kategori').addClass('d-none');
            $('#hapus_data_kategori').removeClass('d-none');
            $('#u_nama_kategori').val(valueKategori);
            $('#u_nama_kategori').prop('disabled', true);
            $('#update_id_hide').val(valueKategori);

        }

    }
    // END DELETE KATEGORI BERITA



    // START TAMBAH BERITA DESA
    function createBeritaDesa(){
        window.location.href = "{{ route('artikel.create') }}";
    }
    // END TAMBAH BERITA DESA

    // START TAMBAH BERITA DESA
    var arrayBeritaRes = [];
    $("#search_by_berita").keypress(function(event) {

        if (event.keyCode === 13) {

            var title_now = $("#search_by_berita").val();
            axios.get("{{ route('artikel.datatable') }}").then((res) => {

                var dataBerita = res.data.data;
                var arrayBerita = [];
                for (let index = 0; index < dataBerita.length; index++) {
                    arrayBerita.push(dataBerita[index].judul);
                    arrayBeritaRes.push({
                        'id': dataBerita[index].id,
                        'judul': dataBerita[index].judul,
                        'desc_singkat': dataBerita[index].desc_singkat,
                        'desc': dataBerita[index].desc,
                        'tag_id': dataBerita[index].tag_id,
                        'category_name': dataBerita[index].category_name,
                        'user_created_by': dataBerita[index].user_created_by,
                        'image': dataBerita[index].image,
                    });
                }

                var arrayResult = arrayBerita.filter(item => item.toLowerCase().indexOf(title_now) > -1);

                var res = '';
                $.each(arrayResult, function(key, val){

                    res += `<div class="option-box ml-4 mt-1 mb-1">
                                <input id="`+key+`" name="bigradios" value="`+val+`" type="radio" onclick="checkBerita(`+key+`)">
                                <label for="`+key+`">
                                    <span class="radio-content">
                                        <span class="h5 text-primary d-block">`+val+`
                                        </span>

                                    </span>
                                </label>
                            </div>`;

                })

                $('#all_result_berita').html(res);

                $('#simpan_data_kategori').click((e)=>{
                    e.preventDefault();

                    ((u_nama_kategori.val() == "") ? u_nama_kategori.addClass('is-invalid') : u_nama_kategori.addClass('is-valid'));

                    var formData = new FormData()
                    formData.append('old_name', $('#update_id_hide').val());
                    formData.append('nama', $('#u_nama_kategori').val());

                    axios.post('{{route("update.kategori.artikel")}}', formData).then((res) => {

                        $('#updateKategoriModalViewer').modal('hide');

                        Swal.fire({
                            title: 'Success',
                            text: "Nama Kategori Berhasil Diperbarui!",
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
                                window.location.href = "{{route('kategori.artikel')}}";
                                // $('#updateKependudukanModalViewer').modal('hide');
                                // location.reload();
                            }
                        });

                    }).catch((err) => {
                        return showModal('error', err.response.data.message);
                    });
                })
            });
        }
    });


    function checkBerita(id){

        var checkBox = document.getElementById(id);
        var valueBerita = document.getElementById(id).value;
        var kategori_id = $('#u_kategori_id');
        var desc = $('#desc');

        if (checkBox.checked == true){
            $('#form_berita_desa').removeClass('d-none');
            // $('#btn_form_berita_desa').removeClass('d-none');
            // $('#btn_perbarui_hapus_kategori').addClass('d-none');
            // $('#simpan_data_kategori').removeClass('d-none');
            // $('#u_judul_global').html(valueBerita);
            // $('#u_nama_kategori').prop('disabled', false);
            $('#update_id_hide').val(valueBerita);

            for (let i = 0; i < arrayBeritaRes.length; i++) {
                if(valueBerita == arrayBeritaRes[i].judul){

                    var tag_string = arrayBeritaRes[i].tag_id;
                    var tags = tag_string.split(",");
                    // console.log(tags);

                    var formData = new FormData()
                    formData.append('tag_id', arrayBeritaRes[i].tag_id);
                    axios.post('{{route("tag.artikel.get")}}', formData).then((res) => {
                        // console.log(res.data);
                        var tag_array = res.data;
                        var tag_list = '';

                        for (let i = 0; i < tag_array.length; i++) {
                            tag_list = tag_list + `<a href="#!" class="badge badge-soft-primary mr-2"><strong>@`+tag_array[i].nama+`</strong></a>`;


                        }
                        $('#u_tags_berita_global').html(tag_list);

                    });

                    var created_at = moment(arrayBeritaRes[i].created_at).format('DD MMMM YYYY');

                    $('#u_judul_global').html(arrayBeritaRes[i].judul);
                    $('#u_desc_singkat_global').html(arrayBeritaRes[i].desc_singkat);
                    $('#u_created_at_global').html(created_at);
                    $('#u_created_by_global').html(arrayBeritaRes[i].user_created_by);
                    $('#u_avatar_cover_global').html(`<img src="`+arrayBeritaRes[i].image+`" alt="..."
                        class="avatar-img rounded-circle">`);
                    $('#u_image_cover_global').html(`<img class="rounded" id="image"
                        src="`+arrayBeritaRes[i].image+`" alt="">`);

                    $('#u_button_modal_global').html(`
                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label onclick="updateBeritaDesa(`+arrayBeritaRes[i].id+`)" class="btn  btn-light active pointer_card">
                                <i class="mdi mdi-file-check"></i>
                                <input type="radio" name="radio2" id="option1"   checked>
                                Perbarui Berita
                            </label>
                        </div>
                        `);

                }
            }

        }
    }

    function updateBeritaDesa(id){
        window.location.href = '{{url("edit-artikel")}}/'+id;
    }
    // END UPDATE BERITA DESA


    // START DELETE BERITA DESA
    $("#search_by_berita_hapus").keypress(function(event) {

        if (event.keyCode === 13) {

            var title_now = $("#search_by_berita_hapus").val();
            axios.get("{{ route('artikel.datatable') }}").then((res) => {

                var dataBerita = res.data.data;
                var arrayBerita = [];
                for (let index = 0; index < dataBerita.length; index++) {
                    arrayBerita.push(dataBerita[index].judul);
                    arrayBeritaRes.push({
                        'id': dataBerita[index].id,
                        'judul': dataBerita[index].judul,
                        'desc_singkat': dataBerita[index].desc_singkat,
                        'desc': dataBerita[index].desc,
                        'tag_id': dataBerita[index].tag_id,
                        'category_name': dataBerita[index].category_name,
                        'user_created_by': dataBerita[index].user_created_by,
                        'image': dataBerita[index].image,
                    });
                }

                var arrayResult = arrayBerita.filter(item => item.toLowerCase().indexOf(title_now) > -1);
                var res = '';
                $.each(arrayResult, function(key, val){

                    res += `<div class="option-box ml-4 mt-1 mb-1">
                                <input id="`+key+`" name="bigradios" value="`+val+`" type="radio" onclick="checkBeritaHapus(`+key+`)">
                                <label for="`+key+`">
                                    <span class="radio-content">
                                        <span class="h5 text-primary d-block">`+val+`
                                        </span>

                                    </span>
                                </label>
                            </div>`;

                })

                $('#all_result_berita').html(res);

                $('#simpan_data_kategori').click((e)=>{
                    e.preventDefault();

                    ((u_nama_kategori.val() == "") ? u_nama_kategori.addClass('is-invalid') : u_nama_kategori.addClass('is-valid'));

                    var formData = new FormData()
                    formData.append('old_name', $('#update_id_hide').val());
                    formData.append('nama', $('#u_nama_kategori').val());

                    axios.post('{{route("update.kategori.artikel")}}', formData).then((res) => {

                        $('#updateKategoriModalViewer').modal('hide');

                        Swal.fire({
                            title: 'Success',
                            text: "Nama Kategori Berhasil Diperbarui!",
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
                                window.location.href = "{{route('kategori.artikel')}}";
                            }
                        });

                    }).catch((err) => {
                        return showModal('error', err.response.data.message);
                    });
                })
            });
        }
    });

    function checkBeritaHapus(id){

        var checkBox = document.getElementById(id);
        var valueBerita = document.getElementById(id).value;
        var kategori_id = $('#u_kategori_id');
        var desc = $('#desc');

        if (checkBox.checked == true){
            $('#form_berita_desa').removeClass('d-none');
            $('#update_id_hide').val(valueBerita);

            for (let i = 0; i < arrayBeritaRes.length; i++) {
                if(valueBerita == arrayBeritaRes[i].judul){

                    var tag_string = arrayBeritaRes[i].tag_id;
                    var tags = tag_string.split(",");
                    // console.log(tags);

                    var formData = new FormData()
                    formData.append('tag_id', arrayBeritaRes[i].tag_id);
                    axios.post('{{route("tag.artikel.get")}}', formData).then((res) => {
                        // console.log(res.data);
                        var tag_array = res.data;
                        var tag_list = '';

                        for (let i = 0; i < tag_array.length; i++) {
                            tag_list = tag_list + `<a href="#!" class="badge badge-soft-primary mr-2"><strong>@`+tag_array[i].nama+`</strong></a>`;


                        }
                        $('#u_tags_berita_global').html(tag_list);

                    });

                    var created_at = moment(arrayBeritaRes[i].created_at).format('DD MMMM YYYY');

                    $('#u_judul_global').html(arrayBeritaRes[i].judul);
                    $('#u_desc_singkat_global').html(arrayBeritaRes[i].desc_singkat);
                    $('#u_created_at_global').html(created_at);
                    $('#u_created_by_global').html(arrayBeritaRes[i].user_created_by);
                    $('#u_avatar_cover_global').html(`<img src="`+arrayBeritaRes[i].image+`" alt="..."
                        class="avatar-img rounded-circle">`);
                    $('#u_image_cover_global').html(`<img class="rounded" id="image"
                        src="`+arrayBeritaRes[i].image+`" alt="">`);

                    $('#u_button_modal_global').html(`
                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label onclick="deleteBeritaDesa(`+arrayBeritaRes[i].id+`)" class="btn  btn-dark pointer_card">
                                <i class="mdi mdi-file-remove"></i>
                                <input type="radio" name="radio2" id="option2"  > Hapus Berita
                            </label>
                        </div>
                        `);

                }
            }

        }
    }

    function deleteBeritaDesa(id){

        var formData = new FormData()
        formData.append('id', id);

        axios.post('{{route("artikel.delete")}}', formData).then((res) => {

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
                    window.location.href = '{{ route("artikel.index") }}';
                }
            });

        }).catch((err) => {
            return showModal('error', err.response.data.message);
        });
    }
    // END DELETE BERITA DESA


</script>
<!------------ END JS FOR BERITA DESA -------------->

@yield('custom_script')

</body>
</html>
