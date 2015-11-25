<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script>
$(document).ready(function() {	
	$('#namebutton').click(function(){
		$('#answers').submit();
	});
});
</script>
<style>
.bg { background-image: url('images/1/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
#askname { padding-top: 20px; }
h1 { margin:0; font-size: 35px; padding: 5px 0px; font-weight:bold; font-family: 'PlaytimeRegular'; color: #d07031; width: 100%; text-align: center;}

#next { position: absolute; right: 10px; bottom: 10px; height: 152px; width: 109px; }
#next p { text-align: center; }
p { margin: 0; padding: 0; font-size: 30px; position: relative; z-index: 100; margin-top: -45px; cursor: pointer; }
.imgClass { 
    background-image: url(images/1/next.png);
	background-color: transparent;
    height: 100%;
	width: 100%;
    border: 0px;
	vertical-align: bottom;
	cursor: pointer;
	vertical-align: middle;
	background-size: 100% 100%;
	z-index: 0;
}

html[dir="rtl"] h1, html[dir="rtl"]  h2, html[dir="rtl"] p { text-align: center; } 
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 35px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<form id="answers" method="post" action="#">
				<div id="askname">
					<h1><?php echo _("Welcome to the Natural Hazards module"); ?>, <?php echo $user->getFirstName()."!"; ?></h1>
				</div>
				<form method="post" action="#">
					<div id="next">	
						<input id="namebutton" class="imgClass" type="button">
						<p id="start"><?php echo _("start"); ?></p>
					</div>
				</form>
			</form>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>
	<script>
	$(document).ready(function() {	
		$('#namebutton').click(function(){
			document.location.href= "2.php";
		});
		
		$('#start').click(function(){
			document.location.href= "2.php";
		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
