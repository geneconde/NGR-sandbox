<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } if($language == "es_ES") { ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>
p { text-align: left; }
.wrap { border-left: 1px dashed #98A8FF; border-right: 1px dashed #98A8FF; }
.bg { background-image: url('images/11/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #00436d; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="es"] p { font-size: 22px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="summary">
				<h1><?php echo _("Summarizing big ideas... about natural hazards"); ?></h1>
				<p><?php echo _("Natural hazards are natural phenomena that can potentially cause harm to humans. If they are very, very big and cause lots of damages and hurt or kill lots of people, they are called <span class='key'>natural disasters</span>. Scientists study these natural hazards and are able to predict when and where most of them will occur with enough accuracy to give people a chance to protect their families and property. Scientists can tell how likely it is for natural hazards to occur in certain places at certain times. For instance scientists – like <span class='key'>climatologists</span> – know that hurricanes are generally most likely to occur during the summer months in the Gulf of Mexico and along the Atlantic coast of the United States. So if you live in those areas you would need to be aware that a hurricane is a possibility in the summer and you should live in a house built to be able to withstand a hurricane. Then, another type of scientist – a <span class='key'>meteorologist</span> or weatherman – might predict a week or so ahead of time that a big hurricane is expected to hit a certain area – like Nags Head North Carolina – on August 21st. Then people in Nags Head would know to board up their house and evacuate the area before the hurricane hit."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
