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

	<title><?php echo _("How Light Behaves"); ?></title>

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
		h1 { color: #EB6966; font-size: 33px; }
		
		#buttons .next, #screen2 { display: none; }
		
		.wrap { border-color: #64BACB; }
		.bg { background-image: url(assets/6/bg.jpg); }
		
		#screen2 > div { margin-top: 20px; }
		#screen2 div span, #screen2 img { width: 80%; margin: auto 10%; display: block; }
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... how light behaves"); ?></h1>
				
						<p class="grid_12"><?php echo _("Some materials are highly reflective. When light strikes these materials, nearly all of the light bounces off. The reflectors on a bicycle are designed so that light coming from a car's headlights will bounce straight back off of the reflectors, making the bicycle visible to the driver of the car. During the first Moon landing, the Apollo 11 astronauts placed a similar reflector on the Moon's surface. Scientists on Earth were then able to bounce light off of these reflectors straight back to Earth, allowing for very exact measurements of the distance between Earth and Moon."); ?></p>
						<div class="grid_5 prefix_1"><img src="assets/6/1.jpg" /></div>
						<div class="grid_5"><img src="assets/6/2.jpg" /></div>
					</div>
					
					<div id="screen2" class="screen">
						
						<p class="grid_12"><?php echo _("<span class='key'>Mirrors</span> are another example of reflectors. A mirror can be any shiny surface that reflects most of the light. You can see yourself or other things in a flat mirror because the light that bounces off you or other things bounces off the mirror in straight lines back to your eyes. If the surface of a mirror is curved, the light bounces off in different directions and can make things look closer, farther or just plain funny!"); ?></p>
						
						<div class="grid_6">
							<img src="assets/6/a.jpg" />
							<span><?php echo _("Things look normal when light reflects off of flat mirrors."); ?></span>
						</div>
						
						<div class="grid_6">
							<ul class="rslides">
							    <li><img src="assets/6/b.jpg"></li>
							    <li><img src="assets/6/c.jpg"></li>
							    <li><img src="assets/6/d.jpg"></li>
							</ul>
							<span><?php echo _("People can look really silly when light reflects off of curved mirrors."); ?></span>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Bouncing lights..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	

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
		
	<script src="js/responsiveslides.js"></script>
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 600
		});
	</script>
</body>
</html>
