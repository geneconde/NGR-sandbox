<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("End of Review"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>

.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #C9A64D; border-right: 1px dashed #C9A64D; padding: 0 2px; }
.bg { background-image: url('images/20/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin: 0; font-size: 50px; padding: 10px; font-weight:bold; color: #1143C2; text-align: center; padding-top: 5%;}
h2 { margin: 0; padding: 50px; font-weight: normal; font-size: 24px; text-align: center; color: #000; }

.btn { text-align: center; }
button {
   border-top: 1px solid #ded300;
   background: #878c00;
   background: -webkit-gradient(linear, left top, left bottom, from(#f2ee00), to(#878c00));
   background: -webkit-linear-gradient(top, #f2ee00, #878c00);
   background: -moz-linear-gradient(top, #f2ee00, #878c00);
   background: -ms-linear-gradient(top, #f2ee00, #878c00);
   background: -o-linear-gradient(top, #f2ee00, #878c00);
   padding: 9.5px 19px;
   border: 0;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
   color: #000000;
   font-size: 24px;
   text-decoration: none;
   vertical-align: middle;
   font-family: 'PlaytimeRegular';
   cursor: pointer;
}
button:hover { border-top-color: #919600; background: #919600; color: #ffffff; }
button:active { border-top-color: #ffffff; background: #ffffff; }

html[dir="rtl"] h2, html[dir="rtl"] h1 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1 class="blink"><?php echo _("Congratulations"); ?>, <?php echo($user->getFirstName()."!"); ?></h1>					
			<h2><?php echo _("You've completed this Natural Hazards module."); ?></h2>
			<h2><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></h2>

			<form method="post" 
				<?php if ($user->getType() == 0): ?>
					action="../../teacher.php"
					><div class="btn"><button><?php echo _("Go to dashboard"); ?></button></div>
				<?php else: ?>
					action="../../student.php; ?>">
					<div class="btn"><button><?php echo _("Go to dashboard"); ?></button></div>
				<?php endif; ?>
			</form>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>
	<div id="buttons">
		<a href="19.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>
	<?php include("setlocale.php"); ?>
</body>
</html>