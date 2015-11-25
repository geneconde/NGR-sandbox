<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>



	<style>
		.container_12 .prefix_4 {
		    padding-left: 23.333% !important;
		}
		h1 { color: #f90170; }
		h1, p { margin-top: 10px; margin-left: 10px; }
		.wrap { border-color: #FF00FF; }
		.bg { background-image: url(assets/10/10.jpg); overflow: hidden;}

		#screen2 { display: none; padding-top: 20px;}
		#screen3 { display: none;margin-top: -2%; font-size: 21px;}
		#screen3 .pic { height: 220px; width: 425px;}
		#screen3 .pic img { height: 100%; }
		#screen3 p { margin: -40px 10px; }
		#screen3 .prefix_4{ margin-top: 50px; }

		#buttons .next { display: none; }
		.img{float: right;}

		.magnify {width: 200px; margin: 50px auto; position: relative; padding-right: 15px; }
		/*Lets create the magnifying glass*/
		.large {
			width: 175px; height: 175px;
			position: absolute;
			border-radius: 100%;
			
			/*Multiple box shadows to achieve the glass effect*/
			box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
			0 0 7px 7px rgba(0, 0, 0, 0.25), 
			inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
			
			/*Lets load up the large image first*/
			background: url('assets/10/screenshot-www.nobelprize.org 2015-04-11 11-24-10.png') no-repeat;
			
			/*hide the glass by default*/
			display: none;
		}
		/*To solve overlap bug at the edges during magnification*/
		.small { display: block; }

		.rslides { width: 450px; height: 400px; }
		@media screen and (max-width: 1250px) { #screen2 p {padding-top: 30px; }#screen3 .pic { margin-top: 3%; } #screen3 p { font-size: 18px; } #screen2 .rslides img{ margin: 0px 0; } img{padding-top: 30px; } .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
		@media screen and (max-width: 780px) {
			#screen3 .pic { height: 215px;}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... electric circuits"); ?></h1>
							<div class="img grid_6">
						<img src="assets/10/10a.jpg">	
							</div>
							<p><?php echo _("A large part of the electricity generated in the world goes to providing light in homes, businesses, schools and along city streets. The light given off by cities at night is visible from space.  That makes it easy to identify the parts of the Earth with large populations, but it also points out the importance of producing light energy as efficiently as possible.  Traditional incandescent light bulbs convert electricity into light energy by heating up a thin wire or filament made of Tungsten.  These bulbs were first designed by Thomas Edison in the late 1800’s.  In order to emit light, the filament in an incandescent bulb must reach a temperature over 4000º Fahrenheit.  In fact, these bulbs emit more thermal energy (95%) than light energy (5%).");?></p>

						
					</div>

					<div id="screen2" class="screen">
						<p><?php echo _("<span class='key'>Fluorescent lights</span> are a more efficient option.  That’s why you see them used in many schools and offices.  They still emit more thermal energy (80%) than light energy (20%), but that still makes them four times as efficient as <span class='key'>incandescent bulbs</span>.  Fluorescent lights are more efficient because the light is produced by passing electric current through a gas (mercury vapor) rather than heating a wire.");?></p>

							<div class="prefix_3">
							<ul class="rslides">
								<li><img src="assets/10/10b1.jpg"></li>
								<li><img src="assets/10/10b2.jpg"></li>
								<li><img src="assets/10/10b3.jpg"></li>
							</ul>
							</div>
					</div>

					<div id="screen3" class="screen">
							<p class="prefix_4"><?php echo _("Hover your mouse over the image to see the details.")?></p>
						<div class="pic magnify">
							<div class="large"></div>
							<img class="small" src="assets/10/screenshot-www.nobelprize.org 2015-04-11 11-24-10.png">
						</div>
						<div class="grid_12">
						<p><?php echo _("In recent years, <span class='key'>Light Emitting Diodes (LEDs)</span> have become an increasingly affordable and efficient option for replacing incandescent bulbs.  LEDs emit light by applying a voltage to a small semi-conducting chip.  Over time, scientists have developed different chemical compounds for LEDs that produce different colors of light. Compared to LEDs, fluorescent lamps require four times as much energy to produce the same amount of light, and incandescent bulbs require more than sixteen times as much energy.  At present, the purchase price for LED bulbs is quite a bit more than traditional bulbs, but this can be balanced out by the longer life span for LED bulbs.  Incandescent bulbs only last around 1,000 hours before they need to be replaced, while some LEDs can last up to 50,000 hours.  That’s why you’re starting to see LEDs everywhere from reading lamps to traffic lights!");?></p>
					</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Switching off the light..."); ?></strong></section></section>

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
				document.location.href = "9.php";
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


		var native_width = 0;
		var native_height = 0;
		$(".magnify").mousemove(function(e){
			if(!native_width && !native_height) {
				var image_object = new Image();
				image_object.src = $(".small").attr("src");
				native_width = image_object.width;
				native_height = image_object.height;
			} else {
				var magnify_offset = $(this).offset();
				var mx = e.pageX - magnify_offset.left;
				var my = e.pageY - magnify_offset.top;
				
				if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0) {
					$(".large").fadeIn(100);
				} else {
					$(".large").fadeOut(100);
				}
				
				if($(".large").is(":visible")) {
					var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
					var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
					var bgp = rx + "px " + ry + "px";
					var px = mx - $(".large").width()/2;
					var py = my - $(".large").height()/2;
					$(".large").css({left: px, top: py, backgroundPosition: bgp});
				}
			}
		});
	</script>


	<script src="js/jpreloader.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
