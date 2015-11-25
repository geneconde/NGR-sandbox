<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
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
	<!-- <link rel="stylesheet" href="css/2.css"> -->
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #9E61BB; }
		p { font-size: 20px; margin: 0; }

		.wrap { border-color: #ded4f6; }
		.bg { background: url(assets/2/bg.jpg); }

		<!-- /* #animation { bottom: 5px; background: url(assets/2/bg1.png) no-repeat; width: 420px; height: 220px; margin: 0 auto; background-size: 100%; } */ -->
		#animation { bottom: 5px; width: 420px; height: 220px; margin: 0 auto; }
		
		@media screen and (max-width: 1250px) {
			.bg{ 
				background-size: 100% calc(100% - 65px)!important; 
				background-position: 0 34px; 
			} 

			p{
				font-size: 16px !important;
			}

		}
		@media only screen and (orientation: portrait) {
			.rslides img {
				  display: block;
				  width: 100%;
				  height: auto;
				  float: left;
				  margin: 248px 0;
				  border: 0;
				}
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#animation ul {
				bottom: -70%;
				<?php if($language=='es_ES') { ?>
				bottom: -35%;
				<?php } ?>
			}
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#animation ul { bottom: -35%; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Thinking about... human environmental impact"); ?></h1>

					<p class="grid_12"><?php echo _("Everybody loves superheroes who save the world. There's Superman, Wonder Woman, Batman, Robin, Wolverine, and lots of other superheroes everybody reads about in comic books and sees in the movies. Do you want to be a superhero and save the world? YOU CAN!! You can become an Eco-Kid Super Ranger!! What are Eco-Kid Super Rangers you ask? Well, they're superheroes that disguise themselves as ordinary kids just like you. But they're not ordinary! They're really smart kids who know that what everybody does every day is affecting the earth and in some places destroying the environment. But Eco-Kid Super Rangers know what those things are and what we can all do to help lessen the impact of everyday living in modern society on the environment."); ?></p>
					<p class="grid_12"><?php echo _("Do YOU want to be an Eco-Kid Super Ranger hero? If you do, then think about all the things you do or use in your life every day - like driving in a car, eating your food, living in your house. And think about where all the stuff comes from that helps you live the comfortable lifestyle you live. Now think about what effect getting all that stuff has on the earth's environment. Then, and here's the important part, think about how you can change your lifestyle, and that of your friends and family, to lessen your impact on the earth – and then do it! See, you really can be a superhero who saves the world."); ?>
				</div>
			</div>

			<div id="animation">
				<ul class="rslides">
					<li><img src="assets/2/bg1.png"></li>
					<li><img src="assets/2/bg2.png"></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>
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
