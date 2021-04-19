<?php
include('apilast.php');

if (isset($_GET['lotto'])) {
    $datatoarray = json_decode(file_get_contents("https://www.bauto28.com/latest-date.php"), true);
    // $thaiLotto = json_decode(file_get_contents("http://154.16.7.192/data.php"), true);
    // $laostar = file_get_contents("apilast.php?huay=lao_star");

    $huay = new api_huayNew;
    $huaythai = json_decode($huay->thai(), true);
    $huaylao = json_decode($huay->lao(), true);
    $huaylaostar = json_decode($huay->lao_star(), true);
    $huaylaovip = json_decode($huay->lao_vip(), true);
    $huayhanoyspecial = json_decode($huay->hanoy_special(), true);
    // print_r(json_decode($Content));
    // print_r($thaiLotto["data"][0]);
    // print_r($thaiLotto["data"][0]["data"][0]["FirstPrize"]);

    if ($_GET['lotto'] == '0') { // ไทย 0
        $huay = 0;
        // print_r($datatoarray[$huay]["prize1"]);
        // $number = $datatoarray[$huay]["prize1"];
        // @$number2 = $datatoarray[$huay]["prize2"][0];
        $number = $huaythai["data"][0]["FirstPrize"];
        $number2 = $huaythai["data"][0]["ThreeFront"];
        $number3 = $huaythai["data"][0]["ThreeBack"];
        $number4 = $huaythai["data"][0]["Two"];
        // @$number2 = $thaiLotto["data"]["prize2"][0];
        if (!empty($number)) {
            // if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($number));
            $prize2  = array_map('intval', str_split($number2));
            $prize3  = array_map('intval', str_split($number3));
            $prize4  = array_map('intval', str_split($number4));
            // print_r($prize1);
            // print_r($prize2);
            // print_r($prize3);
            // print_r($prize4);

?>
            <div class="col-12">
                <p id="1st" class="huay-title-in-card lang">รางวัลที่1</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="th-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-5" src="assets/img/number/num-<?= $prize1[4] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-6" src="assets/img/number/num-<?= $prize1[5] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-lg-4 offset-lg-1 col-md-4 col-xs-4">
                <p id="3front" class="huay-title-in-card lang">3ตัวหน้า</p>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-<?= $prize2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-<?= $prize2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-<?= $prize2[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-<?= $prize2[4] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-<?= $prize2[5] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-<?= $prize2[6] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4">
                <p id="3last" class="huay-title-in-card lang">3ตัวท้าย</p>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-<?= $prize3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-<?= $prize3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-<?= $prize3[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-<?= $prize3[4] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-<?= $prize3[5] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-<?= $prize3[6] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-4">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย2</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="th-2-1" src="assets/img/number/num-<?= $prize4[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-2-2" src="assets/img/number/num-<?= $prize4[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="col-12">
            <p id="1st" class="huay-title-in-card lang">รางวัลที่1</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="th-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-5" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-6" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-lg-4 offset-lg-1  col-md-4 col-xs-4">
                <p id="3front" class="huay-title-in-card lang">3ตัวหน้า</p>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4">
                <p id="3last" class="huay-title-in-card lang">3ตัวท้าย</p>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-4">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย2</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="th-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>

        <?php
        } // end if
    } elseif ($_GET['lotto'] == '1') { // หวยลาว 5
        $huay = 5;
        // print_r($datatoarray[$huay]);
        $number = $huaylao["data"][0]["Four"];
        $number2 = $huaylao["data"][0]["Three"];
        $number3 = $huaylao["data"][0]["Two"];
        // @$number2 = $datatoarray[$huay]["prize2"][0];
        // print_r($huaylao["data"]);
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($number));
            $prize2  = array_map('intval', str_split($number2));
            $prize3  = array_map('intval', str_split($number3));
             ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="lov-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-2-1" src="assets/img/number/num-<?= $prize3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-2-2" src="assets/img/number/num-<?= $prize3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p id="3last" class="huay-title-in-card lang">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-3-1" src="assets/img/number/num-<?= $prize2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-2" src="assets/img/number/num-<?= $prize2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-3" src="assets/img/number/num-<?= $prize2[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>

            <div class="col-12">
                <p id="5digit" class="huay-title-in-card lang">รางวัล 5 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="lo-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-5" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">3 <span id="digit-top" class="lang"><span id="digit-top" class="lang">ตัวบน</span></span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } // end if


    } elseif ($_GET['lotto'] == '2') { // หวยลาว vip 7
        $huay = 7;
        // print_r($datatoarray[$huay]);
        $number = $huaylaovip["data"][0]["Four"];
        $number2 = $huaylaovip["data"][0]["Three"];
        $number3 = $huaylaovip["data"][0]["Two"];
        // @$number2 = $datatoarray[$huay]["prize2"][0];
        // print_r($huaylao["data"]);
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($number));
            $prize2  = array_map('intval', str_split($number2));
            $prize3  = array_map('intval', str_split($number3));
        ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="lov-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-2-1" src="assets/img/number/num-<?= $prize3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-2-2" src="assets/img/number/num-<?= $prize3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p id="3last" class="huay-title-in-card lang">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-3-1" src="assets/img/number/num-<?= $prize2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-2" src="assets/img/number/num-<?= $prize2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-3" src="assets/img/number/num-<?= $prize2[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>

            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="lov-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p id="3last" class="huay-title-in-card lang">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php

        } // end if


    } elseif ($_GET['lotto'] == '3') { // หวยลาว star 6
        $huay = 6;
        // print_r($datatoarray[$huay]);
        $number = $huaylaostar["data"][0]["Four"];
        $number2 = $huaylaostar["data"][0]["Three"];
        $number3 = $huaylaostar["data"][0]["Two"];
        // @$number2 = $datatoarray[$huay]["prize2"][0];
        // print_r($huaylao["data"]);
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($number));
            $prize2  = array_map('intval', str_split($number2));
            $prize3  = array_map('intval', str_split($number3));
        ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="los-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-2-1" src="assets/img/number/num-<?= $prize3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-2-2" src="assets/img/number/num-<?= $prize3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p id="3last" class="huay-title-in-card lang">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-3-1" src="assets/img/number/num-<?= $prize2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-2" src="assets/img/number/num-<?= $prize2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-3" src="assets/img/number/num-<?= $prize2[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="los-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p id="3last" class="huay-title-in-card lang">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } // end if


    } elseif ($_GET['lotto'] == '4') { // หวยฮานอย 4
        $huay = 4;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
            $prize2_3  = array_map('intval', str_split($datatoarray[$huay]["prize2"][2]));
        ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-last" class="lang">ตัวล่าง</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-<?= $prize2_3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-<?= $prize2_3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">3 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-<?= $prize2_1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-last" class="lang">ตัวล่าง</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">3 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } // end if


    } elseif ($_GET['lotto'] == '5') { // หวยฮานอยพิเศษ 3
        $huay = 3;
        // print_r($datatoarray[$huay]);
        $number = $huayhanoyspecial["data"][0]["Four"];
        $number2 = $huayhanoyspecial["data"][0]["Three"];
        $number3 = $huayhanoyspecial["data"][0]["Two"];
        // @$number2 = $datatoarray[$huay]["prize2"][0];
        // print_r($huaylao["data"]);
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($number));
            $prize2  = array_map('intval', str_split($number2));
            $prize3  = array_map('intval', str_split($number3));
        ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="los-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-2-1" src="assets/img/number/num-<?= $prize3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-2-2" src="assets/img/number/num-<?= $prize3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p id="3last" class="huay-title-in-card lang">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-3-1" src="assets/img/number/num-<?= $prize2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-2" src="assets/img/number/num-<?= $prize2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-3" src="assets/img/number/num-<?= $prize2[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="los-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p id="2last" class="huay-title-in-card lang">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p id="3last" class="huay-title-in-card lang">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } // end if


    } elseif ($_GET['lotto'] == '6') { // หวยฮานอย VIP 2
        $huay = 2;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
            $prize2_3  = array_map('intval', str_split($datatoarray[$huay]["prize2"][2]));
        ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-last" class="lang">ตัวล่าง</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-<?= $prize2_3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-<?= $prize2_3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">3 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-<?= $prize2_1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-last" class="lang">ตัวล่าง</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">3 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
<?php
        } // end if


    } elseif ($_GET['lotto'] == '7') { // หวยมาเลย์ 1
        $huay = 1;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
            $prize2_3  = array_map('intval', str_split($datatoarray[$huay]["prize2"][2]));
        ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-last" class="lang">ตัวล่าง</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-<?= $prize2_3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-<?= $prize2_3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">3 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-<?= $prize2_1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p id="4digit" class="huay-title-in-card lang">4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 <span id="digit-last" class="lang">ตัวล่าง</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">3 <span id="digit-top" class="lang">ตัวบน</span></p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
<?php
        } // end if


    }
} // isset lotto



?>