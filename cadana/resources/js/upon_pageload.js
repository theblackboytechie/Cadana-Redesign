$(document).ready(function() {
    var thegender = $(".gender_checker").attr("thegender");

    if(thegender == "male"){
        $(".male-donation-form").hide();
        $(".female-donation-form").remove();
    }else{
        $(".male-donation-form").remove();
        $(".female-donation-form").hide();
    }
    

    var urlPath = window.location.pathname;

    var path = urlPath.split("/");
    var secondToLast = path[path.length - 2];
    var thirdToLast = path[path.length - 3];//alert("secondToLast: "+secondToLast);

    var ownerid = urlPath.split("/").pop();
    
    if(thirdToLast == "donatinghistory"){
        // load the gender of this user
        var owner = "get_gender_of_user_for_donating_history";
        var formData = {
            owner: owner,
            ownerid: ownerid
        };
    
        var theurl = $("#cadanamaps").attr("database_update");//alert("ownerid: "+ownerid);
        
        getFromDatabase(theurl, formData);
    }

    if(secondToLast == "profile"){
        // alert("this is the profile place!: "+ownerid);
        var owner = "get_profile_picture_authenticated_page";

        var formData = {
            owner: owner,
            ownerid: ownerid
        };
    
        var theurl = $("#cadanamaps").attr("database_update");//alert("ownerid: "+ownerid);
        
        getFromDatabase(theurl, formData);
    }

    if (secondToLast === "usersettings" || secondToLast === "vettedcredentials" || secondToLast === "viewupdatepassword" || secondToLast === "accountsverification" || secondToLast === "viewmedicalrecords" || secondToLast === "viewdonationrecords" || secondToLast === "updatepassword") {

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

        // load the gender of this user
        var owner = "get_gender_of_user";
        var formData = {
            owner: owner,
            ownerid: ownerid
        };
    
        var theurl = $("#cadanamaps").attr("database_update");
        
        getFromDatabase(theurl, formData);

        // determine what to display based on the verification status
        var verfify_status = $("#verification_status_checker").attr("status");
        // alert("verfify_status: "+verfify_status);
        if(verfify_status == 1){
            $("#user_verified_icon").show();
            $("#user_verified_text").show();
            $("#user_un-verified_icon").hide();
        }else{
            $("#user_verified_icon").hide();
            $("#user_verified_text").hide();
            $("#user_un-verified_icon").show();
        }

        // 
        var owner = "load_all_uploaded_documents";

        var url = window.location.href;
        var ownerid = url.substring(url.lastIndexOf('/') + 1);

        var formData = {
            owner: owner,
            ownerid: ownerid
        };
    
        var theurl = $("#cadanamaps").attr("database_update");
    
        getFromDatabase(theurl, formData);

        // get account type
        var owner = "get_accounttype_ofthis";

        var formData = {
            owner: owner,
            ownerid: ownerid
        };
    
        var theurl = $("#cadanamaps").attr("database_update");
    
        getFromDatabase(theurl, formData);
    }else if(ownerid === "settings"){
        // alert("this is settings page!")
        // name, primary phone, primary email, bio
        var owner = "get_auth_user_info";
        var formData = {
            owner: owner
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
                $("#gbpeter-primary-country").append("<option value='"+response[8]+"' selected>"+response[8]+"</option>");
                $("#gbpeter-primary-state").append("<option value='"+response[9]+"' selected>"+response[9]+"</option>");
                $("#gbpeter-primary-city").append("<option value='"+response[10]+"' selected>"+response[10]+"</option>");
                $("#donor_primary_address").val(response[11]);
                $("#donor_primary_zipcode").val(response[12]);
                $("#gbpeter-secondary-country").append("<option value='"+response[13]+"' selected>"+response[13]+"</option>");
                $("#gbpeter-secondary-state").append("<option value='"+response[14]+"' selected>"+response[14]+"</option>");
                $("#gbpeter-secondary-city").append("<option value='"+response[15]+"' selected>"+response[15]+"</option>");
                $("#donor_secondary_address").val(response[16]);
                $("#donor_secondary_zipcode").val(response[17]);
                // we now insert into forms

                // 
            }else if(formData.owner == "get_gender_of_user"){
                // alert("gender: "+response);
                if(response === "nill" || response === ""){
                    $(".female-donation-result").remove();
                    $(".male-donation-result").remove();
                    $(".female-donation-form").remove();
                    $(".male-donation-form").remove();
                    $(".hr-donor-settings").remove();
                    $(".trigger-donation-create-form").remove();
                    $(".trigger-return-to-donation-history").remove();
                }else if(response === "male"){
                    $(".female-donation-form").remove();
                    $(".female-donation-result").remove();

                    $(".male-donation-form").hide();
                }else if(response === "female"){
                    $(".male-donation-form").remove();
                    $(".male-donation-result").remove();

                    $(".female-donation-form").hide();
                }
            }else if(formData.owner === "get_auth_user_info"){
                $(".fullname_frm").val(response[0]);
                $(".phone_frm").val(response[1]);
                $(".email_frm").val(response[2]);
                $(".biography_frm").val(response[3]);
            }else if(formData.owner === "get_gender_of_user_for_donating_history"){
                // alert(response);
                if(response == "male"){
                    $(".female-donation-form").remove();
                    $(".female-donation-result").remove();
                }else if(response == "female"){
                    $(".male-donation-form").remove();
                    $(".male-donation-result").remove();
                }
            }else if(formData.owner == "load_all_uploaded_documents"){
                // alert(response);
                $("#list_of_all_documents").html(response);
            }else if(formData.owner == "get_accounttype_ofthis"){
                // alert(response);
                if(response == "superadmin" || response == "clinic" || response == "professional"){
                    $(".for_donors_only").remove();
                }else if(response == "donors"){
                    $(".for_donors_only").show();//alert("shout lowder!");
                }
            }else if(formData.owner == "get_profile_picture_authenticated_page"){
                // alert(response);
                if(response == ""){
                    $("#upon_load_profile_image").attr("src", "/storage/assets/images/user-01.png");
                }else{
                    $("#upon_load_profile_image").attr("src", "/storage/uploads/"+response);
                }
                // storage/assets/images/user-01.png
            }
        },
        error: function(response) {
            // alert(response);
            // forms_id
            // owner applet_id
        }
    });
}
