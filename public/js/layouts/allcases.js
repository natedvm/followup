$(document).ready(function () {
    var table = $('#procedureTable').DataTable();

    table.columns(
        [
            '#id_header',
            '#updated_at_header',
            '#created_at_header'
        ]
    ).visible(false);

});