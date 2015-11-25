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
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/20/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h3 { margin:0; font-size: 50px; padding: 10px; font-weight:bold; color: rgb(243, 207, 131); text-align: center; padding-top: 5%;}
p { margin:0; padding: 50px 50px; font-weight:normal; font-size:30px; text-align: center; color: #fff; }
.imgClass a { text-decoration: none; color: #fff; font-size: 30px; left: 25px; top: 27px; position: relative; }
.imgClass {
	background: url(images/20/btn.png) no-repeat;
	width: 240px !important;
    height: 100px;
	vertical-align: bottom;
	cursor: pointer;
	vertical-align: middle;
	margin: 0 auto;
	position: relative;
	top: 0; 
	background-size: 100%; 
}

.imgClass:hover {
	background: url(images/20/btn-hover.png) no-repeat;
	width: 240px !important;
    height: 100px;
	background-size: 100%;
}
html[dir="rtl"] .imgClass a { left:-23px; font-size: 22px; }
<?php if($language == 'es_ES') { ?>
	.imgClass a { font-size:23px;left:14px;top:33px; }
<?php } ?>

<?php if($language == 'zh_CN') { ?>
	.imgClass a { left: 45px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<br>
			<h3 class="blink"><?php echo _("Congratulations") ?>, <?php echo( ucfirst($name)."!"); ?></h3>
			<p><?php echo _("You've completed the Properties of Matter module."); ?></p>
			<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></p>
			<div class="imgClass">
				<a href="../../teacher.php"><?php echo _("Go to dashboard"); ?></a>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="19.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
