<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
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
.bg { background-image: url('images/13/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #bf8a30; border-right: 1px dashed #bf8a30; }
h1 { color: #ffe9b7; }
h2 { text-align: center; color: black; font-size: 24px; }
p { padding-top:2%; }

#question { height: 320px; width: 470px; margin:0 auto; display: block; padding-top: 20px;}

#question img{
  display:none;
  position:absolute;
}

#question img.active{
  display:block;
  margin:0 auto;
}

html[dir="rtl"] h2 {text-align: center;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Checking what you now know... about changing to survive"); ?></h1><br><br>
				<h2><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></h2>
				<br>
				<h2><?php echo _("Click the NEXT button when you are ready."); ?></h2>
				
				<div id="question">
						<img src="images/13/0.png" class="active"/>
						<img src="images/13/1.png"/>
						<img src="images/13/2.png" />
						<img src="images/13/3.png" />
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="12.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="14.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
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
