$(document).ready(function () {
    var email;
    $("#enquiry-submit").on("click",function () {

        var name=$("#name").val();
        var contact=$("#contact").val();
        email=$("#email").val();
        var vehicle=$("#vehicle").val();
        var address=$("#address").val();
        var condition;
        $(".enquiry-form input").css("border","1px solid #c2c2c2");
        if(name==""){
            $("#name").css("border","1px solid red");
            $("#name").addClass("animated shake")
        }
        else if(contact==""){
            $("#contact").css("border","1px solid red");
            $("#contact").addClass("animated shake")
        }
        else if(!emailCheck()){
            $("#email").css("border","1px solid red");
            $("#email").addClass("animated shake")
        }
        else if(address==""){
            $("#address").css("border","1px solid red");
            $("#address").addClass("animated shake")
        }
        else{
            $(".enquiry-pop").fadeIn(400);
            $(".enquiry-pop-spinner").fadeIn(500);
            $.ajax({
                method:'POST',
                url:url,
                data:{name:name,contact:contact,email:email,vehicle:vehicle,address:address,_token:token}
            }).done(function(msg) {
                if(msg['message']=="successful"){
                    $("#name").val("");
                    $("#contact").val("");
                    $("#email").val("");
                    $("#address").val("");
                    $(".enquiry-pop-spinner").fadeOut(400);
                    $(".enquiry-pop-data").fadeIn(600);
                }
            });
        }
        return false;
    });

    function emailCheck() {
        if(email!=""){
            for(var i=0;i<email.length;i++){
                if(email.charAt(i)=="@"){
                    return true;
                }
            }
        }
        return false;
    }
});