<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'food-chains';
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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
$(document).ready(function() {
	//$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	$('.blink').blink({ speed: 500, blinks: 1000 });
	$('#ll-button2').hide();
	$('#ll-button').click(function(){
		$('#ll-button').fadeOut(function(){ 
			$('#ll-button2').show();
		});
	});
});
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #C9A64D; border-right: 1px dashed #C9A64D; padding: 0 2px; }
.bg { background-image: url('images/20/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 50px; padding: 10px; font-weight:bold; color: palevioletred; text-align: center; padding-top: 5%;}
h2 { margin:0; padding: 50px 50px; font-weight:normal; font-size:23px; text-align: center;}

.buttons-back { position: absolute; bottom: 2%; left: 2%; }

.clear { clear:both;}
#dashboard { text-decoration:none; width: 400px; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; border: 2px dashed orange; padding: 10px; height: 30px; background-color: #f2c392; color: maroon; font-size: 20px; }
#dashboard:hover { background-color: #de8325; }

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }

}

@media screen and (max-width:480px) {
	h1 { font-size: 20px; }		
	
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }

}

@media screen and (max-width:360px) {
	h1 { width: 250px; }

}

@media screen and (max-height:627px) {
	.wrap { height:auto; }	
}

@media screen and (orientation:portrait) {
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1 class="blink"><?php echo _("Congratulations"); ?><br/><?php echo $user->getFirstName(); ?>!</h1>					
			<h2><?php echo _("You've completed this Food Chains module."); ?></h2>
			<h2><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz' questions for this module by clicking the button below."); ?></span></h2>
			<h2>
				<a id="dashboard"
					<?php if ($user->getType() == 0): ?>
						href="../../teacher.php">
						<span id="link"><?php echo _("Go to dashboard"); ?></span>
					<?php else: ?>
						href="../../results.php?smid=<?php echo $_SESSION['smid']; ?>">
						<?php echo _("How did I do?"); ?>
					<?php endif; ?>
				</a>
			</h2>
			</div>
		</div>
	</div>
	<div class="buttons-back"><a href="19.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>	
	<?php include("setlocale.php"); ?>
</body>
</html>