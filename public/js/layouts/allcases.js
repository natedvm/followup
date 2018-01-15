function showOnlySurgeryColumns(table) {
    table.columns(['*']).visible(false, false);
    table.columns([
        '#patient_name_header',
        '#last_name_header',
        '#date_of_surgery_header',
        '#side_header',
        '#preop_angle_header',
        '#blade_header',
        '#postop_angle_header',
        '#rotation_header',
        '#plate_header',
        '#meniscal_status_header',
        '#complications_header',
        '#comments_header'
    ]).visible(true, false);
    table.columns.adjust().draw(false); // adjust column sizing and redraw
}

function showOnlyPatientColumns(table) {
    table.columns(['*']).visible(false, false);
    table.columns([
        '#patient_name_header',
        '#last_name_header',
        '#dvmax_id_header',
        '#date_of_birth_header',
        '#sex_header',
        '#breed_header',
        '#weight_header',
        '#email_header'
    ]).visible(true, false);
    table.columns.adjust().draw(false); // adjust column sizing and redraw
}

$(document).ready(function () {
    var table = $('#procedureTable').DataTable({
        "columnDefs": [
            {"className": "dt-center", "targets": "_all"}
        ]
    });

    showOnlyPatientColumns(table);

    $("#button-patient-information").click(function () {
        showOnlyPatientColumns(table);
        //make this the only imnformation button with active class
        $(".information-button").removeClass("active");
        $("#button-patient-information").addClass("active");
    });

    $("#button-surgery-information").click(function () {

        showOnlySurgeryColumns(table);
        //make this the only imnformation button with active class
        $(".information-button").removeClass("active");
        $("#button-surgery-information").addClass("active");
    });

    $("#button-all-cases").click(function(){
        $.fn.dataTable.ext.search.pop();   //get ride of any old filter
        showOnlyPatientColumns(table);
        $(".case-selector-button").removeClass("active");
        $(this).addClass("active");
    });

    $("#button-incomplete-surgery-information").click(function () {
        $.fn.dataTable.ext.search.pop();   //get ride of any old filter
        // new filter - columns identified by ID tags placed in table to
        // allow easier changes in the database without breaking this
        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                if (data[table.column('#date_of_surgery_header').index()] === '' ||
                    data[table.column('#side_header').index()] === '' ||
                    data[table.column('#preop_angle_header').index()] === '' ||
                    data[table.column('#rotation_header').index()] === '' ||
                    data[table.column('#postop_angle_header').index()] === '' ||
                    data[table.column('#plate_header').index()] === '' ||
                    data[table.column('#meniscal_status_header').index()] === ''
                )
                {
                    return true;
                }
                return false;
            }
        );
        showOnlySurgeryColumns(table);  //includes redraw of table

        $(".case-selector-button").removeClass("active");
        $(this).addClass("active");
    });

    $("#button-incomplete-patient-information").click(function () {
        $.fn.dataTable.ext.search.pop();   //get ride of any old filter
        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                if (data[table.column('#dvmax_id_header').index()] === '' ||
                    data[table.column('#patient_name_header').index()] === '' ||
                    data[table.column('#last_name_header').index()] === '' ||
                    data[table.column('#date_of_birth_header').index()] === '' ||
                    data[table.column('#sex_header').index()] === '' ||
                    data[table.column('#weight_header').index()] === ''  ||
                    data[table.column('#breed_header').index()] === '' ||
                    data[table.column('#weight_header').index()] === '' ||
                    data[table.column('#email_header').index()] === ''
                ) {
                    return true;
                }
                return false;
            }
        );
        showOnlyPatientColumns(table);  //includes redraw in this function

        $(".case-selector-button").removeClass("active");
        $(this).addClass("active");
    });
});