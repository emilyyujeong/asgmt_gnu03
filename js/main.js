$(function () {

    $('.main_slide').slick({
        arrows: false,
        dots: true,
        // autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    $('.main_pro_slide').slick({
        arrows: false,
        slidesToShow: 4,
    });

    //* css 레이아웃 폴더에 hashlink파일 참고 해서 스크롤다운누르면 섹션 넘어가는거할려고했음;;................. */
    $(function () {
        $('.gnb a').on('click', function (e) {
            e.preventDefault();
            var _top = $(this.hash).offset().top;
            $('html,body').animate({ scrollTop: _top })
        });
    })

})