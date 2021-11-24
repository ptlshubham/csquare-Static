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
                $('.sent-message').show();
                $("#enroll-form").hide();
            }
        });
        $(this)[0].reset();
    } else {
        e.preventDefault();
    }

});