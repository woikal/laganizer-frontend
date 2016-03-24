$(document).ready(function () {
    $(window).scroll(function () {
// sticky alternate  navigation
        var id = $("#altnavwrapper");
        var winPos = $(window).scrollTop();
        if (winPos >= 200) {
            id.addClass("show");
        } else {
            id.removeClass("show");
        }
    });
});
