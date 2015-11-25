<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.min.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<script>
$(document).ready(function() {
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
.bg { background-image: url('images/23/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h3 { margin:0; font-size: 50px; padding: 10px; font-weight:bold; color: #e05b5c; text-align: center; padding-top: 5%;}
p { margin:0; padding: 50px 50px; font-weight:normal; text-align: center;}
.wrap {border-left: 1px dashed #E5C75F; border-right: 1px dashed #E5C75F;}

#start ul {list-style:none; width:100%; padding:0; margin: 0 auto; }
#start ul li {background-color:#CF9E03; font-size:30px; text-align: center; line-height:40px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#start ul li a:hover {background-color:#B48404;cursor:pointer; text-decoration:none; color:white; }
#start ul li a {text-decoration:none;line-height: 50px; display:block; width:100%; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; color:black;}
#start {width:25%;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h3 class="blink"><?php echo _("Congratulations, "); ?><?php echo( ucfirst($name)."!"); ?></h3>					
			<p><?php echo _("You've completed the Staying Healthy module."); ?></p>
			<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></span></p>
			<div id="start">						
				<ul>
					<li><a <?php if ($user->getType() == 0): ?>
						href="../../teacher.php">
					<?php else: ?>
						href="../../student.php">
					<?php endif; ?>
					<span id="link"><?php echo _("Go to dashboard"); ?></span>
					</a></li>
				</ul>							
			</div>			
		</div>
	</div>

	<div id="buttons">
		<a href="23.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
