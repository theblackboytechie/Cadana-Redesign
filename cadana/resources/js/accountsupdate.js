$('body').on('click', '#update-account-type', function() {
    var account_type = $("#account-type-list").val();
    var owner = "update_account_type";

    if(account_type != ""){
        var formData = {
            owner: owner,
            account_type: account_type
        };

        var theurl = $("#cadanamaps").attr("database_update");

        updateDatabase(theurl, formData);
    }
});

// update_primary_info1
$('body').on('click', '#update_primary_info1', function(event) {
    // var account_type = $("#account-type-list").val();
    event.preventDefault();
    var owner = "update_primary_details";

    var donor_name = $("#donor_name").val();
    var donor_gender = $("#donor_gender").val();
    var donor_primary_email = $("#donor_primary_email").val();
    var donor_secondary_email = $("#donor_secondary_email").val();
    var donor_primary_phone = $("#donor_primary_phone").val();
    var donor_secondary_phone = $("#donor_secondary_phone").val();
    var donor_primary_address = $("#donor_primary_address").val();
    var donor_primary_city = $("#donor_primary_city").val();
    var donor_primary_state = $("#donor_primary_state").val();
    var donor_primary_country = $("#donor_primary_country").val();
    var donor_primary_zipcode = $("#donor_primary_zipcode").val();
    var donor_secondary_address = $("#donor_secondary_address").val();
    var donor_secondary_city = $("#donor_secondary_city").val();
    var donor_secondary_state = $("#donor_secondary_state").val();
    var donor_secondary_country = $("#donor_secondary_country").val();
    var donor_secondary_zipcode = $("#donor_secondary_zipcode").val();

    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);

    var formData = {
        owner: owner,
        ownerid: ownerid,
        donor_name: donor_name,
        donor_gender: donor_gender,
        donor_primary_email: donor_primary_email,
        donor_secondary_email: donor_secondary_email,
        donor_primary_phone: donor_primary_phone,
        donor_secondary_phone: donor_secondary_phone,
        donor_primary_address: donor_primary_address,
        donor_primary_city: donor_primary_city,
        donor_primary_state: donor_primary_state,
        donor_primary_country: donor_primary_country,
        donor_primary_zipcode: donor_primary_zipcode,
        donor_secondary_address: donor_secondary_address,
        donor_secondary_city: donor_secondary_city,
        donor_secondary_state: donor_secondary_state,
        donor_secondary_country: donor_secondary_country,
        donor_secondary_zipcode: donor_secondary_zipcode
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

function updateDatabase(theurl, formData) {
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
            if(formData.owner == "update_account_type"){
                // refresh current page
                if(response == 1){
                    location.reload();
                }else{
                    // output error
                }
            }else if(formData.owner == "update_primary_details"){

            }
        },
        error: function(response) {
            // alert(response);
            // forms_id
            // owner applet_id
        }
    });
}