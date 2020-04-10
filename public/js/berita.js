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
    $('#buat_data_tag').removeClass('d-none');
    $('#buat_data_tag_global').addClass('d-none');
    $('#nama_tag').val('');
});

$('#form_perbarui_tag').click((e) =>
{
    e.preventDefault();
    $('#allMenuBeritaModalViewer').modal('hide');
    $('#updateTagModalViewer').modal('show');
});
