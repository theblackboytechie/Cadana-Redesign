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

// password_form_wraps
$('body').on('click', '#password_form_button', function(event) {
    event.preventDefault();
    // alert("yo to the izzo!");
    $(".form_components").hide();
    $("#password_form_wraps").show();
});

// file_profile_picture_input_tag
$('#file_profile_picture_input_tag').change(function() {
    readURL(this);
    // upload the image to the database
    $("#profileimage-uploading-processing-loading").show();
    var file = event.target.files[0];
    // alert(file);console.log(file);
    // return;
    var formData = new FormData();
    formData.append('file', file);

    var owner = "upload_profile_image_authenticated";
    formData.append('owner', owner);

    var theurl = $("#cadanamaps").attr("database_upload_profileimg");//alert("url: "+theurl);return;

    $.ajax({
        type: 'POST',
        url: theurl,
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
        //   console.log(response);
          alert(response);
          $("#profileimage-uploading-processing-loading").hide();
        },
        error: function(xhr, status, error) {
            
            $("#document-uploading-processing").hide();
            console.log(xhr.responseText);
            $('#' + 'credentials_error_wraps').text(xhr.responseText);
            var errorResponse = JSON.parse(xhr.responseText);
            var errorMessage = errorResponse.message;
            var errors = errorResponse.errors;
        
            var errorHtml = '';
        
            // Display general error message
            errorHtml += '<p>' + errorMessage + '</p>';
        
            // Display field-specific errors
            $.each(errors, function(field, error) {
                errorHtml += '<p>' + field + ': ' + error[0] + '</p>';
            });
        
            $('#' + 'credentials_error_wraps').html(errorHtml);

            $("#profileimage-uploading-processing-loading").hide();
        }
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.profile_picture_thumbnail').attr('src', e.target.result);
      };
  
      reader.readAsDataURL(input.files[0]);
    }
}

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
    var donor_primary_city = $("#gbpeter-primary-city").val();
    var donor_primary_state = $("#gbpeter-primary-state").val();
    var donor_primary_country = $("#gbpeter-primary-country").val();
    var donor_primary_zipcode = $("#donor_primary_zipcode").val();
    var donor_secondary_address = $("#donor_secondary_address").val();
    var donor_secondary_city = $("#gbpeter-secondary-city").val();
    var donor_secondary_state = $("#gbpeter-secondary-state").val();
    var donor_secondary_country = $("#gbpeter-secondary-country").val();
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
    $("#settingspage-processing-loading").show();

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

