<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
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

	<title><?php echo _("Specialized Cells"); ?></title>

	<link href="css/jplayer.css" rel="stylesheet">
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
		h1 { color: #008ae3; }
		p {margin: 0px;}
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/8/bg.jpg); }
		.key {color:#ff005a;}

		#screen1 #md_p2o {margin-top: 10px;}
		#screen2, #screen3 { display: none; }
		#screen2, #screen3 {padding-top: 10px}
		#screen2 #md_p2t {margin: 10px 0}
		#screen3 #md_p2t {margin: 10px 0}
		.video_right { float: right; border-radius: 5px; }
		.image_right { float: right; border-radius: 5px; }
		.vbg { background-color: #000; padding: 0px 0px 0px 0px; margin-top: 5px; margin-right: 10px; }		
		img, video { margin: 0; margin-top: ; }
		.img { border: 2px solid #000; margin-right: 16px; }
		.img2 { border: 2px solid #056EE6; margin-right: 20px; margin-top: 8px; }
		.image_left { float: left; border-radius: 5px; margin-right: 10px; height: 552px; width: 274px; }
		.image_size { height: 260px; width: 420px;margin-left:10px; margin-top: 10px;}
		.align_left { margin-left: 0px; }
		.space { padding-top: 5px; }
		.grid_12 { margin-left: 1.5% }

		#s2a { position: relative; }
		#s2a h4 { position: absolute; font-size: 18px; z-index: 2; text-align: center; line-height: 0.5; color: #000; }

		#s2a h4:first-child {
			right: 368px;
			top: 106px;
		}
		#s2a h4:nth-child(2) {
		    right: 342px;
    		top: 150px;
		}
		#s2a h4:nth-child(3) {
			right: 215px;
			top: 195px;
		}
		#s2a h4:nth-child(4) {
		    right: 260px;
		    top: 14px;
		}
		#s2a h4:nth-child(5) {
		    right: 210px;
		    top: 75px;
		}
		#s2a h4:nth-child(6) {
		    right: 158px;
		    top: 110px;
		}
		#s2a h4:nth-child(7) {
		    right: 108px;
		    top: 140px;
		}
		#s2a h4:nth-child(8) {
		    right: 110px;
		    top: 169px;
		}
		#s2a h4:nth-child(9) {
		    right: 65px;
		    top: 126px;
		}
		#s2a h4:nth-child(10) {
		    right: 42px;
		    top: 98px;
		}
		#s2a h4:nth-child(11) {
		    right: 173px;
		    top: -10px;
		    font-size: 24px;
		}

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px ){
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; overflow: hidden; }
			#s2a, #screen3 { margin-top: 40px; }
			div#screen2 p { line-height: 30px; }
			.image_left { height: 520px; }
		}
		<?php if($language == "zh_CN") { ?>
			#s2a h4:first-child { right: 345px; top: 95px; }
			#s2a h4:nth-child(4) { right: 260px; }
			#s2a h4:nth-child(6) { right: 213px; }
			#s2a h4:nth-child(7) { right: 160px; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="align_left"><?php echo _("More big ideas about... specialized cells"); ?></h1>
						<div id="jplayer" class='video_right vbg'>
							<span><?php echo _("Update Required"); ?></span>
							<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
						</div>

						<p><?php echo _("Right now, you're using some sort of electrical device. Maybe it's a computer, maybe a tablet, or even a phone. But you are seeing this image, thinking about what is written, and then responding by touching a screen or moving a mouse."); ?></p>
						<p  id = "md_p2o"><?php echo _("The device you are using is an electrical system. It takes your mouse or keyboard direction, transmits it across the Internet, and then displays the response on a screen. This takes electricity, a way of sending a signal long distances at the speed of light."); ?></p>
						<p  id = "md_p2o"><?php echo _("The very same thing is happening in your body as you read this. Information is taken in by your eyes and transmitted to your brain. The brain processes the information, and then sends a response to your fingers. This all happens so quickly because your nervous system is an electrical system as well."); ?></p>
					</div>

					<div id="screen2" class="screen">
						<div id="s2a">
						<h4><?php echo _("Cell body"); ?></h4>
						<h4><?php echo _("Dendrite"); ?></h4>
						<h4><?php echo _("Axon"); ?></h4>
						<h4><?php echo _("Mitochondrion"); ?></h4>
						<h4><?php echo _("Nucleus"); ?></h4>
						<h4><?php echo _("Myelin sheath"); ?></h4>
						<h4><?php echo _("Node of ranvier"); ?></h4>
						<h4><?php echo _("Schwann cell"); ?></h4>
						<h4><?php echo _("Synapse"); ?></h4>
						<h4><?php echo _("Axon terminal"); ?></h4>
						<h4><?php echo _("NEURON"); ?></h4>
						<img src = 'assets/8/1.jpg' class="image_right image_size img">
						</div>
						<p><?php echo _("Nerve cells, known as <span class=key>neurons</span>, are capable of processing and transmitting information through a series of electrical and chemical processes. They can form complex networks by connecting to many other cells. The connections are called synapses. Most nerve cells include a cell body, <span class=key>dendrites</span>, and an <span class=key>axon</span>. The cell body contains the nucleus and other organelles. A cell may have many dendrites which serve to bring information to the cell body. Each neuron has a single axon, a very long (sometimes up to 1 meter) structure, which allows the cell to send information to other nerve cells at great distances."); ?></p>
						<p id = "md_p2t"><?php echo _("Sensory neurons are cells that detect and transmit information from the five senses. They are located throughout the body, and include mechanical receptors for pressure, pain and temperature; chemical receptors for taste and smell; auditory receptors for sound; and photoreceptors for vision. Sensory neurons send information to the <span class=key>central nervous system (CNS)</span>."); ?></p>

					</div>

					<div id="screen3" class="screen">
						<img src = 'assets/8/2.jpg' class="image_left img2">

						
						<p><?php echo _("The central nervous system consists of the brain and spinal cord. CNS neurons, also known as interneurons, connect to both sensory and motor neurons, as well as to many other CNS neurons. These connections allow sensory input to be evaluated, and an appropriate response sent out to the body."); ?></p>
						<p id = "md_p2t"><?php echo _("That response depends upon motor neurons. These cells, located in the spinal cord receive information from CNS cells and transmit electrical signals, through their axons, to muscles. These signals stimulate movement."); ?></p>
						


					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Using a cellphone..."); ?></strong></section></section>

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
				document.location.href = "7.php";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {

				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen3').fadeOut(function () {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {
				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {

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

	$("#jplayer").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", { 
				webmv: "assets/8/video0.webm", // for .webm format, use this conversion tool: http://video.online-convert.com/convert-to-webm
				m4v: "assets/8/video0.m4v" // for .m4v format, use this conversion tool: http://www.convertfiles.com/convert/video/MP4-to-M4V.html
			}).jPlayer("play");
		},

		ended: function() { $(this).jPlayer("play"); },
	    swfPath: "js",
	    supplied: "webmv, m4v",
	    size: { width: "415px", height: "252px" },
	    solutions: "flash, html",
	    nativeVideoControls: { all: /./ }
	});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
