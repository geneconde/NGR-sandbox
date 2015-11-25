<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php'; 
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("End of Review");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script>

$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	$('.blink').blink({ speed: 500, blinks: 1000 });
	
}) ;
</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/20/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
h3 { margin:0; font-size: 50px; padding: 10px; font-weight:bold; text-align: center; padding-top: 5%;}
p { margin:0; padding: 50px 50px; font-weight:normal; font-size:24px; text-align: center;}

img.next-toggle {  display:none; }

.key{color: rgb(42, 111, 165);}

@-webkit-keyframes infinite-spinning {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}

@-moz-keyframes infinite-spinning {
    from { -moz-transform: rotate(0deg); }
    to { -moz-transform: rotate(360deg); }
}
@-webkit-keyframes infinite-spinning {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
}
#sun {
	height: 33%;
	position: absolute;
	margin-left: 78%;
	margin-top: -7%;
	width: 35%;
	background:url("images/misc/sun.png") no-repeat center;
     -webkit-animation: infinite-spinning 5s infinite;
     -moz-animation: infinite-spinning 5s infinite;
     -o-animation: infinite-spinning 5s infinite;
}
#finish_btn ul {list-style:none; width:100%; padding:0; margin: 0 auto; }
#finish_btn ul li {background-color:#01A0E1; font-size:24px; text-align: center; line-height:40px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#finish_btn ul li a:hover {background-color:#98D3F3;cursor:pointer; text-decoration:none; color:black; }
#finish_btn ul li a {text-decoration:none;line-height: 50px; display:block; width:100%; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; color:white;}
#finish_btn {width:30%;}
#finish_btn {margin:0 auto;}
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="sun"></div>										
			<section>					
				<h3 class="blink key"><?php echo _("Congratulations, ");?> <?php echo $user->getFirstName(); ?>!</h3>			
				<p><?php echo _("You've completed the Life Cycle of Plants module.");?></p>
				<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below.");?></p>
				
				<div id="finish_btn">
					<ul>
						<li>
							<a
								<?php if ($user->getType() == 0): ?>
									href="../../teacher.php">
								<?php else: ?>
									href="../../student.php">
								<?php endif; ?>
								<span id="link"><?php echo _("Go to dashboard"); ?></span>
							</a>						
						</li>				
					</ul>
				</div>
			</section>
		</div>
	</div>
	<div id="buttons">
		<a href="19.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!");?></strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