// update_edited_female_donor_form
$('body').on('click', '#update_edited_female_donor_form', function(event) {
    event.preventDefault();

    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);
    var owner = "update_edited_female_donor_record";

    var postid = $(this).attr("postid");

    var female_dwn_reg = $("#donation-female-dwn-reg").val();
    var female_Anta = $("#donation-female-Anta").val();
    var female_hCG = $("#donation-female-hCG").val();
    var female_FSH = $("#donation-female-FSH").val();
    var female_hMG = $("#donation-female-hMG").val();
    var female_drugs_duration = $("#donation-female-drugs-duration").val();
    var female_follicles = $("#donation-female-follicles").val();
    var female_positives = $("#donation-female-positives").val();
    var female_comment = $("#donation-female-comment").val();

    var formData = {
        owner: owner,
        ownerid: ownerid,
        postid: postid,
        female_dwn_reg: female_dwn_reg,
        female_Anta: female_Anta,
        female_hCG: female_hCG,
        female_FSH: female_FSH,
        female_hMG: female_hMG,
        female_drugs_duration: female_drugs_duration,
        female_follicles: female_follicles,
        female_positives: female_positives,
        female_comment: female_comment
    };
    // alert("postid: "+postid);
    // alert("ownerid: "+ownerid);
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

// trigger-verification-toggle
$('body').on('click', '#trigger_verification_toggle', function(event) {
    // get the account id
    event.preventDefault();

    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);
    var owner = "verification_toggle";

    var formData = {
        owner: owner,
        ownerid: ownerid
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

// update_female_donor_form
$('body').on('click', '#update_female_donor_form', function(event) {
    event.preventDefault();//alert("donor bons!");

    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);
    var owner = "update_female_donor_record";

    var dwn_reg_prct = $("#female-donor-dwn-reg-prct").val();alert(dwn_reg_prct);
    var Ant_Used = $("#female-donor-Ant-Used").val();alert(Ant_Used);
    var hCG = $("#female-donor-hCG").val();alert(hCG);
    var FSH = $("#female-donor-FSH").val();alert(FSH);
    var hMG = $("#female-donor-hMG").val();alert(hMG);
    var drugs_duration = $("#female-donor-drugs-duration").val();alert(drugs_duration);
    var follicles_generated = $("#female-donor-follicles-generated").val();alert(follicles_generated);
    var positives = $("#female-donor-positives").val();alert(positives);
    var comment = $("#female-donor-comment").val();alert(comment);

    var formData = {
        owner: owner,
        ownerid: ownerid,
        dwn_reg_prct: dwn_reg_prct,
        Ant_Used: Ant_Used,
        hCG: hCG,
        FSH: FSH,
        hMG: hMG,
        drugs_duration: drugs_duration,
        follicles_generated: follicles_generated,
        positives: positives,
        comment: comment
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

// trigger_toggle_document_view
$('body').on('click', '#trigger_toggle_document_view', function(event) {
    event.preventDefault();
    var theid = $(this).attr("theid");
    $("#toggle_document_view_"+theid).toggle();
});

// trigger_documentname_update
$('body').on('click', '#trigger_documentname_update', function(event) {
    event.preventDefault();
    var document_id = $(this).attr("document_id");
    var document_desc = $("#document_name_"+document_id).val();
    var owner = "update_for_documents_name";
    $("#document_name_processing_"+document_id).show();

    var formData = {
        owner: owner,
        document_id: document_id,
        document_desc: document_desc
    };

    var theurl = $("#cadanamaps").attr("database_update");

    updateDatabase(theurl, formData);
});

// on change documents_file_tag
$('body').on('change', '#documents_file_tag', function(event) {
    $("#document-uploading-processing").show();
    var file = event.target.files[0];
    var formData = new FormData();
    formData.append('file', file);

    var url = window.location.href;
    var ownerid = url.substring(url.lastIndexOf('/') + 1);
    formData.append('ownerid', ownerid);

    var theurl = $("#cadanamaps").attr("database_upload_file");//alert("url: "+theurl);return;

    $.ajax({
        type: 'POST',
        url: theurl,
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
        //   console.log(response);
        //   alert(response);
            $("#document-uploading-processing").hide();
            $("#documents_file_tag").val("");

            var owner = "load_all_uploaded_documents";

            var url = window.location.href;
            var ownerid = url.substring(url.lastIndexOf('/') + 1);

            var formData = {
                owner: owner,
                ownerid: ownerid
            };
        
            var theurl = $("#cadanamaps").attr("database_update");
        
            updateDatabase(theurl, formData);
            //   
        },
        error: function(xhr, status, error) {
            $("#document-uploading-processing").hide();
            console.log(xhr.responseText);
            $('#' + 'credentials_error_wraps').text(xhr.responseText);
            var errorResponse = JSON.parse(xhr.responseText);
            var errorMessage = errorResponse.message;
            var errors = errorResponse.errors;
        
            var errorHtml = '';
        
            // Display general error message
            errorHtml += '<p>' + errorMessage + '</p>';
        
            // Display field-specific errors
            $.each(errors, function(field, error) {
                errorHtml += '<p>' + field + ': ' + error[0] + '</p>';
            });
        
            $('#' + 'credentials_error_wraps').html(errorHtml);
        }
    });
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
            }else if(formData.owner == "update_male_donor_record"){
                // alert(response);
            }else if(formData.owner == "update_female_donor_record"){
                // alert("female: "+response);
            }else if(formData.owner == "verification_toggle"){
                // alert(response);
                if(response == 1){
                    $("#verification_status_wraps").html("<i class='fa-solid fa-toggle-off text-primary drop-shadow-sm' id='trigger_verification_toggle'></i>");
                    $("#user_verified_icon").show();
                    $("#user_verified_text").show();
                    $("#user_un-verified_icon").hide();
                }else if(response == 0){
                    $("#verification_status_wraps").html("<i class='fa-solid fa-toggle-on text-primary drop-shadow-sm' id='trigger_verification_toggle'></i>");
                    $("#user_verified_icon").hide();
                    $("#user_verified_text").hide();
                    $("#user_un-verified_icon").show();
                }
            }else if(formData.owner == "load_all_uploaded_documents"){
                // alert(response);
                $("#list_of_all_documents").html(response);
            }else if(formData.owner == "update_for_documents_name"){
                // alert(response);
                $("#document_name_processing_"+formData.document_id).hide();
            }else if(formData.owner == "update_authen_settings_details"){
                // alert("romeo!");
                $("#settingspage-processing-loading").hide();
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