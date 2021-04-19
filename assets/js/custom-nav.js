function showHeader() {

    heaserSec = document.getElementsByClassName("navbar navbar-expand-lg navbar-light fixed-top")[0]

    inner = ""

    inner += '<div class="container">'

    inner += '<a class="navbar-brand" href="index.php"><img src="masterpiece/assets/images/logo.jpg" height="40" alt="logo">&nbsp;B-AUTO28</a>'



    inner += '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">'

    inner += '<i class="fas fa-bars"></i>'

    inner += '</button>'



    inner += '<div class="collapse navbar-collapse" id="navbarNav">'

    inner += '<ul class="navbar-nav ml-auto">'

    inner += '<li class="nav-item">'

    inner += '<a class="nav-link" target="_blank" href="https://bbs.bauto28.com/member.php?mod=register">ลงทะเบียน / เข้าสู่ระบบ</a>'

    inner += '<li class="nav-item">'

    inner += '<a class="nav-link" href="./">หน้าแรก</a>'

    inner += '</li>'

    inner += '<li class="nav-item">'

    inner += '<a class="nav-link" target="_blank" href="https://lin.ee/WhoCj0l">ซื้อหวยออนไลน์</a>'

    inner += '</li>'

    inner += '</ul>'

    inner += '</div>'

    inner += '</div>'



    heaserSec.innerHTML = inner

}



function showFooter() {

    footerSec = document.getElementsByClassName("ftr_btm")[0]

    inner = ""

    inner += '<div class="container">'

    inner += '<div class="row">'

    inner += '<div class="col-md-12 text-center">'

    inner += '<h6><div style="margin-top:25px;display: inline-block;">2020 <a href="/">bauto28.com</a>, All rights reserved. </div>'

    inner += '<a href="https://lin.ee/WhoCj0l"><img height="40" border="0" style="margin:20px" src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png"></a>'

    inner += '</h6>'

    inner += '</div>'

    inner += '</div>'

    inner += '</div>'



    footerSec.innerHTML = inner

}



$(document).ready(function() {

    showHeader()



    showFooter()

});