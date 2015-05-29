"use strict";
jQuery(window).load(function() {
    jQuery(".overlayinfo").each(function() {
        var a = parseInt(jQuery(this).height() / 2);
        jQuery(this).css({
            marginTop: "-" + a + "px"
        })
    })
}), $(".scroll-to").click(function(a) {
    if (a.preventDefault(), "#top" === this.hash) return void $("html, body").animate({
        scrollTop: 0
    }, 750, "swing");
    var b = 0,
        c = $(this.hash).offset().top,
        d = $(document).height() - $(window).height();
    b = c > d ? d : c;
    var e = this.hash;
    $("html, body").animate({
        scrollTop: b - $("#main-nav").height()
    }, 550, "swing", function() {
        window.location.hash = e
    })
});
