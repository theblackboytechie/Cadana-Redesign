$(document).ready(function() {
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
    var ownerid = url.substring(url.lastIndexOf('/') + 1);//alert(ownerid);

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

// trigger-settings-submit
$('body').on('click', '.trigger-settings-submit', function(event) {
    event.preventDefault();

    var owner = "update_authen_settings_details";
    
    var fullname_frm = $(".fullname_frm").val();
    var phone_frm = $(".phone_frm").val();
    var email_frm = $(".email_frm").val();
    var biography_frm = $(".biography_frm").val();

    var formData = {
        owner: owner,
        fullname_frm: fullname_frm,
        phone_frm: phone_frm,
        email_frm: email_frm,
        biography_frm: biography_frm
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

// update_medical_hist
$('body').on('click', '#update_medical_hist', function(event) {
    event.preventDefault();

    var owner = "update_medical_hist";
    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);
    
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
        alcohol_status_details: alcohol_status_details,
        hard_drugs: hard_drugs,
        hard_drugs_details: hard_drugs_details,
        comments: comments
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

// update_edited_medical_hist
$('body').on('click', '#update_edited_medical_hist', function(event) {
    event.preventDefault();

    $("#processing-medical-history").show();
    
    var owner = "update_edited_medical_hist";
    var ownerid = $(this).attr("ownerid");
    var postid = $(this).attr("postid");

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
        postid: postid,
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
        alcohol_status_details: alcohol_status_details,
        hard_drugs: hard_drugs,
        hard_drugs_details: hard_drugs_details,
        comments: comments
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

// update_edited_male_donor_form
$('body').on('click', '#update_edited_male_donor_form', function(event) {
    event.preventDefault();

    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);
    var owner = "update_edited_male_donor_record";

    var postid = $(this).attr("postid");

    // alert("ownerid!" + ownerid);
    var sample_collection_date = $("#donation-male-sperm-sample-collection-date").val();
    var sample_collection_time = $("#donation-male-sperm-sample-collection-time").val();
    var duration_abstinence = $("#donation-male-sperm-duration-abstinence").val();
    var difficulty_producing = $("#donation-male-sperm-difficulty-producing").val();
    var all_sample_collected = $("#donation-male-sperm-sample-collected").val();
    var production_time = $("#donation-male-sperm-production-time").val();
    var analysis_time = $("#donation-male-sperm-analysis-time").val();
    var production_volume = $("#donation-male-sperm-production-volume").val();
    var liquefaction = $("#donation-male-sperm-liquefaction").val();
    var debris = $("#donation-male-sperm-debris").val();
    var agglutination = $("#donation-male-sperm-agglutination").val();
    var concentration = $("#donation-male-sperm-concentration").val();
    var ejaculate_count = $("#donation-male-ejaculate-count").val();
    var sperm_motility = $("#donation-male-sperm-motility").val();
    var fast_progression = $("#donation-male-fast-progression").val();
    var slow_progression = $("#donation-male-slow-progression").val();
    var non_progression = $("#donation-male-non-progression").val();
    var sperm_motile = $("#donation-male-sperm-motile").val();
    var sperm_immotile = $("#donation-male-sperm-immotile").val();
    var other_cells = $("#donation-male-other-cells").val();
    var round_cells = $("#donation-male-round-cells").val();
    var White_blood_cells = $("#donation-male-White-blood-cells").val();
    var normal_forms_piece = $("#donation-male-normal-forms-piece").val();
    var abnormal_forms_piece = $("#donation-male-abnormal-forms-piece").val();
    var head_defects_piece = $("#donation-male-head-defects-piece").val();
    var mid_piece_defect = $("#donation-male-mid-piece-defect").val();
    var tail_defect = $("#donation-male-tail-defect").val();
    var antisperm = $("#donation-male-antisperm").val();
    var comment = $("#donation-male-comment").val();

    var formData = {
        owner: owner,
        ownerid: ownerid,
        postid: postid,
        sample_collection_date: sample_collection_date,
        sample_collection_time: sample_collection_time,
        duration_abstinence: duration_abstinence,
        difficulty_producing: difficulty_producing,
        all_sample_collected: all_sample_collected,
        production_time: production_time,
        analysis_time: analysis_time,
        production_volume: production_volume,
        liquefaction: liquefaction,
        debris: debris,
        agglutination: agglutination,
        concentration: concentration,
        ejaculate_count: ejaculate_count,
        sperm_motility: sperm_motility,
        fast_progression: fast_progression,
        slow_progression: slow_progression,
        non_progression: non_progression,
        sperm_motile: sperm_motile,
        sperm_immotile: sperm_immotile,
        other_cells: other_cells,
        round_cells: round_cells,
        White_blood_cells: White_blood_cells,
        normal_forms_piece: normal_forms_piece,
        abnormal_forms_piece: abnormal_forms_piece,
        head_defects_piece: head_defects_piece,
        mid_piece_defect: mid_piece_defect,
        tail_defect: tail_defect,
        antisperm: antisperm,
        comment: comment
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

// create documents
// $('body').on('submit', '.documentUploadForm', function(event) {
    // $(document).ready(function() {
        $('body').on('submit', '.xxdocumentUploadForm', function(event) {
            event.preventDefault();
            var owner = "update_document";
            alert("here i come!");
        });
    // });

// var theurl = '/load_all_donor_document/';
var theurl = $(".gbpeter-maps").attr("gbpeter-load-all-donor-document");

// trigger-donation-create-form
$('body').on('click', '.trigger-donation-create-form', function() {
    // alert("create form!");
    $(".male-donation-result").hide();
    $(".female-donation-result").hide();

    $(".male-donation-form").show();
    $(".female-donation-form").show();

    $(".trigger-return-to-donation-history").show();
    $(".trigger-donation-create-form").show();

    $(".trigger-donation-create-form").hide();
});

// trigger-return-to-donation-history
$('body').on('click', '.trigger-return-to-donation-history', function() {
    // alert("result!");
    $(".male-donation-result").show();
    $(".female-donation-result").show();

    $(".male-donation-form").hide();
    $(".female-donation-form").hide();

    $(".trigger-return-to-donation-history").hide();
    $(".trigger-donation-create-form").show();
});

// update_male_donor_form
$('body').on('click', '#update_male_donor_form', function(event) {
    event.preventDefault();

    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);
    var owner = "update_male_donor_record";

    // alert("ownerid!" + ownerid);
    var sample_collection_date = $("#donation-male-sperm-sample-collection-date").val();
    var sample_collection_time = $("#donation-male-sperm-sample-collection-time").val();
    var duration_abstinence = $("#donation-male-sperm-duration-abstinence").val();
    var difficulty_producing = $("#donation-male-sperm-difficulty-producing").val();
    var all_sample_collected = $("#donation-male-sperm-sample-collected").val();
    var production_time = $("#donation-male-sperm-production-time").val();
    var analysis_time = $("#donation-male-sperm-analysis-time").val();
    var production_volume = $("#donation-male-sperm-production-volume").val();
    var liquefaction = $("#donation-male-sperm-liquefaction").val();
    var debris = $("#donation-male-sperm-debris").val();
    var agglutination = $("#donation-male-sperm-agglutination").val();
    var concentration = $("#donation-male-sperm-concentration").val();
    var ejaculate_count = $("#donation-male-ejaculate-count").val();
    var sperm_motility = $("#donation-male-sperm-motility").val();
    var fast_progression = $("#donation-male-fast-progression").val();
    var slow_progression = $("#donation-male-slow-progression").val();
    var non_progression = $("#donation-male-non-progression").val();
    var sperm_motile = $("#donation-male-sperm-motile").val();
    var sperm_immotile = $("#donation-male-sperm-immotile").val();
    var other_cells = $("#donation-male-other-cells").val();
    var round_cells = $("#donation-male-round-cells").val();
    var White_blood_cells = $("#donation-male-White-blood-cells").val();
    var normal_forms_piece = $("#donation-male-normal-forms-piece").val();
    var abnormal_forms_piece = $("#donation-male-abnormal-forms-piece").val();
    var head_defects_piece = $("#donation-male-head-defects-piece").val();
    var mid_piece_defect = $("#donation-male-mid-piece-defect").val();
    var tail_defect = $("#donation-male-tail-defect").val();
    var antisperm = $("#donation-male-antisperm").val();
    var comment = $("#donation-male-comment").val();

    var formData = {
        owner: owner,
        ownerid: ownerid,
        sample_collection_date: sample_collection_date,
        sample_collection_time: sample_collection_time,
        duration_abstinence: duration_abstinence,
        difficulty_producing: difficulty_producing,
        all_sample_collected: all_sample_collected,
        production_time: production_time,
        analysis_time: analysis_time,
        production_volume: production_volume,
        liquefaction: liquefaction,
        debris: debris,
        agglutination: agglutination,
        concentration: concentration,
        ejaculate_count: ejaculate_count,
        sperm_motility: sperm_motility,
        fast_progression: fast_progression,
        slow_progression: slow_progression,
        non_progression: non_progression,
        sperm_motile: sperm_motile,
        sperm_immotile: sperm_immotile,
        other_cells: other_cells,
        round_cells: round_cells,
        White_blood_cells: White_blood_cells,
        normal_forms_piece: normal_forms_piece,
        abnormal_forms_piece: abnormal_forms_piece,
        head_defects_piece: head_defects_piece,
        mid_piece_defect: mid_piece_defect,
        tail_defect: tail_defect,
        antisperm: antisperm,
        comment: comment
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

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
            }else if(formData.owner =="update_medical_hist"){
                $("#processing-medical-history").hide();
                $("#partner_name_frm").val("");
                $("#healthy_question_frm").val("");
                $("#health_history_1_frm").val("");
                $("#health_history_2_frm").val("");
                $("#chronic_illness_details1_frm").val("");
                $("#chronic_illness_details2_frm").val("");
                $("#fertility_test_treatment_frm").val("");
                $("#sti_diagnosis_frm").val("");
                $("#fertility_tests_details_frm").val("");
                $("#sti_diagnosis_details_frm").val("");
                $("#taking_medications_frm").val("");
                $("#known_allergies_frm").val("");
                $("#taking_medications_details_frm").val("");
                $("#known_allergies_details_frm").val("");
                $("#smoke_status_frm").val("");
                $("#alcohol_status_frm").val("");
                $("#smoke_status_details_frm").val("");
                $("#alcohol_status_details_frm").val("");
                $("#hard_drugs_frm").val("");
                $("#hard_drugs_details_frm").val("");
                $("#comments_frm").val("");
            }else if(formData.owner == "update_edited_medical_hist"){
                $("#processing-medical-history").hide();
            }else if("update_male_donor_record"){
                alert(response);
            }
        },
        error: function(response) {
            // alert(response);
            // forms_id
            // owner applet_id
        }
    });
}
});