<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		p { text-align: left; }
		h1 { color: #feda44; padding-bottom: 20px; }
		.wrap { border-left: 1px dashed #848894; border-right: 1px dashed #848894; }
		.bg { background-image: url(images/11/bg.jpg); }
		.bg ul { list-style: none; padding-left: 10px; }
		.bg ul li { font-size: 24px; }
		.letter { color: #ff6633; padding-right: 20px; }

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 29px !important; }
		<?php endif; ?>
		
		html[dir="rtl"] p { text-align:right; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			h1 { padding-bottom: 0; }
			.bg ul { float: left; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 40px; padding-bottom: 0; }
			.bg ul li { font-size: 18px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about energy and its forms"); ?></h1>

				<p><?php echo _("<span class='key'>Energy</span> is the ability to do work. There are two basic forms of energy, <span class='key'>kinetic energy</span> and <span class='key'>potential energy</span>. Kinetic energy involves a mass moving at some velocity. Potential energy is stored energy. Food, fuels and plants are all examples of things with potential energy. There are different forms of energy that can be converted or changed from one form to another. But the amount of energy always stays the same - it cannot be created or destroyed (<span class='key'>law of conservation of energy</span>). <span class='key'>Fossil fuels</span> are made from decaying dead plants and animals. Fossil fuels are a <span class='key'>nonrenewable</span> source of energy, whereas solar energy is a <span class='key'>renewable</span> energy. Here's an interesting way to recall the seven forms of energy: just remember the name MRS CHEN"); ?>.</p>

				<ul>
					<li><?php echo _("<span class='letter'>M</span> <span class='key'>Mechanical energy</span>"); ?></li>
					<li><?php echo _("<span class='letter'>R</span> <span class='key'>Radiant energy</span>"); ?></li>
					<li><?php echo _("<span class='letter'>S</span> <span class='key'>Sound energy</span>"); ?></li>
				</ul>

				<ul>
					<li><?php echo _("<span class='letter'>C</span> <span class='key'>Chemical energy</span>"); ?></li>
					<li><?php echo _("<span class='letter'>H</span> <span class='key'>Heat energy</span>"); ?></li>
					<li><?php echo _("<span class='letter'>E</span> <span class='key'>Electrical energy</span>"); ?></li>
					<li><?php echo _("<span class='letter'>N</span> <span class='key'>Nuclear energy</span>"); ?></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/global.js"></script>
</body>
</html>
