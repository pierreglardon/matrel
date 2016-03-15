$(document).ready(function() {

    // scroll addclass menu
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {
            $("#masthead").addClass("scrolling");
            $(".container").addClass("scrolling");
        }
        if (scroll === 0) {
            $("#masthead").removeClass("scrolling");
            $(".container").removeClass("scrolling");
        }
    });

});
