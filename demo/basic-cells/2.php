<?php
	require_once '../tempsession.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Basic Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/jplayer.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #917DD1; }
		#buttons .next { display: none; }

		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
			#screen1 li { direction: rtl; }
			#screen1 ul { text-align: right; }
		<?php endif; ?>
		
		.wrap { border-color: #B3446E; }
		.bg { background: url("assets/2/bg.jpg"); overflow: hidden;}

		.container_12 { height: 100%; }
		/*p { font-size: 20px; margin: 0; z-index: 2; }*/
		#screen1 ul { list-style: disc; }
		#screen1 li { font-size: 20px; }

		/*#cell { float: left; bottom: 5px; z-index: 1; }*/
		#cell img { position: absolute; }
		#body { width: 120px; right: 8px; bottom: 10px; }
		#hat { width: 80px; right: -10px; bottom: 85px; }
		#rarm { width: 70px; right: -16px; bottom: 13px; }
		#wand { width: 120px; right: 30px; bottom: -15px; }
		#feet { width: 120px; right: 23px; bottom: -33px; }
		#spark { width: 120px; right: 146px; bottom: 86px; }
		#screen2, #screen3 { display: none; }
		p.lastp { margin-bottom: 55px; }
		#cell { position: absolute; right: 0; bottom: 25px; }
		#jquery_jplayer_1 { margin: 0 auto; }
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			.lang-menu ul,li {list-style: none;}
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
		@media screen and (max-width: 960px){
			#screen1 p,li{ font-size: 18px;}
		}

		@media only screen and (max-device-width: 900px) and (min-device-width: 623px){
			#jp_video_0 {
			  width: 380px !important;
			  position: absolute;
			  left: 280px;
			}
		}

		#jp_video_0 {
		  width: 380px !important;
		  position: absolute;
		  left: 236px;
		}
		.container_12 .grid_12 {
			height: 100%;
		}
		@media only screen and (max-device-width: 768px) and (orientation: landscape){
			#jp_video_0 {
			    width: 512px !important;
			    position: absolute;
			    left: 236px !important;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Thinking about... basic cells"); ?></h1>

						<p class="grid_12"><?php echo _("Congratulations! You're alive!"); ?></p>
						<p class="grid_12"><?php echo _("No, that's not meant to be funny. Being alive is a great accomplishment. Think for a moment about what has to happen for you to be able to read and think about these words."); ?></p>
						<ul class="grid_11 prefix_1">
							<li><?php echo _("Your body must use energy taken in from the foods you eat."); ?></li>
							<li><?php echo _("Releasing that energy requires oxygen from the air you breathe in and produces carbon dioxide waste that you must breathe out."); ?></li>
							<li><?php echo _("The chemical contents of your food must be broken down into simpler substances and rearranged and rebuilt into the structures you depend on for living."); ?></li>
							<li><?php echo _("The food and oxygen you take in must be circulated around your body, while the waste your body produces must be transported and removed."); ?></li>
						</ul>
						<p class="grid_10"><?php echo _("We're just scratching the surface here, but this is pretty important stuff. This list could go on and on for a long time - thanks to many very specialized processes that occur in living things."); ?> </p>
						<p class="grid_10 lastp"><?php echo _("For now, let's stick with the basics. All living processes need a place to happen, and for all living things humans know about, that place is a cell."); ?> </p>
						
						
						<div id="cell">
							<img id="spark" src="assets/2/spark.png"/>
							<img id="feet" src="assets/2/feet.png"/>
							<img id="rarm" src="assets/2/rarm.png"/>
							<img id="wand" src="assets/2/wand.png"/>
							<img id="body" src="assets/2/body.png"/>
							<img id="hat" src="assets/2/hat.png"/>
						</div>
					</div>
					<div id="screen2" class="screen">
						<p><?php echo _("<span class='key'>Cells</span> are the smallest things that can be called living. Most are so small they can't be seen without microscopes. A few are so large you can hold them in your hand, and many are so tiny that only special microscopic methods can make them visible."); ?> </p>
						<p><?php echo _("All cells must perform all of the functions of living things. That's a lot happening in a small package. This means that cells must be simple yet incredibly sophisticated at the same time."); ?> </p>

						<div id="jquery_jplayer_1"></div>
						<div id="jp_container_1"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
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
				document.location.href = "1.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();

					window.location.hash = '#';
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
		$("#jquery_jplayer_1").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", {
					webmv: "http://upload.wikimedia.org/wikipedia/commons/6/69/Detailedcolpoda400x1.ogg",
					m4v: "http://upload.wikimedia.org/wikipedia/commons/6/69/Detailedcolpoda400x1.ogg",
				}).jPlayer("play");
			},
		
			ended: function() { // The $.jPlayer.event.ended event
				$(this).jPlayer("play"); // Repeat the media
			},
	
			swfPath: "scripts",
			supplied: "webmv, m4v",
			size: {
			 // width: "100%",
			 // height: "260px"
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
