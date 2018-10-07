(function ($) {
    "use strict";
    $(document).on('click', '.changeLng', function (e) {
        if (e.handled !== true) // This will prevent event triggering more then once
        {
            var lng = $(this).attr('data-lng');
            var url = $(this).attr('data-url');
            var page = $(this).attr('data-page');
            $.ajax({
                url: url + lng + '/lng/cambiarIdioma',
                type: "POST",
                data: {lng: lng, url: url, page: page},
                dataType: "json"
            }).done(function (data) {
                if (data.type == 'success') {
                    $(location).attr('href', data.url);
                }
            });
        }
        e.handled = true;
    });
    $(document).on('submit', '#frmContacto', function (e) {
        e.preventDefault();
        if (e.handled !== true) // This will prevent event triggering more then once
        {
            var nombre = $("input[name='name']");
            var email = $("input[name='email']");
            var asunto = $("input[name='subject']");
            var mensaje = $("textarea[name='comment']");
            var url = $("input[name='url']").val();
            var lng = $("input[name='idioma']").val();
            if (nombre.val().trim().length == 0) {
                nombre.css("border", "2px solid red");
            } else {
                nombre.css("border", "1px solid #ccc");
            }
            if (email.val().trim().length == 0) {
                email.css("border", "2px solid red");
            } else {
                email.css("border", "1px solid #ccc");
            }
            if (asunto.val().trim().length == 0) {
                asunto.css("border", "2px solid red");
            } else {
                asunto.css("border", "1px solid #ccc");
            }
            if (mensaje.val().trim().length == 0) {
                mensaje.css("border", "2px solid red");
            } else {
                mensaje.css("border", "1px solid #ccc");
            }
            if (nombre.val().trim().length > 0 && email.val().trim().length > 0 && asunto.val().trim().length > 0 && mensaje.val().trim().length > 0) {
                $.ajax({
                    url: url + lng + '/contact/frmContacto',
                    type: "POST",
                    data: $("#frmContacto").serialize(),
                    dataType: "json"
                }).done(function (data) {
                    if (data.type == 'success') {
                        $("#divFrmContacto").html("");
                        $("#divFrmContacto").html(data.content);
                    }
                });
            }
        }
        e.handled = true;
    });
})(jQuery);
