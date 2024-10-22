$('body').on('click', '#update-account-type', function() {
    alert("izzo!");
    return;
    var thesearchval = $(this).val();
    var owner = "run_global_search";

    var formData = {
        owner: owner,
        thesearchval: thesearchval
    };
    
    if(thesearchval == ""){
        $(".gbpeter-global-search-result").html("");
        $(".gbpeter-global-search-result").hide();
    }else{
        $(".gbpeter-global-search-result").html("<i class='fa-solid fa-circle-notch fa-spin'></i>");
        $(".gbpeter-global-search-result").show();
        // var theurl = '/run_global_search';
        var theurl = $(".gbpeter-maps").attr("gbpeter-global-search"); //$(this).attr("gbpeter-map");

        searchDatabase(theurl, formData);
    }
});