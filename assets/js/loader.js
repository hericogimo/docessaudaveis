//$(".blocker").hide();
$(document).ready(function () {

    function loader(action) {
        let loaderDiv = $(".loader");

        if (action === "open") {
            $(".blocker").hide();
            loaderDiv.fadeIn(100).css("display", "flex");
        }

        if (action === "close") {
            loaderDiv.slideUp(1000);
            $(".blocker").fadeIn(1500);
            document.querySelector("body").scroll(0, 0)
            document.querySelector("section").scroll(0, 30)
        }
    }

    //loader("open");
    setTimeout(() => {
        loader("close");   
    }, 1000);

});