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
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg { background-image: url(assets/8/bg.jpg); }

		#screen2, #screen3 { display: none; }

		#buttons .next { display: none; }
		.image { width: 100%; height: 200px;}
		.image-large { width: 150%; height: 330px;}
		.container_12 .grid_3 {
		  width: 47%;
		  float: right;
		}

		.container_12 .prefix_2 {
		  padding-left: 29.667% !important;
		}
		.container_12 .grid_8 {
		  width: 40.667% !important;
		}
		#screen1 div.grid_12:nth-of-type(2), #screen2 div.grid_12 { text-align: center; }
		#screen1 div.grid_12:nth-of-type(2) img, #screen2 div.grid_12 img { width: 70%; }
		.vbg { background-color: #000; padding: 0px 0px 0px 0px; margin-top: 7px; border-radius: 5px; float: right; }
		video#jp_video_0 { margin-top: 0; }
		#screen2 p { line-height: 30px; }
		#screen1 div img { border: 2px solid #000; }
		#screen2 div.grid_12 img {
		    border: 2px solid black;
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... making sound"); ?></h1>
						
						<div class="grid_12">
							<p><?php echo _("The <span class='key'>pitch</span> of a sound is described in terms of how many sound waves are made in a period of time. The number of sound waves that are made in a second is referred to as the <span class='key'>frequency</span> or pitch of the sound. The faster something vibrates, the higher the pitch of a sound. In the image below, the top slinky shows waves with a higher frequency. They would be produced by an object that is vibrating more rapidly than the object producing the waves in the bottom slinky. In the time period shown in this image, only two compressions are visible in the bottom slinky, while you can see four compressions in the top image."); ?></p>						
						</div>
						<div class="grid_12">
							<img src="assets/6/soundwaves.jpg">
						</div>
					</div>

						<div id="screen2" class="screen">
							<div id="jplayer1" class='vbg'>
								<span><?php echo _("Update Required"); ?></span>
								<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
							</div>
							<p><?php echo _("The sound of thunder and the buzz of a mosquito are different in another important way. The rumble of thunder is much louder than the buzz of a mosquito. The <span class='key'>loudness</span> of a sound depends on how much <span class='key'>energy</span> goes in to making the sound. For example, thunder is produced when large amounts of air are made to vibrate in large waves. The sound made by a mosquito is very quiet because the tiny wings move only a small amount of air. Looking at the image of the slinkys below, both waves have the same frequency. You can see the same number of compressions in each slinky. They differ in terms of the energy travelling along the slinky. It takes more energy to cause the spring to bunch up and spread out in the top slinky, and less energy to move the slinky in the bottom image. Similarly, the loudness of a sound is determined by how much the pressure in the air changes as the sound wave passes through it."); ?></p>													
							<div class="grid_12">
								<img src="assets/6/6b.jpg">
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Light and sound waves"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>


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

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();
					$("#jplayer1").jPlayer("stop");

					window.location.hash = '#';
				});
			} 

		});

		$('.readmore').click(function(){
			$("#jplayer1").jPlayer("play");
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

		$("#jplayer1").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", { 
					webmv: "assets/6/rain.webm", // http://video.online-convert.com/convert-to-webm
					m4v: "assets/6/rain.m4v" // http://www.convertfiles.com/convert/video/MP4-to-M4V.html
				}).jPlayer("stop");
			},

			ended: function() { $(this).jPlayer("play"); },
		    swfPath: "js",
		    supplied: "webmv, m4v",
		    size: { width: "405px", height: "240px" },
		    solutions: "flash, html",
		    nativeVideoControls: { all: /./ }
		});
		
	</script>

	<script>
	var native_width = 0;
	var native_height = 0;
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
