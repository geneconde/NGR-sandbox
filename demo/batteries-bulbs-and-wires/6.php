
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
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #d4137e; }
		.bg { background-image: url(assets/4/bg.jpg); }

		img { border: 2px solid #7fa599;}

		.scrn1img {margin: 10px 20px; width: 90%;}
		.scrn2imga {margin: 0 150px;height:309px;}
		.scrn2imgb {margin: 0px -130px; height:309px;}
		.img1cap {margin: 0 0 0 55px;}
		#screen2, #screen3 { display: none; }

		.rslides { width: 50%; height: 350px; margin: 10px auto;}
		.rslides img { width:100%; border: 2px solid #7fa599;}

		#buttons .next { display: none; }
		
		.next1, .prev { position: absolute; top: 36% }

		
		.next1 { right: 43px; cursor: pointer;}
		.prev { left: 43px;  cursor: pointer;}
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
						<p class="grid_6"><?php echo _("Electric circuits rely on electrical <span class='key'>conductors</span>, such as copper wires, to conduct electrical energy from the source to the device that needs it. Most common electrical conductors used in normal circuits are metals, such as copper, gold and silver. Interestingly, water is also a conductor even though it’s not a metal. Materials that don’t conduct electrical energy are called <span class='key'>insulators</span>. Examples of insulating materials are plastic, wood, cloth, air and many other non-metals. Insulators are sometimes used to cover and shield the conductors in a circuit so that when you touch the conductor, you don't get an electrical shock."); ?></p>
						<div class="grid_6">
							<img class="scrn1img" src="assets/6/6a1.jpg" /><img class="scrn1img" src="assets/6/6a2.jpg" />
						</div>
						<div class="clear"></div>
						
					</div>
					<div id="screen2" class="screen">
						<div class="grid_12">
							<p><?php echo _("It's important to know that getting an electrical shock can be very dangerous and could hurt you or even kill you. That's because touching the conductor allows the electrical energy to travel through your body and can make your heart stop. It's not dangerous when you touch a wire in a flashlight because the electrical energy from a flashlight battery isn't very strong. But if you touch an uninsulated wire from lamp or appliance that is plugged into your house sockets, it can be very harmful to you because the electrical energy traveling through the wires is much stronger."); ?></p>
						</div>
						<div class="clear"></div>
						<img class="scrn2imga grid_4" src="assets/6/6b1.jpg" /><img class="scrn2imgb grid_4" src="assets/6/6b2.jpg" />
					</div>

					<div id="screen3" class="screen">
						<p class="grid_12"><?php echo _("But even a single battery and wire can possibly hurt you a little. If you run an uninsulated wire directly from the top to the bottom of a flashlight battery, it will heat enough to burn your fingers, but it won't electrocute you. <br/> <br/> And remember!! Water is an electrical conductor too. So if you are in water, like in a bathtub, and an appliance like a hairdryer falls into the tub, the water can conduct the electrical energy from the hairdryer to your body and can hurt you or kill you. So be careful!!") ?></p>
						<div class="clear"></div>
						<ul class="rslides">
							<li><img src="assets/6/6c1.jpg"></li>
							<li><img src="assets/6/6c2.jpg"></li>
							<li><img src="assets/6/6c3.jpg"></li>
						</ul>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Posting danger signs..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jquery.cycle2.js"></script>
	<script src="js/responsiveslides.js"></script>

	
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

		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "5.php#answer";
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

		$('.next').click(function(){
			document.location.href = "7.php";
		});

		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>

	<script src="js/jpreloader.js"></script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
