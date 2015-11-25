<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = energy-and-chemical-changes';
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

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

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
		h1 { color: #F16D2D; font-size: 30px; }
		
		.wrap { border-color: #4C8500; }
		.bg { background-image: url(assets/8/bg.jpg); }
		
		.slider-container { position: relative; margin: 0 auto; width: 300px; height: 280px; }

		.rslides { width: 100%; height: 100%; }
		
		.rslides_nav { position: absolute; }
		.slider-container .prev{ content: url(assets/prv.png); left: -17px; top: 35px; z-index: 5; }
		.slider-container .next{ content: url(assets/nxt.png); right: -17px; top: 35px; z-index: 5; }
		
		.slider-container .prev:after{ content: url(assets/prv.png); left: -17px; top: 35px; z-index: 5; }
		.slider-container .next:after{ content: url(assets/nxt.png); right: -17px; top: 35px; z-index: 5; } 
		li p { font-size: 21px; line-height: 26px; }
		.rslides li { background: #FAFFAB; padding: 0 30px; border: solid #BBE375; }
		.diagram img {  width: 70%; margin-left: 17%; }
		.diagram span { font-size: 16px; position: absolute; width: 88px; line-height: 16px; }
		.diagram p {
			margin-left: 40px;
			margin-bottom: 0;
		}
		#diag span {
			text-align: center;
			position: absolute;
			font-size: 20px;
		}
		#diag > span:nth-child(2){
			width: 125px;
			top: 120px;
			left: 300px;
		}
		#diag > span:nth-child(3){
			width: 110px;
			top: 250px;
			left: 510px;
		}
		#diag > span:nth-child(4){
			width: 110px;
			top: 330px;
			left: 280px;
		}
		#diag > span:nth-child(5){
			width: 80px;
			top: 335px;
			right: 70px;
		}
		#diag > span:nth-child(6){
			width: 140px;
			top: 475px;
			right: 380px;
		}
		#diag > span:nth-child(7){
			width: 140px;
			font-size: 20px;
			top: 475px;
			right: 170px;
		}
		#diag > span:nth-child(8){
			width: 140px;
			top: 240px;
			left: 65px;
		}
		#diag { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000; padding:50px; margin: -20px;}
		#diag img { margin-top: -25px; }

		@media (max-width: 1274px) and (min-width: 880px) {
			#diag img{
				width: 80%;
				margin-left: 10%;
			}
			#diag span {
				text-align: center;
				position: absolute;
				font-size: 18px !important;
			}
			#diag > span:nth-child(2){
				width: 112px !important;
				top: 110px !important;
				left: 325px !important;
			}
			#diag > span:nth-child(3){
				width: 100px !important;
				top: 220px !important;
				left: 490px !important;
			}
			#diag > span:nth-child(4){
				width: 110px;
				top: 275px !important;
				left: 295px !important;
			}
			#diag > span:nth-child(5){
				width: 80px;
				top: 285px !important;
				right: 135px !important;
			}
			#diag > span:nth-child(6){
				width: 140px;
				top: 385px !important;
				right: 380px;
			}
			#diag > span:nth-child(7){
				width: 140px;
				font-size: 20px;
				top: 385px !important;
				right: 205px !important;
			}
			#diag > span:nth-child(8){
				width: 140px;
				top: 205px !important;
				left: 130px !important;
			}
		}

		@media only screen and (max-width: 879px) {
			#diag { height: 100% !important; }
			#diag img{
				width: 80%;
				margin-left: 10%;
			}
			#diag span {
				text-align: center;
				position: absolute;
				font-size: 14px !important;
			}
			#diag > span:nth-child(2){
				width: 100px !important;
				top: 100px !important;
				left: 320px !important;
			}
			#diag > span:nth-child(3){
				width: 70px !important;
				top: 200px !important;
				left: 495px !important;
			}
			#diag > span:nth-child(4){
				width: 110px;
				top: 260px !important;
				left: 290px !important;
			}
			#diag > span:nth-child(5){
				width: 50px !important;
				top: 275px !important;
				right: 150px !important;
			}
			#diag > span:nth-child(6){
				width: 140px;
				top: 375px !important;
				right: 360px !important;
			}
			#diag > span:nth-child(7){
				width: 100px !important;
				top: 375px !important;
				right: 205px !important;
			}
			#diag > span:nth-child(8){
				width: 100px !important;
				top: 195px !important;
				left: 140px !important;
			}
		}
		#close { border: 1px solid #406468; background: white; color: #406468; display: block; margin: 0 auto; width: 100px; padding:10px; border-radius: 5px; }
		#close:hover { cursor: pointer; }
		@media only screen and (max-width: 1250px) {.diagram span {font-size: 18px;} p {  margin: 5px 0;} body, h2 {  font-size: 20px;}}
		@media only screen and (max-width: 800px) {h1 {  font-size: 29px;}}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="diag" >
						<img src="assets/8/diagram.png" >
						<span><?php echo _("Stored chemical energy in plants"); ?></span>
						<span><?php echo _("Stored chemical energy in food"); ?></span>
						<span><?php echo _("Mechanical energy of heart beating"); ?></span>
						<span><?php echo _("Heat energy from exercise"); ?></span>
						<span><?php echo _("Biological energy of thinking"); ?></span>
						<span><?php echo _("Kinetic energy of motion"); ?></span>
						<span><?php echo _("Heat and Light Energy"); ?></span>
						<p id="close"><?php echo _('Close me!'); ?></p>
					</div>
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... energy and chemical changes"); ?></h1>

						<p class="grid_12"><?php echo _("The Law of Conservation of Energy says that: \"energy is neither created nor destroyed\" but just changes forms - which means it is <span class='key'>converted</span> from one form of energy to another. The example shown in the diagram below shows how that happens when energy from the sun gets converted to energy that your body uses in your everyday life for you to be alive."); ?></p>
						<p class="grid_12"><?php echo _("Browse through the slides below by clicking the left and right arrows."); ?></p>

						<div class="slider-container grid_6">
						    <ul class="rslides">
						        <li><p><?php echo _("1. <span class='key'>Solar energy</span> from the sun - light and heat - is converted, or changed, into energy for plants to live and grow. And the plant can store some of that energy as <span class='key'>chemical potential energy</span> in the food the plant makes. This happens in the plant's green leaves by a series of <span class='key'>chemical reactions</span> called <span class='key'>photosynthesis</span>."); ?></p></li>
						        <li><p><?php echo _("2. When farmers harvest the food plants make, like corn or wheat, and make it into food for people, the stored <span class='key'>chemical energy</span> from the plants stays as stored chemical potential energy in the food you eat so you can get the energy to live."); ?></p></li>
						        <li>
						        	<p><?php echo _("3. Then <span class='key'>Chemical reactions</span> in your body convert the stored <span class='key'>chemical potential energy</span> from the food you eat into other forms of energy like:"); ?></p>
						        	<p><?php echo _("<span class='key'>Biological energy</span> to help you think and do all of the other things your body does automatically without you thinking about it."); ?></p>
						        	<p><?php echo _("<span class='key'>Mechanical energy</span> - like the beating of your heart and moving your arms and legs."); ?></p>
						        	<p><?php echo _("<span class='key'>Kinetic energy</span> in the motion of anything you push or pull or lift."); ?></p>
						        	<p><?php echo _("<span class='key'>Heat energy</span> you give off from exercising."); ?></p>
						        </li>

						    </ul>
						</div>
						
						<div class="grid_6 diagram">
							<p class="key"><?php echo _("Click the image to enlarge the diagram."); ?></p>
							<img src="assets/8/sdiag.png" class="diagImg" />
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="7.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Creating or destroying?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	

	<script>
	</script>
	
	<script>
	$(document).ready(function() {
		$('img.diagImg').click(function() {
			$('#diag').fadeIn();
		});
		$('#close').click(function() {
			$('#diag').fadeOut();
		});
	});
		$(".rslides").responsiveSlides({
			auto: false,
			pager: false,
			nav: true,
			speed: 400
		});
	</script>
	
</body>
</html>
