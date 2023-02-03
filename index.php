<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>





<main>
    


<section class="mainVisual">
            <div class="main_slide">
                <figure class="itm01">
                </figure>
                <figure class="itm02">
                </figure>
                <figure class="itm03">
                </figure>
                <figure class="itm04">
                </figure>
                <figure class="itm05">
                </figure>
                <figure class="itm06">
                </figure>
            </div>
            <div class="inner">
                <div class="sc_icon">
                    <div data-aos="fade-up" class="aos-init aos-animate">
                        <a href="#l01">SCROLL DOWN</a>
                        <div class="icon">
                            <a href="#l01"><i class="xi-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="mainProduct" id="l01">
            <div class="inner">
                <h2>MENU</h2>
                <ul>
                    <li class="highlight"><a href="<?= G5_THEME_URL ?>/doc/m011.php">NEW</a></li>
                    <li><a href="<?= G5_THEME_URL ?>/doc/m012.php">EGG DROP'S CHOICE</a></li>
                    <li><a href="<?= G5_THEME_URL ?>/doc/m013.php">SANDWICH</a></li>
                    <li><a href="<?= G5_THEME_URL ?>/doc/m011.php">SIDE</a></li>
                    <li><a href="<?= G5_THEME_URL ?>/doc/m011.php">DRINK</a></li>
                </ul>
              

                <div class="main_pro_slide">
                    <div class="new_itm">
                        <figure class="new">
                            <a href="">
                                <h3>
                                    햄 앤 치즈 길거리 토스트 세트
                                </h3>
                                <div data-aos="fade-up">
                                    <span class="txt">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu01_name.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="300">
                                    <span class="img">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu01_img.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="600">
                                    <span class="mark">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu01_icon.png" alt="">
                                    </span>
                                </div>
                            </a>

                        </figure>
                    </div>



                    <div class="new_itm">

                        <figure>
                            <a href="">
                                <h3>
                                    햄 앤 치즈 프렌치 토스트 세트
                                </h3>
                                <div data-aos="fade-up">
                                    <span class="txt">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu02_name.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="300">
                                    <span class="img">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu02_img.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="600">
                                    <span class="mark">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu02_icon.png" alt="">
                                    </span>
                                </div>
                            </a>

                        </figure>
                    </div>


                    <div class="new_itm">
                        <figure>
                            <a href="">
                                <h3>
                                    아보 베이컨 길거리 토스트 세트
                                </h3>
                                <div data-aos="fade-up">
                                    <span class="txt">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu03_name.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="300">
                                    <span class="img">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu03_img.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="600">
                                    <span class="mark">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu03_icon.png" alt="">
                                    </span>
                                </div>
                            </a>

                        </figure>
                    </div>

                    <div class="new_itm">
                        <figure>
                            <a href="">
                                <h3>
                                    베이컨 딥 치즈 번 세트
                                </h3>
                                <div data-aos="fade-up">
                                    <span class="txt">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu04_name.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="300">
                                    <span class="img">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu04_img.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="600">
                                    <span class="mark">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu04_icon.png" alt="">
                                    </span>
                                </div>
                            </a>

                        </figure>
                    </div>


                    <div class="new_itm">
                        <figure>
                            <a href="">
                                <h3>
                                    베이컨 더블 치즈 세트
                                </h3>
                                <div data-aos="fade-up">
                                    <span class="txt">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu05_name.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="300">
                                    <span class="img">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu05_img.png" alt="">
                                    </span>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="600">
                                    <span class="mark">
                                        <img src="<?= G5_THEME_URL ?>/img/new_menu05_icon.png" alt="">
                                    </span>
                                </div>
                            </a>

                        </figure>
                    </div>



                </div>

                
                
                
                    <div class="arrows">
                        <i class="xi-angle-left"></i>
                        <i class="xi-angle-right"></i>
                    </div>

            </div>
        </section>

        <section class="newProduct">
            <div class="object">
                <span></span>
            </div>
            <div class="inner">
                <h2>NEW EGGDROP</h2>
                <div class="new_product">

                    <div class="left">
                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/new_product_txt.png" alt="">
                        </figure>
                        <h3>클럽 샌드위치</h3>
                        <p>양상추, 베이컨, 토마토와 에그드랍의
                            특제 소스가 어우러진 <br />
                            베이직한 클럽 샌드위치</p>
                        <a href="<?= G5_THEME_URL ?>/doc/m011.php">자세히 보기 <i class="xi-arrow-right"></i></a>
                    </div>

                    <div class="right">

                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/new_product_img.png" alt="">
                        </figure>
                    </div>

                </div>
            </div>
        </section>

        <section class="eat">
            <h2><strong>Egg</strong> makes <strong>Better</strong></h2>

            <div class="inner">
                <h3>일상의 수준을 높이다</h3>
                <p>현대인에게 필요한 비타민, 철분,<br />
                    아미노산 등의 풍부한 영양소가 함유된<br />
                    프리미엄 무 항생제 계란만 엄격하게<br />
                    사용한 맛있는 스크럼블 에그로 건강한<br />
                    한 끼를 요리합니다.
                </p>

                <p>
                    우리에게 익숙한 샌드위치에서 신선한<br />
                    재료와 감각적인 모양으로 한 단계<br />
                    업그레이드 된 계란 샌드위치라는<br />
                    카테고리를 새롭게 창조하였습니다.
                </p>
                <a href="<?= G5_THEME_URL ?>/doc/m031.php">브랜드 스토리 <i class="xi-arrow-right"></i></a>
            </div>
        </section>

        <!-- <section class="notice">


            <div class="inner">
                <div class="left">
                    <h2>NOTICE</h2>
                    <h3>EGGDROP의 새로운 소식을 확인해보세요</h3>
                    <a href="">자세히 보기 <i class="xi-arrow-right"></i></a>
                </div>
                <div class="right">
                    <ul class="list">
                        <li><a href="">에그드랍, 신메뉴 '콘 치즈 해쉬브라운’&‘베이컨 체다 해쉬브라운' 출시</a>
                        </li>
                        <li><a href="">에그드랍, '영국남자' 유투브 채널 소개 진짜 'K-길거리 토스트'와 영국 고등학생들의 만남</a>
                        </li>
                        <li><a href="">"K-푸드 대표 브랜드로 도약" 에그드랍, 태국 1호점 오픈</a>
                        </li>
                    </ul>
                </div>
            </div>



        </section> -->

        <section class="sns">
            <h2>FLLOW US</h2>
            <h3>@EGGDROP.OFFICIAL</h3>

            <div class="inner">
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns01.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns02.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns03.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns04.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns05.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns06.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns07.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns08.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns09.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?= G5_THEME_URL ?>/img/sns10.png" alt="">
                </figure>
            </div>
        </section>



 </main>










<?php
include_once(G5_THEME_PATH.'/tail.php');