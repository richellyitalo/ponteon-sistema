(function ($) {

    'use strict';

    // Galleries
    var handle = function () {

        var notShowMore = function (event) {


            $.post(
                VARS.url.pages.setup,

                {action: 'closeMessage'},

                function (response) {
                    console.log(response);
                }
            );

        };
        $('#notShowMore').on('click', notShowMore);

    };
    handle();

})(jQuery);