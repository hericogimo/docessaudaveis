$(function(){

    $(".navMenuBt").click(function(){
        $(".navbar-collapse").slideToggle();
        $(".navbar-collapse").toggleClass("shadown");
    })

    new WOW().init();
})