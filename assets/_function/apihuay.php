<?php
class api_huay {
    protected $content;
    public function __construct() // or any other method
    {
        // header("Content-Type: application/json; charset=UTF-8");

        include 'curl_class.php';
        
        $this->content = file_get_html('https://www.lottovip.com/login');

        $this->stockdate = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 xtarget] h6 span', 1)->plaintext;
    }

    public function gov_thai(){ // หวยรัฐบาล
        $findtitle = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] h6', 0)->plaintext;
        $explode = explode(' ', trim($findtitle));
        $findDate = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] h6 span', 1)->plaintext;
        $FirstPrize = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=card border-dark text-center mb-2]', 0)->plaintext;
        $ThreeFront = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=row] div div div', 1)->plaintext;
        $ThreeUnder = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=row] div div div', 3)->plaintext;
        $TwoUnder = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=row] div div div', 5)->plaintext;
        $data = array(
            'title'=> $explode[0],
            'date'=> trim($findDate),
            'data'=> array([
                'FirstPrize'=> trim($FirstPrize),
                'ThreeFront'=> trim($ThreeFront),
                'ThreeUnder'=> trim($ThreeUnder),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function gsb_thai(){ // หวย ออมสิน
        $findtitle = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] h6', 1)->plaintext;
        $explode = explode(' ', trim($findtitle));
        $findDate = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] h6 span', 3)->plaintext;
        $ThreeLast = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=card border-dark text-center mb-2] div[class=card-body p-1]', 1)->plaintext;
        $ThreeTop = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=row] div div div', 7)->plaintext;
        $TwoUnder = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=row] div div div', 9)->plaintext;
        $data = array(
            'title'=> $explode[0].$explode[1],
            'date'=> trim($findDate),
            'data'=> array([
                'ThreeLast'=> trim($ThreeLast),
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function baac_thai(){ // หวย ธกส.
        $findtitle = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] h6', 2)->plaintext;
        $explode = explode(' ', trim($findtitle));
        $findDate = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] h6 span', 5)->plaintext;
        $FirstPrize = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=card border-dark text-center mb-2] div[class=card-body p-1]', 2)->plaintext;
        $ThreeTop = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=row] div div div', 11)->plaintext;
        $TwoUnder = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 h-100 xtarget] div[class=row] div div div', 13)->plaintext;
        $data = array(
            'title'=> $explode[0].$explode[1],
            'date'=> trim($findDate),
            'data'=> array([
                'FirstPrize'=> trim($FirstPrize),
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_thai(){ // หวยหุ้นไทย
        $findtitle = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 xtarget] h6', 0)->plaintext;
        $explode = explode(' ', trim($findtitle));
        $findDate = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 xtarget] h6 span', 1)->plaintext;
        $ThreeTop = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 xtarget] div[class=card-group] div div div div div p', 0)->plaintext;
        $TwoUnder = $this->content->find('div[class=bgwhitealpha shadow-sm rounded p-2 xtarget] div[class=card-group] div div div div div p', 1)->plaintext;
        $data = array(
            'title'=> $explode[0],
            'date'=> trim($findDate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_korea(){ // หุ้นเกาหลี
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 0)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 1)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 3)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_nikkeiday(){ // นิเคอิรอบเช้า
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 1)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 5)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 7)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_nikkeinoon(){ // นิเคอิรอบบ่าย
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 2)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 9)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 11)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_hangsengday(){ // ฮั่งเส็งรอบเช้า
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 3)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 13)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 15)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_hangsengnoon(){ // ฮั่งเส็งรอบบ่าย
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 4)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 17)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 19)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_chinaday(){ // จีนรอบเช้า
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 5)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 21)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 23)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_chinanoon(){ // จีนรอบบ่าย 
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 6)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 25)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 27)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_taiwan(){ // หุ้นไต้หวัน 
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 7)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 29)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 31)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }
    
    public function stock_singapore(){ // หุ้นสิงคโปร์ 
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 8)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 33)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 35)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_egypt(){ // หุ้นอียิปต์ 
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 9)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 37)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 39)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_german(){ // หุ้นเยอรมัน 
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 10)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 41)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 43)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_england(){ // หุ้นอังกฤษ 
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 11)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 45)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 47)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_russia(){ // หุ้นรัสเซีย 
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 12)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 49)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 51)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_india(){ // หุ้นอินเดีย 
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 13)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 53)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 55)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function stock_dowjone(){ // หุ้นดาวโจนส์
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 14)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 57)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 59)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function malaysia(){ // หวยมาเลย์
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 15)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 61)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 63)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function lao(){ // หวยลาว
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 16)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 65)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 67)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function hanoy(){ // หวยเวียดนาม/ฮานอย
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 17)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 69)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 71)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

    public function hanoySP(){ // หวยเวียดนาม/ฮานอยพิเศษ
        $findtitle = $this->content->find('div[class=pc-view] div div div div[class=card-header text-danger p-1]', 18)->plaintext;
        $ThreeTop = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 73)->plaintext;
        $TwoUnder = $this->content->find('div[class=pc-view] div div div div[class=card-body p-0] div div div', 75)->plaintext;
        $data = array(
            'title'=> trim($findtitle),
            'date'=> trim($this->stockdate),
            'data'=> array([
                'ThreeTop'=> trim($ThreeTop),
                'TwoUnder'=> trim($TwoUnder),
            ])
        );
        $result = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $result;
    }

}




?>