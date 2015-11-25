<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
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

	<title><?php echo _("Specialized cells"); ?></title>

	<link href="css/jplayer.css" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		#screen3 #md_p1 {
		    font-size: 21px !important;
		}

		.container_12 {
		    padding-top: 3% !important;
		}

		#screen3 > p {
		    margin-top: 24px !important;
		    margin-bottom: -5px !important;
		    margin-left: 0px !important;
		    font-size: 21px !important;
		    text-align: justify !important;
		}


		h1 { color: #234d87; font-size: 33px; }
		p{margin: 0px;}
		.key {color: #ff005a;}

		#buttons .next, #screen2, #screen3 { display: none; }
		
		.wrap { border-color: #64BACB; }
		.bg { background-image: url(assets/6/bg.jpg);}
		
		#md_pBot {margin-top: 10px;  margin-left: 1%; margin-right: 1%;}
		#md_h1 {margin: 0px; margin-top: ;  margin-left: 1%; margin-right: 1%;}
		#screen2 {padding-top: 10px;}
		#screen2 #md_p1 {padding-top: ;}
		#screen3 > p { margin-top: 10px; margin-bottom: -5px; margin-left: 0px}
		#screen3 > div { margin-top: 29px;   margin-left: 1%; margin-right: 1%;}
		#screen3 #md_p1 {padding-top: ;  margin-left: 1%; margin-right: 1%;}
		/*#screen2 div span, #screen2 img { width: 80%; margin: auto 10%; display: block; }*/
		.video_right { float: right; border-radius: 5px; }
		.image_left { float: left; border-radius: 5px; margin-right: 10px; margin-top: 8px; }
		.image_size { height: 260px; width: 400px ;margin-top:20px;   margin-left: 1%; margin-right: 1%;}

		.vbg { background-color: #000; padding: 0px 0px 0px 0px; margin-top: 15px; margin-right: 10px; }
		.align_left { margin-left: 0px; }
		.align_right { float: right; }
		img, video { margin: 0; }
		img { border: 2px solid #000; }

		div label { position: absolute; font-size: 20px; }
		#Skeletal { padding-top: 155px; margin-left: 260px; }
		#Smooth { padding-top: 75px; margin-left: 171px; }
		#Cardiac { padding-top: 35px; margin-left: 2%; }
		.space { padding-top: 10px;  margin-left: 1%; margin-right: 1%; }
		div#jplayer0 {
		    margin-left: 25px !important;
		}
		.space {
		    text-align: justify !important;
		}
		#md_pBot {
		    text-align: justify !important;
		}
		img#imahe1 {
		    width: 400px !important;
		    height: 260px !important;
		}
		p#md_p1 {
		    text-align: justify;
		}


		@media screen (min-width: 641px) and (max-width: 800px){
			#screen3 #md_p1 {
			    font-size: 20px !important;
			}
			.container_12 .grid_7 {
			    width: 58.333%;
			}
			#screen3 > p {
			    font-size: 20px !important;
			}
		}

		@media only screen and (max-width: 960px){
			#screen3 #md_p1 {
			    font-size: 18px !important;
			}
			.container_12 .grid_7 {
			    width: 50% !important;
			}
			#screen3 > p {
			    font-size: 18px !important;
			}
		}

		@media (max-width: 1250px ){
			.bg{ 	background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; 
					overflow: hidden;
			}
			#buttons {
				background-color: #468853 !important;
			}
		}
		@media (max-width: 960px){ #buttons { background-color: #468853; } }

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12 align_left" id = "md_h1"><?php echo _("More big ideas about... specialized cells"); ?></h1>
						<div id="jplayer0" class='video_right vbg'>
							<span><?php echo _("Update Required"); ?></span>
							<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
						</div>
						<p class="space"><?php echo _("Movement. It's something all humans do, although maybe not quite with the same grace and power as this gymnast. Movement requires the interactions of many body systems. The skeletal system must provide support for the body. The nervous system must sense the outside world, process the information, and then deliver instructions to the muscular system to execute complex movements. And the circulatory system must ensure the supply of nutrients and oxygen needed by the body to expend such energy."); ?></p>
						<p  id = "md_pBot"><?php echo _("The muscular system is most directly responsible for movement. Its highly specialized cells move bones, propel food through the digestive system, and provide power to the circulatory system. The cells of the muscular system are of three major types: skeletal, smooth and cardiac."); ?></p>
					</div>
					
					<div id="screen2" class="screen">
						<div>
							<label id='Cardiac'><?php echo _("Cardiac muscle"); ?></label>
							<label id='Smooth'><?php echo _("Smooth muscle"); ?></label>
							<label id='Skeletal'><?php echo _("Skeletal muscle"); ?></label>
						</div>
						<img src = 'assets/6/2.jpg' class="image_left image_size" id="imahe1">
						<p id = "md_p1"><?php echo _("All muscle cells contain protein fibers capable of contracting and relaxing when properly stimulated. The stimulation comes in the form of an impulse that is both chemical and electrical in nature. When stimulated, muscle fibers contract, shortening the length of each muscle cell. Since muscle cells are connected to one another, or through tendons, to bone, some type of movement occurs."); ?></p>
						<p id = "md_pBot"><?php echo _("Skeletal muscles are attached to bones, some moving and some nonmoving. When the cells of a muscle contract, one of the bones moves. Skeletal muscle cells contain very long protein fibers called actin and myosin, which appear as light and dark bands. As a way to strengthen connections between fibers, skeletal muscles often merge, resulting in tubular cells with multiple nuclei and many energy-releasing <span class='key'>mitochondria</span>. Skeletal muscle is controlled consciously by the nervous system."); ?></p>
					</div>

					<div id="screen3" class="screen grid_12">
						<div id="jplayer1" class='video_right vbg'>
							<span><?php echo _("Update Required"); ?></span>
							<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
				
						</div>
						<p id = "md_p1"><?php echo _("Food is moved through the digestive system, and pressure is maintained in the circulatory system using smooth muscles. They lack the dark and light bands of skeletal muscle. Sometimes whole sheets of muscle lose their cell membranes and become a single unit having many nuclei. This type of muscle operates to coordinate complex processes like digestion. Smooth muscle is controlled by the autonomic nervous system outside voluntary control."); ?></p>
						<div id="jplayer2" class='image_left vbg'>
							<span><?php echo _("Update Required"); ?></span>
							<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
						</div>
						<p class="grid_7"><?php echo _("Blood is propelled through the circulatory system when the heart beats or contracts. The heart is made of cardiac muscle and resembles skeletal muscle but its cells generally contain only three nuclei. They are also not attached to bones, but to each other, so that when the muscles contract, so does the heart as a whole. Like smooth muscle, cardiac muscle is controlled by the autonomic nervous system."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Contracting and relaxing muscle..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 3;
	$(document).ready(function() {
		if(hash != "") {
			$('.screen').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen < screenCount) {
					$('.readmore').parent().attr('href','#screen' + screen);
				} else {
					$('.readmore').fadeOut(function(){ $('.next').fadeIn(); });
				}
			});
		}

		$('.readmore').click(function(){
			if($('#screen1').is(':visible')) {
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					$('.readmore').fadeOut();
					$('.next').fadeIn();
					window.location.hash = '#screen3';

				});
			} else if($('#screen3').is(':visible')) {
				document.location.href = "7.php";
			}
		});

		$('.back').click(function(){
			if($('#screen1').is(':visible')) {
				$('.next').fadeOut();
				$('.readmore').fadeIn();
				document.location.href = "5.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('next').fadeOut( function(){ $('readmore').fadeIn(); });
				$('#screen3').fadeOut( function(){
					$('#screen2').fadeIn();
					$('.next').fadeOut();
					$('.readmore').fadeIn();
					window.location.hash = '#screen2';
				});	
			}
		});

	});

	$("#jplayer0").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", { 
				webmv: "assets/6/video0.webm", // for .webm format, use this conversion tool: http://video.online-convert.com/convert-to-webm
				m4v: "assets/6/video0.m4v" // for .m4v format, use this conversion tool: http://www.convertfiles.com/convert/video/MP4-to-M4V.html
			}).jPlayer("play");
		},

		ended: function() { $(this).jPlayer("play"); },
	    swfPath: "js",
	    supplied: "webmv, m4v",
	    size: { width: "405px", height: "240px" },
	    solutions: "flash, html",
	    nativeVideoControls: { all: /./ }
	});

	$("#jplayer1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", { 
				webmv: "assets/6/video2.webm", // for .webm format, use this conversion tool: http://video.online-convert.com/convert-to-webm
				m4v: "assets/6/video2.m4v" // for .m4v format, use this conversion tool: http://www.convertfiles.com/convert/video/MP4-to-M4V.html
			}).jPlayer("play");
		},

		ended: function() { $(this).jPlayer("play"); },
	    swfPath: "js",
	    supplied: "webmv, m4v",
	    size: { width: "400px", height: "240px" },
	    solutions: "flash, html",
	    nativeVideoControls: { all: /./ }
	});

	$("#jplayer2").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", { 
				webmv: "assets/6/video1.webm", // for .webm format, use this conversion tool: http://video.online-convert.com/convert-to-webm
				m4v: "assets/6/video1.m4v" // for .m4v format, use this conversion tool: http://www.convertfiles.com/convert/video/MP4-to-M4V.html
			}).jPlayer("play");
		},

		ended: function() { $(this).jPlayer("play"); },
	    swfPath: "js",
	    supplied: "webmv, m4v",
	    size: { width: "338px", height: "230px" },
	    solutions: "flash, html",
	    nativeVideoControls: { all: /./ }
	});
	</script>
		
	<script src="js/responsiveslides.js"></script>
</body>
</html>
