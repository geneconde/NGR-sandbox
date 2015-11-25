<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(15, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Inherited Traits"); ?></title>

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
		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #61009e; }
		h2 { color: #008fff; }
		p { text-align: left; color: #000; margin-bottom: 0; font-size: 23px;}

		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/13/bg.jpg); }

		#question { height: 320px; width: 60%; position: relative; margin: 10px auto 0; display: block; }
		#question img { display: none; width: 100%; position: absolute; }
		#question img.active { display: block; margin: 0 auto; }

		@media only screen and (max-width: 960px){
			p {
			  text-align: left;
			  color: #000;
			  margin-bottom: 0;
			  font-size: 21px;
			}
		}
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
		}
		<?php if ($language == 'ar_EG') { ?>
			p { text-align: right; }
		<?php } ?>
		@media screen and (max-width: 1250px){ .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... inherited traits"); ?></h1>

					<p class="grid_12"><?php echo _("Nearly all plants and animals reproduce sexually, that is, they have female and male parents. Every new individual receives half of its inherited information from its mother, and half from its father. The half from the mother is a random set of the information inherited from her own parents. The same is true for information inherited from the father."); ?></p>	

					<p class="grid_12"><?php echo _("Some characteristics are sometimes absent in a generation, only to reappear in later generations. These are said to be <span class = 'key'>recessive traits</span>. These <span class = 'key'>traits</span> only appear when an individual inherits the same gene from each parent. <span class = 'key'>Dominant traits</span> never skip generations. They appear even when their gene is inherited from only one parent."); ?></p>	

					<p class="grid_12"><?php echo _("The random rearrangement of <span class = 'key'>genes</span> in each generation allows every species to have new combinations of genes all the time. These unique gene combinations are sometimes important to species survival."); ?></p>	

					<p class="grid_12"><?php echo _("It is possible to use the rules of probability to make predictions about past or future generations if we have information about other members of the same family. These predictions may be made about <span class = 'key'>genotype </span> (the actual genetic information) or <span class = 'key'> phenotype </span> (the visible traits coded for by genes)."); ?></p>						
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		$(document).ready(function() { setInterval('swapImages()', 1000); });
		
		function swapImages(){
			var active = $('#question .active');
			var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');

			active.removeClass('active');
			next.addClass('active');
		}
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
