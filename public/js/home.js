$(window).on("load",function() {
    setTimeout(function () {
        $(".load-left").animate({"left":"-51%"},900);
        $(".load-right").animate({"right":"-51%"},900);
        $(".loader i").fadeOut(600);
        $(".loader").fadeOut(2000);
    },3000);
});

$(window).on("scroll",function () {
    var top=$(window).scrollTop();
    var popularTop=$(".home-info-secondary").offset().top+300;
    if(top>popularTop){
        $(".bulb-container i").addClass("animated shake");
    }
});

