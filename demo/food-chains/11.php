<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'food-chains';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Food Chains"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	
	/*
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	*/
});

</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #76cce0; border-right: 1px dashed #76cce0; padding: 0 2px; }
.bg { background-image: url('images/11/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
p {font-size: 24px; width: 95%; margin-left: 2%; }
h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: darkgreen; }
h2,span.equals { margin:0; padding: 0 10px; font-weight:normal; font-size:23px;}
html[dir="rtl"] .bg { padding-right: 10px; }

.play { width: 95px; margin: 0 auto;}
.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }

.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.pink { color: #F14970;}
.bold { font-weight: bold; }

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	p,span.equals { font-size: 18px; }
	.buttons { position: relative; top:5px; text-align: center;}
	
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	p,span.equals { font-size: 15px; padding: 10px; }
}

@media screen and (max-width:480px) {
	h1 { font-size: 16px; }	
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
}

@media screen and (orientation:portrait) {
	.buttons { position: relative; top:5px; text-align: center;}
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("Summarizing big ideas... about food chains"); ?></h1>
			<div id="background">
				<p><?php echo _("A <span class='red bold'>food chain</span> shows the movement of energy through living things."); ?>
				<?php echo _("<span class='green bold'>Producers</span> such as grasses, vegetables and fruits get their energy directly from the sun and change it into food that they then use themselves and other living things."); ?>
				<?php echo _("<span class='purple bold'>Consumers</span> such as birds, fish, and people cannot use energy directly from the sun to make their own food. Instead, consumers get their energy indirectly from the sun by eating producers or other consumers."); ?>
				<?php echo _("The place of all living things in the food chain depends on how they get their <span class='orange bold'>food or energy</span>."); ?></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="10.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="12.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>