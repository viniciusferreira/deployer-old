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