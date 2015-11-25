<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $smc->updateStudentLastscreen(13, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg h1 { color: #3986C9; margin-left: 0px; }
		.wrap { border-color: #90EBFE; }
		.bg { background-image: url(assets/13/bg.jpg); overflow: hidden; }
		<?php if($language == "es_ES") { ?>
			p { font-size: 22px; }
		<?php } ?> 
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("Summarizing big ideas... about staying alive"); ?></h1>
						<p><?php echo _("In many kinds of animals, parents and the offspring themselves engage in behaviors that help the offspring to survive. Many animals are born with <span class='key'>instinctual behaviors</span>. Other animals rely only on what they learn to survive. The survival and reproduction of the group as a whole is important. <span class='key'>Ecosystems</span> are dynamic in nature and their characteristics can vary over time. Disruptions to any physical or biological component of an ecosystem can lead to shifts in all its populations. The more we understand the ecosystems, the more it will help us to manage plants and animals as they interact with human populations around the world. <span class='key'>Biodiversity</span> describes the variety of species found in Earth's terrestrial and oceanic ecosystems. The completeness or integrity of an ecosystem's biodiversity is often used as a measure of its health. All organisms must be able to obtain and use resources, grow, reproduce, and maintain stable internal conditions while living in a constantly changing external environment."); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
