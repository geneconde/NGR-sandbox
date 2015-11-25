<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
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
p { font-size: 24px; margin-top: 10px; color: black; text-align: center; }
h1 { font-size: 50px; color: black !important; margin-top: 0; padding-top: 30px; text-align: center; margin-bottom: 100px; }
h1.blink { text-transform: none; }
.bg { background: url('images/11/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.bg .placeholder { margin-top: 340px !important; }
.wrap { border-left: 1px dashed #979797; border-right: 1px dashed #979797; }
.bg a { text-decoration: none; background: #2196f3; margin-top: 10px; display: inline-block; border: 1px solid #fff; color: #fff; padding: 10px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; }
.bg a:hover { background: #5EBCDD; }
html[dir="rtl"] h1 { text-align: center; }
html[dir="rtl"] p { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1 class="blink"><?php echo _('Congratulations, '); echo $user->getFirstName() ?></h1>
				<p><?php echo _('You\'ve completed the Composition of Matter module.'); ?></p>
				<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below.");?></p>		
				<p>
					<a <?php if ($user->getType() == 0): ?>
						href="../../teacher.php">
					<?php else: ?>
						href="../../student.php">
					<?php endif; ?>
					<span id="link"><?php echo _("Go to dashboard"); ?></span>
					</a>
				</p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="19.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('You\'re done!'); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
