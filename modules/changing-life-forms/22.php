<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(0, $_SESSION['smid']);
		$uf->finishModule($_SESSION['smid']);
	}
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { z-index: 1 !important; }
h1 { font-size: 50px; color: #66391c !important; margin-top: 0; padding-top: 30px; text-align: center; margin-bottom: 60px; }
h1.blink { text-transform: none; }
p { font-size: 24px; margin-top: 30px; text-align: center; }
.bg { background-image: url(images/22/bg.jpg); padding-top: 20px; }
.wrap { border-color: #e06760; }
.bg a { text-decoration: none; background: #66391c; color: #fff; padding: 10px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; }
.bg a:hover { background: #3c1b05; }
div.placeholder { background: rgba(255, 255, 255, .5); padding: 5px 10px 40px; border-radius: 5px; }
html[dir="rtl"] p {text-align: center;}
html[dir="rtl"] h1 {text-align: center;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="placeholder">
				<h1 class="blink"><?php echo _("Congratulations"); ?>, <?php echo $user->getFirstName().'!'; ?></h1>
				<p><?php echo _("You've completed the Changing Life Forms module."); ?></p>
				<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></p>	
				<p>
					<a <?php if ($user->getType() == 0): ?>
						href="../../results.php?smid=<?php echo $_SESSION['smid']; ?>">
					<?php else: ?>
						href="../../student.php">
					<?php endif; ?>
					<span id="link"><?php echo _("How did I do?"); ?></span>
					</a>
				</p>
			</div>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>

	<div id="buttons">
		<a href="21.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
	</div>

	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
