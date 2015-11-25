<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

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
		h1 { color: #5417A0; }
		p { font-size: 23px; }
		.wrap { border-color: #15BB44; }
		.bg { background-image: url(assets/8/bg.jpg); overflow:hidden; }

		#screen1 img { width: 33%; }
		#screen1 .images { text-align: center; }
		#screen2 { display: none; }
		div#screen1 p {
		    line-height: 23px;
		}
		#screen1 img {
		    width: 30%;
		}
		@media only screen and (max-width: 1250px){
			div#screen1 p {
			    line-height: 20px;
			    font-size: 18px;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("More big ideas about... our solar system"); ?></h1>
						<p><?php echo _("The Sun is a massive ball of super hot gas (mostly hydrogen) that produces tremendous amounts of heat and light through nuclear reactions. Heat and light from the Sun radiates out in all directions through space. About 30% of the Sun’s energy reaching the Earth is reflected back out into our solar system. The rest (about 70%) is absorbed by Earth’s atmosphere, oceans and solid surfaces. When the Sun’s energy hits the Earth, it warms the atmosphere, land and oceans. The radiant energy (heat energy) absorbed by land and water can be stored and released back into the atmosphere. In this way, winds and ocean currents are created. The light reaching plant life on earth is used, through a process called photosynthesis, to help them create food for growth and development. Hence, even in complex food webs, the original source of energy for most living things on Earth can be traced back to sunlight. "); ?></p>
						<div class="images">
							<img src="assets/8/8a.jpg" />
							<img src="assets/8/8b.jpg" />
						</div>	
					</div>

					<!-- <div id="screen2" class="screen">
					</div> -->

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<!-- <a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a> -->
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Producing heat..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1);

		/*if (hash != "") {
			$('.screen').hide();
			$('#screen2').show();

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
		}*/
		
		$('.back').click(function() {
			if ($('#screen1').is(':visible')) {
				document.location.href = "7.php";
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
	</script>

	<script src="js/jpreloader.js"></script>
	<script src="js/modernizr.custom.63321.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
