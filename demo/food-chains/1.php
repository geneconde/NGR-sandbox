<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'food-chains';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo _("Food Chains"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<!-- <script src="scripts/rightclick.js"></script> -->
<script>

</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #C9A64D; border-right: 1px dashed #C9A64D; padding: 0 2px; text-align:center; }
.bg { background-color: #46C4F7; background-size: 100% 100%; width:100%; height:100%; position:relative; overflow: hidden; }

h1 { margin:0; font-size: 35px; padding: 5px 0px; font-weight:bold; color: palevioletred; width: 100%; text-align: center;}
h2 { margin:0; padding: 0 10px; font-weight:normal; font-size:23px;}

input[type="text"] { text-align:center;height: 70px; width: 300px;  -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; font-size: 40px; font-family:'PlaytimeRegular';}
.clear { clear:both;}
a { text-decoration:none;}
.hidden { display:none;}
#start {background-image: url('images/1/bg.png'); height: 100%;
width: 100%;
background-size: 100% 100%;overflow: hidden;margin-top: -95px;}

img.female-toggle:hover, img.male-toggle:hover { cursor: pointer;}

@media screen and (max-width:900px) { h1 { font-size: 30px; } }
@media screen and (max-width:768px) { h1 { font-size: 24px; } }
@media screen and (max-width:577px) { h1 { font-size: 20px; } }

@media screen and (max-width:480px) {
	h1 { font-size: 15px; }	
	.wrap { height: 100%; }
}

@media screen and (max-width:400px) { .wrap { height: 100%; }	 }
@media screen and (max-width:360px) { .wrap { height: 100%; }	}
@media screen and (max-height:627px) { .wrap { height: 100%; }	}
@media screen and (orientation:portrait) {	.wrap { height: 100%; }	}

#askname { padding-top: 5%; }

#next { position: absolute; height: 100%; bottom: 0; width: 50%; }
#next img { position: absolute; bottom: 0; padding-bottom: 7%; margin: 0 auto; width: 90%; }

#button { right: -80%; }
#next img#button { width: 20%;  padding-bottom: 3%; }
#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			
			<div id="askname">
				<h1><?php echo _("Welcome to the Food Chains module"); ?>, <?php echo $user->getFirstName(); ?>!</h1>
			</div>
			<div id="start">
			</div>
			<div id="next">
				<!-- <img src="images/1/fc.png"> -->
				<a href="2.php"><img id="button" src="images/1/next.png" alt="<?php echo _("Start"); ?>"></a>
			</div>
			
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>	
	<?php include("setlocale.php"); ?>
</body>
</html>