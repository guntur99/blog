
@include('parts.modals.asisten')
@include('parts.modals.menu_penduduk')
@include('parts.modals.menu_berita')
@include('parts.modals.menu_pemerintah')
@include('parts.modals.kependudukan.import_excel')
@include('parts.modals.kependudukan.update_data')
@include('parts.modals.kependudukan.delete_data')
@include('parts.modals.kependudukan.add_data')

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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('trumbowyg/js/vendor/jquery-3.3.1.min.js') }}"><\/script>')</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.5/xlsx.full.min.js"></script>
<script src="{{asset('js/penduduk.js')}}"></script>
<script src="{{asset('js/berita.js')}}"></script>
<script src="{{asset('js/pemerintah.js')}}"></script>
<script>

    $('.tgl').datepicker({
        format: 'yyyy-mm-dd'
    });

    // START IMPORT DATA VIA EXCEL
    $('#import_excel_data').click((e) => {
        e.preventDefault();

        ((input_file_excel.val() == "") ? input_file_excel.addClass('is-invalid') : input_file_excel.addClass('is-valid'));

        var formData = new FormData()
        formData.append('import_excel_file', arrayP);

        axios.post('{{route("import.excel.file")}}', formData).then((res) => {
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
            return showModal('error', err.response.data.message);
        });
    });
    // END IMPORT DATA VIA EXCEL

    $('#hapus-data').click((e)=>{
        e.preventDefault();

        var formData = new FormData()
        formData.append('id', $('#id_hide').val());

        axios.post('{{route("penduduk.desa.delete")}}', formData).then((res) => {

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
                    location.reload();
                    $('#kependudukanModalViewer').modal('hide');
                }
            });

        }).catch((err) => {
            return showModal('error', err.response.data.message);
        });
    });

    // START UPDATE DATA KEPENDUDUKAN
    $("#search_by_nik").keypress(function(event) {
        if (event.keyCode === 13) {

            var nik_now = $("#search_by_nik").val();

            axios.get("{{ route('penduduk.desa.datatable') }}").then((res) => {
                var dataP = res.data.data;
                var test = 0;

                for (let index = 0; index < dataP.length; index++) {

                    if(nik_now == dataP[index].nik){
                        test = test+1;
                        $('#update_id_hide').val(dataP[index].id);
                        $('#update_form').removeClass('d-none');
                        $('#u_nama_warga').val(dataP[index].nama);
                        $('#u_agama').val(dataP[index].agama);
                        $('#u_rt').val(dataP[index].rt);
                        $('#u_rw').val(dataP[index].rw);
                        $('#u_kelurahan_desa').val(dataP[index].kelurahan_desa);
                        $('#u_status_perkawinan').val(dataP[index].status_perkawinan);
                        $('#u_nik').val(dataP[index].nik);
                        $('#u_status_nikah').val(dataP[index].status_nikah);
                        $('#u_jenis_kelamin').val(dataP[index].jenis_kelamin);
                        $('#u_alamat').val(dataP[index].alamat);
                        $('#u_kecamatan').val(dataP[index].kecamatan);
                        $('#u_tempat_lahir').val(dataP[index].tempat_lahir);
                        $('#u_tanggal_lahir').val(dataP[index].tanggal_lahir);
                        $('#u_kewarganegaraan').val(dataP[index].kewarganegaraan);

                        $('#simpan-data-update').click((e)=>{
                            e.preventDefault();

                            validInvalid();

                            var formData = new FormData()
                            formData.append('id', $('#update_id_hide').val());
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
                                // hideLoader();

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
                                        $('#updateKependudukanModalViewer').modal('hide');
                                        location.reload();
                                    }
                                });

                            }).catch((err) => {
                                // hideLoader();
                                // alert(err.response.data.message)
                                return showModal('error', err.response.data.message);
                            });
                        })
                    }
                }
                if(test == 0)
                {
                    $('#update_form').addClass('d-none');
                }


            });
        }
    });
    // END UPDATE DATA KEPENDUDUKAN

    // START DELETE DATA KEPENDUDUKAN
    $("#delete_search_by_nik").keypress(function(event) {
        if (event.keyCode === 13) {

            var nik_now = $("#delete_search_by_nik").val();

            axios.get("{{ route('penduduk.desa.datatable') }}").then((res) => {
                var dataP = res.data.data;
                var test = 0;

                for (let index = 0; index < dataP.length; index++) {

                    if(nik_now == dataP[index].nik){

                        test = test+1;
                        $('#delete_id_hide').val(dataP[index].id);
                        $('#delete_form').removeClass('d-none');
                        $('#d_nama_warga').html(dataP[index].nama);
                        $('#d_agama').html(dataP[index].agama);
                        $('#d_rt_rw').html(dataP[index].rt+'/'+dataP[index].rw);
                        $('#d_kelurahan_desa').html(dataP[index].kelurahan_desa);
                        $('#d_status_perkawinan').html(dataP[index].status_perkawinan);
                        $('#d_nik').html(dataP[index].nik);
                        $('#d_status_nikah').html(dataP[index].status_nikah);
                        $('#d_jenis_kelamin').html(dataP[index].jenis_kelamin);
                        $('#d_alamat').html(dataP[index].alamat);
                        $('#d_kecamatan').html(dataP[index].kecamatan);
                        $('#d_tempat_lahir').html(dataP[index].tempat_lahir);
                        $('#d_tanggal_lahir').html(dataP[index].tanggal_lahir);
                        $('#d_kewarganegaraan').html(dataP[index].kewarganegaraan);

                        $('#hapus-data').click((e)=>{
                            e.preventDefault();

                            validInvalid();

                            var formData = new FormData()
                            formData.append('id', $('#delete_id_hide').val());

                            axios.post('{{route("penduduk.desa.delete")}}', formData).then((res) => {

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
                                        $('#deleteKependudukanModalViewer').modal('hide');
                                        location.reload();
                                    }
                                });

                            }).catch((err) => {
                                return showModal('error', err.response.data.message);
                            });
                        })
                    }
                }
                if(test == 0)
                {
                    $('#delete_form').addClass('d-none');
                }

            });
        }
    });
    // END DELETE DATA KEPENDUDUKAN


    // START ADD DATA KEPENDUDUKAN
    $('#tambah_data_penduduk').click(() => {

        var nik = $('#a_nik');
        var nama = $('#a_nama_warga');
        var agama = $('#a_agama');
        var rt = $('#a_rt');
        var rw = $('#a_rw');
        var kelurahan = $('#a_kelurahan_desa');
        var status_perkawinan = $('#a_status_perkawinan');
        var jenis_kelamin = $('#a_jenis_kelamin');
        var alamat = $('#a_alamat');
        var kecamatan = $('#a_kecamatan');
        var kewarganegaraan = $('#a_kewarganegaraan');
        var tempat_lahir = $('#a_tempat_lahir');
        var tanggal_lahir = $('#a_tanggal_lahir');

        nik.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                nik.addClass('is-invalid');
                nik.removeClass('is-valid');
            } else {
                nik.addClass('is-valid');
                nik.removeClass('is-invalid');
            }

        })

        nama.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                nama.addClass('is-invalid');
                nama.removeClass('is-valid');
            } else {
                nama.addClass('is-valid');
                nama.removeClass('is-invalid');
            }

        })

        agama.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                agama.addClass('is-invalid');
                agama.removeClass('is-valid');
            } else {
                agama.addClass('is-valid');
                agama.removeClass('is-invalid');
            }

        })

        rt.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                rt.addClass('is-invalid');
                rt.removeClass('is-valid');
            } else {
                rt.addClass('is-valid');
                rt.removeClass('is-invalid');
            }

        })

        rw.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                rw.addClass('is-invalid');
                rw.removeClass('is-valid');
            } else {
                rw.addClass('is-valid');
                rw.removeClass('is-invalid');
            }

        })

        kelurahan.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                kelurahan.addClass('is-invalid');
                kelurahan.removeClass('is-valid');
            } else {
                kelurahan.addClass('is-valid');
                kelurahan.removeClass('is-invalid');
            }

        })

        status_perkawinan.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                status_perkawinan.addClass('is-invalid');
                status_perkawinan.removeClass('is-valid');
            } else {
                status_perkawinan.addClass('is-valid');
                status_perkawinan.removeClass('is-invalid');
            }

        })

        jenis_kelamin.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                jenis_kelamin.addClass('is-invalid');
                jenis_kelamin.removeClass('is-valid');
            } else {
                jenis_kelamin.addClass('is-valid');
                jenis_kelamin.removeClass('is-invalid');
            }

        })

        alamat.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                alamat.addClass('is-invalid');
                alamat.removeClass('is-valid');
            } else {
                alamat.addClass('is-valid');
                alamat.removeClass('is-invalid');
            }

        })

        kecamatan.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                kecamatan.addClass('is-invalid');
                kecamatan.removeClass('is-valid');
            } else {
                kecamatan.addClass('is-valid');
                kecamatan.removeClass('is-invalid');
            }

        })

        kewarganegaraan.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                kewarganegaraan.addClass('is-invalid');
                kewarganegaraan.removeClass('is-valid');
            } else {
                kewarganegaraan.addClass('is-valid');
                kewarganegaraan.removeClass('is-invalid');
            }

        })

        tempat_lahir.on('input', (e) => {
            var value = e.target.value

            if (value.length === 0) {
                tempat_lahir.addClass('is-invalid');
                tempat_lahir.removeClass('is-valid');
            } else {
                tempat_lahir.addClass('is-valid');
                tempat_lahir.removeClass('is-invalid');
            }

        })

        $('#allMenuKependudukanModalViewer').modal('hide');
        $('#addKependudukanModalViewer').modal('show');

        $('#btn_store_data').click((e) => {
            e.preventDefault();

            validInvalid();

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
                // hideLoader();
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
                    $('#addKependudukanModalViewer').modal('hide');
                    $('#allMenuKependudukanModalViewer').modal('hide');
                    window.location.href = "{{route('penduduk.desa.index')}}";
                });

            }).catch((err) => {
                // hideLoader();
            return 'error';
            });

        });
    });
    // END ADD DATA KEPENDUDUKAN
</script>

@yield('custom_script')
<!--page specific scripts for demo-->
</body>
</html>