<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	//require_once "../tempsession.php";
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

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg { background-image: url(assets/12/bg.jpg); }
		#screen2, #screen3 { display: none; }
		#buttons .next { display: none; }

		#screen1 img, #screen2 img { float: right; width: 50%;}

		/*To solve overlap bug at the edges during magnification*/
		.container_12 .grid_5 {
		  width: 39.667%;
		  float: right;
		}
		#screen1 img, #screen2 img {
		  float: right;
		  width: 100% !important;
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("More big ideas about... making sound"); ?></h1>	
						<div class="grid_5">
							<ul class="rslides">
								<li><img src="assets/10/a10.jpg"></li>
								<li><img src="assets/10/b10.jpg"></li>
								<li><img src="assets/10/c10.jpg"></li>
							</ul>
						</div>			
						<p ><?php echo _("Different sounds made by different things, for example, guitars, violins, drums, flutes and tubas, make different patterns of waves with different distances between them. Plucking, banging, whispering and yelling are all vibrations in the air, but these sounds are all very different. This is because the thickness and length of things and the temperature of the surroundings that sound travels through affect the speed of sound. For instance, a tuba is much thicker and larger than a flute so the tuba makes a low-pitched sound and the flute makes a high-pitched sound. The low-pitched tuba sound has big gaps between waves and the high-pitched flute has waves that are bunched together or shorter. Loud sounds have more <span class='key'>molecules</span> moving and more energy than soft sounds. So a thicker guitar string will make louder, deeper sounds than a thinner, skinnier guitar string which will make a higher sound."); ?></p>						
					</div>

					<div id="screen2" class="screen">
						<div class="grid_5">
							<ul class="rslides">
								<li><img src="assets/10/d10.jpg"></li>
								<li><img src="assets/10/e10.jpg"></li>
							</ul>
						</div>	
						<p ><?php echo _("The different instruments in the orchestra produce different sounds by different methods. The string instruments, such as violin, viola, cello and bass, produce sound by causing strings to vibrate. The hollow wooden bodies of those instruments, along with the different string lengths, produce distinctive sounds. The clarinets, saxophones, oboes and bassoons are all woodwind instruments that make use of a thin vibrating piece of wood, known as a reed, to create their sounds. The bright sounds of the brass instruments, the trumpet, French horn and coronet, are created by vibrating the lips while blowing air into the mouthpiece. Even when they're playing the same musical note, it is possible to tell these instruments apart based on their unique combination of different frequencies of sound waves. Engineers can use computers to mimic these sounds. By analyzing the mix of different frequencies in a note, the engineers can produce realistic sounding imitations of actual instruments. It is even possible to use computers to correct the notes sung by a human voice."); ?></p>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Watching an orchestra..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

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

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "9.php";
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
		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});
		$('img.pet2').click(function() {
			$('#graphDiv2').fadeIn();
		});
		$('#close2').click(function() {
			$('#graphDiv2').fadeOut();
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
