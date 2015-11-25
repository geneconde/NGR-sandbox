<?php
	require_once '../tempsession.php';
	/*$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';*/
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _('Reproduction'); ?></title> <!-- Change title here -->
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
<style>
.bg { background-image: url('images/1/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #38A5D7; border-right: 1px dashed #38A5D7; }

.bg h1 { text-align: center;  }
.bg a { background-image: url('images/1/start.png'); background-repeat: no-repeat; background-size: 100% 100%;padding: 40px; color: white;font-size: 24px; }
.bg span { right: 2%; bottom: 7%; position: absolute;}

html[dir="rtl"] .bg h1 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _('Welcome to the Reproduction module');?>, <?php echo $user->getFirstName(); ?>!</h1>
			
			<span><a href="2.php" class="wiggle"><?php echo _('Start'); ?></a></span>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Let\'s begin!'); ?></strong></section></section>
	<script>
	$(document).ready(function() {

	});
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>