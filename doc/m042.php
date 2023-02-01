<?
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>





<div class="content">
<div class="sub">
            <h2>고객문의</h2>
            <p>항상 고객님의 의견에 귀 기울이는<br />
                EGGDROP이 되도록 노력하겠습니다.</p>

            <div class="inner">

                <ul class="sub04_cate">
                <li class="a"><a href="<?= G5_THEME_URL ?>/doc/m041.php">FAQ</a></li>
                    <li class="a"><a href="<?= G5_THEME_URL ?>/doc/m042.php">고객문의</a></li>
                </ul>
                <p class="cs">
                    자주 묻는 질문을 통해 더욱 빠르게 답변을 확인하실 수 있습니다.<br />
                    고객님이 보내주신 문의에 대한 답변은 문의 등록 시 기재해주신 이메일로 회신 드립니다.<br />
                    보내주신 문의사항에 대해서는 순차적으로 답변 전달 드리고 있습니다.
                </p>
                <div id="cscs">
                
                    <form>
                        <div class="b_info">
                            <div class="bold">기본정보</div>
                            <div class="ess">*필수 입력 사항입니다.</div>
                        </div>
                        <ul>
                            <li>
                                <label for="user_name">이름*</label>
                                <input type="text" id="user_name" placeholder="" autofocus>
                            </li>
                            <li>
                                <label for="user_tel">연락처*</label>
                                <input type="text" id="user_tel">
                            </li>
                            <li>
                                <label for="user_tel">이메일*</label>
                                <input type="text" id="user_mail">
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span>문의 유형*</span>
                                <label><input type="radio" name="field" value="branch"> 점포 제안</label>
                                <label><input type="radio" name="field" value="partner"> 제휴 문의</label>
                                <label><input type="radio" name="field" value="customer"> 고객 문의</label>
                            </li>
                        </ul>
                        <span>문의 내용*</span>
                        <textarea cols="100" rows="10" placeholder=""></textarea>
                        <div class="submit">
                            <input type='submit' value="접수하기">
                        </div>
                    </form>
               

                </div>
              
            </div>

        </div>

                        </div>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>