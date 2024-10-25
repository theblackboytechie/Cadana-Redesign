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
    $("#primaryinfo-processing-loading").show();
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

// update_medical_hist
$('body').on('click', '#update_medical_hist', function(event) {
    
    event.preventDefault();

    var partner_name = $("#partner_name_frm").val();
    var healthy_question = $("#healthy_question_frm").val();
    var health_history_1 = $("#health_history_1_frm").val();
    var health_history_2 = $("#health_history_2_frm").val();
    var chronic_illness_details1 = $("#chronic_illness_details1_frm").val();
    var chronic_illness_details2 = $("#chronic_illness_details2_frm").val();
    var fertility_test_treatment = $("#fertility_test_treatment_frm").val();
    var sti_diagnosis = $("#sti_diagnosis_frm").val();
    var fertility_tests_details = $("#fertility_tests_details_frm").val();
    var sti_diagnosis_details = $("#sti_diagnosis_details_frm").val();
    var taking_medications = $("#taking_medications_frm").val();
    var known_allergies = $("#known_allergies_frm").val();
    var taking_medications_details = $("#taking_medications_details_frm").val();
    var known_allergies_details = $("#known_allergies_details_frm").val();
    var smoke_status = $("#smoke_status_frm").val();
    var alcohol_status = $("#alcohol_status_frm").val();
    var smoke_status_details = $("#smoke_status_details_frm").val();
    var alcohol_status_details = $("#alcohol_status_details_frm").val();
    var hard_drugs = $("#hard_drugs_frm").val();
    var hard_drugs_details = $("#hard_drugs_details_frm").val();
    var comments = $("#comments_frm").val();

    var formData = {
        owner: owner,
        ownerid: ownerid,
        partner_name: partner_name,
        healthy_question: healthy_question,
        health_history_1: health_history_1,
        health_history_2: health_history_2,
        chronic_illness_details1: chronic_illness_details1,
        chronic_illness_details2: chronic_illness_details2,
        fertility_test_treatment: fertility_test_treatment,
        sti_diagnosis: sti_diagnosis,
        fertility_tests_details: fertility_tests_details,
        sti_diagnosis_details: sti_diagnosis_details,
        taking_medications: taking_medications,
        known_allergies: known_allergies,
        taking_medications_details: taking_medications_details,
        known_allergies_details: known_allergies_details,
        smoke_status: smoke_status,
        alcohol_status: alcohol_status,
        smoke_status_details: smoke_status_details,
        alcohol_status_details: alcohol_status_details
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

// create documents
$('body').on('submit', '.documentUploadForm', function(e) {
    var owner = "update_document";
    alert("here i come!");

    e.preventDefault();
    return;
    var form = $(this).closest('form');

    var formData = new FormData(this);
    alert(form);
    return;
    // var theurl = '/upload_accounts_documents';
    var theurl = $(".gbpeter-maps").attr("gbpeter-upload-accounts-documents");

    $.ajax({
        type: 'POST',
        url: theurl, // Your Laravel route
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            alert(response);
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});

// var theurl = '/load_all_donor_document/';
var theurl = $(".gbpeter-maps").attr("gbpeter-load-all-donor-document");

// update_password
$('body').on('click', '#update_password', function(event) {
    
    event.preventDefault();

    // show the processing of password spinner
    $("#pswrd-processing-loading").show();

    var frm_password = $("#frm_password").val();
    var frm_confirm_password = $("#frm_confirm_password").val();
    var owner = "update_password";

    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);

    var formData = {
        owner: owner,
        ownerid: ownerid,
        frm_password: frm_password,
        frm_confirm_password: frm_confirm_password
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
                $("#primaryinfo-processing-loading").hide();
            }else if(formData.owner == "update_password"){
                $("#pswrd-processing-loading").hide();
            }
        },
        error: function(response) {
            // alert(response);
            // forms_id
            // owner applet_id
        }
    });
}