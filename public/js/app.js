$(document).ready(function () {
    $(this).on('click', 'a', function () {
        $(this).blur();
    });
});

(function ($) {
    jQuery.fn.dataContent = function (settings) {
        var config = {
            'loaderDiv': '<div class="spinner"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div></div>',
            'loaderCss': '.spinner {margin: auto auto;width: 50px;height: 30px;text-align: center;font-size: 10px;}.spinner > div {background-color: #ccc;height: 100%;width: 6px;display: inline-block;-webkit-animation: stretchdelay 1.2s infinite ease-in-out;animation: stretchdelay 1.2s infinite ease-in-out;}.spinner .rect2 {-webkit-animation-delay: -1.1s;animation-delay: -1.1s;}.spinner .rect3 {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}.spinner .rect4 {-webkit-animation-delay: -0.9s;animation-delay: -0.9s;}.spinner .rect5 {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;}@-webkit-keyframes stretchdelay {0%, 40%, 100% { -webkit-transform: scaleY(0.4) }20% { -webkit-transform: scaleY(1.0) }}@keyframes stretchdelay {0%, 40%, 100% {transform: scaleY(0.4);-webkit-transform: scaleY(0.4);}  20% {transform: scaleY(1.0);-webkit-transform: scaleY(1.0);}}'
        };

        if (settings) {
            $.extend(config, settings);
        }

        var methods = {
            setElement: function (element) {
                config.element = element;
            },
            getElement: function () {
                return config.element;
            },

            setUrl: function (url) {
                config.url = url;
            },
            getUrl: function () {
                return config.url;
            },

            setInterval: function (interval) {
                config.interval = interval;
            },
            getInterval: function () {
                return (config.interval * 1000);
            },

            setLoading: function (loading) {
                config.loading = loading;
            },
            getLoading: function () {
                return config.loading;
            },

            load: function () {
                if (this.getLoading()) {
                    $(this.getElement()).html(config.loaderDiv);
                }

                if (this.getElement() && this.getUrl()) {
                    $(this.getElement()).load(this.getUrl());
                }
            },

            run: function () {
                if (this.getInterval()) {
                    this.setLoading(false);
                    this.load();

                    setInterval(function () {
                        methods.load();
                    }, this.getInterval());
                } else {
                    this.load();
                }
            }
        };

        return this.each(function () {
            $('body').append("<style>" + config.loaderCss + "</style>");
            var $element = $(this);

            methods.setElement($element);
            methods.setUrl($element.data('href'));
            methods.setLoading($element.data('loading'));
            methods.setInterval($element.data('interval'));
            methods.run();
        });
    };

    $('[data-ajax-content="true"]').dataContent();
}(jQuery));
$(document).ready(function () {

    function hideAllTabsContent() {
        $('.fake-tabs-content').hide();
    }

    function activeTab(item) {
        hideAllTabsContent();

        $('.fake-tabs a').removeClass('active');
        $(item.attr('href')).show();
        item.addClass('active');
    }

    $(this).on('click', '.fake-tabs a', function () {
        activeTab($(this));
    });

    hideAllTabsContent();
    activeTab($('.fake-tabs a.active'))

});
//# sourceMappingURL=app.js.map