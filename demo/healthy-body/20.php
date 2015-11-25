<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'healthy-body';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Healthy Body"); ?></title> <!-- Change module title here -->
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
p { font-size: 24px; margin-top: 30px; text-align: center; }
h1 { font-size: 50px; color: #66391c !important; margin-top: 0; padding-top: 30px; text-align: center; margin-bottom: 60px; }
h1.blink { text-transform: none; }
.bg { background: url('images/20/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap { border-left: 1px dashed #7fb3cf; border-right: 1px dashed #7fb3cf; }
.bg a { text-decoration: none; background: #66391c; color: #fff; padding: 10px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; }
.bg a:hover { background: #3c1b05; }

html[dir="rtl"] p, html[dir="rtl"] h1 {text-align: center;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1 class="blink"><?php echo _("Congratulations, ");echo $user->getFirstName().'!'; ?></h1>
				<p><?php echo _("You've completed the Healthy Body module."); ?></p>
				<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></p>		
				<p>
				<a
				<?php if ($user->getType() == 0): ?>
					href="../../teacher.php">
					<?php echo _("Go to dashboard"); ?>
				<?php elseif ($user->getType() == 3): ?>
					href="../../subscriber/index.php">
					<span id="link"><?php echo _("Go to dashboard"); ?></span>
				<?php else: ?>
					href="../../results.php?smid=<?php echo $_SESSION['smid']; ?>">
					<?php echo _("How did I do?"); ?>
				<?php endif; ?>
				</a>
				</p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="19.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
