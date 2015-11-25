<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<?php 	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(0, $_SESSION['smid']);
		$uf->finishModule($_SESSION['smid']);
	}
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background: url('images/22/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; text-align: center; }
p { font-size: 24px; margin-top: 30px; text-align: center; }
h1 { font-size: 50px; color: #6a9317 !important; margin-top: 0; padding-top: 30px; text-align: center; margin-bottom: 100px; }
h1.blink { text-transform: none; }
.wrap { border-left: 1px dashed #7de2fc; border-right: 1px dashed #7de2fc; }
.bg { background-image: url(images/22/bg.jpg); }
.bg a { text-decoration: none; background: #6a9317; color: #fff; padding: 10px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; }
.bg a:hover { background: #86aa1e; }

html[dir="rtl"] h1, html[dir="rtl"] p { text-align: center; }
	@media only screen and (max-width: 1250px){
		h1 {
		    padding-top: 33px;
		}
	}
	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1 class="blink"><?php echo _("Congratulations"); ?>, <?php echo($user->getFirstName()."!"); ?></h1>
				<p><?php echo _("You've completed the Ecosystems Interactions module."); ?></p>
				<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></p>		
				<br>
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
	<div id="buttons">
		<a href="21.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
