<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>วันนี้กูจะรวย | ทุกหวยรวมอยู่ที่นี่ที่เดียว ตรวจผลหวย</title>

    <!-- Fav -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/ico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="assets/ico/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/ico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
  <link rel="manifest" href="assets/ico/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/ico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- CSS -->
  <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<!-- <link rel="stylesheet" href="masterpiece/assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
	<link href="assets/css/all.min.css" rel="stylesheet">



</head>

<body class="page-body" onload="onLoad()">

  <div >
    <img class="logo-container" src="assets/img/logo.png" alt="" style="max-width: 15%;">
  </div>

  <!-- navbar -->
  <nav class="navbar navbar-expand-md bg-main nav-web">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a id="menu-home" class="nav-link font15 p-menu lang" href="index.php" style="z-index: 99;">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a id="menu-check-huay" class="nav-link font15 p-menu lang" href="#check-huay-card" style="z-index: 99;">ตรวจหวย</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link font15 p-menu dropdown-toggle lang" href="#" id="thaiLotto" data-bs-toggle="dropdown" aria-expanded="false" style="z-index: 99;">หวยไทย</a>
            <ul class="dropdown-menu" aria-labelledby="thaiLotto">
              <li><a id="menu-huay-rat" class="dropdown-item font15 text-white lang" href="result-huay/huay-thai.php">-หวยรัฐบาล</a></li>
              <li><a id="menu-huay-omsin" class="dropdown-item font15 text-white lang" href="#">-หวยออมสิน</a></li>
              <li><a id="menu-huay-tgs" class="dropdown-item font15 text-white lang" href="#">-หวยธกส</a></li>
              <li><a id="menu-hun-thai" class="dropdown-item font15 text-white lang" href="#">-หวยหุ้นไทย</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link font15 p-menu dropdown-toggle lang" href="#" id="interLotto" data-bs-toggle="dropdown" aria-expanded="false" style="z-index: 99;">หวยต่างประเทศ</a>
            <ul class="dropdown-menu" aria-labelledby="interLotto">
              <li><a id="menu-hun-korea" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(4)">-หุ้นเกาหลี</a></li>
              <li><a id="menu-nikai-1" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(0)">-นิเคอิรอบเช้า</a></li>
              <li><a id="menu-nikai-2" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(5)">-นิเคอิรอบบ่าย</a></li>
              <li><a id="menu-hanseng-1" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(2)">-ฮั่งเส็งรอบเช้า</a></li>
              <li><a id="menu-hanseng-2" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(7)">-ฮั่งเส็งรอบบ่าย</a></li>
              <li><a id="menu-china-1" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(1)">-จีนรอบเช้า</a></li>
              <li><a id="menu-china-2" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(6)">-จีนรอบบ่าย</a></li>
              <li><a id="menu-hun-tiwan" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(3)">-หุ้นไต้หวัน</a></li>
              <li><a id="menu-hun-sing" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(8)">-หุ้นสิงคโปร์</a></li>
              <li><a id="menu-hun-egypt" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(11)">-หุ้นอียิปต์</a></li>
              <li><a id="menu-hun-german" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(14)">-หุ้นเยอรมัน</a></li>
              <li><a id="menu-hun-eng" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(13)">-หุ้นอังกฤษ</a></li>
              <li><a id="menu-hun-rus" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(12)">-หุ้นรัสเซีย</a></li>
              <li><a id="menu-hun-india" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(10)">-หุ้นอินเดีย</a></li>
              <li><a id="menu-hun-downjone" class="dropdown-item font15 text-white lang" href="#projects" onclick="btnTrig(15)">-หุ้นดาวโจนส์</a></li>
              <li><a id="menu-huay-malay" class="dropdown-item font15 text-white lang" href="result-huay/huay-malay.php">-หวยมาเลย์</a></li>
              <li><a id="menu-huay-laos" class="dropdown-item font15 text-white lang" href="result-huay/huay-lao.php">-หวยลาว</a></li>
              <li><a id="menu-huay-hanoi" class="dropdown-item font15 text-white lang" href="result-huay/huay-hanoi.php">-หวยเวียดนาม\/ฮานอย</a></li>
              <li><a id="menu-huay-hanoi-s" class="dropdown-item font15 text-white lang" href="result-huay/huay-hanoi-s.php">-หวยเวียดนาม\/ฮานอยพิเศษ</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a id="menu-doc" class="nav-link font15 p-menu lang" href="#" style="z-index: 99;">วิธีการใช้</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link font15 p-menu dropdown-toggle lang" href="#" id="dropdown07" data-bs-toggle="dropdown"
              aria-expanded="false" style="z-index: 99;">ภาษาไทย</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <li><a class="dropdown-item font15 text-white" href="#" onclick="changeLang('th')">ภาษาไทย</a></li>
              <li><a class="dropdown-item font15 text-white" href="#" onclick="changeLang('en')">English</a></li>
              <li><a class="dropdown-item font15 text-white" href="#" onclick="changeLang('laos')">ພາສາລາວ</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  
  <nav class="navbar bg-main nav-mobile">
    <div class="dropdown" style="margin-left: 20px;">
      <a class="nav-link p-menu dropdown-toggle font15 lang" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false">ภาษาไทย</a>
      <ul class="dropdown-menu" aria-labelledby="dropdown02">
        <li><a class="dropdown-item font15 text-white" href="#" onclick="changeLang('th')">ภาษาไทย</a></li>
        <li><a class="dropdown-item font15 text-white" href="#" onclick="changeLang('en')">English</a></li>
        <li><a class="dropdown-item font15 text-white" href="#" onclick="changeLang('laos')">ພາສາລາວ</a></li>
      </ul>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
      aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 20px;">
      <span class="navbar-toggler-icon">☰</span>
    </button>
    <div class="collapse bg-web w-100" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7">
            <!-- <h4 class="text-white"></h4> -->
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a id="menu-home" class="nav-link font15 p-menu lang" href="index.php">หน้าแรก</a>
              </li>
              <li class="nav-item">
                <a id="menu-check-huay" class="nav-link font15 p-menu lang" href="#check-huay-card">ตรวจหวย</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font15 p-menu dropdown-toggle lang" href="#thaiLottoM" role="button" data-bs-toggle="collapse" data-bs-target="#thaiLottoM"
                aria-controls="thaiLottoM" aria-expanded="false">หวยไทย</a>
                 <div class="collapse" id="thaiLottoM">
                  <ul>
                    <li><a id="menu-huay-rat" class="font15 text-white lang" href="result-huay/huay-thai.php">-หวยรัฐบาล</a></li>
                    <li><a id="menu-huay-omsin" class="font15 text-white lang" href="#">-หวยออมสิน</a></li>
                    <li><a id="menu-huay-tgs" class="font15 text-white lang" href="#">-หวยธกส</a></li>
                    <li><a id="menu-hun-thai" class="font15 text-white lang" href="#">-หวยหุ้นไทย</a></li>
                  </ul>
                 </div>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 offset-md-1">
            <!-- <h4 class="text-white">Contact</h4> -->
            <ul class="list-unstyled">
              <li class="nav-item">
                <a class="nav-link font15 p-menu dropdown-toggle lang" href="#interLottoM" role="button" data-bs-toggle="collapse" data-bs-target="#interLottoM"
                aria-controls="interLottoM" aria-expanded="false">หวยต่างประเทศ</a>
                <div class="collapse" id="interLottoM">
                  <ul>
                    <li><a id="menu-hun-korea" class="font15 text-white lang" href="#projects" onclick="btnTrig(4)">-หุ้นเกาหลี</a></li>
                    <li><a id="menu-nikai-1" class="font15 text-white lang" href="#projects" onclick="btnTrig(0)">-นิเคอิรอบเช้า</a></li>
                    <li><a id="menu-nikai-2" class="font15 text-white lang" href="#projects" onclick="btnTrig(5)">-นิเคอิรอบบ่าย</a></li>
                    <li><a id="menu-hanseng-1" class="font15 text-white lang" href="#projects" onclick="btnTrig(2)">-ฮั่งเส็งรอบเช้า</a></li>
                    <li><a id="menu-hanseng-2" class="font15 text-white lang" href="#projects" onclick="btnTrig(7)">-ฮั่งเส็งรอบบ่าย</a></li>
                    <li><a id="menu-china-1" class="font15 text-white lang" href="#projects" onclick="btnTrig(1)">-จีนรอบเช้า</a></li>
                    <li><a id="menu-china-2" class="font15 text-white lang" href="#projects" onclick="btnTrig(6)">-จีนรอบบ่าย</a></li>
                    <li><a id="menu-hun-tiwan" class="font15 text-white lang" href="#projects" onclick="btnTrig(3)">-หุ้นไต้หวัน</a></li>
                    <li><a id="menu-hun-sing" class="font15 text-white lang" href="#projects" onclick="btnTrig(8)">-หุ้นสิงคโปร์</a></li>
                    <li><a id="menu-hun-egypt" class="font15 text-white lang" href="#projects" onclick="btnTrig(11)">-หุ้นอียิปต์</a></li>
                    <li><a id="menu-hun-german" class="font15 text-white lang" href="#projects" onclick="btnTrig(14)">-หุ้นเยอรมัน</a></li>
                    <li><a id="menu-hun-eng" class="font15 text-white lang" href="#projects" onclick="btnTrig(13)">-หุ้นอังกฤษ</a></li>
                    <li><a id="menu-hun-rus" class="font15 text-white lang" href="#projects" onclick="btnTrig(12)">-หุ้นรัสเซีย</a></li>
                    <li><a id="menu-hun-india" class="font15 text-white lang" href="#projects" onclick="btnTrig(10)">-หุ้นอินเดีย</a></li>
                    <li><a id="menu-hun-dounjone" class="font15 text-white lang" href="#projects" onclick="btnTrig(15)">-หุ้นดาวโจนส์</a></li>
                    <li><a id="menu-huay-malay" class="font15 text-white lang" href="result-huay/huay-malay.php">-หวยมาเลย์</a></li>
                    <li><a id="menu-huay-laos" class="font15 text-white lang" href="result-huay/huay-lao.php">-หวยลาว</a></li>
                    <li><a id="menu-huay-hanoi" class="font15 text-white lang" href="result-huay/huay-hanoi.php">-หวยเวียดนาม\/ฮานอย</a></li>
                    <li><a id="menu-huay-hanoi-s" class="font15 text-white lang" href="result-huay/huay-hanoi-s.php">-หวยเวียดนาม\/ฮานอยพิเศษ</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a id="menu-doc" class="nav-link font15 p-menu lang" href="#">วิธีการใช้</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->