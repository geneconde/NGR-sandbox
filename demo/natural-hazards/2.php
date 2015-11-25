<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Natural Hazards"); ?></title>
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>

<style>
	html,body { height:100%; padding:0; margin:0; font-family: 'PlaytimeRegular'; min-height: 450px; }
	h1 {padding:10px;margin:0;font-weight: bold;font-size: 50px;color: #001D3A;text-transform: uppercase;position: relative; z-index:2; }
	h2 { font-weight: normal; font-size: 18px; margin-left:30px; margin-top: 40px; text-align: left; color:#5F623D; }
	a { text-decoration: none; }
	.wrap {
		margin: 0 auto 0; 
		max-width:900px; 
		height:100%; 
		border-left: 1px dashed gray; 
		border-right: 1px dashed gray;
		padding: 0 2px; 
		position: relative;
		overflow:hidden;
	}
	.bg { 
		background: url(images/2/bg.jpg) 0 0 no-repeat;
		background-size: 100% 100%;
		background: #eee;
		padding-top: 10px;
		width:100%; 
		height:100%; 
		position:relative; 
		z-index: 2;
	}
	.bg h2 {
		background-color: #d8bfd8;
		margin-top: 10px;
		margin-left: 0;
		padding-top: 10px;
		text-align: center;
		font-size: 30px;
		color: #090909;
	}
	
	.bg h3 {
		font-size: 26px;
	}
	.bg p {
		text-align: justify;
		font-size: 16px;
		color: #111;
		margin: auto;
	}
	
	#daily-news {
		padding: 0;
		margin: 0;
		text-align: center;
		width: 100%;
		height: 71px;
		font-size: 80px;
		line-height: 90px;
	}
	.container {
		
	}
	.container img {
		-webkit-border-radius: 12px; /* Android ≤ 1.6, iOS 1-3.2, Safari 3-4 */
		border-radius: 12px; /* Android 2.1+, Chrome, Firefox 4+, IE 9+, iOS 4+, Opera 10.50+, Safari 5+ */
		/* useful if you don't want a bg color from leaking outside the border: */
		background-clip: padding-box; /* Android 2.2+, Chrome, Firefox 4+, IE 9+, iOS 4+, Opera 10.50+, Safari 4+ */
	}
	.container img:first-child {
		margin-right: 20px;
	}
	.buttons { position: absolute; bottom: 2%; right: 2%; }
	
	.stripe {
		background: #cd5c5c;
		height: 10px;
		margin-bottom: 6px;
	}
	
	div.stripe:nth-of-type(2) {
		margin-bottom: 0;
	}
	
	.bg .content {
		overflow: hidden;
	}
	
	.bg .aside {
		float: left;
		width: 230px;
		padding-left: 20px;
		padding-top: 10px;
	}
	
	.bg .aside img {
		width: 210px;
		height: 140px;
	}
	
	.bg .aside .orange {
		background: #fca957;
		height: 10px;
		margin-bottom: 6px;
	}
	
	.bg .aside .red {
		background: #fc6257;
		height: 10px;
		margin-bottom: 6px;
	}
	
	.bg .aside p {
		margin-top: 5px;
		text-align: left;
	}
	
	.bg .main {
		float: right;
		width: 660px;
		padding-top: 10px;
	}
	
	.bg .main h3 {
		font-size: 22px;
	}
	
	.bg .main img {
		width: 600px;
		height: 280px;
		display: block;
		margin: 10px 0 15px;
	}
	
	.buttons { position: absolute; bottom: 2%; right: 2%; z-index: 555; }
	.buttons-back { position: absolute; bottom: 2%; left: 2%; z-index: 555; }
	
	div.aside section:nth-child(2) { margin-top: 10px; }
	
	html[dir="rtl"] .bg .aside p {text-align: right;}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		#daily-news { line-height: 30px; }
		.bg .main { width: 600px; }
		.bg .main img { width: 500px; height: 250px; }
		.bg .aside img { width: 190px; height: 125px; display: block; margin: 0 auto; }
	}	
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		h1#daily-news { padding-top: 0 !important; line-height: 105px; font-size: 75px; }
		.bg .main { width: 490px; }
		.bg .main img { width: auto; height: auto; }
	}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div class="stripe"></div>
			<div class="stripe"></div>
			<h1 id="daily-news"><?php echo _("Daily News");?></h1>
			<h2 class="title"><?php echo _("Thinking about... Natural Hazards"); ?></h2>
			<div class="content">
				<div class="aside">
					<section>
						<div class="orange"></div>
						<img src="images/2/landslide.gif">
						<p><?php echo _("California home teeters on edge of cliff after landslide"); ?></p>
					</section>
					<section>
						<div class="red"></div>
						<img src="images/2/tornado.gif">
						<p><?php echo _("Superstorm Hurricane Sandy Hits East Coast of the United States"); ?></p>
					</section>
				</div>
				<div class="main">
					<h3><?php echo _("North Dakota residents exhausted from multiple floods"); ?></h3>
					<img src="images/2/flood.gif">
					<p><?php echo _("North Dakota, California, New York - it seems like no matter where you live there are some kinds of natural hazards you have to know about and be careful of. This doesn’t mean that nature is bad. Nature is just nature. But floods, and hurricanes and landslides are all a natural part of well nature. We have to understand where, how, and why these things happen; and how we can stay safe when they do. Do any natural hazards occur frequently near where you live?"); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>	
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName()."?"; ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>