$('#guide_berita_desa').click((e)=>
{
    e.preventDefault();
    $('#asistenModalViewer').modal('hide');
    $('#allMenuBeritaModalViewer').modal('show');
});

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
});
