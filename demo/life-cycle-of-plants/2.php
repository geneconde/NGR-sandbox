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
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link href="styles/fallingleaves.css" rel="stylesheet" type="text/css">
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
html { background-color: #fff;}
body { display: none; }
html,body {height:100%;padding:0;margin:0; font-family: 'PlaytimeRegular';  min-height: 450px; text-align: left;  }
p {  font-size: 24px; font-family: 'PlaytimeRegular'; color:black; margin: 0; line-height:24px;}
h1 {font-family: 'PlaytimeRegular'; font-size: 30px; color: green; relative; z-index:2;margin-bottom: 0px; }
h2 { font-weight: normal; font-size: 25px; margin-top: 0px;}

#p1 { font-size: 30px;color: #9bbb59; text-align: center; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #7F6257; border-right: 1px dashed #7F6257; padding: 0 2px;}
background { opacity: 0.5 }
.bg {   background: url("images/2/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}


.black {color: #000000 !important; }
.white {color: #FFFFFF !important; }

.bl { position: absolute;left:5%; bottom:50%;}
.br { position: absolute;right:12%; bottom:51%;}
.bm { position: absolute; bottom: 60%; left:48%;}
.square { font-size:14px;color: #C5E8FA;text-align: center; padding: 10px; position: absolute; top:50%;right:2%;width:200px; z-index:10;background: -moz-linear-gradient(top,  rgba(0,93,172,0.78) 0%, rgba(0,114,191,0.51) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,93,172,0.78)), color-stop(100%,rgba(0,114,191,0.51))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top,  rgba(0,93,172,0.78) 0%,rgba(0,114,191,0.51) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top,  rgba(0,93,172,0.78) 0%,rgba(0,114,191,0.51) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top,  rgba(0,93,172,0.78) 0%,rgba(0,114,191,0.51) 100%); /* IE10+ */ background: linear-gradient(to bottom,  rgba(0,93,172,0.78) 0%,rgba(0,114,191,0.51) 100%); /* W3C */ filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c7005dac', endColorstr='#820072bf',GradientType=0 ); /* IE6-9 */ }
.square img { margin-top: 10px;}

/* .buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; } */
.hidden { display: none; }
#rb-grid { height: 79px; }

.alignment{text-align:center;}
.p-content{
padding: 20px 30px 0px 20px;
width:95%;
min-height:200px;
margin:0 auto;
margin-top:20px;
background-color: rgba(255,255,255,0.6);
-webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; 
}
.p-content p{color: #black; padding-bottom: 20px;}
#sidebar{
 float:left;
 background: url("images/2/container.png"); 
 background-repeat: no-repeat;
 background-size: 100% 100%;
 width:33%;
 min-height:500px;
 margin-left:15px;
 text-align:center;
 margin-top:70px;
}

#inner_container h1{color:#511d0b;}
#inner_container {width:84%; margin:0 auto;}

html[dir="rtl"] h1 { padding-top: 20px; }

<?php if($language == "es_ES") { ?>
	p { font-size: 22px; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	p { font-size: 20px; }
}

</style>
</head>
<body>

	<div class="wrap">
		<div class="bg">
			<div class="loader">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
				<div id="sidebar">
					<div id="inner_container">
						<h1><?php echo _("Thinking about... the life cycle of plants");?></h1>					
						<p><?php echo _("Plants are amazing! In California, there are giant redwood trees. These trees can grow over 300 feet tall. But interestingly, the seeds from these humongous trees are quite small. Do you ever wonder how a tree that large can develop from such a small seed? Let’s review some ideas about the life plants have!");?>
						</p>
					</div>
				</div>
				<div class="clear"></div>	
		</div>
	</div>
	<!-- <div class="buttons-back" ><a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back_more.png" title="<?php echo _("Back");?>"></a></div>
	<div class="buttons"><a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next");?>"></a></div> -->
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>	
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready, ");?> <?php echo $user->getFirstName()."?";?></strong></section></section>		
	<script src="scripts/jqfloat.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
