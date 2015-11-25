<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
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
h1 { font-size: 50px; color: #5c9ed3 !important; margin-top: 0; padding-top: 30px; text-align: center; margin-bottom: 60px; }
h1.blink { text-transform: none; }
p { font-size: 24px; margin-top: 30px; text-align: center; }
.bg { background-image: url(images/20/bg.jpg); }
.wrap { border-color: #a8d5f7; }
.bg a { text-decoration: none; background: #5c9ed3; color: #fff; padding: 10px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; }
.bg a:hover { background: #e274cb; }

html[dir="rtl"] h1, html[dir="rtl"] p {text-align: center;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1 class='blink'><?php echo _("Congratulations"); ?>, <?php echo $user->getFirstName(); ?>!</h1>
				<p><?php echo _("You've completed the Role of Water module."); ?></p>
				<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></p>		
				<p>
					<a
					<?php if ($user->getType() == 0): ?>
						href="../../teacher.php">
						<?php echo _("Go to dashboard"); ?>
					<?php else: ?>
						href="../../results.php?smid=<?php echo $_SESSION['smid']; ?>">
						<?php echo _("How did I do?"); ?>
					<?php endif; ?>
					</a>
				</p>
			</div>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>

	<div id="buttons">
		<a href="19.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
	</div>

	<script src="scripts/jpreloader.js"></script>


	
	<?php include("setlocale.php"); ?>
</body>
</html>