$(document).ready(function () {
    var table = $('#procedureTable').DataTable();

    table.columns(
        [
            '#id_header',
            '#updated_at_header',
            '#created_at_header'
        ]
    ).visible(false);

// TODO - make this javascript call use laravel route helper - might need to have hidden column in table rows to reference
    $('#procedureTable tbody').on('dblclick', 'tr', function () {
        var data = table.row(this).data();
        window.location = "editcase/" + data[0];
    });

});