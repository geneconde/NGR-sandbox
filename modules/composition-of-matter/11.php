<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(11, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { /*color: #fff;*/ }
.bg { background: url('images/11/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.key { color: #B13A90; }
.wrap { border-left: 1px dashed #47b3cf; border-right: 1px dashed #47b3cf; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 29px; }
<?php } ?> 
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _('Summarizing big ideas... about the composition of matter'); ?></h1>
				<p><?php echo _("<span class=\"key\">Matter</span> is made of <span class=\"key\">atoms</span>, and categorized according to its composition. Matter that is composed of only one kind of atom is known as an <span class=\"key\">element</span>. Those <span class=\"key\">substances</span> with two or more kinds of atoms are called <span class=\"key\">compounds</span>. Matter usually exists in one of three states: <span class=\"key\">solid</span>, <span class=\"key\">liquid</span>, or <span class=\"key\">gas</span>. Each state of matter has general properties of shape and volume that may be used to uniquely identify the state. Properties such as <span class=\"key\">melting-freezing</span> and <span class=\"key\">boiling-condensation</span> points can be further used to identify specific substances. The properties of substances change greatly when substances interact chemically. A <span class=\"key\">mixture</span> on the other hand is a type of matter in which the substances composing it do not interact chemically. Mixtures are classified as <span class=\"key\">heterogeneous</span>, in which their substances are easily distinguishable, and <span class=\"key\">homogeneous</span>, in which the composing substances are well blended and not easily distinguishable. An alloy is a homogeneous mixture of metals and a <span class=\"key\">solution</span> is a homogeneous mixture of extremely small particles, indistinguishable even using a microscope. Finally, <span class=\"key\">colloids</span> are solutions with larger particles that are small enough not to settle out and separate from each other, while <span class=\"key\">suspensions</span> are mixtures of particles that are large enough to settle out and separate from each other."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Putting it all together...'); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
