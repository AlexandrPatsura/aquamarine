(function($) {
    $(document).ready(function(){

        // ==================== Height Detect ======================== //
        function heightDetect() {
            $("header, section, .test__parallax-window").css("height", $(window).height());
        }
        heightDetect();
        $(window).resize(function() {
            heightDetect();
        });

        // ==================== Mobile X Efect ======================== //
        $(".test__toggle-menu").click(function() {
            $(".sandwich").toggleClass("active");

            if ($(".test__menu nav").is(":visible")) {
                $(".test__header-menu").fadeOut(600);
            } else {
                $(".test__header-menu").fadeIn(600);
            }
        });

        // ==================== Parallax Efect ======================== //
        $(".test__parallax-one").parallax({imageSrc: "wp-content/themes/wptheme/images/section1.jpg"});
        $(".test__parallax-two").parallax({imageSrc: "wp-content/themes/wptheme/images/section2.jpg"});
        $(".test__parallax-three").parallax({imageSrc: "wp-content/themes/wptheme/images/section4.jpg"});

        $(".test__slick-slider").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            // autoplay: true,
            // autoplaySpeed: 2000,
        });


    }, 200);

    // ======================= Button To Up =========================== //
    $(window).scroll(function () {

        if ($(this).scrollTop() > 450) {
            $(".test__nav-to-top").fadeIn();
        } else {
            $(".test__nav-to-top").fadeOut();
        }
    });

    $(".test__nav-to-top").click(function() {

        $("body, html").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    // ========================== PRELOAD ========================== //
    $(window).load(function() {
        $(".test__loader-inner").fadeOut();
        $(".test__loader").fadeOut("slow");
    });
})( jQuery );