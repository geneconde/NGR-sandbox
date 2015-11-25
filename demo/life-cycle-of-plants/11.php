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
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #366DFC; border-right: 1px dashed #366DFC; padding: 0 2px; }
.bg { background-image: url('images/11/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; overflow:hidden; }
h2, p {font-size:24px; text-align:left;} 
.clear { clear:both;}

.bold { font-weight: bold; }
.float-left { float: left; }
.key{color: rgb(42, 111, 165);}

.container{width:76%; text-align:center;  padding-left:16px;}

#title-container h1{
font-size:33px;
color: #41838E;
}
.allignment{margin-top:21px; padding-left:16px; font-size:33px;}
.pink{color: #ef6d6d;}
img{height:80%; margin-top:-100px;}

html[dir="rtl"] h1 { padding-right: 20px; }
html[dir="rtl"] .container { width: 95% !important; padding-right: 20px; }
html[dir="rtl"] .container p { text-align: right; }

</style>
</head>
<body>
	
	<div class="wrap" >
		<div class="bg">		
				<h1 class="allignment pink"><?php echo _("Summarizing big ideas... about the life cycle of plants");?></h1>

			<div class="container">
				<p><?php echo _("The <span class='key'>life cycle</span> of a plant goes through several stages. The plant starts off as a <span class='key'>seed</span>. When the seed sprouts into a <span class='key'>seedling</span> through <span class='key'>germination</span>, it grows into a fully grown plant that is capable of producing seeds. The next stage of the life cycle is to produce seeds. Flowering plants have special parts to make <span class='key'>pollen</span>, attract <span class='key'>pollinators</span> and to grow the seeds. The newly created seed, given the right conditions, will germinate and turn into a plant, starting the plant life cycle over again.");?>
				</p>						
			</div>			
		</div>
	</div>
	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
		<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together...");?></strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
