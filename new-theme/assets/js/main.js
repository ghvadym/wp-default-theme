(function ($) {
    $(document).ready(function () {
        console.log('work');
        // AOS.init();

        // Back to top button
        $(document).on("click", "#toTopDesk, #toTopMob", () => {
            $("html, body").animate({scrollTop: 0}, 1000);
        });

        $(window).on("scroll resize", () => {
            if ($(window).width() <= '1024') {
                ($(window).scrollTop() > 1000) ?
                    $("#toTopMob").fadeIn(300) : $("#toTopMob").fadeOut(300);
            } else {
                ($(window).scrollTop() > 1000) ?
                    $("#toTopDesk").fadeIn(300) : $("#toTopDesk").fadeOut(300);
            }
        });

        // Cancel click on '#'
        $(document).on("click", "a[href='#']", () => false);

        // Cancel moving image
        $(document).on("mousedown", "img", () => false);

        // Scroll to element
        $(document).on("click", "a.class-name", () => {
            let scrollH = $($(this).attr("href")).offset().top - 66;
            $("html, body").animate({
                scrollTop: scrollH
            }, {
                duration: 500,
                easing: "linear"
            });
            return false;
        });

        // Popup all
        $(document).mouseup((e) => {
            let div = $(".wrap-popup-content");
            (!div.is(e.target) && div.has(e.target).length === 0)
            $(".popup").fadeOut(100);
        });
        $(document).on("click", ".popup-close-btn", () => {
            $(".popup").fadeOut(100);
        });
        $(document).on("click", ".popup-btn", () => {
            $($(this).attr("href")).fadeIn(100);
            return false;
        });
    });
})(jQuery);
