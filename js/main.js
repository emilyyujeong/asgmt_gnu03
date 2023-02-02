$(function () {

    $('.main_slide').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    $('.main_pro_slide').slick({
        arrows: false,
        slidesToShow: 4,
    });


    $('.mainProduct .arrows i:nth-child(1)').on('click', function () {
        $('.main_pro_slide').slick('slickPrev')
    });
    $('.mainProduct .arrows i:nth-child(2)').on('click', function () {
        $('.main_pro_slide').slick('slickNext')
    });



    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();

        if (sct > 700) {
            $('.toTop').addClass('on')
        } else {
            $('.toTop').removeClass('on')
        }
    });

    $('.toTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });




    $(function () {
        $('.sc_icon a').on('click', function (e) {
            e.preventDefault();
            var _top = $(this.hash).offset().top;
            $('html,body').animate({ scrollTop: _top })
        });
    })


    $('.sub_color_slide').slick({
        arrows: false,
        slidesToShow: 6,
    });



    $('.que').click(function () {
        $(this).next('.anw').stop().slideToggle(300);
        $(this).toggleClass('on').siblings().removeClass('on');
        $(this).next('.anw').siblings('.anw').slideUp(300);
    });




    AOS.init();











})