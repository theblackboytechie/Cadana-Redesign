$(document).ready(function() {
    // each_open_chat
    $('body').on('click', '.each_open_chat', function(event) {
        var user_id = $(this).attr("user_id");
        var conversation_id = $(this).attr("conversation_id");
        $(".conversation_textarea_wrap, .chat_conversation_content_wraps").show();
        $(".conversation_textarea").attr("user_id", user_id);
        $(".conversation_textarea").attr("conversation_id", conversation_id);
        // alert("conversation_id: "+conversation_id);
        $(".chat_conversation_content_each").html("<div style='height: 120vh;'></div>");
        $(".chat_conversation_content_each").scrollTop($(".chat_conversation_content_each")[0].scrollHeight);
        setTimeout(function() {
            $(".chat_conversation_content_each").scrollTop($(".chat_conversation_content_each")[0].scrollHeight);
        }, 1000);
    });
});

