$(function () {
    // Toggle scroll menu
    var scrollTop = 0;

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        // Hacer visible fondo negro del menu
        if (scroll > 80) {
            if (scroll > scrollTop) {
                $('.smart-scroll').addClass('scrolling').removeClass('up');
            } else {
                $('.smart-scroll').addClass('up');
            }
        } else {
            // Eliminar clase si scroll = scrollTop
            $('.smart-scroll').removeClass('scrolling').removeClass('up');
        }

        scrollTop = scroll;

        return false;
    });
});