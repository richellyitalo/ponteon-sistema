(function ($) {

    'use strict';

    // Galleries
    var handle = function () {

        var login = function (event) {

            event.preventDefault();

            var $form = $(this);
            var $button = $form.find(':submit');
            var buttonText = $button.text();
            var $response = $('#response');

            $form.validate();

            if ($form.valid()) {
                $button
                    .prop('disabled', true)
                    .html('Carregando <i class="fa fa-refresh fa-spin"></i>');

                $response.html('');
                $response.prop('class', '');

                $.post(
                    VARS.url.users.login,
                    $form.serialize(),
                    function (response) {
                        $button.find('i').remove();

                        if (response.success) {
                            $response.prop('class', 'alert alert-success');

                            setTimeout(function() {
                                window.location.href = response.url;
                            }, 1000);
                        } else
                            $response.prop('class', 'alert alert-danger');

                        $response.html(response.message);

                        $button
                            .html(buttonText)
                            .prop('disabled', false);
                    }
                );
            }
        };
        $('#formLogin').on('submit', login);

    };
    handle();

})(jQuery);