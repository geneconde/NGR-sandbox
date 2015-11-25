<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Doing Science");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>

<style>
.bg { background-image: url('images/13/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; text-align: center; }
.wrap {border-left: 1px dashed #C1D5D4; border-right: 1px dashed #C1D5D4;}
.bg section{width:79%; margin:0 auto; position:relative;min-height:100px;}
h1 { color: #F45A34; font-size: 34px; text-align: left; padding: 21px 0 0 30px !important;}
#question { height: 320px; width: 470px; margin:0 auto; display: block; }

#question img{
  display:none;
  position:absolute;
}
#question img.active{
  display:block;
  margin:0 auto;
}
html[dir="rtl"] h1 { padding-right: 30px !important; }
html[dir="rtl"] h2 { text-align: center; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding: 35px 0 0 30px !important; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("Checking what you now know... about doing science");?></h1>
			<section>
				
				<div>
					<h2><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study.");?></h2>

					<h2><?php echo _("Click the NEXT button when you are ready.");?></h2>
					
					<div id="question">
						<img src="images/13/0.png" class="active"/>
						<img src="images/13/1.png"/>
						<img src="images/13/2.png" />
						<img src="images/13/3.png" />
					</div>
					
				</div>
			</section>
		</div>
	</div>
	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's check what you now know");?></strong></section></section>

	<script>
	$(document).ready(function() {
		$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
		$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
		setInterval('swapImages()', 1000);
	});
	function swapImages(){
		var active = $('#question .active');
		var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	</script>
<?php require("setlocale.php"); ?>
</body>
</html>