(function ($) {
    "use strict"


$('.habilidad').waypoint(function () {
    $('.progress .progress-bar').each(function () {
        $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
}, {offset: '90%'});


})(jQuery);