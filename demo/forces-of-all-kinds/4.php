<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Forces of all Kinds"); ?></title>

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
		h1 { color: #34678a; }
		
		/*.wrap { border-color: #82c4de; }*/

		.wrap  { border-left: 1px dashed #82c4de; border-right: 1px dashed #82c4de; }
		.bg { background-image: url('assets/4/bg4.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }

		img { border-radius: 5px !important; margin:15px auto;}
		p {color: #000 ;text-align:left; margin-top:0px;}
		#htop {margin-top:10px;}
		.grid { width: 850px; height: auto; margin-top: 20px !important; padding: 0; clear: both;}
		.grid li { float: left; width: 220px; padding: 25px; }
		/*.grid li { float: left; width: 950px; padding: 10px; }*/
		.grid a { display: none !important; }
		.grid figcaption { padding: 10px; background-color: #7A6362; height: auto; color: #fff; }
		.grid figcaption span { font-size: 20px;}
		.caption { font-size: 19px; }
		#pbot { width: 100%; }
		#screen1 .grid_5 {width: 300px}
		#screen2 { display: none; }
		#buttons a.next { display: none; }
		#screen2 .grid_12 .grid_3 { width: 29%; }
		#screen2 .grid_12 .grid_3 p{
		    font-size: 20px;
		    line-height: 25px;
		    text-align: center;
		    padding-left: 10px;
		    padding-right: 10px;
		    margin-top: -5px;
		}
		.grid_3.prefix { margin-left: 4%; }
		#second1, #third1, #second2, #third2, #second3, #third3, #fourth3, #fifth3, #sixth3
		{ display: none; }


	<?php if ($language == 'es_ES') : ?>
		#screen2 p {
		    font-size: 22px;
		    line-height: 25px;
		}
	<?php endif; ?>

    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
			#screen2 .grid_12 .grid_3 p {
			    font-size: 17px;
			    line-height: 20px;
			    text-align: center;
			    padding-left: 10px;
			    padding-right: 10px;
			    margin-top: -5px;
			}
    }
	@media only screen and (max-width: 960px){
		p.grid_8 {
		    line-height: 25px;
		}
	}
	<?php if ($language == 'es_ES' || $language == 'en_US') : ?>
	@media only screen and (max-width: 1250px){
		#screen2 p#pbot {
		    line-height: 20px;
		    font-size: 18px;
		}
	}
	<?php endif; ?>

    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... forces"); ?></h1>

						<!-- <p class="grid_12"><?php echo _("A <span class='key'>force</span> You’ve been studying force and motion your whole life.  From learning to crawl to throwing a ball, everyone builds an understanding of how interactions play a role in everyday events.  This can also make it difficult to fully understand how force and motion go together.  Forces provide us with a way to explain why some things move, and some things remain at rest.  When analyzing force, both the amount or size of the force, and the direction of the force are important.  With all the different types of motion you can see and experience, it might seem like there are a wide variety of forces out there.  However, scientists that study physics have identified just four basic types of force.  
						"); ?></p> -->

						<p class="grid_8" ><?php echo _("You've been studying force and motion your whole life. From learning to crawl to throwing a ball, everyone builds an understanding of how interactions play a role in everyday events. This can also make it difficult to fully understand how force and motion go together. Forces provide us with a way to explain why some things move, and some things remain at rest. When analyzing force, both the amount or size of the force, and the direction of the force are important. With all the different types of motion you can see and experience, it might seem like there are a wide variety of forces out there. However, scientists that study physics have identified just four basic types of force. We are most familiar with <span class = 'key'> gravitational force </span> and <span class = 'key'> electro-magnetic force</span>. Additionally, the strong nuclear force and weak nuclear force play a role in interactions at the atomic level."); ?></p>

						<div class="grid_4">
								<img src="assets/4/space.jpg"><!--<span class="caption"><?php echo _("Massive objects exert a stronger pull than less massive objects."); ?></span>-->
								<img src="assets/4/science.jpg"><!--<span class="caption"><?php echo _("Massive objects exert a stronger pull than less massive objects."); ?></span>-->
						</div>

						<div class="clear"></div>
				
					</div>

					<div id="screen2" class="screen">
						<div class="grid_12">
							<div class="grid_3 prefix">
								<img id="first1" src="assets/4/rope1.png">
								<img id="second1" src="assets/4/rope2.png">
								<img id="third1" src="assets/4/rope3.png">
								<p><?php echo _("Use a rope to drag an object across a rough surface."); ?></p>
							</div>
							<div class="grid_3">
								<img id="first2" src="assets/4/pointing1.png">
								<img id="second2" src="assets/4/pointing2.png">
								<img id="third2" src="assets/4/pointing3.png">
								<p><?php echo _("Press your fingers against the table and they will bend backwards."); ?></p>
							</div>

							<div class="grid_3">
								<img id="first3" src="assets/4/baloon1.png">
								<img id="second3" src="assets/4/baloon2.png">
								<img id="third3" src="assets/4/baloon3.png">
								<img id="fourth3" src="assets/4/baloon4.png">
								<img id="fifth3" src="assets/4/baloon5.png">
								<img id="sixth3" src="assets/4/baloon6.png">
								<p><?php echo _("Rub a balloon in your hair and stick it to the wall."); ?></p>
							</div>
							<div class="clear"></div>
							
							<p class="grid_12" id = "pbot"><?php echo _("These events seem quite different, but they can all be explained by electric charge based interactions. Eventually scientists demonstrated a relationship between those forces and the force involved in holding magnets to the refrigerator. They’re all part of the electro-magnetic interaction. Like the gravitational interaction, these electric charge based interactions can draw objects together with attractive forces. Unlike gravitational interaction, forces due to electric charges or magnets can also repel, pushing objects apart. These forces are so strong, they’re responsible for holding objects together and giving them shape. If you play with two magnets from the refrigerator, you can feel an attractive force between them even if they’re not touching each other. The <span class = 'key'>forces </span> can be explained as interaction with the other object’s magnetic field."); ?></p>
						</div>

						<div class="clear"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Tying a knot..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
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

		$('.back').click(function() {
			if ($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
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
			if ($('#screen1').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() {
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});

		$(document).ready(function() {
			setInterval('swapImages()', 1000);
			setInterval('swapImages2()', 1000);
			setInterval('swapImages3()', 1000);
		});
		function swapImages(){
		  if($('#third1').is(':visible')) {
			$('#third1').hide(0, function(){
				$('#first1').show();
			}); 
			
		  } else if ($('#second1').is(':visible')){
			$('#second1').hide(0, function(){
				$('#third1').show();
			}); 
		  } else if ($('#first1').is(':visible')){
			$('#first1').hide(0, function(){
				$('#second1').show();
			}); 
		  }
		 }

		function swapImages2(){
		  if($('#third2').is(':visible')) {
			$('#third2').hide(0, function(){
				$('#first2').show();
			}); 
			
		  } else if ($('#second2').is(':visible')){
			$('#second2').hide(0, function(){
				$('#third2').show();
			}); 
		  } else if ($('#first2').is(':visible')){
			$('#first2').hide(0, function(){
				$('#second2').show();
			}); 
		  }
		 }

		function swapImages3(){
		  if($('#sixth3').is(':visible')) {
			$('#sixth3').hide(0, function(){
				$('#first3').show();
			}); 
			
		  } else if ($('#fifth3').is(':visible')){
			$('#fifth3').hide(0, function(){
				$('#sixth3').show();
			}); 
		  } else if ($('#fourth3').is(':visible')){
			$('#fourth3').hide(0, function(){
				$('#fifth3').show();
			}); 
		  } else if ($('#third3').is(':visible')){
			$('#third3').hide(0, function(){
				$('#fourth3').show();
			}); 
		  } else if ($('#second3').is(':visible')){
			$('#second3').hide(0, function(){
				$('#third3').show();
			}); 
		  } else if ($('#first3').is(':visible')){
			$('#first3').hide(0, function(){
				$('#second3').show();
			}); 
		  }
		 }

	</script>

	<script src="js/jpreloader.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
