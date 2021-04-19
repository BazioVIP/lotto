<?php
include("include/navbar.php")
?>

<!-- header -->
<header class="header">
	<img src="assets/img/banner.jpg" alt="">
</header>
<!-- /.header -->

<!-- main content -->
<main class="main-content">
	<img src="assets/img/blush.png" alt="" class="mb-5" style="margin-top: -15px; width: 100%;">

	<!-- <div class="row d-flex justify-content-center" style="--bs-gutter-x: 0;">
      <div class="col-4 col-sm-3 d-flex justify-content-center">
        <img src="assets/img/box.png" alt="" class="lotto-today">
      </div>
      <div class="col-4 col-sm-3 d-flex justify-content-center">
        <img src="assets/img/box.png" alt="" class="lotto-today">
      </div>
      <div class="col-4 col-sm-3 d-flex justify-content-center">
        <img src="assets/img/box.png" alt="" class="lotto-today">
      </div>
    </div> -->
	<br>
	<div class="container">
		<section id="check-huay-card">
			<div class="row mt-3 d-flex justify-content-center" style="--bs-gutter-x: 0;">
				<div class="col-12 col-sm-4 check-huay">
					<form action="" class="my-2" style="width: 80%; margin: 0 auto;">
						<div>
							<h3 id="check-huay-text" class="text-white text-center">ตรวจหวย<span>
									<select id="huay-type" class="form-select form-select-sm" aria-label=".form-select-sm example" style="color: #FF0000;">
										<option selected value="หวยลาว">หวยลาว</option>
										<option value="หวยลาวสตาร์">หวยลาวสตาร์</option>
										<option value="หวยลาว VIP">หวยลาว VIP</option>
										<option value="หวยฮานอย">หวยฮานอย</option>
										<option value="หวยฮานอยVIP">หวยฮานอยVIP</option>
										<option value="หวยฮานอยพิเศษ">หวยฮานอยพิเศษ</option>
										<option value="หวยมาเลย์">หวยมาเลย์</option>
										<option value="หุ้นเกาหลี">หุ้นเกาหลี</option>
										<option value="นิเคอิ รอบเช้า">นิเคอิรอบเช้า</option>
										<option value="นิเคอิ รอบบ่าย">นิเคอิรอบบ่าย</option>
										<option value="ฮั่งเส็ง รอบเช้า">ฮั่งเส็งรอบเช้า</option>
										<option value="ฮั่งเส็ง รอบบ่าย">ฮั่งเส็งรอบบ่าย</option>
										<option value="หุ้นจีน รอบเช้า">หุ้นจีนรอบเช้า</option>
										<option value="หุ้นจีน รอบบ่าย">หุ้นจีนรอบบ่าย</option>
										<option value="หุ้นไต้หวัน">หุ้นไต้หวัน</option>
										<option value="หุ้นสิงคโปร์">หุ้นสิงคโปร์</option>
										<option value="หุ้นสิงคโปร์ 4D">หุ้นสิงคโปร์4D</option>
										<option value="หุ้นอียิปต์">หุ้นอียิปต์</option>
										<option value="หุ้นเยอรมัน">หุ้นเยอรมัน</option>
										<option value="หุ้นอังกฤษ">หุ้นอังกฤษ</option>
										<option value="หุ้นรัสเซีย">หุ้นรัสเซีย</option>
										<option value="หุ้นอินเดีย">หุ้นอินเดีย</option>
										<option value="หุ้นดาวน์โจน">หุ้นดาวโจนส์</option>
									</select>
								</span></h3>
						</div>
						<input id="huay" class="lang" type="text" placeholder="กรอกเลขหวย" maxlength="6" pattern="[0-9]*" style="border-radius: 50px; text-align: center; width: 100%;">
					</form>
					<button id="confirm-btn" type="submit" class="check-huay-btn lang" onclick="checkhuay(event); return false">ยืนยัน</button>
				</div>
			</div>
		</section>

		<section id="services" style="padding-top:50px ;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 cnt_head">
						<span class="sub_head" id="current-time"></span>
						<h2 id="huay-online" class="s_head lang">ดูผลหวยออนไลน์</h2>
						<!-- <p class="h_body">ผลหวยออนไลน์ ตรวจหวยล่าสุด ผลหวยย้อนหลัง ผลหวยงวดที่ผ่านมา แม่นยำ รวดเร็ว ครบทุกหวย
						ผลหวยรัฐบาล ผลหวยลาว ผลหวยฮานอย หวยฮานอยพิเศษ หวยฮานอย VIP</p> -->
					</div>
				</div>
				<div class="row ser_cnt text-center">
					<div class="col-lg-12 col-md-12 col-xs-12 serv ">
						<a href="result-huay/huay-thai.php" style="text-decoration: none;color:unset;">
							<div class="card" style="padding:15px">
								<div class="row head-huay-card">
									<div class="col-4 text-center" style="vertical-align: middle">
										<img class="img-fluid" src="assets/img/flags/thai_flag.png" alt="" srcset="">
									</div>
									<div class="col-8 text-left">
										<div class="row">
											<div class="col-12">
												<span id="huay-thai-title" class="ser_ttl lang" style="font-size: 18px;">ผลหวยรัฐบาลไทย</span>
											</div>
											<div class="col-12">
												<small id="latest-result" class="lang">งวดล่าสุด</small>
												<p style="font-size: 16px;margin-bottom: 0px;" id="date-thai">รออัพเดท...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row bg-huay-card">
									<div class="col-12">
										<div class="row pb-5" id="pol0"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12 serv ">
						<a href="result-huay/huay-lao.php" style="text-decoration: none;color:unset;">
							<div class="card" style="padding:15px">
								<div class="row head-huay-card">
									<div class="col-4 text-center" style="vertical-align: middle">
										<img class="img-fluid" src="assets/img/flags/lao_flag.png" alt="" srcset="">
									</div>
									<div class="col-8 text-left">
										<div class="row">
											<div class="col-12">
												<span id="huay-lao-title" class="ser_ttl lang" style="font-size: 18px;">ผลหวยลาว</span>
											</div>
											<div class="col-12">
												<small id="latest-result" class="lang">งวดล่าสุด</small>
												<p style="font-size: 16px;margin-bottom: 0px;" id="date-lao">รออัพเดท...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row bg-huay-card">
									<div class="col-12">
										<div class="row pb-5" id="pol1"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12 serv ">
						<a href="result-huay/huay-lao-vip.php" style="text-decoration: none;color:unset;">
							<div class="card" style="padding:15px">
								<div class="row head-huay-card">
									<div class="col-4 text-center" style="vertical-align: middle">
										<img class="img-fluid" src="assets/img/flags/lao_flag.png" alt="" srcset="">
									</div>
									<div class="col-8 text-left">
										<div class="row">
											<div class="col-12">
												<span id="huay-lao-title" class="ser_ttl lang" style="font-size: 18px;">ผลหวยลาว</span> <b class="text-warning">VIP</b>
											</div>
											<div class="col-12">
												<small id="latest-result" class="lang">งวดล่าสุด</small>
												<p style="font-size: 16px;margin-bottom: 0px;" id="date-lao-vip">รออัพเดท...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row bg-huay-card">
									<div class="col-12">
										<div class="row pb-5" id="pol2"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12 serv ">
						<a href="result-huay/huay-lao-star.php" style="text-decoration: none;color:unset;">
							<div class="card" style="padding:15px">
								<div class="row head-huay-card">
									<div class="col-4 text-center" style="vertical-align: middle">
										<img class="img-fluid" src="assets/img/flags/lao_flag.png" alt="" srcset="">
									</div>
									<div class="col-8 text-left">
										<div class="row">
											<div class="col-12">
												<span id="huay-lao-title" class="ser_ttl lang" style="font-size: 18px;">ผลหวยลาว</span> <b class="text-danger">สตาร์</b>
											</div>
											<div class="col-12">
												<small id="latest-result" class="lang">งวดล่าสุด</small>
												<p style="font-size: 16px;margin-bottom: 0px;" id="date-lao-star">รออัพเดท...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row bg-huay-card">
									<div class="col-12">
										<div class="row pb-5" id="pol3"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12 serv ">
						<a href="result-huay/huay-hanoi.php" style="text-decoration: none;color:unset;">
							<div class="card" style="padding:15px">
								<div class="row head-huay-card">
									<div class="col-4 text-center" style="vertical-align: middle">
										<img class="img-fluid" src="assets/img/flags/hanoi_flag.png" alt="" srcset="">
									</div>
									<div class="col-8 text-left">
										<div class="row">
											<div class="col-12">
												<span id="huay-hanoi-title" class="ser_ttl lang" style="font-size: 18px;">ผลหวยฮานอย</span>
											</div>
											<div class="col-12">
												<small id="latest-result" class="lang">งวดล่าสุด</small>
												<p style="font-size: 16px;margin-bottom: 0px;" id="date-hanoi">รออัพเดท...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row bg-huay-card">
									<div class="col-12">
										<div class="row pb-5" id="pol4"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12 serv ">
						<a href="result-huay/huay-hanoi-s.php" style="text-decoration: none;color:unset;">
							<div class="card" style="padding:15px">
								<div class="row head-huay-card">
									<div class="col-4 text-center" style="vertical-align: middle">
										<img class="img-fluid" src="assets/img/flags/hanoi_flag.png" alt="" srcset="">
									</div>
									<div class="col-8 text-left">
										<div class="row">
											<div class="col-12">
												<span id="huay-hanoi-title" class="ser_ttl lang" style="font-size: 18px;">ผลหวยฮานอย</span> <b class="text-danger">พิเศษ</b>
											</div>
											<div class="col-12">
												<small id="latest-result" class="lang">งวดล่าสุด</small>
												<p style="font-size: 16px;margin-bottom: 0px;" id="date-hanoi-s">รออัพเดท...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row bg-huay-card">
									<div class="col-12">
										<div class="row pb-5" id="pol5"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12 serv ">
						<a href="result-huay/huay-hanoi-vip.php" style="text-decoration: none;color:unset;">
							<div class="card" style="padding:15px">
								<div class="row head-huay-card">
									<div class="col-4 text-center" style="vertical-align: middle">
										<img class="img-fluid" src="assets/img/flags/hanoi_flag.png" alt="" srcset="">
									</div>
									<div class="col-8 text-left">
										<div class="row">
											<div class="col-12">
												<span id="huay-hanoi-title" class="ser_ttl lang" style="font-size: 18px;">ผลหวยฮานอย</span> <b class="text-warning">VIP</b>
											</div>
											<div class="col-12">
												<small id="latest-result" class="lang">งวดล่าสุด</small>
												<p style="font-size: 16px;margin-bottom: 0px;" id="date-hanoi-vip">รออัพเดท...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row bg-huay-card">
									<div class="col-12">
										<div class="row pb-5" id="pol6"></div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-lg-6 col-md-12 col-xs-12 serv ">
						<a href="result-huay/huay-malay.php" style="text-decoration: none;color:unset;">
							<div class="card" style="padding:15px">
								<div class="row head-huay-card">
									<div class="col-4 text-center" style="vertical-align: middle">
										<img class="img-fluid" src="assets/img/flags/malay_flag.png" alt="" srcset="">
									</div>
									<div class="col-8 text-left">
										<div class="row">
											<div class="col-12">
												<span id="huay-malay-title" class="ser_ttl lang" style="font-size: 18px;">ผลหวยมาเลย์</span>
											</div>
											<div class="col-12">
												<small id="latest-result" class="lang">งวดล่าสุด</small>
												<p style="font-size: 16px;margin-bottom: 0px;" id="date-malay">รออัพเดท...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row bg-huay-card">
									<div class="col-12">
										<div class="row pb-5" id="pol7"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<div>
			<img src="assets/img/ads.gif" alt="" class="w-100 my-2">
		</div>
		<section id="projects">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-md-12 cnt_head">
						<h2 id="huay-hun" class="s_head lang">หวยหุ้นอัพเดท</h2>
						<!-- <p class="h_body">รวมหวยหุ้นต่างๆ </p> -->
						<div class="row" id="StockBtn">
							<div class="col-md-12">
								<button class="btn btn-outline-danger btn-sm btn-block">กำลังโหลด กรุณารอสักครู่...</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="owl-carousel owl-theme pr_cnt" id="cardSlide">
							<center>
								<h3>กำลังโหลดข้อมูล ...</h3>
							</center>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<div id="successModal" class="modal fade">
		<div class="modal-dialog modal-sm modal-dialog-centered">
			<div class="modal-content bg-dark text-light">
				<div class="modal-header border-secondary">
					<h4 id="successTitle" class="modal-title w-100"></h4>
				</div>
				<div id="successBody" class="modal-body">
				</div>
				<div class="modal-footer">
					<button class="btn btn-success btn-block" data-dismiss="modal" onclick="closePopup()">ปิด</button>
				</div>
			</div>
		</div>
	</div>
	<?php
	include("include/footer.php")
	?>