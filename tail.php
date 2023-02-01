<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
if(!defined('_INDEX_')) { // index가 아닐때 .................
    include G5_THEME_PATH.'/detail.tail.php'; // 서브페이지 푸터
}
?>



        
<footer class="footer">
            <div class="f_inner">
                <div class="left">
                    <ul>
                        <li><a href="#!"><img src="<?= G5_THEME_URL ?>/img/logo_footer.png" alt=""></a></li>
                        <li><a href="">MENU</a></li>
                        <li><a href="">STORE</a></li>
                        <li><a href="">ABOUT</a></li>
                        <li><a href="">CONTACT</a></li>
                        <li><a href="">가맹문의</a></li>
                    </ul>
                </div>

                <div class="right">
                    <div class="sns_ico">
                        <i class="xi-instagram"></i>
                        <i class="xi-facebook"></i>
                        <i class="xi-youtube-play"></i>
                    </div>
                    <ul class="rules">
                        <li><a href="">고객문의</a></li>
                        <li><a href="">개설문의</a></li>
                        <li><a href="">개인정보취급방침</a></li>
                    </ul>

                    <ul>

                        <li>주식회사 골든하인드 서울특별시 서초구 강남대로 311 (드림플러스 강남)</li>
                        <li>사업자등록번호 : 138-87-00801</li>
                        <li>전화 : 1670-4809</li>
                        <li>메일 : support@goldenhind.co.kr</li>
                        <div class="copy">
                            COPYRIGHT &copy; 주식회사 골든하인드. All Rights Reserved.
                        </div>
                    </ul>

                </div>
            </div>
        </footer>


        <div class="toTop">
            <img src="<?= G5_THEME_URL ?>/img/icon_top.svg" alt="">
        </div>




<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>


<?php
include_once(G5_THEME_PATH."/tail.sub.php");