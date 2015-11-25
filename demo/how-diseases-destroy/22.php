<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
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
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
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
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/20/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h3 { margin:0; font-size: 50px; padding: 10px; font-weight:bold; color: #956751; text-align: center; padding-top: 5%;}
p { margin:0; padding: 50px 50px; font-weight:normal; text-align: center;}
.wrap {border-left: 1px dashed #E5C75F; border-right: 1px dashed #E5C75F;}
button {
	background: #f6cc2d;
	font-family: 'PlaytimeRegular';
	-webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;
	width:100px;
	height:40px;
	margin:0 auto;
	font-size:20px;
	color: black;
}

button:hover {
    background: #956751;
	color: #FFFFFF;
	cursor:pointer;
}
#start ul {list-style:none; width:100%; padding:0; margin: 0 auto; }
#start ul li {background-color:#C57854; font-size:30px; text-align: center; line-height:40px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#start ul li a:hover {background-color:#956751;cursor:pointer; text-decoration:none; color:white; }
#start ul li a {text-decoration:none;line-height: 50px; display:block; width:100%; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; color:black;}
#start {width:25%;}

<?php if ($language == 'es_ES'): ?>
	#start { width: 30%; }
<?php endif; ?>
html[dir="rtl"] p { text-align: center; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#start { width: 30%; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h3 class="blink"><?php echo _("Congratulations, "); ?><?php echo $user->getFirstName() . "!" ?></h3>					
			<p><?php echo _("You've completed the How Diseases Destroy module."); ?></p>
			<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></span></p>
			<div id="start">						
				<ul>
					<li>
						<a
							<?php if ($user->getType() == 0): ?>
								href="../../teacher.php">
								<span id="link"><?php echo _("Go to dashboard"); ?></span>
							<?php else: ?>
								href="../../student.php; ?>">
								<?php echo _("Go to dashboard"); ?>
							<?php endif; ?>
						</a>
					</li>
				</ul>							
			</div>			
		</div>
	</div>
	<div id="buttons">
		<a href="21.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>

</body>
<?php require("setlocale.php"); ?>
</html>
