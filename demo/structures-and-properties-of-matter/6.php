<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = structures-and-properties-of-matter';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>

		h1 { color: #F16D2D; font-size: 32px; }

		.wrap { border-color: #CEFAFD; }
		.bg { background-image: url(assets/6/bg.jpg); overflow: hidden;}

		#screen1 {font-size: 22px !important;}
		#screen1 .rslides { float: right; }

		#screen1 .rslides img {max-height: 50%;}
		
		#screen2 { display: none; }
		#buttons .next { display: none; }
		
		
		#screen2 > div img { height: 230px; }
		#screen2 > div video { width: 100% !important; height: 230px !important; border-radius: 5px; background-color: #000000;}

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 26px;}
		<?php endif; ?>

		@media all and (max-width: 1250px) {
			#screen1 {font-size: 21px !important;}
		}

		@media all and (max-width: 880px) {
			h1 {font-size: 28px;}
		}

		<?php if ($language == 'es_ES') { ?>
			@media all and (max-width: 880px) {
				h1 { font-size: 24px !important;}
			}
		<?php } ?>

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... the structure and properties of matter"); ?></h1>
						<p class="grid_12"><?php echo _("\"Matter can neither be created nor destroyed but can change forms\" is one of the most important things about nature that scientists have ever figured out. What this means is that matter can never just disappear into nothingness even if it seems like it does. One way matter changes forms is that it can change states from <span class='key'>solid</span> to <span class='key'>liquid</span> or from liquid to <span class='key'>gas</span>. These are called <span class='key'>states of matter</span>."); ?></p>
						
						<div class="grid_12">
							<ul class="rslides grid_6">
								<li><img src="assets/6/a.jpg"></li>
								<li><img src="assets/6/b.jpg"></li>
							</ul>
							<?php echo _("For instance, if you leave a puddle of water on the bathroom floor after you take a shower - even though your mother told you to make sure you clean it up - the next day, when she checks your bathroom, the puddle of water is gone!! Did it magically disappear? Did some bathroom wizard come in and destroy the water to save you from your mom being mad at you? It seems like it, doesn't it? But the water didn't get<br> destroyed – it just evaporated all by itself. This means it changed from the liquid state of water on the floor to the gaseous state of water in the air."); ?>
						</div>
						
					</div>
					
					<div id="screen2" class="screen">
						<p class="gric_12"><?php echo _("It changed from having the property of you being able to see it and feel it as a liquid to the property of being invisible as gaseous water. And - this is important! - if you had weighed the water in the puddle and it weighed 1 ounce, after it <span class='key'>evaporated</span>, the air in your bathroom weighs 1 ounce more. The 1 ounce of water still weighs 1 ounce! It's just 1 ounce of gaseous water in your bathroom air instead of 1 ounce of liquid water in a puddle on the floor. The mass of liquid water didn't change even though you couldn't see it anymore! You could tell that's true if you could figure out a way to weigh your bathroom air – something to think about!"); ?></p>
						
						<div class="grid_4 prefix_1 suffix_1">
							<img src="assets/6/melting.gif" />
						</div>
						
						<div class="grid_4 prefix_1 suffix_1">
							<!-- <img src="assets/6/boiling.gif" /> -->
							<div id="jquery_jplayer_1"></div>
							<div id="jp_container_1"></div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking for traces..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script src="js/jpreloader.js"></script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2;

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + screen);
				} else {

					$('.back').fadeOut(); 

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} 

		});

		$('.readmore').click(function(){
			$('.back').fadeOut();
			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
			
			$('#screen1').fadeOut(function() {
				$('#screen2').fadeIn();

				window.location.hash = '#screen2';
			});
		});
	</script>
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});

		$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: "Boiling Water",				
				ogv: "assets/6/boiling-water.ogv",
				oga: "assets/6/boiling-water.ogg",
			}).jPlayer("play");
		},
		
		ended: function() { // The $.jPlayer.event.ended event
			$(this).jPlayer("play"); // Repeat the media
		},

		muted: true,
		swfPath: "scripts",
		supplied: "ogv, oga",
		size: {
			 width: "100%",
		},
		solutions: "flash, html",
		nativeVideoControls: {
			all: /./
		}
	});
	</script>
	
	<?php include 'setlocale.php'; ?>
	
</body>
</html>
