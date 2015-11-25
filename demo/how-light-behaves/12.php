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
		
		.wrap { border-color: #D7F45E; }
		.bg { background-image: url(assets/8/bg.jpg); }

		.slider-container { position: relative; margin: 0 auto; width: 300px; height: 280px; background: url(assets/8/bg.png); background-image: 100% 100%; background-repeat: no-repeat; margin: 0 8.333%; height: 490px; }
		
		#screen2 div.grid_6 { float: right; }
		.top_pad { padding-top: 2.5%; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... how light behaves"); ?></h1>
						
						<p class="grid_8 top_pad"><?php echo _("Finally, when light passes from one material to another material, the light can change direction or bend. Scientists call this bending <span class='key'>refraction</span>. For example, when light passes at an angle from air into water or from water into air, the light refracts. This bending of light can cause objects to look odd, like the straw in this glass of water.");?></p>				
					
						<div class="grid_4">
							<img src="assets/12/a.jpg" />
						</div>
						
						<div class="grid_5">
							<img src="assets/12/b.jpg" />
						</div>
						
						<p class="grid_7"><?php echo _("Because the light is changing directions when passing from water into the air, objects beneath the surface of the water can appear to be slightly out of place. For example, this fish appears to be closer to the surface than it actually is due to the way the light is changing direction on the way to the person 's eyes.");?></p>				
						
					</div>
					
					<div id="screen2" class="screen">
					
						<div class="grid_4">
							<img src="assets/12/1.jpg" />
						</div>
						
						<p class="grid_8"><?php echo _("A rainbow of color is produced when sunlight passes through raindrops in the air at the proper angle. The different colors of light refract different amounts upon entering and exiting the rain drop, changing the direction of red light the least and blue and violet light the most. The result is the separation of colors we see as a rainbow."); ?>
						
						<div class="clear"></div>
						
						<div class="grid_6">
							<img src="assets/12/2.jpg" />
						</div>
						
						<?php echo _("Knowing how light refracts can be used to help us see things more clearly. You may have classmates that wear glasses to help them see. Eyeglasses or contacts have special lenses made of glass or plastic. The <span class='key'>lenses</span> are made to refract light as it passes through them. A nearsighted person's eyes focus light too \"near\" to the back of the eye. They need a lens that spreads the light out a bit. A farsighted person's eyes focus light too \"far\" behind the back of the eye. They need a lens that focuses the light closer. This helps a person wearing eyeglasses to see more clearly."); ?>

						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the rainbow..."); ?></strong></section></section>

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
				document.location.href = "11.php";
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
			speed: 1000,
			timeout: 5000
		});
	</script>
</body>
</html>
