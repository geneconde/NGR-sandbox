<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Doing Science");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/jpreloader.js"></script>
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
.bg { background-image: url('images/20/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h3 { margin:0; font-size: 50px; padding: 21px; font-weight:bold; color: #3172AD; text-align: center; padding-top: 5%;}
.wrap {border-left: 1px dashed #C1D5D4; border-right: 1px dashed #C1D5D4;}
p { margin:0; padding: 50px 50px; font-weight:normal; font-size:24px; text-align: center;}

#start ul {list-style:none; width:100%; padding:0; margin: 0 auto; }
#start ul li {background-color:#2C316B; font-size:30px; text-align: center; line-height:40px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#start ul li a:hover {background-color:#8FCCC4;cursor:pointer; text-decoration:none; color:#2C316B; }
#start ul li a {text-decoration:none;line-height: 50px; display:block; width:100%; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; color:white;}
#start {width:25%;}

html[dir="rtl"] p { text-align: center; padding-right: 50px;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h3 class="blink"><?php echo _("Congratulations").", ". $user->getFirstName(); ?> !</h3>					
			<p><?php echo _("You've completed the Doing Science module.");?><br/><br/><br/>
			  <?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below.");?></p>
			
			<div id="start">						
				<ul>
					<li>
						<a id="dashboard"
							<?php if ($user->getType() == 0): ?>
								href="../../teacher.php">
								<span id="link"><?php echo _("Go to dashboard"); ?></span>
							<?php else: ?>
								href="../../results.php?smid=<?php echo $_SESSION['smid']; ?>">
								<?php echo _("How did I do?"); ?>
							<?php endif; ?>
						</a>
				</li>
				</ul>							
			</div>			
		</div>
	</div>
	<div id="buttons">
		<a href="19.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!");?></strong></section></section>	

<script>
	$(document).ready(function() {
		$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
		$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });	
	});
	</script>
<?php require("setlocale.php"); ?>
</body>
</html>