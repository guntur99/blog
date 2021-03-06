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
$('#form_tambah_kategori_informasi').click((e) => {
    e.preventDefault();
    $('#allMenuPemerintahanModalViewer').modal('hide');
    $('#createKategoriPemerintahanModalViewer').modal('show');
    $('#buat_data_kategori_info').addClass('d-none');
    $('#buat_data_kategori_info_global').removeClass('d-none');
    $('#nama_kategori').val('');
});

$('#form_perbarui_kategori_informasi').click((e) => {
    e.preventDefault();
    $('#allMenuPemerintahanModalViewer').modal('hide');
    $('#updateKategoriPemerintahanModalViewer').modal('show');
    $('#update_data_kategori_informasi').removeClass('d-none');
    $('#form_nama_kategori_informasi').addClass('d-none');
    $('#btn_form_nama_kategori_informasi').addClass('d-none');
    $('#all_result_kategori_informasi').html('');
    $('#search_by_kategori_informasi').val('');
    $('#mode_pembaruan_kategori_informasi').removeClass('d-none');
    $('#mode_penghapusan_kategori_informasi').addClass('d-none');
    $('#search_by_kategori_informasi_hapus').addClass('d-none');
    $('#search_by_kategori_informasi').removeClass('d-none');
});

$('#form_hapus_kategori_informasi').click((e) => {
    e.preventDefault();
    $('#allMenuPemerintahanModalViewer').modal('hide');
    $('#updateKategoriPemerintahanModalViewer').modal('show');
    $('#update_data_kategori_informasi').removeClass('d-none');
    $('#form_nama_kategori_informasi').addClass('d-none');
    $('#btn_form_nama_kategori_informasi').addClass('d-none');
    $('#all_result_kategori_informasi').html('');
    $('#search_by_kategori_informasi').val('');
    $('#mode_pembaruan_kategori_informasi').addClass('d-none');
    $('#mode_penghapusan_kategori_informasi').removeClass('d-none');
    $('#search_by_kategori_informasi_hapus').removeClass('d-none');
    $('#search_by_kategori_informasi').addClass('d-none');
});
// ------------- END KATEGORI INFORMASI --------------------
