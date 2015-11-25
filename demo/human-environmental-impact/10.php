<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'human-impact';
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

	<title><?php echo _("Human Environmental Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #7ba207; }
		#screen1 span { font-size: 23px; }
		.wrap { border-color: #C3FFFF; }
		.bg { background-image: url(assets/10/bg.jpg); }

		.slider-container { float: right; }
		p{ font-size: 20px;}

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 1.3em; }
			p, span { font-size: 22px; line-height: 27px; }

			@media screen and (max-width: 895px){
				p, span { font-size: 19px; line-height: 24px; }
			}

		<?php endif; ?>	
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
		html[dir=rtl] #screen1 .slider-container { width: 55%; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... human environmental impact"); ?></h1>
						<div class="grid_12">
							<div class="slider-container grid_4">
								<ul class="rslides1">
	    							<li><img src="assets/10/a.jpg" /></li>
	    							<li><img src="assets/10/b.jpg" /></li>
	    							<li><img src="assets/10/c.jpg" /></li>
								</ul>
							</div>
							<p><?php echo _("So let's get back to how you can become an EcoKid Super Ranger hero. It's pretty easy to understand but challenging to do. First, you have to understand one big idea, and that is humans can change the way they do things - their behavior - to minimize their impact on the environment. If you know what the impact on the environment is for the things you do, then you can change what you do to lessen the impact. For instance, if you know that driving a car causes air pollution, including the \"greenhouse gas\" CO<sub>2</sub> that may be causing <span class='key'>global climate change</span>, then - and here's the challenging part - you can change your behavior to use a car less to get you where you need to go. You could walk, ride your bike, ask your parents to start a carpool with your friends, or ride a bus to wherever you're going if it's safe. All of these things cut down on the number of miles each car is driven so it cuts down on the amount of pollutants the car gives off. PLUS!! Your parents save money on gas. And if you really want to save gas, you could talk to your parents about getting a <span class='key'>hybrid</span> electric car. These are things that you personally can do with your parents and your friends. But if you want to be a real EcoKid Super Ranger, the greatest positive impact you can have is by getting your whole community involved and thinking about all the possible things your school or community can do to help the environment. Then you really would be a superhero!!!"); ?></p>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="9.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Driving a car..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
			
		$(".rslides1").responsiveSlides({
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
