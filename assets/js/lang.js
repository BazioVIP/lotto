function hardChange(lang) {
  if (lang == "en") {
  document.getElementById('check-huay-text').innerHTML = `Check<span>
  <select id="huay-type" class="form-select form-select-sm" aria-label=".form-select-sm example" style="color: #FF0000;">
    <option selected value="หวยลาว">Laos lottery</option>
    <option value="หวยลาวสตาร์">Laos Star lottery</option>
    <option value="หวยลาว VIP">Laos VIP lottery</option>
    <option value="หวยฮานอย">Hanoy lottery</option>
    <option value="หวยฮานอยVIP">Hanoy VIP lottery</option>
    <option value="หวยฮานอยพิเศษ">Spacial Hanoy lottery</option>
    <option value="หวยมาเลย์">Malaysia lottery</option>
    <option value="หุ้นเกาหลี">Korea stock</option>
    <option value="นิเคอิ รอบเช้า">NIKKEI-AM</option>
    <option value="นิเคอิ รอบบ่าย">NIKKEI-PM</option>
    <option value="ฮั่งเส็ง รอบเช้า">HANSENG-AM</option>
    <option value="ฮั่งเส็ง รอบบ่าย">HANSENG-PM</option>
    <option value="หุ้นจีน รอบเช้า">CHINA-AM</option>
    <option value="หุ้นจีน รอบบ่าย">CHINA-PM</option>
    <option value="หุ้นไต้หวัน">Teiwan stock</option>
    <option value="หุ้นสิงคโปร์">Singapore stock</option>
    <option value="หุ้นอียิปต์">Egypt stock</option>
    <option value="หุ้นเยอรมัน">Germany stock</option>
    <option value="หุ้นอังกฤษ">England stock</option>
    <option value="หุ้นรัสเซีย">Russia stock</option>
    <option value="หุ้นอินเดีย">India stock</option>
    <option value="หุ้นดาวน์โจน">Downjone stock</option>
  </select>
</span>`
    
  } else if(lang == "laos") {
    document.getElementById('check-huay-text').innerHTML = `ກວດເບິ່ງ ຫວຍ<span>
    <select id="huay-type" class="form-select form-select-sm" aria-label=".form-select-sm example" style="color: #FF0000;">
      <option selected value="หวยลาว">ຫວຍລາວ</option>
      <option value="หวยลาวสตาร์">ຫວຍລາວ</option>
      <option value="หวยลาว VIP">ຫວຍລາວ VIP</option>
      <option value="หวยฮานอย">ຫວຍຮາໂນ່ຍ</option>
      <option value="หวยฮานอยVIP">ຫວຍຮາໂນ່ຍ VIP</option>
      <option value="หวยฮานอยพิเศษ">ຫວຍຮາໂນ່ຍ ພິເສດ</option>
      <option value="หวยมาเลย์">ຫວຍມາເລ</option>
      <option value="หุ้นเกาหลี">ຫຸ້ນເກົາຫຼີ</option>
      <option value="นิเคอิ รอบเช้า">ນິເຄອິຮອບເຊົ້າ</option>
      <option value="นิเคอิ รอบบ่าย">ນິເຄອິຮອບບ່າຍ</option>
      <option value="ฮั่งเส็ง รอบเช้า">ຮັງເສັງຮອບເຊົ້າ</option>
      <option value="ฮั่งเส็ง รอบบ่าย">ຮັງເສັງຮອບບ່າຍ</option>
      <option value="หุ้นจีน รอบเช้า">ຈີນຮອບເຊົ້າ</option>
      <option value="หุ้นจีน รอบบ่าย">ຈີນຮອບບ່າຍ</option>
      <option value="หุ้นไต้หวัน">ຫຸ້ນໄຕ້ຫວັນ</option>
      <option value="หุ้นสิงคโปร์">ຫຸ້ນສິງກະໂປ</option>
      <option value="หุ้นอียิปต์">ຫຸ້ນອີ່ຍິບ</option>
      <option value="หุ้นเยอรมัน">ຫຸ້ນເຢຍລະມັນ</option>
      <option value="หุ้นอังกฤษ">ຫຸ້ນອັງກິດ</option>
      <option value="หุ้นรัสเซีย">ຫຸ້ນລັດເຊຍ</option>
      <option value="หุ้นอินเดีย">ຫຸ້ນອິນເດຍ</option>
      <option value="หุ้นดาวน์โจน">ຫຸ້ນດາວໂຈນ</option>
    </select>
  </span>`
  } else {
    document.getElementById('check-huay-text').innerHTML = `ตรวจหวย<span>
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
      <option value="หุ้นอียิปต์">หุ้นอียิปต์</option>
      <option value="หุ้นเยอรมัน">หุ้นเยอรมัน</option>
      <option value="หุ้นอังกฤษ">หุ้นอังกฤษ</option>
      <option value="หุ้นรัสเซีย">หุ้นรัสเซีย</option>
      <option value="หุ้นอินเดีย">หุ้นอินเดีย</option>
      <option value="หุ้นดาวน์โจน">หุ้นดาวโจนส์</option>
    </select>
  </span>
    `
  }
}

var multilang;

function onLoad() {
  let curLang = localStorage.getItem("lang");
  if (curLang === null || curLang == "th") {
    localStorage.setItem("lang", "th");
    multilang = new MultiLang('assets/languages.json', 'th', this.refreshLabels);
    hardChange('th')
  } else {
    multilang = new MultiLang('assets/languages.json', 'en', this.refreshLabels);
    hardChange('en')
  }
  refreshLabels();
}
function changeLang(lang) {
  localStorage.setItem("lang", lang);
  multilang.setLanguage(lang);
  hardChange(lang)
  refreshLabels();
  startTime()
}
function refreshLabels() {
  var allnodes = document.getElementsByClassName("lang");
  for (var i = 0, max = allnodes.length; i < max; i++) {
    var idname = allnodes[i].id;
    if (idname != '') {
      allnodes[i].textContent = multilang.get(idname);
    };
  };
}