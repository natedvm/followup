$(document).ready(function () {
    var table=$('#procedureTable').DataTable({
        columnDefs: [
            {
                targets: ['id_header',
                    'created_at_header',
                    'updated_at_header'], visible: false
            }
        ]
    });

    table.columns(['.created_at_header']).visible(true);
});