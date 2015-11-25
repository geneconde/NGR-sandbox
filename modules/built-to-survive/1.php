<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(1, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<style>
.bg { background-image: url('images/1/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
#logo { background-image: url('images/1/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { text-align: center; padding-top: 15px; color: #FFFA7B; }

#next { position: absolute; right: 10px; bottom: 50px; height: 105px; width: 110px;}
p { padding: 0; margin-top: 0; font-family: 'PlaytimeRegular'; color: #5E492E; font-size: 30px; color: #FFFA7B; }
.imgClass { 
    background-image: url(images/1/start.png);
	background-color: transparent;
    height: 100%;
	width: 100%;
    border: 0px;
	vertical-align: bottom;
	cursor: pointer;
	vertical-align: middle;
	background-size: 100%;
}
html[dir="rtl"] h1 { text-align: center; }
html[dir="rtl"] p { text-align: center; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 35px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="logo">
				<h1><?php echo _("Welcome to the Built to Survive module"); ?>, <?php echo (ucfirst($user->getFirstName())."!"); ?><h1>
				<form method="post" action="2.php">
					<div id="next">
						<p class="blink"><?php echo _("Start"); ?></p>
						<input id="namebutton" class="imgClass" type="button">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function() {	
		$('.blink').blink({ speed: 1500, blinks: 1000  });
		$('#namebutton').click(function(){
			document.location.href= "2.php";
		});
	});
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
