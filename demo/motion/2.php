<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	// require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Motion"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #eb7100; }
		p#firstP {
		    color: black;
		}

		.wrap { border-color: #858248; }
		.bg { background: url(assets/2/bg.jpg); }
		.bg p {z-index: 1;}
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Thinking about... motion"); ?></h1>
					<p class="grid_12" id="firstP">
						<?php echo _("All around us, we can find examples of objects in motion. From large things like buses and airplanes, to small things like birds and bugs, it seems like things are always moving. But did you know that even the things that we see as being at rest might be considered to be moving by someone else? One of Albert Einstein’s most famous observations was that all motion is relative. While you might agree with the person sitting next to you about the motion of a bird outside a window at your school, a person riding by in a bus might have a different description of the bird’s motion. Your ability to observe the bird is limited by what you can see out of your window. You might lose sight of the bird once it flies past your window, but the passenger on the bus might have a different experience if the bird flies fast enough to keep up with the bus. Similarly, when you look up at the sky at night, it might be difficult to notice any motion amongst the stars above. But if you make careful observations over many nights, you’ll start to notice things moving around. Some of this motion can be explained by the motion of the Earth through the Solar System. Some of the motion is because some of those bright points of light aren’t stars. They might be man-made satellites orbiting the Earth or other planets that are also orbiting the Sun. Even the starts themselves are in motion, though it takes centuries to observe changes in their location in the sky.") ?>
					</p>
				</div>		

				<div id="animation">
					<img id="question-mark" src="assets/2/question-mark.png"/>
					<img id="exclamation" src="assets/2/exclamation.png"/>
					<img id="glasses" src="assets/2/glasses.png"/>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		
	</div>

	<section id="preloader">
		<section class="selected">
			<strong>
				<?php echo _('Are you ready, '); ?>
				<?php echo _( $user->getFirstName() . '?'); ?> 
			</strong>
		</section>
	</section>

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
