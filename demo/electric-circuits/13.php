<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #867964; }

		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>

		.wrap { border-color: #867964; }
		.bg { background-image: url(assets/13/13.jpg); overflow: hidden;}

		.container_12 { height: 100%; }
		p{font-size: 22px;}
		@media screen and (max-width: 1250px) { p { font-size: 20px; } .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... electric circuits"); ?></h1>

					<p class="grid_12"><?php echo _("<span class='key'>Electrons</span> are tiny, negatively charged particles that orbit atoms.  In a metal wire, the electrons can be made to move in one direction or the other by moving a loop of wire near a magnet or moving a magnet near the wire.  The moving electrons are called an <span class='key'>electric current</span>.  Electric current is measured in <span class='key'>Amperes</span> or <span class='key'>Amps</span>. Power plants generate electric currents for our homes and businesses from burning fuels, moving water and wind to turn large turbines. The turbines spin loops made up of thousands and thousands of meters of wire near very, very large magnets to make electric currents. Electric currents flow best in metals (<span class='key'>conductors</span>) but not in nonmetals (<span class='key'>insulators</span>) such a glass, wood, plastic and rubber. The more <span class='key'>resistance</span> there is in a wire, the more force it takes to push electric current through the wire. Resistance is measured in <span class='key'>Ohms</span> and the push or force is measured in <span class='key'>volts</span>. Electric current (I), resistance (R) and voltage (V) are related by the formula: I = V/R. Electric currents move in an unbroken or closed loop called a <span class='key'>circuit</span>. Electric currents cannot move in a broken or open circuit. There are two kinds of electric circuits: a series circuit and a parallel circuit. A <span class='key'>series circuit</span> has one continuous loop and a <span class='key'>parallel circuit</span> has more than one loop. A variety of lamps can use electricity to produce visible light. <span class='key'>Incandescent bulbs</span> are relatively inefficient and produce much more thermal energy than light energy. Increasingly, <span class='key'>Light Emitting Diodes (LEDs)</span> are being used to efficiently provide light for a wide variety of applications."); ?></p>
				</div>

			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php#answer" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
