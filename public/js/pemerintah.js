$('#guide_pemerintah_desa').click((e) => {
    e.preventDefault();
    $('#asistenModalViewer').modal('hide');
    $('#allMenuPemerintahanModalViewer').modal('show');
});


// ------------- START INFORMASI PEMERINTAHAN DESA --------------------
$('#form_perbarui_informasi').click((e) => {
    e.preventDefault();
    $('#allMenuPemerintahanModalViewer').modal('hide');
    $('#updateInformasiModalViewer').modal('show');
    $('#update_data_informasi').removeClass('d-none');
    $('#form_informasi_desa').addClass('d-none');
    $('#btn_form_informasi_desa').addClass('d-none');
    $('#all_result_informasi').html('');
    $('#search_by_informasi').val('');
    $('#mode_pembaruan_informasi').removeClass('d-none');
    $('#mode_penghapusan_informasi').addClass('d-none');
    $('#search_by_informasi_hapus').addClass('d-none');
    $('#search_by_informasi').removeClass('d-none');
});

$('#form_hapus_informasi').click((e) => {
    e.preventDefault();
    $('#allMenuPemerintahanModalViewer').modal('hide');
    $('#updateInformasiModalViewer').modal('show');
    $('#update_data_informasi').removeClass('d-none');
    $('#form_informasi_desa').addClass('d-none');
    $('#btn_form_informasi_desa').addClass('d-none');
    $('#all_result_informasi').html('');
    $('#search_by_informasi').val('');
    $('#mode_pembaruan_informasi').addClass('d-none');
    $('#mode_penghapusan_informasi').removeClass('d-none');
    $('#search_by_informasi_hapus').removeClass('d-none');
    $('#search_by_informasi').addClass('d-none');
});
// ------------- END INFORMASI PEMERINTAHAN DESA --------------------


// ------------- START KATEGORI INFORMASI --------------------
$('#form_tambah_kategori').click((e) => {
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#createKategoriModalViewer').modal('show');
    $('#buat_data_kategori').addClass('d-none');
    $('#buat_data_kategori_global').removeClass('d-none');
    $('#nama_kategori').val('');
});

$('#form_perbarui_kategori').click((e) => {
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#updateKategoriModalViewer').modal('show');
    $('#update_data_kategori').removeClass('d-none');
    $('#form_nama_kategori').addClass('d-none');
    $('#btn_form_nama_kategori').addClass('d-none');
    $('#all_result_kategori').html('');
    $('#search_by_kategori').val('');
    $('#mode_pembaruan_kategori').removeClass('d-none');
    $('#mode_penghapusan_kategori').addClass('d-none');
    $('#search_by_kategori_hapus').addClass('d-none');
    $('#search_by_kategori').removeClass('d-none');
});

$('#form_hapus_kategori').click((e) => {
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#updateKategoriModalViewer').modal('show');
    $('#update_data_kategori').removeClass('d-none');
    $('#form_nama_kategori').addClass('d-none');
    $('#btn_form_nama_kategori').addClass('d-none');
    $('#all_result_kategori').html('');
    $('#search_by_kategori').val('');
    $('#mode_pembaruan_kategori').addClass('d-none');
    $('#mode_penghapusan_kategori').removeClass('d-none');
    $('#search_by_kategori_hapus').removeClass('d-none');
    $('#search_by_kategori').addClass('d-none');
});
// ------------- END KATEGORI INFORMASI --------------------
