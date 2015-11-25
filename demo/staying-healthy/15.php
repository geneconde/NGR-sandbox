<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg {
	background-image: url('images/15/bg.jpg'); 
	background-repeat: no-repeat; 
	background-size: 100% 100%; 
	width:100% !important;
	height:100%;
	position:relative;
	}
h1 {color:#f22f41;}
p {text-align:left;}

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 34px; }
<?php endif; ?>

html[dir="rtl"] p { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("Summarizing big ideas... about staying healthy"); ?></h1>
				<p>
					<?php echo _("Our bodies are composed of many systems that work together to keep us healthy. Each system is made up of a set of organs that function both independently and as a unit.We looked at the <span class='key'>circulatory</span>, <span class='key'>respiratory</span>, <span class='key'>excretory</span>, <span class='key'>skeletal</span>, <span class='key'>digestive</span>, <span class='key'>endocrine</span>, and <span class='key'>nervous system</span> in this review. Most infections are caused by one of two agents: <span class='key'>bacteria</span> or <span class='key'>viruses</span>. Most of the time, our immune system is able to identify and destroy the bacteria and viruses infecting us. When it can't destroy bacteria, we need antibiotic medication, and when the virus is too dangerous, we get vaccinated ahead of time. Another way to stay healthy is to eat the right foods. The three main food groups are <span class='key'>carbohydrates</span>, <span class='key'>fats</span>, and <span class='key'>protein</span>. <span class='key'>Calories</span> are a measurement of the amount of energy a particular food holds in its molecules. Any healthy diet should include all types of food and enough calories to make it through each day without getting sick. The last point of staying healthy is to exercise and avoid substances that are harmful to the body. Prescribed medication for others, alcohol, cigarettes, drugs, and other substances that might even be in the home should be avoided to stay healthy."); ?>
				</p>
			</div>			
		</div>
	</div>

	<div id="buttons">
		<a href="14.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>	

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
