<?php
$huay = new api_meehuay;
if(isset($_GET['huay'])){
    echo $huay->huay($_GET['huay']);
}
class api_meehuay {
    protected $content;
    public function __construct() // or any other method
    {
        // header("Content-Type: application/json; charset=UTF-8");
        include 'curl_class.php';
        $this->url = 'https://www.bauto28.com/';

    }

    public function huay($val){ // หวยรัฐบาลไทย
        $content = file_get_html($this->url.$val.".php");
        $data = $content->find("section[id=services]", 0)->outertext;
        // $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $data;
    }

}
