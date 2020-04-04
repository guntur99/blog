/*---------------- START FITUR TAMBAH PENDUDUK VIA IMPORT EXCEL -----------------*/
$('#import_excel_card').click(() => {
    $('#asistenModalViewer').modal('hide');
    $('#allMenuKependudukanModalViewer').modal('hide');
    $('#importExcelModalViewer').modal('show');
});

$('#importExcelModalViewer').on('hidden.bs.modal', function (e) {
    // $('#allMenuKependudukanModalViewer').modal('show');
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            if (e.target.result == undefined) {
                alert('Something Wrong!')
            }
            $('#file_name_storage').val(e.target.result);

        };
        reader.readAsDataURL(input.files[0]);
    }
};

$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

var input_file_excel = $('#input');

input_file_excel.on('input', (e) => {
    var value = e.target.value

    if (value.length === 0) {
        input_file_excel.addClass('is-invalid');
        input_file_excel.removeClass('is-valid');
    } else {
        input_file_excel.addClass('is-valid');
        input_file_excel.removeClass('is-invalid');
    }

});

var arrayP = [];
$("#input").on("change", function (e) {
    var file = e.target.files[0];
    // input canceled, return
    if (!file) return;

    var FR = new FileReader();
    FR.onload = function (e) {
        var data = new Uint8Array(e.target.result);
        var workbook = XLSX.read(data, { type: 'array' });
        var firstSheet = workbook.Sheets[workbook.SheetNames[0]];

        // header: 1 instructs xlsx to create an 'array of arrays'
        var result = XLSX.utils.sheet_to_json(firstSheet, { header: 1 });

        // data preview
        var output = document.getElementById('result');

        arrayP = JSON.stringify(result, null, 2);

        output.innerHTML = arrayP;
    };
    FR.readAsArrayBuffer(file);
});



var oFileIn;

$(function () {
    oFileIn = document.getElementById('file_name_storage');
    if (oFileIn.addEventListener) {
        oFileIn.addEventListener('change', filePicked, false);
    }
});

function filePicked(oEvent) {
    // Get The File From The Input
    var oFile = oEvent.target.files[0];
    var sFilename = oFile.name;
    // Create A File Reader HTML5
    var reader = new FileReader();

    // Ready The Event For When A File Gets Selected
    reader.onload = function (e) {
        var data = e.target.result;
        var cfb = XLS.CFB.read(data, { type: 'binary' });
        var wb = XLS.parse_xlscfb(cfb);
        // Loop Over Each Sheet
        wb.SheetNames.forEach(function (sheetName) {
            // Obtain The Current Row As CSV
            var sCSV = XLS.utils.make_csv(wb.Sheets[sheetName]);
            var oJS = XLS.utils.sheet_to_row_object_array(wb.Sheets[sheetName]);

            $("#my_file_output").html(sCSV);
            console.log(oJS)
        });
    };

    // Tell JS To Start Reading The File.. You could delay this if desired
    reader.readAsBinaryString(oFile);
};
/*---------------- END FITUR TAMBAH PENDUDUK VIA IMPORT EXCEL -----------------*/


/*---------------- START FITUR UPDATE PENDUDUK -----------------*/
$('#perbarui_data_penduduk').click(() => {
    $('#update_data_penduduk').removeClass('d-none');
    $('#update_form').addClass('d-none');
    $('#allMenuKependudukanModalViewer').modal('hide');
    $('#updateKependudukanModalViewer').modal('show');
});
/*---------------- END FITUR UPDATE PENDUDUK -----------------*/


/*---------------- START FITUR DELETE PENDUDUK -----------------*/
$('#hapus_data_penduduk').click(() => {
    $('#delete_data_penduduk').removeClass('d-none');
    $('#delete_form').addClass('d-none');
    $('#allMenuKependudukanModalViewer').modal('hide');
    $('#deleteKependudukanModalViewer').modal('show');
});
/*---------------- END FITUR DELETE PENDUDUK -----------------*/


/*---------------- START MODAL SHOW -----------------*/
$('#search_id').click(() => {
    $('#search_id').addClass('d-none');
    $('#asistenModalViewer').modal('show');
});

$('#guide_penduduk_desa').click(() => {
    $('#asistenModalViewer').modal('hide');
    $('#allMenuKependudukanModalViewer').modal('show');
});

$('#asistenModalViewer').on('hidden.bs.modal', function (e) {
    $('#search_id').removeClass('d-none');
});
/*---------------- END MODAL SHOW -----------------*/


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

function validInvalid() {

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

    if (tanggal_lahir.val() == "") {
        tanggal_lahir.addClass('is-invalid');
        tanggal_lahir.removeClass('is-valid');
    } else {
        tanggal_lahir.addClass('is-valid')
        tanggal_lahir.removeClass('is-invalid');
    }
}

$('.tgl').datepicker({
    format: 'yyyy-mm-dd'
});
