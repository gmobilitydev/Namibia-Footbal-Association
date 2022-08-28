import 'tw-elements';
import './bootstrap';

; (function ($) {

    var MERCADO_JS = {
        init: function () {
            this.mercado_countdown();

        },
        mercado_countdown: function () {
            if ($(".mercado-countdown").length > 0) {
                $(".mercado-countdown").each(function (index, el) {
                    var _this = $(this),
                        _expire = _this.data('expire');
                    _this.countdown(_expire, function (event) {
                        $(this).html(event.strftime('<span><b>%D</b></span> | <span><b>%-H</b> </span> |  <span><b>%M</b> </span> | <span><b>%S</b> </span> <br>'));
                    });
                });
            }
        },

    }

    window.onload = function () {
        MERCADO_JS.init();
    }

})(window.Zepto || window.jQuery, window, document);
