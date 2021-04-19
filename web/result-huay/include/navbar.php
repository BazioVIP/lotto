<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>มีทุกหวย.com</title>

  <!-- CSS -->
  <link href="../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/index.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<!-- <link rel="stylesheet" href="masterpiece/assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/owl.theme.default.min.css">
	<link href="../assets/css/all.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
  <link rel="icon" href="../assets/img/favicon.ico">

</head>

<body class="page-body">

  <div >
    <img class="logo-container" src="../assets/img/logo.png" alt="" style="max-width: 15%;">
  </div>

  <!-- navbar -->
  <nav class="navbar navbar-expand-md bg-main nav-web">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link font15 p-menu" href="../index.php" style="z-index: 99;">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font15 p-menu" href="../index.php#check-huay-card" style="z-index: 99;">ตรวจหวย</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link font15 p-menu dropdown-toggle" href="#" id="thaiLotto" data-bs-toggle="dropdown" aria-expanded="false" style="z-index: 99;">หวยไทย</a>
            <ul class="dropdown-menu" aria-labelledby="thaiLotto">
              <li><a class="dropdown-item font15 text-white" href="huay-thai.php">-หวยรัฐบาล</a></li>
              <li><a class="dropdown-item font15 text-white" href="#">-หวยออมสิน</a></li>
              <li><a class="dropdown-item font15 text-white" href="#">-หวยธกส</a></li>
              <li><a class="dropdown-item font15 text-white" href="#">-หวยหุ้นไทย</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link font15 p-menu dropdown-toggle" href="#" id="interLotto" data-bs-toggle="dropdown" aria-expanded="false" style="z-index: 99;">หวยต่างประเทศ</a>
            <ul class="dropdown-menu" aria-labelledby="interLotto">
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(4)">-หุ้นเกาหลี</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(0)">-นิเคอิรอบเช้า</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(5)">-นิเคอิรอบบ่าย</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(2)">-ฮั่งเส็งรอบเช้า</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(7)">-ฮั่งเส็งรอบบ่าย</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(1)">-จีนรอบเช้า</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(6)">-จีนรอบบ่าย</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(3)">-หุ้นไต้หวัน</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(8)">-หุ้นสิงคโปร์</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(11)">-หุ้นอียิปต์</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(14)">-หุ้นเยอรมัน</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(13)">-หุ้นอังกฤษ</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(12)">-หุ้นรัสเซีย</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(10)">-หุ้นอินเดีย</a></li>
              <li><a class="dropdown-item font15 text-white" href="../index.php#projects" onclick="btnTrig(15)">-หุ้นดาวโจนส์</a></li>
              <li><a class="dropdown-item font15 text-white" href="huay-malay.php">-หวยมาเลย์</a></li>
              <li><a class="dropdown-item font15 text-white" href="huay-lao.php">-หวยลาว</a></li>
              <li><a class="dropdown-item font15 text-white" href="huay-hanoi.php">-หวยเวียดนาม\/ฮานอย</a></li>
              <li><a class="dropdown-item font15 text-white" href="huay-hanoi-s.php">-หวยเวียดนาม\/ฮานอยพิเศษ</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link font15 p-menu" href="#" style="z-index: 99;">วิธีการใช้</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link font15 p-menu dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown"
              aria-expanded="false" style="z-index: 99;">ภาษาไทย</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <li><a class="dropdown-item font15 text-white" href="#">ภาษาไทย</a></li>
              <li><a class="dropdown-item font15 text-white" href="#">English</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  
  <nav class="navbar bg-main nav-mobile">
    <div class="dropdown" style="margin-left: 20px;">
      <a class="nav-link p-menu dropdown-toggle font15" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false">ภาษาไทย</a>
      <ul class="dropdown-menu" aria-labelledby="dropdown02">
        <li><a class="dropdown-item font15 text-white" href="#">ภาษาไทย</a></li>
        <li><a class="dropdown-item font15 text-white" href="#">English</a></li>
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
                <a class="nav-link font15 p-menu" href="../index.php">หน้าแรก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font15 p-menu" href="../index.php#check-huay-card">ตรวจหวย</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font15 p-menu dropdown-toggle" href="#thaiLottoM" role="button" data-bs-toggle="collapse" data-bs-target="#thaiLottoM"
                aria-controls="thaiLottoM" aria-expanded="false">หวยไทย</a>
                 <div class="collapse" id="thaiLottoM">
                  <ul>
                    <li><a class="font15 text-white" href="huay-thai.php">-หวยรัฐบาล</a></li>
                    <li><a class="font15 text-white" href="#">-หวยออมสิน</a></li>
                    <li><a class="font15 text-white" href="#">-หวยธกส</a></li>
                    <li><a class="font15 text-white" href="#">-หวยหุ้นไทย</a></li>
                  </ul>
                 </div>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 offset-md-1">
            <!-- <h4 class="text-white">Contact</h4> -->
            <ul class="list-unstyled">
              <li class="nav-item">
                <a class="nav-link font15 p-menu dropdown-toggle" href="#interLottoM" role="button" data-bs-toggle="collapse" data-bs-target="#interLottoM"
                aria-controls="interLottoM" aria-expanded="false">หวยต่างประเทศ</a>
                <div class="collapse" id="interLottoM">
                  <ul>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(4)">-หุ้นเกาหลี</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(0)">-นิเคอิรอบเช้า</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(5)">-นิเคอิรอบบ่าย</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(2)">-ฮั่งเส็งรอบเช้า</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(7)">-ฮั่งเส็งรอบบ่าย</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(1)">-จีนรอบเช้า</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(6)">-จีนรอบบ่าย</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(3)">-หุ้นไต้หวัน</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(8)">-หุ้นสิงคโปร์</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(11)">-หุ้นอียิปต์</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(14)">-หุ้นเยอรมัน</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(13)">-หุ้นอังกฤษ</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(12)">-หุ้นรัสเซีย</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(10)">-หุ้นอินเดีย</a></li>
                    <li><a class="font15 text-white" href="../index.php#projects" onclick="btnTrig(15)">-หุ้นดาวโจนส์</a></li>
                    <li><a class="font15 text-white" href="huay-malay.php">-หวยมาเลย์</a></li>
                    <li><a class="font15 text-white" href="huay-lao.php">-หวยลาว</a></li>
                    <li><a class="font15 text-white" href="huay-hanoi.php">-หวยเวียดนาม\/ฮานอย</a></li>
                    <li><a class="font15 text-white" href="huay-hanoi-s.php">-หวยเวียดนาม\/ฮานอยพิเศษ</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link font15 p-menu" href="#">วิธีการใช้</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->