(function ($) {

    'use strict';

    // Galleries
    var handle = function () {
        $('#formCreate').validate();


        // MASKS

        // phone
        var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }/*,
                placeholder: "(__) _ ____-____"*/
            };
        $('[data-mask-type="phone"]').mask(SPMaskBehavior, spOptions);

    };
    handle();

})(jQuery);