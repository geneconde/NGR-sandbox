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

	<title><?php echo _("Specialized Cells"); ?></title>

	<link rel="stylesheet" href="css/responsiveslides.css">
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
		h1 { color: #660066; }
		.wrap { border-color: #DAE980; }
		.bg { background-color: #fff; overflow: hidden; background-image:  url(assets/4/bg.jpg);}

		#screen2 { display: none; }
		#screen3 { display: none; }

		.imager { height: 275px; width: 420px; float: right; margin: 10px; }}
		.center { margin: auto 0 auto 0; }
		.image {
		    background: url('assets/4/2.jpg');
		    background-repeat: no-repeat;
		    background-size: 100% 100%;
			height: 325px !important;
			width: 480px !important;
		    margin: 0 auto;
		    float: none;
		    display: table;
		}
		img { border: 2px solid #000; }
		#screen1 img { margin-top: 16px; }
		#screen1 p:last-child { margin-top: 40px; }

		#neuron, #columnar, #white, #red, #smooth { position: absolute; line-height: 95%; font-size: 20px; }

		#human { font-weight: bold; right: 170px; top: 0; }
		#columnar { width: 100px; right: 137px; top: 70px; text-align: center !important; }
		#white { width: 100px; top: 69px; right: 10px; }
		#red { width: 90px; top: 156px; right: 385px; }
		#smooth { top: 297px; right: 220px; }
		#neuron { top: 30px; right: 405px; }
		
		.center label { position: absolute; }
		.key { color: #ff005a; }
		p { text-align: justify !important; margin: 0; }

		@media screen and (max-width: 1250px ){
			.bg{ 
				background-size:  100% calc(100% - 68px)!important;
				background-position: 0 34px; 
				overflow: hidden;
			}
			#buttons { background-color: #468853 !important; z-index: 10; }
			p { line-height: 30px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... specialized cells"); ?></h1>
						<div id="screen1" class="screens grid_12">
							<img src = 'assets/4/1.jpg' class="imager">				
							<p><?php echo _("Complex organisms, like people, are made up of many systems, each responsible for a set of functions needed to keep the organism alive. Some examples of human systems include the muscular system, the nervous system and the reproductive system. Our immune system is very closely related to our circulatory system."); ?></p>
							<p><?php echo _("Each of these systems is composed of many different types of <span class='key'>cells</span>, all working together to accomplish the system's functions. Large collections of cells working together are called <span class='key'>tissues</span>. Sets of different tissues are often combined to form structures called <span class='key'>organs</span>. A <span class='key'>system</span> is a set of organs, all working together to complete a set of vital functions."); ?></p>
						</div>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Every cell in an organ system is alive. It must perform its own vital functions in order for it to cooperate with other cells to keep the organism alive. Every cell has its own membrane, separating itself from its environment. Nearly every cell has a <span class=key>nucleus</span>, containing the DNA information necessary for it to make the proteins it needs to do its job. Most cells are capable of reproducing when necessary, and some cells even have the ability to acquire, store and process information from the world around them."); ?>
						</p>
						<div class="grid_12 center image">
							<label id='white'><?php echo _("White blood cells"); ?></label>
							<p id='columnar'><?php echo _("Columnar epithelial cells"); ?></p>
							<label id='smooth'><?php echo _("Smooth muscle cells"); ?></label>
							<label id='red'><?php echo _("Red blood cells"); ?></label>
							<label id='neuron'><?php echo _("Neuron"); ?></label>
							<label id='human'><?php echo _("HUMAN CELLS"); ?></label>
						</div>
						
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying human cells..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2;
		$('.next').fadeOut();

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
				document.location.href = "3.php#answer";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
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
    <script type="text/javascript">
		$(".rslides").responsiveSlides({
		    auto: true,
		    pager: false,
		    nav: false, /* Set to true if the next/previous controls are needed */
		    speed: 400
		});

    </script>
    
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
