
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

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

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
		h1 { color: #d4137e; }
		.bg { background-image: url(assets/4/bg.jpg); }

		#screen2 img, #screen3 img {border:2px solid yellow;}

		.rslides img { 
		   width: 97%;
		   height: 188px;}
		.fleft { float: left;}
		.fright { float: right;}
		.slide { position: relative; padding: 20px 0;}
		.rslides { width: 40%; }
		#left, #right { position: absolute;
				top: 20%;
				width: 70px;
				z-index: 999;
				cursor:pointer;
		 }

		.cycle-slideshow {
			width: 81%;
			margin: -5px auto 0;
			height: 237px;
			border: 3px solid #FFF655;
			-webkit-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			-moz-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			background-color: #8EE8AF;
			border-radius: 5px;
		}

		#right { right: 15px; }
		#left { left: 15px; }
		.center { text-align: center;}

		.group {
			position: relative;
			bottom: 410px;
			left: 650px;
			}
		.group li { padding: 19px 12px; }
		.title-popup { 
			margin: 0 auto; 
			width: 100%; 
			color: black; 
			text-align: center;
			position: absolute;
			top: 100px;
		}
		.size22 { font-size: 20px; }
		.p-fix { margin-left: 0px; }
		.hl { color: #2561BA; }

		#screen2, #screen3 { display: none;}
		#screen2 img{ width: 100%; border-radius: 5px;}
		#buttons .next { display: none; }
		#screen2 > div > div { margin-top:10px; margin-bottom: 10px; }
		#screen3 img { width: 100%; }
		#screen3 p { font-size: 22px;}
		@media only screen and (max-width: 1250px) {
			#screen3 .grid_6.img_div { width: 35%; float: right; }
			.sp3 { width: 61% !important; }
		}
		@media only screen and (max-width: 900px) {
			#screen3 p { line-height: 23px; font-size: 20px; }
			p.size22 {
			    height: 200px;
			}
		}

		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12 clearfix">
				<div class="grid_12">
				
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... electric circuits"); ?></h1>
						<p class="grid_12"><?php echo _("Browse through the slides below by clicking the left and right arrows.<br>"); ?></p>
						<div class="grid_12 slide">
							<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="> div" data-cycle-timeout=6000 data-cycle-prev=".prev" data-cycle-next=".next">
								<div id="s1" class="data">
									<div class="grid_6">
										<img class="image_align" src="assets/8/8a.jpg" />
									</div>
									<div class="grid_6">
										<p class="size22"><?php echo _("Batteries are the source of electrical energy in a flashlight circuit. Flashlight batteries usually have a top and bottom that are connected by the conductors to the light bulb to complete the circuit and make the bulb light up."); ?></p>	
									</div>
								</div>
								<div id="s2" class="data">
										<div class="grid_6">
										<img  class="image_align" src="assets/8/8b.jpg" />
										</div>
										<div class="grid_6">
											<p class="size22"><?php echo _("But there are lots of other kinds of batteries too - like a car battery. Instead of having a top and a bottom for connections, it has two “<span class='key'>terminals</span>”, which are little posts that stick out of the top of the battery that the circuit wires are connected to."); ?></p>	
										</div>
								</div>
							</div>

							<div id="left" ><img src="assets/8/prev.png"></div>
							<div id="right" ><img src="assets/8/next.png"></div>
						</div>
						<p class="grid_12"><?php echo _("All batteries have two ends or terminals that are usually marked with a plus sign (+) or a minus sign (-). To make a circuit, a wire or other conductor connects the + side of the battery with the – side with something like a light bulb in between."); ?></p>
					</div>

					<div id="screen2" class="screen" >
						<div class="grid_12">
							<p><?php echo _("Another kind of battery is the rectangular battery with two connection clips on the top that are often used to power toy cars and helicopters. And there are cell phone batteries and wristwatch batteries too. It seems like almost everything we use in our everyday lives requires some type of battery."); ?></p>

							<div class="clear"></div>
							<div class = "grid_4">
								<img src="assets/8/82a.jpg"/>
							</div>
							<div class = "grid_4">
								<img src="assets/8/82b.jpg"/>
							</div>
							<div class = "grid_4">
								<img src="assets/8/82c.jpg"/>
							</div>

							<p><?php echo _("Each of these batteries is slightly different. And they are often identified by how powerful they are. The batteries electrical energy is measured in volts. A flashlight battery is one-and-a-half (1.5) volts. So is a watch battery. A car battery is 12 volts. The battery you put in your toy car is 9 volts. The higher the voltage, the higher the electrical energy they put out. Other batteries are other voltages depending on the needs of the devices they power."); ?></p>
						</div>
					</div>

					<div id="screen3" class="screen" >
						<p class="grid_6 sp3"><?php echo _("So how does a battery work? Batteries contain chemicals – like acids and metals - that have chemical reactions that cause electrons – those invisible charged particles we talked about earlier - to move from one side of the battery to the other – through the wires in the circuit. Batteries are good examples of a convenient and portable system that converts <span class='key'>chemical potential energy</span> into <span class='key'>electrical energy</span>.") ?></p>
						<div class = "grid_6 img_div" >
							<img src="assets/8/83.png"/>
						</div>
							<p class="grid_12"><?php echo _("Batteries used in your computer or cell phone are pretty complicated. But the basic idea can be as simple as sticking two different metals, like a zinc nail and a copper penny, into a lemon. These metals are called <span class='key'>electrodes</span>. Chemical reactions occur between the zinc and copper electrodes and the acid in the lemon juice to cause electrons to start to move. And if you hook up a wire between the nail and the penny – a lemon battery’s terminals - those electrons will move through the wire from the nail to the penny forming an electric current.  That’s a simple circuit! If you were to put a very small bulb or a buzzer in the circuit attached to the wire, the bulb would faintly glow or the buzzer would buzz. A lemon battery is a very simple battery that doesn't have much power. But it shows you the basic idea of how a battery works.") ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying how battery works..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jquery.cycle2.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
		$(".rslides2").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
		$( '.cycle-slideshow' ).cycle({
   				 next: '.next1',
   				 prev: '.prev',
   				 timeout: 0,
				});
		$('.cycle-slideshow').cycle('stop');
	</script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2,
		left = $('#left'),
		right = $('#right'),
		slides = $('.data'),
		slideLoaded=true,
		currentSlide = 1;

		slides.hide();

		$('#s' + currentSlide).show();

		right.on('click', function() {
			if(slideLoaded){
				slideLoaded = false;
				$('#s' + currentSlide).fadeOut();

				if (currentSlide != screenCount) currentSlide += 1;
				else currentSlide = 1; 

				$('#s' + currentSlide).delay(500).fadeIn( function(){
					slideLoaded = true;
				});
			}
		});

		left.on('click', function() {
			if(slideLoaded){
				slideLoaded = false;
				$('#s' + currentSlide).fadeOut();

				if (currentSlide != 1) currentSlide -= 1;
				else currentSlide = screenCount;

				$('#s' + currentSlide).delay(500).fadeIn(function(){
					slideLoaded = true;
				});
			}
		});

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
				document.location.href = "7.php#answer";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 
				$('.readmore').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

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

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

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
	</script>

	<script src="js/jpreloader.js"></script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
