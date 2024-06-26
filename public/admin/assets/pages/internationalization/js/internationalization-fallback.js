"use strict";
$(document).ready(function() {
    //fallback
    i18next.use(window.i18nextXHRBackend).init({
        debug: !1,
        fallbackLng: "en",
        backend: {
            loadPath: "../assets/locales/{{lng}}/{{ns}}.json"
        },
        returnObjects: !0
    }, function(err, t) {
        jqueryI18next.init(i18next, $)
    }), $("#lng-fallback").on("click", ".lng-nav li a", function() {
        var $this = $(this),
            selected_lng = $this.data("lng");
        i18next.changeLanguage(selected_lng, function(err, t) {
            $(".main-menu-content").localize()
        }), $this.parent("li").siblings("li").children("a").removeClass("active"), $this.addClass("active"), $("#lng-fallback").find(".lng-dropdown a").removeClass("active");
        var drop_lng = $("#lng-fallback").find('.lng-dropdown a[data-lng="' + selected_lng + '"]').addClass("active");
        $("#lng-fallback #dropdown-active-item").html(drop_lng.html())
    }), $("#lng-fallback").on("click", ".lng-dropdown .dropdown-menu a", function() {
        var $this = $(this),
            selected_lng = $this.data("lng");
        i18next.changeLanguage(selected_lng, function(err, t) {
            $(".main-menu-content").localize()
        }), $("#lng-fallback .lng-nav li a").removeClass("active"), $('#lng-fallback .lng-nav li a[data-lng="' + selected_lng + '"]').addClass("active"), $("#lng-fallback").find(".lng-dropdown a").removeClass("active"), $this.addClass("active"), $("#lng-fallback #dropdown-active-item").html($this.html())
    })

});
;