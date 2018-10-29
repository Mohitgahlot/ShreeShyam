$("#subBtn").on("click",function () {
    var name=$("#subName").val();
    var email=$("#subEmail").val();
    $(".subscribe-message").fadeIn(200);

    $.ajax({
        method:'POST',
        url:urlSub,
        data:{name:name,email:email,_token:token}
    }).done(function(msg) {
        if(msg['message']=="successful"){
            $("#subName").val("");
            $("#subEmail").val("");
            setTimeout(function () {
                $(".subscribe-message-secondary").fadeIn(600);
            },300)
            setTimeout(function () {
                $(".subscribe-message-secondary").fadeOut(600);
            },3000)
        }

    });
});
