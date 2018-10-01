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
})(jQuery);
