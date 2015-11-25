<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>

<style>
.wrap { border-left: 1px dashed #B1834C !important; border-right: 1px dashed #B1834C !important; }
.bg { background-image: url('images/11/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
h1 { color: #70BFFD; line-height: 30px; padding: 25px 0 0 30px; font-size: 32px; }
p { color: #fff; padding: 5px 0px; font-size: 24px; text-align: left; }
#summary p:first-child { padding-top: 10px; }
#summary { max-width: 92%; }
html[dir="rtl"] h1 { padding:30px 35px 0 0; }
html[dir="rtl"] p { text-align: right; }

<?php if($language == 'es_ES') { ?>
	h1 { font-size:28px; }
	p { font-size:23px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding: 40px 0 0 30px; }
	html[dir="rtl"] h1 { padding: 40px 30px 0 0; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("Summarizing big ideas... about the properties of matter"); ?></h1>
			<div id="summary">
				<p><?php echo _("<span class='key'>Matter</span> is the term used to describe all the physical substances of the universe. Determining the properties of a substance and how its properties make it useful are important. Matter can be described and classified according to its different properties. Some properties of matter can be determined from the use of our five senses. Other properties of matter can be determined through the use of tools or scientific instruments. One way to classify matter is to see if they are naturally made, or manufactured. <span class='key'>Solid</span>, <span class='key'>liquid</span> and <span class='key'>gas</span> are the three most common states that we use to describe matter. Another way to make a distinction regarding states of matter is between <span class='key'>physical properties</span> and <span class='key'>chemical properties</span> and their changes. Matter can combine and separate in different ways. <span class='key'>Physical properties</span> are those that do not change the nature of matter. <span class='key'>Physical change</span> is when a substance changes from one state to another without changing into a new substance. <span class='key'>Chemical properties</span> are those that can be seen when a substance is changed to form new substances. A <span class='key'>chemical change</span> causes matter to become a new kind of matter. Different properties are suited to different purposes. For example substances differ based on how they allow heat to pass; this property is called <span class='key'>heat conductivity</span>.  Substances that are good at carrying heat are called <span class='key'>heat conductors</span>; substances that are not good at carrying heat are called <span class='key'>heat insulators</span>."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>