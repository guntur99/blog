$('#guide_berita_desa').click((e)=>
{
    e.preventDefault();
    $('#asistenModalViewer').modal('hide');
    $('#allMenuBeritaModalViewer').modal('show');
});
// ------------- START BERITA DESA --------------------
$('#form_perbarui_berita').click((e) => {
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#updateBeritaModalViewer').modal('show');
    $('#update_data_berita').removeClass('d-none');
    $('#form_berita_desa').addClass('d-none');
    $('#btn_form_berita_desa').addClass('d-none');
    $('#all_result_berita').html('');
    $('#search_by_berita').val('');
    $('#mode_pembaruan_berita').removeClass('d-none');
    $('#mode_penghapusan_berita').addClass('d-none');
    $('#search_by_berita_hapus').addClass('d-none');
    $('#search_by_berita').removeClass('d-none');
});

$('#form_hapus_berita').click((e) => {
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#updateBeritaModalViewer').modal('show');
    $('#update_data_berita').removeClass('d-none');
    $('#form_berita_desa').addClass('d-none');
    $('#btn_form_berita_desa').addClass('d-none');
    $('#all_result_berita').html('');
    $('#search_by_berita').val('');
    $('#mode_pembaruan_berita').addClass('d-none');
    $('#mode_penghapusan_berita').removeClass('d-none');
    $('#search_by_berita_hapus').removeClass('d-none');
    $('#search_by_berita').addClass('d-none');
});
// ------------- END BERITA DESA --------------------


// ------------- START KATEGORI BERITA --------------------
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
// ------------- END KATEGORI BERITA --------------------


// ------------- START TAG BERITA --------------------
$('#form_tambah_tag').click((e) =>
{
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#createTagModalViewer').modal('show');
    $('#buat_data_tag').addClass('d-none');
    $('#buat_data_tag_global').removeClass('d-none');
    $('#nama_tag').val('');
});

$('#form_perbarui_tag').click((e) =>
{
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#updateTagModalViewer').modal('show');
    $('#update_data_tag').removeClass('d-none');
    $('#form_nama_tag').addClass('d-none');
    $('#btn_form_nama_tag').addClass('d-none');
    $('#all_result_tag').html('');
    $('#search_by_tag').val('');
    $('#mode_pembaruan').removeClass('d-none');
    $('#mode_penghapusan').addClass('d-none');
    $('#search_by_tag_hapus').addClass('d-none');
    $('#search_by_tag').removeClass('d-none');
});

$('#form_hapus_tag').click((e) => {
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#updateTagModalViewer').modal('show');
    $('#update_data_tag').removeClass('d-none');
    $('#form_nama_tag').addClass('d-none');
    $('#btn_form_nama_tag').addClass('d-none');
    $('#all_result_tag').html('');
    $('#search_by_tag').val('');
    $('#mode_pembaruan').addClass('d-none');
    $('#mode_penghapusan').removeClass('d-none');
    $('#search_by_tag_hapus').removeClass('d-none');
    $('#search_by_tag').addClass('d-none');
});
// ------------- END TAG BERITA --------------------
