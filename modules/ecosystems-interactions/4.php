<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
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
.wrap { border-left: 1px dashed #b49591; border-right: 1px dashed #b49591; }
.bg { background: url('images/4/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#screen1 h1 { padding-bottom: 10px; }
#screen1 div { padding: 10px; background: rgba(255, 255, 255, .3); border-radius: 5px; }
#screen2 { display: none; padding-top: 20px; }
#screen2 p { padding: 10px; background: rgba(255, 255, 255, .6); border-radius: 5px; }
#buttons .next { display:none; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 30px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<div id="screen1" class="screens">
					<h1><?php echo _("Reviewing big ideas... about ecosystems interactions"); ?></h1>
					<div>
						<p><?php echo _("This desert is an <span class=\"key\">ecosystem</span>. It is made up of living and non-living things that interact with each other. A desert does not get a lot of rain, but it gets a lot of sun. So the plants and animals that live in a desert adapt to be able to survive these conditions."); ?></p>

						<p><?php echo _("Animals and plants survive and live in a desert ecosystem by <span class=\"key\">adapting</span> to the desert. Over time the kind of cactus best suited to live in a desert continue to grow and reproduce while other kinds of cactus eventually disappear. Cacti (more than one cactus) store water in their stems to help them survive the lack of rain. Kangaroo rats sleep underground where it is cooler and look for food during the night when the sun goes down. Owls hunt at night after the sun goes down, often catching kangaroo rats."); ?></p>
					</div>
			</div>

				<div id="screen2" class="screens">
					<p><?php echo _("A <span class=\"key\">healthy ecosystem</span> is one of which many species are able to meet their needs for life over a long period of time.  All species need food, water, and other resources. Some even depend upon one another. <span class=\"key\">Predators</span> depend upon their prey species for food.  <span class=\"key\">Prey</span> species depend upon other predators to control their numbers. If either type is removed from an area, all living things in the area suffer. Prey species reproduce uncontrollably and begin to die as their food sources run out. Predators begin to die off quickly because their food is gone."); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Walking on the desert..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		var screen1 = $('#screen1'),
			screen2 = $('#screen2'),
			back = $('a.back-toggle'),
			more = $('a.readmore-toggle'),
			next = $('a.next-toggle');
		
		back.click(function() {
			if(screen1.is(':visible')) {
				document.location.href = "3.php#answer";
			} else if (screen2.is(':visible')) {
				next.fadeOut(function() { more.fadeIn(); });
				screen2.fadeOut(function() {
					$('.bg').css('background-image', 'url(images/4/bg.jpg)');
					$('.wrap').css('border-left', '1px dashed #b49591');
					$('.wrap').css('border-right', '1px dashed #b49591');
					screen1.fadeIn();
				});
			}
		});
		
		more.click(function(){
			more.fadeOut(function() { next.fadeIn(); });
			screen1.fadeOut(function(){
				$('.bg').css('background-image', 'url(images/4/bg2.jpg)');
				$('.wrap').css('border-left', '1px dashed #707a9e');
				$('.wrap').css('border-right', '1px dashed #707a9e');
				screen2.fadeIn();
				window.location.hash = 'screen2';	
			}); 
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#screen2") != -1 || oldURL.indexOf("5.php") != -1) {
			screen1.fadeOut(function() { 
				screen2.fadeIn(); 
				$('.bg').css('background-image', 'url(images/4/bg2.jpg)');
				$('.wrap').css('border-left', '1px dashed #707a9e');
				$('.wrap').css('border-right', '1px dashed #707a9e');
			});

			more.fadeOut(function() { next.fadeIn(); });
			addHash('#screen2');
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
