$(window).on('load', function() {

    $('#dimScreen').fadeIn();
    $('#pgld-modal').fadeIn();

});

$(document).ready(function() {
    $('.plm-close').click(function() {
        $('#pgld-modal').fadeOut();
        $('#dimScreen').fadeOut();
    });

    $('#dimScreen').click(function() {

        $('#pgld-modal').hide();
        $('#course-modal').hide();
        $(this).hide();

    });
});