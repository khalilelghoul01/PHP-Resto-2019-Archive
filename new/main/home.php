<?php
$page_name = "Accueil";
include("../menu.php");
?>
<!DOCTYPE html>
<html>
<?php include("../includes/head.php");?>
<body>
	<?php include("../includes/header.php");?>
	<?php if(!isset($_SESSION['user_email'])){ ?>
	<img src="../images/bg.jpg" class="bg-image" id="responsive">
	<div class="centered" id="phone"><button onclick="scrollWin()" id="btn" type="button" style="width: 60px;height: 60px;z-index: 1;border-radius: 50%;" class="btn btn-outline-light"><i class="material-icons">keyboard_arrow_down</i></button></div>







<?php } ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
getmenu();
?>
































































	<script>
	var user = false;
	var y =(screen.height/2+30);
	function scrollWin() {
	  window.scrollBy(0, y);
	}
	function detectmob() {
	 if( navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 || navigator.userAgent.match(/Windows Phone/i)
	 ){
	    user = true;
	  }
	 else {
	    user = false;
	  }
	 if(user){
	  	var x = "40vh";
	  	document.getElementById("responsive").style.height = x;
	  	document.getElementById("phone").style.bottom = "48%";
	  	document.getElementById("btn").style.height = "50px";
	  	document.getElementById("btn").style.width= "50px";
	  	document.getElementById("phone").style.left= "50%";
	  }
	  else {
	  	document.getElementById("responsive").style.height = "80vh";
	  	document.getElementById("btn").style.height = "50px";
	  	document.getElementById("btn").style.width= "50px";
	  	document.getElementById("phone").style.bottom= "8%";
	  }
	}
	 
	detectmob();
</script>
</body>
</html>
