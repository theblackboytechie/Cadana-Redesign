$(document).ready(function() {
    var urlPath = window.location.pathname;

    var path = urlPath.split("/");
    var secondToLast = path[path.length - 2];

    var ownerid = urlPath.split("/").pop();
    
    if (secondToLast === "donorsettings") {
        var owner = "download_latest_user_details";
        // load from primary information of the user from the database
        var formData = {
            owner: owner,
            ownerid: ownerid
        };
    
        var theurl = $("#cadanamaps").attr("database_update");

        getFromDatabase(theurl, formData);

        // load medical history of the user from the database
        var owner = "download_all_medical_history";
        var formData = {
            owner: owner,
            ownerid: ownerid
        };
    
        var theurl = $("#cadanamaps").attr("database_update");
        
        getFromDatabase(theurl, formData);
    }
});

function getFromDatabase(theurl, formData) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: theurl,
        data: formData,
        success: function (response) {
            if(formData.owner == "download_latest_user_details"){
                // alert(response[1]);//firstItem = array
                $("#donor_name").val(response[1]);
                $("#donor_gender").val(response[2]);
                $("#donor_primary_email").val(response[4]);
                $("#donor_secondary_email").val(response[5]);
                $("#donor_primary_phone").val(response[6]);
                $("#donor_secondary_phone").val(response[7]);
                $("#donor_primary_country").val(response[8]);
                $("#donor_primary_state").val(response[9]);
                $("#donor_primary_city").val(response[10]);
                $("#donor_primary_address").val(response[11]);
                $("#donor_primary_zipcode").val(response[12]);
                $("#donor_secondary_country").val(response[13]);
                $("#donor_secondary_state").val(response[14]);
                $("#donor_secondary_city").val(response[15]);
                $("#donor_secondary_address").val(response[16]);
                $("#donor_secondary_zipcode").val(response[17]);
                // we now insert into forms

                // 
            }else if(formData.owner == "download_all_medical_history"){
                // alert(response);
            }
        },
        error: function(response) {
            // alert(response);
            // forms_id
            // owner applet_id
        }
    });
}
