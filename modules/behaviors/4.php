<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behaviors'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #A59255; }
.wrap { border-color: #b8a27b; }
.bg { background-image: url(images/4/bg.jpg); }

#screen1 .slider { width: 540px; margin: 20px auto; }
#screen1 .slider img { margin-bottom: 10px; }
#screen1 .slider .caption { color: #000; text-align: center; }

#screen2 p:first-child { padding-top: 40px;float:left;width: 430px;margin-right:10px; }
#screen2 img { float:left; margin:25px 0;border-radius: 5px !important; }
#screen2 img.sc2img2 { margin-top: 0; }
#screen2 p:last-child { width: 500px;float:left;margin-left:20px; padding-top: 0; }

#screen2 { display: none; }
img.next-toggle { display:none; }

.sc1a { float:left;width: 500px;margin-right:30px; }
.sc1a p { font-size:24px; }
.sc1b img { margin-top:40px; }
.fire{width:320px;height:240px;}
<?php if($language == "es_ES") { ?>
	#screen2 p:last-child { font-size: 22px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("Reviewing big ideas... about behaviors"); ?></h1>
				<section class="sc1a">
					<p><?php echo _("<span class='key'>Behavior</span> is the way that a living thing acts and reacts when exposed to different situations. We call a specific situation a <span class='key'>stimulus</span> and how a living thing reacts, a <span class='key'>response</span>. When scientists study behavior, they are looking at the response of an organism to different stimuli. Here's a simple illustration. Think about what you would do if you attempted to warm your hands over a campfire, but got too close to the flames. If the heat of the flame caused you pain, your immediate response would most likely be to pull your hand back very quickly. This response is your behavior."); ?></p>
					<p><?php echo _("Behaviors can be divided into two: <span class='key'>innate</span> - present from birth; and <span class='key'>learned</span> - developed after birth. Some behaviors may be a mixture of both."); ?></p>
				</section>
				<section class="sc1b">
					<img src="images/4/4a.jpg" />
					<!-- <div class="fire"></div> -->
				</section>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Innate behaviors include <span class='key'>reflexes</span> and <span class='key'>instincts</span>. Reflexes are simple and automatic responses to an external stimulus. For example, when the doctor hits your knee with a rubber mallet, your leg jerks in response. This movement does not require any thought on your part."); ?></p>
				<img src="images/4/42a.jpg" class="sc2img1"/>
				<img src="images/4/42b.jpg" class="sc2img2"/>
				<p><?php echo _("Instincts are more complex behavior patterns than reflexes. For example, once sea turtles hatch from their nests in the sand, they instinctively move towards the water where they are safer. This instinct is triggered by the turtles' response to brightness. Because the open ocean is naturally brighter than the land, the sea turtles head toward the water. Like reflexes, instincts are present at birth and these abilities are inherited, or physically passed from parents to offspring through the DNA."); ?></p>
			</div>
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons">
		<a href="#" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _("Read More"); ?>"></a>
		<a href="5.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Developing behavior..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('img.readmore-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn(); });
	}
	
	$('img.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "3.php#answer";
		} else if ($('#screen2').is(':visible')) {
			$('img.next-toggle').fadeOut(function() { $('img.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('img.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('img.readmore-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
	<!--<script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
     <script type="text/javascript" src="scripts/fire-0.62.min.js"></script> -->
	<script>
		/*$(document).ready( function(){
		$('.fire').fire({
			speed:25,
			maxPow:6,
			minPow:2,
			gravity:8,
			flameWidth:4,
			flameHeight:3,
			plasma:false,
			cartoon:true,
			fireTransparency:35,
			globalTransparency:26,
			fadingFlameSpeed:4,
			maxPowZone:'random',
			mouseEffect:true
		});
	});*/
	</script>
</body>
</html>
