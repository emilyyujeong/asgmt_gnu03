<?
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>



<div class="content">

<div class="sub">
            <h2>STORE</h2>
            <p>전국에서 신선한 에그드랍을 경험할 수 있습니다.<br />
                주변의 가까운 매장을 검색해 보세요</p>
            <div class="inner">
                <div class="list_map">
                    <div class="map">
                        <!-- * 카카오맵 - 지도퍼가기 -->
                        <!-- 1. 지도 노드 -->
                        <div id="daumRoughmapContainer1675063661056"
                            class="root_daum_roughmap root_daum_roughmap_landing">
                        </div>

                        <!--
2. 설치 스크립트
* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
                        <script charset="UTF-8" class="daum_roughmap_loader_script"
                            src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                        <!-- 3. 실행 스크립트 -->
                        <script charset="UTF-8">
                            new daum.roughmap.Lander({
                                "timestamp": "1675063661056",
                                "key": "2djy9",
                                "mapWidth": "1200",
                                "mapHeight": "450"
                            }).render();
                        </script>
                    </div>
                </div>
            </div>


        </div>

</div>



<?php
include_once(G5_PATH.'/tail.php');
?>