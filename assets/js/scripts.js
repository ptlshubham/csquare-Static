$(document).ready(function() {

    $('.featured-courses-popup').click(function() {

        var title = $(this).data('title');
        var text = $(this).find('div.desc').text();
        var modal = $('#course-modal');
        $(modal).find('.title').text(title);
        $(modal).find('.desc').text(text);
        $('#dimScreen').fadeIn();
        $('#course-modal').fadeIn();

    });

    $('.courses-btn').click(function() {

        $('#dimScreen').fadeIn();
        $('#enroll-now-modal').fadeIn();

    });

    $('.enroll-close-btn').click(function() {

        $('#dimScreen').fadeOut();
        $('#enroll-now-modal').fadeOut();

    });

    $('.crs-close').click(function() {

        $('#course-modal').fadeOut();
        $('#dimScreen').fadeOut();

    });

    function isValid() {
        var _valid = true;
        $(":input").each(function() {
            if ($(this).val() === "")
                _valid = false;
        });
        return _valid;
    }

    $("#enroll-form").submit(function(e) {

        if (isValid()) {
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data) {
                    alert(data);
                }
            });
            $(this)[0].reset();
            $('#dimScreen').fadeOut();
            $('#enroll-now-modal').fadeOut();
        } else {
            e.preventDefault();
        }

    });

    // $('#enroll-now-btn').click(function() {
    //     $('#dimScreen').fadeOut();
    //     $('#enroll-now-modal').fadeOut();
    // });
})