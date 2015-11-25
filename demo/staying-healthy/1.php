<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background: url('images/1/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
h1 { text-align: center; color: #D00000; }
#title { height: 235px; background-image: url('images/1/barbel.png'); background-repeat: no-repeat; background-position: center;  margin-top: 110px; text-align: center; }
#title img { margin-left: 12px; }
#title img:nth-of-type(2) { margin-top: 30px; }
#next { margin: 0 auto; height: 130px; width: 110px; }
p { font-size: 30px; color: #fff; z-index: 2; position: relative; top: 75%; cursor: pointer; text-align:center;}
.imgClass { 
    background-image: url(images/1/next.png);
	background-color: transparent;
    height: 100%;
	width: 100%;
    border: 0px;
	vertical-align: bottom;
	cursor: pointer;
	vertical-align: middle;
	background-size: 100%;
	z-index: 1;
}
p:hover, .imgClass:hover{-ms-animation:wiggle .3s 2;-moz-animation:wiggle .3s 2;-webkit-animation:wiggle .3s 2;animation:wiggle .3s 2}
/* wiggle */
@-ms-keyframes wiggle{0%{-ms-transform:rotate(3deg);}50%{-ms-transform:rotate(-3deg);}100%{-ms-transform:rotate(3deg);}}
@-moz-keyframes wiggle{0%{-moz-transform:rotate(3deg);}50%{-moz-transform:rotate(-3deg);}100%{-moz-transform:rotate(3deg);}}
@-webkit-keyframes wiggle{0%{-webkit-transform:rotate(3deg);}50%{-webkit-transform:rotate(-3deg);}100%{-webkit-transform:rotate(3deg);}}
@keyframes wiggle{0%{transform:rotate(3deg);}50%{transform:rotate(-3deg);}100%{transform:rotate(3deg);}}
img.wiggle-me:hover{-ms-animation:wiggle .3s 2;-moz-animation:wiggle .3s 2;-webkit-animation:wiggle .3s 2;animation:wiggle .3s 2;}
#title { display: none; }
div.bg form { position: absolute; bottom: 15%; left: 45%; }

html[dir="rtl"] h1 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<br>
			<h1><?php echo _("Welcome to the Staying Healthy module,"); ?><?php echo( ucfirst($name)."!"); ?></h1>
			<div id="title">
				<img src="images/1/staying.png">
				<br>
				<img src="images/1/healthy.png">
			</div>
			<form method="post" action="2.php">
				<div id="next">
					<p><?php echo _("Start"); ?></p>
					<input id="namebutton" class="imgClass" type="button">
				</div>
			</form>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>
	<script>
	$(document).ready(function() {	
		$('.blink').blink({ speed: 1500, blinks: 1000  });
		$('#namebutton').click(function(){
			document.location.href= "2.php";
		});
		
		$('#next p').click(function(){
			document.location.href= "2.php";
		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
