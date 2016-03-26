// on page load
$(document).ready(function () {
    $(window).scroll(
        // sticky navigation
        function () {
            var navbar = $("#navbar");
            var winPos = $(window).scrollTop();
            if (winPos > 32) {
                navbar.addClass("fixed");
            } else {
                navbar.removeClass("fixed");
            }
        }
    );
});
