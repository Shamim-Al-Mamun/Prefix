jQuery(document).ready(function() {
    "use strict";
    progress_by_frenify();
    jQuery(window).load('body', function() {});
});

function tdProgress(container) {
    "use strict";
    container.find('.progress_inner').each(function() {
        var progress = jQuery(this);
        var pValue = parseInt(progress.data('value'), 10);
        var pColor = progress.data('color');
        var pBarWrap = progress.find('.bar');
        var pBar = progress.find('.bar_in');
        var number = progress.find('.number');
        var label = progress.find('.label');
        number.css({
            right: (100 - pValue) + '%'
        });
        setTimeout(function() {
            label.addClass('opened');
        }, 500);
        pBar.css({
            width: pValue + '%',
            backgroundColor: pColor
        });
        setTimeout(function() {
            pBarWrap.addClass('open');
        });
    });
}

function progress_by_frenify(wrapper) {
    "use strict";
    var element;
    if (wrapper) {
        element = wrapper.find('.dodo_progress');
    } else {
        element = jQuery('.dodo_progress');
    }
    element.each(function() {
        var pWrap = jQuery(this);
        pWrap.find('.number').css({
            right: '100%'
        });
        pWrap.waypoint({
            handler: function() {
                tdProgress(pWrap);
            },
            offset: '90%'
        });
    });
}


