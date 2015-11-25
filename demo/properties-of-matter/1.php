<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>
.bg { background-image: url('images/1/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
#board { position: relative; top: 70px; background-image: url('images/1/board.png'); background-repeat: no-repeat; width: 80%; height: 80%; background-size: 100% 100%; margin: 0 auto; }
#title { position: relative; height: 240px; margin: 0 auto; text-align: center;  }
#title img { height: 100%; width: 588px; }
h1 { width: 90%; margin: 0 auto; text-align: center !important; padding-top: 55px; color: #fff; font-size: 30px;  }
.imgClass a { text-align: center; text-decoration: none; color: #fff; font-size: 30px; left: 30px; top: 18px; position: relative;text-transform: uppercase; }
.imgClass {
	margin-top: 10px !important;
	background: url(images/1/btn.png) no-repeat;
	width: 150px !important;
    height: 73px;
	vertical-align: bottom;
	cursor: pointer;
	margin: 0 auto;
	position: relative;
}

.imgClass:hover {
	background: url(images/1/btn-hover.png) no-repeat;
}
html[dir="rtl"] .imgClass a { left:-60px;top:22px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 65px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="board">
				<h1><?php echo _("Welcome to the Properties of Matter module") ?>, <?php echo $user->getFirstName() . "!" ?></h1>
				<div id="title"><img src="images/1/title.png"></div>
				<div class="imgClass">
					<a href="2.php"><?php echo _("Start"); ?></a>
				</div>
			</div>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>