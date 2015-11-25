<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	//require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
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

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg { background-image: url(assets/4/bg.jpg); }
		#screen2, #screen3 { display: none; }
		#buttons .next { display: none; }
		#img2 {float: right; width: 55%;}
		#img3 { margin-top: 30px;}
		.vbg { background-color: #000; padding: 0px 0px 0px 0px; margin: 0 auto; margin-top: 15px; border-radius: 5px; }
		video#jp_video_0, video#jp_video_1 { margin-top: 0; }
		video#jp_video_1 { width: 100% !important; }
		.p-left { float: left; margin-top: -10px; width: 50% !important; }
		.p-right { float: right; margin-top: 20px; width: 50% !important; }
		.p-left img { height: 255px; }
		audio { width: 100%; }
		img, video {
		    box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    -webkit-border-radius: 15px !important;
		    -moz-border-radius: 15px !important;
		    border-radius: 15px !important;
		    border: 1px solid black;
		}
		.vbg {
		    -webkit-border-radius: 15px !important;
		    -moz-border-radius: 15px !important;
		    border-radius: 15px !important;
		    border: 1px solid black;
		}
		.p-left {
		    float: left;
		    margin-top: -10px;
		    width: 49% !important;
		}
		#img3 {
		    margin-top: 30px;
		    padding: none !important;
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... making sound"); ?></h1>
						<div class="grid_6  prefix_3 suffix_3">
							<img src="assets/4/cricket.jpg" />
							<audio id="crickets" controls autoplay loop="loop">
								<source src="assets/4/crickets.mp3" type="audio/mpeg">
								<?php echo _("Your browser does not support the audio element."); ?>
							</audio>
						</div>
						<p class="grid_12"><?php echo _("<span class='key'>Sound</span> is a form of <span class='key'>energy</span>. Sounds are made when the matter in solids, liquids or gases is made to move or vibrate up and down or to and fro. For example, a hummingbird uses energy to move its wings to fly. The very fast movement or <span class='key'>vibration</span> of the wings causes the air around the wings to vibrate and make a \"humming\" sound. Crickets make their \"chirping\" sound by rubbing their upper and lower wings against each other and causing the air vibrate to make the sounds you hear on a warm summer's night."); ?></p>
					</div>

					<div id="screen2" class="screen">
						<div id="jplayer1" class='vbg'>
							<span><?php echo _("Update Required"); ?></span>
							<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
						</div>
						<p><?php echo _("Scientists use the term <span class='key'>medium</span> to describe the matter that sound travels through. Without a medium, there is no sound. One way to describe what happens when the matter in solids, liquids or gases vibrates to make sound is to think about what would happen if you dangled a \"slinky\" from your hand and moved your hand up and down. The coils in the slinky move up and down, giving the slinky a bobbing-type motion. If you held the slinky on a flat surface and pulled it back and let go, it would also move back and forth, to and fro. When matter in solids, liquids or gases is made to move or vibrate, the matter moves like the slinky!"); ?></p>						
					</div>

					<div id="screen3" class="screen">
						<div class="p-left">
							<img id="img3" src="assets/4/4c.jpg">
						</div>
						<div id="jplayer2" class='p-right vbg'>
							<span><?php echo _("Update Required"); ?></span>
							<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
						</div>
						<div class="clear"></div>
						<p><?php echo _("What makes sounds different? How matter vibrates or moves back and forth determines what the sound will be like. Scientists describe how matter moves back and forth as sound waves and use graphs like the one shown here to represent different sound waves. <span class='key'>Sound waves</span> are called <span class='key'>longitudinal waves</span>. These are the type of wave produced by moving the slinky back and forth in a direction parallel to the slinky. This is similar to the way sound is produced when a stereo speaker pushes and pulls on the air in front of it."); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying types of waves..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 3;

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
				document.location.href = "3.php";
			} else if ($('#screen2').is(':visible')) {
				document.getElementById('crickets').currentTime = 0
				document.getElementById('crickets').play();
				$('.back').fadeOut(); 

				$('#buttons a.readmore').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else{
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen3').fadeOut(function () {
					
					$('#screen2').fadeIn();

					window.location.hash = '';
				});
			}

		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {
				document.getElementById('crickets').pause();
				$('.back').fadeOut();
				$('.readmore').fadeOut(function() {
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});
				
				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')){
				$('.back').fadeOut();
				$('.readmore').fadeOut(function() {
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});
				
				$('#screen2').fadeOut(function() {
					$('#screen3').fadeIn();

					window.location.hash = '#screen3';
				});
			}
			
		});
		$("#jplayer1").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", { 
					webmv: "assets/4/slinky.webm", // http://video.online-convert.com/convert-to-webm
					m4v: "assets/4/slinky.m4v" // http://www.convertfiles.com/convert/video/MP4-to-M4V.html
				}).jPlayer("play");
			},

			ended: function() { $(this).jPlayer("play"); },
		    swfPath: "js",
		    supplied: "webmv, m4v",
		    size: { width: "405px", height: "240px" },
		    solutions: "flash, html",
		    nativeVideoControls: { all: /./ }
		});

		$("#jplayer2").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", { 
					webmv: "assets/4/speaker.webm", // http://video.online-convert.com/convert-to-webm
					m4v: "assets/4/speaker.m4v" // http://www.convertfiles.com/convert/video/MP4-to-M4V.html
				}).jPlayer("play");
			},

			ended: function() { $(this).jPlayer("play"); },
		    swfPath: "js",
		    supplied: "webmv, m4v",
		    size: { width: "405px", height: "255px" },
		    solutions: "flash, html",
		    nativeVideoControls: { all: /./ }
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
