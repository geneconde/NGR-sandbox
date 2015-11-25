<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(0, $_SESSION['smid']);
		$uf->finishModule($_SESSION['smid']);
	}
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
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
.bg { background-image: url('images/22/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #B7CC6D; border-right: 1px dashed #B7CC6D; }
h3 { margin:0; font-size: 50px; padding: 10px; font-weight:bold; color: yellow; text-align: center; padding-top: 5%;}
p { margin:0; padding: 50px 50px; font-weight:normal; font-size:24px; text-align: center;}
#check { margin: 0 auto; height: 150px; width: 156px; }
#check p { padding: 0; margin-top: 0; font-family: 'PlaytimeRegular'; color: #5E492E; font-size: 30px; color: #FFFA7B; }
.imgClass { 
    background-image: url(images/1/start.png);
	background-color: transparent;
    height: 100%;
	width: 100%;
    border: 0px;
	vertical-align: bottom;
	cursor: pointer;
	vertical-align: middle;
	background-size: 100%;
}
html[dir="rtl"] p { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h3 class="blink"><?php echo _("Congratulations"); ?>, <?php echo _(ucfirst($name)."!"); ?></h3>					
			<p><?php echo _("You've completed the Built to Survive module."); ?></p>
			<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></span></p>
			<form method="post" action="#">
				<div id="check">
						<?php if($user->getType() == 0) { ?>
							<p><?php echo _('Go to dashboard'); ?></p>
						<?php } else if($user->getType() == 2) { ?>
							<p><?php echo _('How did I do?'); ?></p>
						<?php } ?>
					<input id="namebutton" class="imgClass" type="button">
				</div>
			</form>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="21.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>
	<script>
		$(document).ready(function() {
			$('#check').click(function() {
				<?php if($user->getType() == 0) { ?>
					document.location.href = "../../teacher.php";
				<?php } else if($user->getType() == 2) { ?>
					document.location.href = "../../results.php?smid=<?php echo $_SESSION['smid']; ?>";
				<?php } ?>
			});
		});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>