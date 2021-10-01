$(function(){

    var windowWidth = window.innerWidth;

    $(window).scroll(function(){
        $(".navbar").toggleClass("wh", $(this).scrollTop() > 100)
        if(windowWidth < 992){
            $(".owl-nav").toggleClass("owlHide", $(this).scrollTop() > 510)
        }
    })
})