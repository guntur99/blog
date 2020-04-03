/*---------------- START FITUR TAMBAH PENDUDUK VIA IMPORT EXCEL -----------------*/
$('#import_excel_card').click(() => {
    $('#asistenModalViewer').modal('hide');
    $('#allMenuKependudukanModalViewer').modal('hide');
    $('#importExcelModalViewer').modal('show');
});

$('#importExcelModalViewer').on('hidden.bs.modal', function (e) {
    $('#allMenuKependudukanModalViewer').modal('show');
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
