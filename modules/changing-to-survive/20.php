<?php
	require_once '../../session.php'; 
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(0, $_SESSION['smid']);
		$uf->finishModule($_SESSION['smid']);
	}
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
body { text-align: center; }
.wrap { border-left: 1px dashed #95f4ff; border-right: 1px dashed #95f4ff; }
.bg { background: url(images/20/bg.png); background-size: 100% 100%; width:100%; height:100%; position:relative; }
ul.lang-menu { text-align: left; }
h1 { color: #0A5F5F; font-size: 50px; text-align: center; }
p { text-align: center; }
a { text-decoration: none; }
#results, #link { 
	width: 216px;
	margin: 60px auto 0;
	text-align: center;
	color: white;
	font-size: 28px;
	padding: 6px;
	display: block;
	border: 2px solid #fff;

	-webkit-border-radius: 6px;
	border-radius: 6px;
	background-clip: padding-box;

	background: #0A5F5F;
}
#results:hover, #link:hover { color: #0A5F5F; background: white; border: 2px solid #0A5F5F; }
p { margin-top: 40px; }

html[dir="rtl"] h1, html[dir="rtl"] p {text-align: center;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1 class="blink"><?php echo _("Congratulations, ");echo $user->getFirstName() . '!'; ?></h1>		
				<p><?php echo _("You've completed the Changing to Survive module."); ?></p>			
				<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></p>
				<p>
				<a
					<?php if ($user->getType() == 0): ?>
						href="../../teacher.php"><span id="link"><?php echo _("Go to dashboard"); ?></span>
					<?php else: ?>
						href="../../results.php?smid=<?php echo $_SESSION['smid']; ?>"><span id="link"><?php echo _("How did I do?"); ?></span>
					<?php endif; ?>
					
				</a>
				</p>
			</div>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>
	
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="19.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
