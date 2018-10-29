$(".enquiry-button").on("click",function () {
    var enquiryTop=$(".services").offset().top;
    $("html, body").animate({scrollTop: enquiryTop},1000);
});



$('.nav-open').on("click", function () {
        var type = $(this).data('myval');
        if (type == "open") {
            $("#second-nav-open").fadeOut(100);
            $("#first-nav-open").css({
                "transform": "rotate(45deg) translateY(6px) translateX(6px)"
            });
            $("#third-nav-open").css("transform", "rotate(-45deg)");
            $("nav").css("margin-left", "0px");
            $(this).data('myval', "close");
            $(".main-container").stop().animate({"opacity": "0.1"}, 800);
        }
        if (type == "close") {
            closeIt();
        }
    });

    function closeIt() {
        $("#second-nav-open").fadeIn(200);
        $("#first-nav-open").css({
            "transform": "rotate(0deg) translateY(0px) translateX(0px)"
        });
        $("#third-nav-open").css("transform", "rotate(0deg)");
        $("nav").css("margin-left", "-100%");
        $(".nav-open").data('myval', "open");
        $(".main-container").stop().animate({"opacity": "1"}, 800);
    }

    $(".main-container").on("click", function () {
        closeIt();
    });

    $(".enquiry-button").hover(function () {
            $(".enquiry-button i").addClass("animated tada");

        },
        function () {
            $(".enquiry-button i").removeClass("animated tada");
    });

    $(".lower-arrow").on("click",function () {
        var infoTop=$(".home-info").offset().top+20;
        $("html body").animate({"scrollTop":infoTop},500);
    });

    var flag=1;





    var m=0;
    $(".more-city-button").on("click",function () {
        if(m==0){
            $(".info-places:nth-of-type(3)").slideDown();
            $(".more-city-button span").html("Show Less");
            m=1;
        }
        else{
            $(".info-places:nth-of-type(3)").slideUp();
            $(".more-city-button span").html("Show More");
            m=0;
        }
    });

    var places=["road1","road2","road3","road4"];
    var i=true;
    var j=1;
    setInterval(function () {
        if(i){
            $(".home-hero-background2").css("background-image","linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/road"+j+".jpg')");
            $(".home-hero-background2").fadeIn(800);
            $(".home-hero-background1").fadeOut(1500);
            i=false;
            j++;
        }
        else{
            $(".home-hero-background1").css("background-image","linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/road"+j+".jpg')");
            $(".home-hero-background1").fadeIn(800);
            $(".home-hero-background2").fadeOut(1500);
            i=true;
            j++;
        }
        if(j==5){
            j=1;
        }
    },9000);


$(".info-place").on("click",function () {
    var enquiryTop=$(".enquiry-form").offset().top;
    $("html body").animate({"scrollTop":enquiryTop},1000);
});

$(".enquiry-pop-secondary").on("click",function () {
    $(".enquiry-pop-data").css("display","none");
    $(".enquiry-pop").css("display","none");
});


