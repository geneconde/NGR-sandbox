<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Life Cycle of Plants");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script>
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

});
</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #3FB147; border-right: 1px dashed #3FB147; padding: 0 2px; }
.bg { background: url("images/13/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; overflow:hidden;}

.clear { clear:both;}
.key{color: rgb(42, 111, 165);}

#screen1{ max-width: 100%; margin: 0 auto; margin-top:60px;}
.container{width:95%; text-align:center;}
.container p{font-size:24px;color: black;}
.alignment{margin-top:21px; padding-left:23px; font-size:33px; color:#c94271;}

#question { height: 320px; width: 470px; margin:0 auto; display: block; }

#question img{
  display:none;
  position:absolute;
}
#question img.active{
  display:block;
  margin:0 auto;
}

html[dir="rtl"] h1 { padding-right: 20px; }

<?php if($language == "es_ES") { ?>
	h1 { font-size: 30px !important; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="sun"></div>			
				<h1 class="alignment"><?php echo _("Checking what you now know... about the life cycle of plants");?></h1>		
			<div id="screen1">		
				<div class="container">
					<p><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know.");?><br/><br/>					
					<?php echo _("Click the NEXT button when you are ready.");?></p>
				</div>
				<div id="question">
					<img src="images/13/0.png" class="active"/>
					<img src="images/13/1.png"/>
					<img src="images/13/2.png" />
					<img src="images/13/3.png" />
				</div>				
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>			
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's check what you now know");?></strong></section></section>
<script>
$(document).ready(function() {
	setInterval('swapImages()', 1000);
});

function swapImages(){
	var active = $('#question .active');
	var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');  
	active.removeClass('active');
	next.addClass('active');
}
</script>
<?php include("setlocale.php"); ?>
</body>
</html>
