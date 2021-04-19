<?php
include("include/navbar.php")
?>

<div id="here">
<section id="services" style="padding-top:150px ;">
	<div class="text-center" style="margin-top: 20vh;">
	<span class="loader-1"></span>
	</div>
	<div class="" style="margin-top: 30vh;"></div>
</div>
</section>

<?php
include("include/footer.php")
?>
<script>
$.ajax({
	type: "GET",
	url: "../api/apihuay.php?huay=huay-hanoi-vip",
	success: function (response) {
		$("#here").html(response);
		ticket_number();
	}
});
</script>
<style>
.two_reward_with_text {
	width: 100%;
	margin: 0 auto;
	background-image: url("../assets/img/bghuayresult.png");
}
</style>