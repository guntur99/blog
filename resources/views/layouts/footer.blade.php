
@include('parts.modals.asisten')
@include('parts.modals.menu_penduduk')
@include('parts.modals.kependudukan.import_excel')
@include('parts.modals.kependudukan.update_data')
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
<script>
    $('#search_id').click(()=>{
        $('#search_id').addClass('d-none');
        $('#asistenModalViewer').modal('show');
    });

    $('#guide_penduduk_desa').click(()=>{
        $('#asistenModalViewer').modal('hide');
        $('#allMenuKependudukanModalViewer').modal('show');
    });

    $('#asistenModalViewer').on('hidden.bs.modal', function (e) {
        $('#search_id').removeClass('d-none');
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

    $('#perbarui_data_penduduk').click(()=>{
        $('#update_data_penduduk').removeClass('d-none');
        $('#update_form').addClass('d-none');
        $('#allMenuKependudukanModalViewer').modal('hide');
        $('#updateKependudukanModalViewer').modal('show');

        // axios.get("{{ route('penduduk.desa.datatable') }}").then((res) => {
        //     var dataP = res.data.data;
        //     console.log(dataP);

        // });

    });

    $("#search_by_nik").keypress(function(event) {
        if (event.keyCode === 13) {
            // $("#GFG_Button").click();

            var nik_now = $("#search_by_nik").val();
            console.log(nik_now);

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

            axios.get("{{ route('penduduk.desa.datatable') }}").then((res) => {
                var dataP = res.data.data;
                var test = 0;
                console.log(dataP);
                for (let index = 0; index < dataP.length; index++) {


                    if(nik_now == dataP[index].nik){
                        // alert('haha');
                        test = test+1;
                        $('#id_hide').val(dataP[index].id)
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



                        $('#simpan-data').click((e)=>{
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
                            // showLoader();
                            console.log($('#id_hide').val());
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
                                        dataTable.draw()
                                        location.reload();
                                        $('#updateKependudukanModalViewer').modal('hide');
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


</script>

@yield('custom_script')
<!--page specific scripts for demo-->
</body>
</html>
