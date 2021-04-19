var month = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

var ss = 0;

$(document).ready(function() {
    startTime()

    showLottoDate()

    getStockData()
});


function startTime() {



    var today = new Date();

    var DD = today.getDate();

    var MM = today.getMonth();

    var YY = today.getFullYear();

    var h = today.getHours();

    var m = today.getMinutes();

    var s = today.getSeconds();



    m = checkTime(m);

    s = checkTime(s);

    var lang = localStorage.getItem("lang")

    var time 
    
    if (lang == 'th') {
        time =  "วันที่ " + DD + " " + month[MM] + " " + (YY + 543) + "  |  " + h + ":" + m + ":" + s;

    } else {
        time =  DD + " " + MM + " " + YY + "  |  " + h + ":" + m + ":" + s;
    }

    document.getElementById('current-time').innerHTML = time;



    var t = setTimeout(startTime, 100);



}

function checkTime(i) {

    if (i < 10) {
        i = "0" + i
    }; // add zero in front of numbers < 10

    return i;

}

function showLottoDate() {
    request("latest-date.php", (lottoList) => {
        if (lottoList !== null) {
            if (lottoList.length > 0) {
                var cardData = ''
                var stockBtnData = ''
                lottoList.forEach(lotto => {

                    if (lotto.name == "หวยไทย") {
                        document.getElementById('date-thai').innerHTML = lotto.date
                    } else if (lotto.name == "หวยมาเลย์") {
                        document.getElementById('date-malay').innerHTML = lotto.date
                       
                    } else if (lotto.name == "หวยฮานอยVIP") {
                        document.getElementById('date-hanoi-vip').innerHTML = lotto.date
                        
                    // } else if (lotto.name == "หวยฮานอยพิเศษ") {
                    //     document.getElementById('date-hanoi-s').innerHTML = lotto.date
                       
                    } else if (lotto.name == "หวยฮานอย") {
                        document.getElementById('date-hanoi').innerHTML = lotto.date
                        
                    } 
                    // else if (lotto.name == "หวยลาว") {

                    //     document.getElementById('date-lao').innerHTML = lotto.date

                    // } else if (lotto.name == "หวยลาวสตาร์") {

                    //     document.getElementById('date-lao-star').innerHTML = lotto.date

                    // } else if (lotto.name == "หวยลาว VIP") {

                    //     document.getElementById('date-lao-vip').innerHTML = lotto.date

                    // }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=0",
                    success: function (response) {
                        $("#pol0").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=1",
                    success: function (response) {
                        $("#pol1").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=2",
                    success: function (response) {
                        $("#pol2").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=3",
                    success: function (response) {
                        $("#pol3").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=4",
                    success: function (response) {
                        $("#pol4").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=5",
                    success: function (response) {
                        $("#pol5").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=6",
                    success: function (response) {
                        $("#pol6").html(response);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "sorting.php?lotto=7",
                    success: function (response) {
                        $("#pol7").html(response);
                    }
                });
            }
        } else {
            console.log('lottoList Error', lottoList)
        }
    })

    request("apilast.php?huay=lao", (lottoList) => {
        // console.log('data : ', lottoList)

        if (lottoList !== null) {
            document.getElementById('date-lao').innerHTML = lottoList.date
        } else {
            console.log('lottoList Error', lottoList)
        }
    })
    request("apilast.php?huay=lao_star", (lottoList) => {
        // console.log('data : ', lottoList)

        if (lottoList !== null) {
            document.getElementById('date-lao-star').innerHTML = lottoList.date
        } else {
            console.log('lottoList Error', lottoList)
        }
    })
    request("apilast.php?huay=lao_vip", (lottoList) => {
        // console.log('data : ', lottoList)

        if (lottoList !== null) {
            document.getElementById('date-lao-vip').innerHTML = lottoList.date
        } else {
            console.log('lottoList Error', lottoList)
        }
    })
    request("apilast.php?huay=hanoy_special", (lottoList) => {
        // console.log('data : ', lottoList)

        if (lottoList !== null) {
            document.getElementById('date-hanoi-s').innerHTML = lottoList.date
        } else {
            console.log('lottoList Error', lottoList)
        }
    })
}

function getStockData() {

    var allstock = []

    var cardContent = document.getElementById('cardSlide')

    var btnContent = document.getElementById('StockBtn')

    request("stock.php", (stockdata) => {

        if (stockdata.length > 0) {

            var cardData = ''

            var stockBtnData = ''

            stockdata.forEach((Stock, index) => {

                cardData += '<div class="item" id="card-' + index + '" style="background:linear-gradient(0deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(masterpiece/assets/images/flags/bgcard.jpg); background-size: cover; background-position: center; width: 320px;">'

                cardData += '<div class="pr_obj">'

                cardData += '<div class="p-3 pr_main">'

                cardData += '<div class="row">'

                cardData += '<div class="col-12">'

                cardData += '<div class="ticket">'

                cardData += '<div class="ticket_number">'

                cardData += '<b style="color:black;margin-right: 15px;font-family: Prompt;font-size: 24px;">3 <span id="digit-top" class="lang">ตัวบน</span></b>'

                cardData += '<img src="assets/img/number/num-' + Stock.prize1[0] + '.png" alt="" style="width: 30px; height: 100%">'

                cardData += '<img src="assets/img/number/num-' + Stock.prize1[1] + '.png" alt="" style="width: 30px; height: 100%">'

                cardData += '<img src="assets/img/number/num-' + Stock.prize1[2] + '.png" alt="" style="width: 30px; height: 100%">'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '<div class="col-12">'

                cardData += '<br>'

                cardData += '</div>'

                cardData += '<div class="col-6">'

                cardData += '<center>'

                cardData += '<b style="color:white;margin-right: 15px;font-family: Prompt;font-size: 16px;">2 <span id="digit-top" class="lang">ตัวบน</span></b>'

                cardData += '</center>'

                cardData += '<div class="two_reward_with_text">'

                cardData += '<div class="two_reward_number">'

                cardData += '<img src="assets/img/number/num-' + Stock.prize2[0][0] + '.png" alt="" style="width: 30px; height: 100%">'

                cardData += '<img src="assets/img/number/num-' + Stock.prize2[0][1] + '.png" alt="" style="width: 30px; height: 100%">'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '<div class="col-6">'

                cardData += '<center>'

                cardData += '<b style="color:white;margin-right: 15px;font-family: Prompt;font-size: 16px;">2 <span id="digit-last" class="lang">ตัวล่าง</span></b>'

                cardData += '</center>'

                cardData += '<div class="two_reward_with_text">'

                cardData += '<div class="two_reward_number">'

                cardData += '<img src="assets/img/number/num-' + Stock.prize2[1][0] + '.png" alt="" style="width: 30px; height: 100%">'

                cardData += '<img src="assets/img/number/num-' + Stock.prize2[1][1] + '.png" alt="" style="width: 30px; height: 100%">'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div><br><br>'

                cardData += '<div class="pr_subhead">' + Stock.date + '</div>'

                cardData += '<div id="owlnav-' + index + '" class="pr_head lang">' + Stock.name + '</div>'

                cardData += '</div>'

                cardData += '</div>'

                cardData += '</div>'



                stockBtnData += '<div class="col-md-2 col-4"><a id="owlnav-' + index + '" onclick="btnTrig(' + index + ')" style="margin-top:5px;font-size:12px" class="btn btn-outline-danger btn-sm btn-block lang">' + Stock.name + '</a></div>'



                // $('.owlnav-'+index).click(function () {

                // 	//$('#owl-carousel').trigger('to.owl.carousel', index)

                // 	console.log(index)

                // });

            });



            cardContent.innerHTML = cardData

            btnContent.innerHTML = stockBtnData



            startSlide()

        }

    })

}

function btnTrig(index) {

    console.log(index)

    $('.owl-carousel').trigger('to.owl.carousel', [index, 100, true]);

    if (index >= 13) {

        element = document.getElementsByClassName("btn-danger")

        for (var i = 0; i < 16; i++) {

            if (i !== index) {

                document.getElementById("owlnav-" + i).className = 'btn btn-outline-danger btn-sm btn-block lang'

            } else {

                document.getElementById("owlnav-" + index).className = 'btn btn-danger btn-sm btn-block lang'

            }

        }

    }

}

function onOwlChange(index) {



    console.log('trig', index)

    //var index = property.item.index;

    // var active = $(".owl-carousel").find(".owl-item.active");

    element = document.getElementsByClassName("btn-danger")

    for (var i = 0; i < 16; i++) {

        if (i !== index) {

            document.getElementById("owlnav-" + i).className = 'btn btn-outline-danger btn-sm btn-block lang'

        } else {

            document.getElementById("owlnav-" + index).className = 'btn btn-danger btn-sm btn-block lang'

        }

    }

}

function request(url, callback) {

    var xhr = new XMLHttpRequest();

    xhr.timeout = 60000;

    xhr.responseType = 'json';

    xhr.onreadystatechange = function(e) {

        if (xhr.readyState === 4) {

            if (xhr.status === 200) {

                console.log('Success !', url);

                callback(xhr.response)

            } else {

                console.log('Error !', url)

            }

        }

    }

    xhr.ontimeout = function() {

        console.log('Timeout !', url)

    }

    xhr.open('GET', url, true)

    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    xhr.send();

}

function sleep(time) {

    return new Promise((resolve) => setTimeout(resolve, time));

}


function ticket_number(){
    $('.ticket_number div').each(function() {
        if($(this).html() == "0"){
            $(this).html('<img src="../assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "1") {
            $(this).html('<img src="../assets/img/number/num-1.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "2") {
            $(this).html('<img src="../assets/img/number/num-2.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "3") {
            $(this).html('<img src="../assets/img/number/num-3.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "4") {
            $(this).html('<img src="../assets/img/number/num-4.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "5") {
            $(this).html('<img src="../assets/img/number/num-5.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "6") {
            $(this).html('<img src="../assets/img/number/num-6.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "7") {
            $(this).html('<img src="../assets/img/number/num-7.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "8") {
            $(this).html('<img src="../assets/img/number/num-8.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "9") {
            $(this).html('<img src="../assets/img/number/num-9.png" alt="" style="width: 30px; height: 100%">')
        }
    });

    $('.two_reward_number div').each(function() {
        if($(this).html() == "0"){
            $(this).html('<img src="../assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "1") {
            $(this).html('<img src="../assets/img/number/num-1.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "2") {
            $(this).html('<img src="../assets/img/number/num-2.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "3") {
            $(this).html('<img src="../assets/img/number/num-3.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "4") {
            $(this).html('<img src="../assets/img/number/num-4.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "5") {
            $(this).html('<img src="../assets/img/number/num-5.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "6") {
            $(this).html('<img src="../assets/img/number/num-6.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "7") {
            $(this).html('<img src="../assets/img/number/num-7.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "8") {
            $(this).html('<img src="../assets/img/number/num-8.png" alt="" style="width: 30px; height: 100%">')
        } else if($(this).html() == "9") {
            $(this).html('<img src="../assets/img/number/num-9.png" alt="" style="width: 30px; height: 100%">')
        }
    });
}