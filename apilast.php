<?php
class api_huayNew {
    protected $content;
    public function __construct() // or any other method
    {
        // header("Content-Type: application/json; charset=UTF-8");
        include 'api/curl_class.php';
        
    }

    protected function thai_date_fullmonth($time){   // 19 ธันวาคม 2556
        $monthTH = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
        $thai_date_return = date("j",$time);   
        $thai_date_return.=" ".$monthTH[date("n",$time)];   
        $thai_date_return.= " ".(date("Y",$time)+543);   
        return $thai_date_return;   
    } 

    public function lao(){ // หวยลาว
        $content = file_get_html('https://www.ruay.info/%E0%B8%95%E0%B8%A3%E0%B8%A7%E0%B8%88%E0%B8%AB%E0%B8%A7%E0%B8%A2%E0%B8%A5%E0%B8%B2%E0%B8%A7/');
        $finddate = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 0)->plaintext;
        $explode = explode(" ", $finddate);
        $explode = explode("/", $explode[1]);
        $mapEx = $explode[0]."-".$explode[1]."-25".$explode[2];
        $Four = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 1)->plaintext;
        $Three = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 2)->plaintext;
        $Two = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 3)->plaintext;
        $data = array(
            'title'=> "หวยลาว",
            'date'=> $this->thai_date_fullmonth(strtotime($mapEx."-543 YEARS")),
            'data'=> array([
                    'Four'=> trim($Four),
                    'Three'=> trim($Three),
                    'Two'=> trim($Two),
                ])
            );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function lao_vip(){ // หวยลาว VIP
        $content = json_decode(file_get_contents('https://www.laosviplot.com/result'), true);
        $datecontent = preg_replace('/[^A-Za-z0-9\-]/', '', $content["date"]);
        $newdatecontent = preg_replace('/-+/', '-', $datecontent);
        $strdate = $datecontent[0].$datecontent[1]."-".$datecontent[2].$datecontent[3]."-".$datecontent[4].$datecontent[5].$datecontent[6].$datecontent[7];
        $Four = $content["lotto_1"].$content["lotto_2"].$content["lotto_3"].$content["lotto_4"];
        $Three = $content["lotto_2"].$content["lotto_3"].$content["lotto_4"];
        $Two = $content["lotto_3"].$content["lotto_4"];
        $data = array(
            'title'=> "หวยลาว",
            'date'=> $this->thai_date_fullmonth(strtotime($strdate)),
            'data'=> array([
                    'Four'=> trim($Four),
                    'Three'=> trim($Three),
                    'Two'=> trim($Two),
                ])
            );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function lao_star(){ // หวยลาวสตาร์
        $content = file_get_html('https://cat888.com/online/laos_star/history');
        $finddate = $content->find('div[class=time-play] div div div div[class=tbody text-center] div', 0)->plaintext;
        $explode1 = explode(" ", $finddate);
        $explode = explode("/", $explode1[1]);
        $mapEx = $explode[0]."-".$explode[1]."-25".$explode[2];
        $Four = $explode1[5];
        $Three = $explode1[6];
        $Two = $explode1[7];
        $data = array(
            'title'=> "หวยลาวสตาร์",
            'date'=> $this->thai_date_fullmonth(strtotime($mapEx."-543 YEARS")),
            'data'=> array([
                    'Four'=> trim($Four),
                    'Three'=> trim($Three),
                    'Two'=> trim($Two),
                ])
            );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function hanoy_special(){ // หวยฮานอยพิเศษ
        $content = file_get_html('https://www.ruay.info/%e0%b8%95%e0%b8%a3%e0%b8%a7%e0%b8%88%e0%b8%ab%e0%b8%a7%e0%b8%a2%e0%b8%ae%e0%b8%b2%e0%b8%99%e0%b8%ad%e0%b8%a2%e0%b8%9e%e0%b8%b4%e0%b9%80%e0%b8%a8%e0%b8%a9/');
        $finddate = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 0)->plaintext;
        $explode = explode(" ", $finddate);
        $explode = explode("/", $explode[1]);
        $mapEx = $explode[0]."-".$explode[1]."-25".$explode[2];
        $Four = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 1)->plaintext;
        $Three = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 2)->plaintext;
        $Two = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 3)->plaintext;
        $data = array(
            'title'=> "หวยฮานอยพิเศษ",
            'date'=> $this->thai_date_fullmonth(strtotime($mapEx."-543 YEARS")),
            'data'=> array([
                    'Four'=> trim($Four),
                    'Three'=> trim($Three),
                    'Two'=> trim($Two),
                ])
            );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function thai(){ // หวยไทย
        $content = file_get_html('https://www.ruay.info/%e0%b8%95%e0%b8%a3%e0%b8%a7%e0%b8%88%e0%b8%ab%e0%b8%a7%e0%b8%a2%e0%b8%a3%e0%b8%b1%e0%b8%90%e0%b8%9a%e0%b8%b2%e0%b8%a5/');
        $finddate = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 0)->plaintext;
        $explode = explode(" ", $finddate);
        $explode = explode("/", $explode[1]);
        $mapEx = $explode[0]."-".$explode[1]."-25".$explode[2];
        $FirstPrize = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 1)->plaintext;
        $explodeThreeFront = explode("  | ", $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 3)->plaintext);
        $ThreeFront = $explodeThreeFront[0] .",".$explodeThreeFront[1];
        $explodeThreeBack = explode("  | ", $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 6)->plaintext);
        $ThreeBack = $explodeThreeBack[0] .",".$explodeThreeBack[1];
        $Two = $content->find('div[class=elementor-text-editor elementor-clearfix] table tbody tr td span span', 9)->plaintext;
        $data = array(
            'title'=> "หวยไทย",
            'date'=> $this->thai_date_fullmonth(strtotime($mapEx."-543 YEARS")),
            'data'=> array([
                    'FirstPrize'=> trim($FirstPrize),
                    'ThreeFront'=> trim($ThreeFront),
                    'ThreeBack'=> trim($ThreeBack),
                    'Two'=> trim($Two),
                ])
            );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }


}

if(isset($_GET['huay'])){
    $lao = new api_huayNew;
    if($_GET['huay'] == "lao"){
        echo $lao->lao();
        
    } elseif($_GET['huay'] == "lao_vip"){
        echo $lao->lao_vip();
        
    } elseif($_GET['huay'] == "lao_star"){
        echo $lao->lao_star();
        
    } elseif($_GET['huay'] == "hanoy_special"){
        echo $lao->hanoy_special();
    } elseif($_GET['huay'] == "thai"){
        echo $lao->thai();

    } else {
        echo json_encode(
            array(
                "huay"=>array(
                    "thai",
                    "lao",
                    "lao_vip",
                    "lao_star",
                    "hanoy_special"
                )
            ),
            JSON_UNESCAPED_UNICODE
        );
    }
}

?>