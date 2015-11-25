<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #800a9d; }
.bg { background: url('images/13/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; text-align: center; }
.bg p { text-align: center; }
.wrap { border-left: 1px dashed #7bf8f4; border-right: 1px dashed #7bf8f4; }
#question { height: 320px; width: 470px; margin:0 auto; display: block; }
#question img{ display:none; position:absolute; }
#question img.active{ display:block; margin:0 auto; }
html[dir="rtl"] p { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
				<div>
					<h1><?php echo _("Checking what you now know... about biodiversity"); ?></h1><br>
					<p><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></p><br>
					<p><?php echo _("Click the NEXT button when you are ready."); ?></p><br>

					<div id="question">
						<img src="images/13/0.png" class="active">
						<img src="images/13/1.png">
						<img src="images/13/2.png">
						<img src="images/13/3.png">
					</div>
				</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="12.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons" title="<?php echo _('Next'); ?>">
		<a href="14.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's check what you now know"); ?></strong></section></section>
	<script>
	$(document).ready(function() {
		setInterval('swapImages()', 1000);
	});
	
	function swapImages(){
		var active = $('#question .active');
		var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
