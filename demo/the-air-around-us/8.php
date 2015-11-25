<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
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

	<title><?php echo _("The Air Around Us"); ?></title>

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
		.screen p:not(.grid_12) {
		    font-size: 23px;
		    line-height: 27px;
		}
		<?php if ($language == 'es_ES') : ?>
			.screen p:not(.grid_12) {
			    font-size: 21px !important;
			    line-height: 26px !important;
			}
			span#d {
			    position: absolute;
			    width: 177px !important;
			    bottom: 23px !important;
			    text-align: center;
			    left: 69px !important;
			}
			span#b {
			    width: 178px !important;
			    position: absolute;
			    top: 18px !important;
			    text-align: center;
			}
			p#a {
			    position: absolute;
			    float: right;
			    top: 40px !important;
			    right: 110px !important;
			}
			p#c {
			    float: right;
			    right: 107px !important;
			    position: absolute;
			    bottom: 51px !important;
			}
			@media only screen and (max-width: 1250px){
				.screen p:not(.grid_12) {
				    font-size: 20px !important;
				    line-height: 23px !important;
				}
				h1 {
				    padding-top: 33px;
				    font-size: 32px;
				}			
			}
		<?php endif; ?>
		<?php if ($language == 'ar_EG') : ?>
			p#a {
			    position: absolute;
			    float: right;
			    top: 40px;
			    right: 113px;
			}
			p#c {
			    float: right;
			    right: 107px;
			    position: absolute;
			    bottom: 51px;
			}
			span#b {
			    width: 178px;
			    position: absolute;
			    top: 20px;
			    text-align: center;
			    left: 4px;
			}
			span#d {
			    position: absolute;
			    width: 177px;
			    bottom: 26px;
			    text-align: center;
			    left: 71px;
			}
		<?php endif; ?>
		<?php if ($language == 'en_US') : ?>
			p#a {
			    position: absolute;
			    float: right;
			    top: 40px;
			    right: 113px;
			}
			p#c {
			    float: right;
			    right: 107px;
			    position: absolute;
			    bottom: 51px;
			}
			span#b {
			    width: 178px;
			    position: absolute;
			    top: 27px;
			    text-align: center;
			}
			span#d {
			    position: absolute;
			    width: 177px;
			    bottom: 26px;
			    text-align: center;
			    left: 71px;
			}
			@media only screen and (max-width: 1250px){
				.screen p:not(.grid_12) {
				    font-size: 20px !important;
				    line-height: 23px !important;
				}
				h1 {
				    padding-top: 33px;
				    font-size: 32px;
				}			
			}
		<?php endif; ?>
		<?php if ($language == 'zh_CN') : ?>
			p#a {
			    position: absolute;
			    float: right;
			    top: 40px;
			    right: 113px;
			}
			p#c {
			    float: right;
			    right: 107px;
			    position: absolute;
			    bottom: 51px;
			}
			span#b {
			    width: 178px;
			    position: absolute;
			    top: 27px;
			    text-align: center;
			}
			span#d {
			    position: absolute;
			    width: 177px;
			    bottom: 26px;
			    text-align: center;
			    left: 71px;
			}
		<?php endif; ?>
		h1 { color: #0060A1; }
		.wrap > .bg { overflow: hidden !important; }
		.wrap { border-color: #B5F7CC; }
		.bg { background-image: url(assets/8/bg.jpg); }
		.small { float:right; height: 336px; background-image: url(assets/8/small.jpg); background-repeat: no-repeat; cursor: pointer; }
		.small span { float: left; margin-left: 98px; margin-top: 190px;}
		#grey { position: absolute; background: rgba(0, 0, 0, .8); width: 100%; height: 100%; margin: 0; z-index: 1000; display: none; }
		#grey > div { margin-top: 2%; }
		#grey .close { margin-top: 20px; }
		#grey div div span { z-index: 1001; text-align: center; cursor: pointer; margin-top: 10px; background: #7FAAFF; color: white; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; padding: 5px;}
		#diagram { width: 90%; margin: 0 5%; height: 510px; background-image: url(assets/8/large.jpg); background-repeat: no-repeat; }
		.screen p:not(.grid_12) { font-size: 23px; line-height: 25px;}
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
		div#diagram { top: 30px; }
		#grey div div span {
		    position: absolute !important;
		    z-index: 1001;
		    top: 492px !important;
	    }
	    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
	    	.small span { margin-left: 117px; }
	    	div#diagram { margin-left: 8%; margin-top: 7%; }
	    	span#b { top: 14px; left: 5px; <?php if($language=='zh_CN'){ ?> top: 36px; <?php } ?>}
	    	span#d { bottom: 20px; left: 69px; <?php if($language=='zh_CN'){ ?> bottom: 45px; <?php } ?>}}
	    }
	    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
	    	.small span { margin-left: 83px; }
	    	div#diagram { margin-left: 5%; margin-top: 7%; }
	    	span#b { top: 14px; }
	    	span#d { bottom: 40px; left: 69px; }
	    	p#a, p#c { right: 13px; }
	    }
	    <?php if($language == 'zh_CN'){ ?>
	    	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
	    		.small span {
	    			margin-left: 85px !important;
	    			font-size: 18px !important;
	    		}
	    		span#b { top: 48px; }
	    		span#d { bottom: 55px; }
	    		p#a, p#c { right: 10px; }
	    	}
	    <?php } ?>
		@media only screen and (max-width: 1250px){
			.screen p:not(.grid_12) {
			    font-size: 20px !important;
			}
			.small {
			    float: right;
			    height: 298px;
			    background-image: url(assets/8/small.jpg);
			    background-repeat: no-repeat;
			    background-size: 100% 100%;
			    cursor: pointer;
			}
			.small span {
			    float: left;
			    margin-left: 98px;
			    margin-top: 168px;
			}
			p {
			    margin: 2px 0 !important;
			}
			#diagram {
			    width: 90%;
			    margin: 0 5%;
			    height: 510px;
			    background-image: url(assets/8/large.jpg);
			    background-repeat: no-repeat;
			    background-size: contain;
			}
			#grey div div span {
			    top: 475px !important;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12" id="grey"></div>
			
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div class="grid_12 screen">
						<h1><?php echo _("More big ideas about... the air around us"); ?></h1>
						<p class="grid_12">
							<div class="grid_5 small">
								<span><?php echo _("Click here!"); ?></span>
							</div>
							<p><?php echo _("The force of gravity pulls all objects that have mass toward Earth's center. Air molecules have mass so they too are pulled down toward Earth's surface. And, just as with all objects, there is a relationship between the mass of the object and the force exerted by gravity – the greater the mass, the greater the gravitational force. The result of this gravitational pull is a phenomenon called <span class='key'>Air Pressure</span>. Imagine for a moment standing in the middle of a column of air that extends from your feet (on Earth's surface) to the outer extent of the atmosphere.  The mass of all that air directly above you exerts a force on you called air pressure.  This is a consequence of the gravitational pull of the Earth on the air mass above you and it affects you and everything on the Earth’s surface. It follows that if there are less molecules of air in that column, then the pressure would be less on Earth's surface. Conversely, if the number and mass of molecules increases, one would experience increased pressure at Earth's surface. So the higher you go, like climbing up a mountain or flying up in an airplane, the less air mass is above you which means there is less force from the weight of that air pushing down; less air pressure! Because the density of air decreases as altitude increases, air pressure generally decreases with altitude. Similarly, as the density of the air increases, so does the air pressure."); ?></p>
						</p>
						<div id="diagram" class="grid_12">
<!-- 						<span><?php echo _("Lower pressure"); ?></span>
							<p><?php echo _("Look at how few atoms are pressing down on me at the top of the mountain!"); ?></p>
							<span><?php echo _("Higher pressure"); ?></span>
							<p><?php echo _("Look at all the atoms pressing down on me at the bottom of the mountain!"); ?></p> -->
							<p id="a"><?php echo _("Lower pressure"); ?></p>
							<span id="b"><?php echo _("Look at how few atoms are pressing down on me at the top of the mountain!"); ?></span>
							<p id="c"><?php echo _("Higher pressure"); ?></p>
							<span id="d"><?php echo _("Look at all the atoms pressing down on me at the bottom of the mountain!"); ?></span>

							<div class="clear"></div>
							<div class="grid_2 prefix_5 suffix_5 close"><span><?php echo _("Close me!"); ?></span></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Pulling objects..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>
	
	<script>
		
		$('#grey').append($('#diagram'));
		$('.small').click(function() {
			$('#grey').fadeIn();
		});
		$('.close').click(function() {
			$('#grey').fadeOut();
		});
		
	</script>

	<?php include 'setlocale.php'; ?>
	
</body>
</html>
