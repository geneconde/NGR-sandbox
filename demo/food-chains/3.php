<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'food-chains';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Food Chains"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/rightclick.js"></script>
<script>

$(document).ready(function() {
	
	$('.blink').blink({ speed: 500, blinks: 1000 });
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	$('.fox-toggle').click(function() { $(this).toggleClass("toggled"); $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/3/fox-b.png' ? 'images/3/fox-a.png' : 'images/3/fox-b.png'; }); return false; });
	$('.rabbit-toggle').click(function() { $(this).toggleClass("toggled"); $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/3/rabbit-b.png' ? 'images/3/rabbit-a.png' : 'images/3/rabbit-b.png'; }); return false; });
	$('.grass-toggle').click(function() { $(this).toggleClass("toggled"); $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/3/grass-b.png' ? 'images/3/grass-a.png' : 'images/3/grass-b.png'; }); return false; });
	$('.sun-toggle').click(function() { $(this).toggleClass("toggled"); $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/3/sun-b.png' ? 'images/3/sun-a.png' : 'images/3/sun-b.png'; }); return false; });
	
	/* TODO */
	$(".last-toggle").on('click', function() {
		$(this).toggleClass("last-toggled");
		if ($(this).attr('id') == 'sun') {
			$('a#fox img').attr('src', 'images/3/fox-b.png');
			$('a#grass img').attr('src', 'images/3/grass-b.png');
			$('a#rabbit img').attr('src', 'images/3/rabbit-b.png');
			$('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/3/sun-b.png' ? 'images/3/sun-a.png' : 'images/3/sun-b.png'; }); return false;
		} else if ($(this).attr('id') == 'fox'){
			$('a#sun img').attr('src', 'images/3/sun-b.png');
			$('a#grass img').attr('src', 'images/3/grass-b.png');
			$('a#rabbit img').attr('src', 'images/3/rabbit-b.png');
			$('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/3/fox-b.png' ? 'images/3/fox-a.png' : 'images/3/fox-b.png'; }); return false;
		} else if ($(this).attr('id') == 'grass'){
			$('a#sun img').attr('src', 'images/3/sun-b.png');
			$('a#fox img').attr('src', 'images/3/fox-b.png');
			$('a#rabbit img').attr('src', 'images/3/rabbit-b.png');
			$('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/3/grass-b.png' ? 'images/3/grass-a.png' : 'images/3/grass-b.png'; }); return false;
		} else if ($(this).attr('id') == 'rabbit'){
			$('a#sun img').attr('src', 'images/3/sun-b.png');
			$('a#fox img').attr('src', 'images/3/fox-b.png');
			$('a#grass img').attr('src', 'images/3/grass-b.png');
			$('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/3/rabbit-b.png' ? 'images/3/rabbit-a.png' : 'images/3/rabbit-b.png'; }); return false;
		} else {
			return false;
		};
	});
	
	/*
	$('img.check-toggle').hover(function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	*/
	
	checkAnswer();
	
	$('img.check-toggle').click(function(){
		checkAns = $('#grid .col ul#first-col li a.toggled').length;
		checkAns2 = $('#grid .col ul#second-col li a.toggled').length;
		checkAns3 = $('#grid .col ul#third-col li a.toggled').length;
		checkAns4 = $('#grid .col ul#fourth-col li a.toggled').length;
		checkAns5 = $('#grid .col ul li a.last-toggled').length;

		if (checkAns < 1 || checkAns2 < 1 || checkAns3 < 1 || checkAns4 < 1 || checkAns5 < 1) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('body').css('height','100%');
			$('h1').fadeOut(); 
			$('img.check-toggle').fadeOut( function (){
				$('img.next-toggle').fadeIn(); 	
			}); 
			$('img.back-toggle').fadeIn(); 
			$('#base').fadeOut(function(){ $('#answer').fadeIn(); $('.bg').css('background-image','url(images/3/bg2.jpg)');}); 
			addHash('#answer');
		}
	});
	
	
	$('img.back-toggle').click(function(){
		if ( $('#answer').is(':visible') ){
			$('body').css('height','auto');
			$('#answer').fadeOut();
			$('.bg').css('background-image','url(images/3/bg.png)');
			$('h1').fadeIn();
			$('#base').fadeIn();
			$('img.next-toggle').fadeOut( function () {
				$('img.check-toggle').fadeIn();	
			}); 
			removeHash();
		} else {
			document.location.href= "2.php";
		}
	});
	
	
	//back action to go to previous section of previous screen
	var curURL = window.location.toString();
	var oldURL = document.referrer;

	var hash = "";
	if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
		$('h1').fadeOut(); $('img.check-toggle').fadeOut(); $('img.back-toggle').fadeIn(); $('img.next-toggle').fadeIn(); $('#base').fadeOut(function(){ $('#answer').fadeIn(); $('.bg').css('background-image','url(images/3/bg2.jpg)');});
		$('body').css('height','100%');
		addHash('#answer');
	}
});


$(window).resize(function() {
	checkAnswer();
});

function checkAnswer() {
	if ($('#answer').is(":visible")) {
		$('.wrap').css({'height': '100%' });
	}
}

</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }

html,body { padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black; overflow: hidden; }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #009FE8; border-right: 1px dashed #009FE8; padding: 0 2px;}
.bg { overflow: hidden; background-color:#D7EDFA;  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: darkslateblue;}
h2 { margin:0; padding: 0 10px; font-weight:normal; text-align:center; }
h2.b { width: 40%; text-align:center; float:left;}
#choices { text-align: center; margin-top:10px;}
#choices ul, .col ul { width: 100%; margin:0;padding:0;}
#choices ul li { float:left; display:inline; list-style-type: none; width:25%;}
#choices ul li img,.col ul li img { max-width:100%; height:auto; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; }
.clear { clear:both;}

.buttons-back { position: absolute; bottom: 2%; left: 2%; }
.buttons { position: absolute; bottom:2%;right:2%;}

#grid { overflow: hidden; margin: 10px; text-align:center;}
#grid .col:nth-of-type(2n+1) { margin-left: 0; clear: left; }
.col { background: #FFF2D2; float: left; margin-left: 3.2%; margin-bottom: 20px; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; padding:10px; width: 45%;}
.col2 { background: none; margin-bottom: 0px; padding:0px; width:50%; clear:none !important;}
.col ul li { float:left;display:inline;list-style-type:none; width:20%;}


#answer { display: none; width: 95%; margin: 0 auto; }
#answer div.answer { padding-top: 3%; font-size: 24px; text-align: center; width: 100%; color: white; }

img.next-toggle { display: none; }
.arrow { margin-top: 15px; margin-left: 5px; }

.orange { color: #C2721A; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.darkbrown { color: #FF6000; }
.bold { font-weight: bold; }

<?php if($language == "zh_CN") { ?>
	h2 { font-size:19px !important; }
<?php } ?>

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
	
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
	h2.b { width: 100%;  padding: 0px; }
	.col { width: 93% !important; margin-left: 0 !important; clear: none !important; margin-bottom: 10px; }
	.col2 { margin-top:20px; }
	#answer div.answer { font-size: 25px; }
	#video { width: 100%;}
}

@media screen and (max-width:577px) {
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }
	#answer div.answer { font-size: 22px; }
}

@media screen and (max-width:480px) {
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
	h1 { font-size: 20px; }	
	.col2 { width: 100% !important; }
	.col2 ul li {width:25% !important; }
	.check-toggle { position: relative;}
	#answer div.answer { font-size: 18px;}
}

@media screen and (max-width:400px) {
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
	h1 { width: 232px; }
	#answer div.answer { font-size: 14px !important; }
}

@media screen and (max-height:627px) {
}

@media screen and (orientation:portrait) { 
	h1 { font-size: 20px;text-align: center; }	
	.wrap{height:auto;}	
	.col2 { width: 100% !important; } 
	.col2 ul li {width:25% !important; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
	#answer div.answer { font-size: 18px;}
	#answer div { height: 100%; }
	#choices {margin-top:25px !important;}
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg"  >
			<h1><?php echo _("Checking what you already know... about food chains"); ?></h1>
			<div id="base" >
				<div id="choices">
					<ul>
						<li><img src="images/3/grassbg.jpg"><br/><span class="green bold"><?php echo _("GRASS"); ?></span></li>
						<li><img src="images/3/sunbg.jpg"><br/><span class="orange bold"><?php echo _("SUN"); ?></span></li>
						<li><img src="images/3/foxbg.jpg"><br/><span class="purple bold"><?php echo _("FOX"); ?></span></li>
						<li><img src="images/3/rabbitbg.jpg"><br/><span class="brown bold"><?php echo _("RABBIT"); ?></span></li>
					</ul>
					<div class="clear"></div>
				</div>
				<h2><?php echo _("Look at the pictures and words above. In the boxes below, tap <span class='red bold blink'>ALL</span> the things on the left that depend <span class='orange bold'>directly or indirectly</span> on the thing on the right."); ?></h2>
				<!--Look at the pictures and words above. In the boxes below, tap <span class="red bold blink">ALL</span> the things on the left that depend <span class="orange bold">directly or indirectly</span> on the thing on the right.-->
				<div id="grid">
					<article class="col">
						<ul id="first-col">
							<li><a href="#" class="rabbit-toggle"><img src="images/3/rabbit-b.png"></a></li>
							<li><a href="#" class="grass-toggle"><img src="images/3/grass-b.png"></a></li>
							<li><a href="#" class="fox-toggle"><img src="images/3/fox-b.png"></a></li>
							<li><img class="arrow" src="images/3/arrow.gif"></li>
							<li><img src="images/3/sun-a.png"></li>
						</ul>
					</article>
					<article class="col">
						<ul id="second-col">
							<li><a href="#" class="grass-toggle"><img src="images/3/grass-b.png"></a></li>
							<li><a href="#" class="fox-toggle"><img src="images/3/fox-b.png"></a></li>
							<li><a href="#" class="sun-toggle"><img src="images/3/sun-b.png"></a></li>
							<li><img class="arrow" src="images/3/arrow.gif"></li>
							<li><img src="images/3/rabbit-a.png"></li>
						</ul>
					</article>
					<article class="col">
						<ul id="third-col">
							<li><a href="#" class="fox-toggle"><img src="images/3/fox-b.png"></a></li>
							<li><a href="#" class="sun-toggle"><img src="images/3/sun-b.png"></a></li>
							<li><a href="#" class="rabbit-toggle"><img src="images/3/rabbit-b.png"></a></li>
							<li><img class="arrow" src="images/3/arrow.gif"></li>
							<li><img src="images/3/grass-a.png"></li>
						</ul>
					</article>
					<article class="col">
						<ul id="fourth-col">
							<li><a href="#" class="sun-toggle"><img src="images/3/sun-b.png"></a></li>
							<li><a href="#" class="rabbit-toggle"><img src="images/3/rabbit-b.png"></a></li>
							<li><a href="#" class="grass-toggle"><img src="images/3/grass-b.png"></a></li>
							<li><img class="arrow" src="images/3/arrow.gif"></li>
							<li><img src="images/3/fox-a.png"></li>
						</ul>
					</article>
					<h2 class="b"><?php echo _("Which could <span class='red bold'>NOT</span> be removed without affecting <span class='green bold'>ALL</span> of the remaining things?"); ?></h2>
					<article class="col col2">
						<ul>
							<li><a href="#" class="last-toggle" id="sun"><img src="images/3/sun-b.png"></a></li>
							<li><a href="#" class="last-toggle" id="fox"><img src="images/3/fox-b.png"></a></li>
							<li><a href="#" class="last-toggle" id="grass"><img src="images/3/grass-b.png"></a></li>
							<li><a href="#" class="last-toggle" id="rabbit"><img src="images/3/rabbit-b.png"></a></li>
						</ul>
					</article>
				</div>
			</div>
			<!-- start of answer overlay -->
			<div id="answer">
				<div class="answer">
					<p><?php echo _("All living things are connected to other living things in some way. Rabbits couldn't live without grass and other plants and foxes couldn't live without rabbits and other small animals."); ?> <?php echo _("But all living things on Earth depend directly or indirectly on the <span class='darkbrown bold'>SUN</span>.");?> <?php echo _("Let's find out more about how living things are connected in this module."); ?></p>
				</div>
			</div>
			<!-- end of answer overlay -->
		</div>
	</div>
	<div class="buttons">
		<a href="#answer" class="wiggle"><img class="check-toggle" src="images/buttons/checkanswer.png" title="<?php echo _("Check answer"); ?>"></a>
		<a href="4.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>
	<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>	
	<section id="preloader"><section class="selected"><strong><?php echo _("Next part coming up!"); ?></strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
