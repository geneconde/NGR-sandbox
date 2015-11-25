<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!-- Template for pages 3, 5, 7 and 9 and possibly quiz questions -->
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/3/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #ACCCFF; border-right: 1px dashed #ACCCFF; }
ul.lang-menu li { padding:0px; }
#answer { display: none; }
#answer p { padding-top: 6%; }
img.back-toggle-answer, img.next-toggle { display: none; }
.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #3A59A0; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -12px; }
.ac-custom label::before { border-color: #3A59A0; }
.ac-custom svg path { stroke: #3A59A0; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
ol { margin: 0; padding: 0; list-style: none; }
li { margin: 0; padding: 3px 0; }
li span { text-align: left; font-size: 24px !important; }
#buttons .next { display: none; }
.ac-custom li { padding: 8px 0; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 31px; }
	li span { font-size: 22px !important; }
	.ac-custom ul, .ac-custom ol { max-width: 900px; }
<?php } ?> 

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] .ac-custom svg { right: 3px; }
html[dir="rtl"] {}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div class="screens" id="question">
				<h1><?php echo _("Checking what you know... about reproduction"); ?></h1>
				<h2><?php echo _("Click on <span class='red blink'>all</span> the <span class='blink'>correct</span> statements below."); ?></h2>
				<section>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li><input id="a1" name="q1a" type="checkbox"><label for="a1"><span><?php echo _("All living organisms reproduce."); ?></span></label></li>
							<li><input id="b1" name="q1b" type="checkbox"><label for="b1"><span><?php echo _("All non-living organisms reproduce."); ?></span></label></li>
							<li><input id="c1" name="q1c" type="checkbox"><label for="c1"><span><?php echo _("All organisms that reproduce need a male and a female to do so."); ?></span></label></li>
							<li><input id="d1" name="q1d" type="checkbox"><label for="d1"><span><?php echo _("Living things have different ways to reproduce."); ?></span></label></li>
							<li><input id="e1" name="q1e" type="checkbox"><label for="e1"><span><?php echo _("Reproduction is a natural tendency to keep life going."); ?></span></label></li>
							<li><input id="f1" name="q1f" type="checkbox"><label for="f1"><span><?php echo _("Plants and animals have the same structures for reproduction."); ?></span></label></li>
						<ol>
					</form>
				</section>
			</div>
			<div class="screens" id="answer">
				<p><?php echo _("You may or may not have checked all the right ones—a few are a bit tricky. Reproduction is a natural tendency to continue life by creating offspring. There are different ways to reproduce, not always involving a female and a male. All living things--plants, animals, and microorganisms reproduce. There are non-living things like viruses that also reproduce and make more viruses. Living organisms have different structures to help them reproduce. You will learn more about reproduction in this module."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Reproducing microorganism..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2; // Set number of screens for this page
	
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen = screenCount) { //refresh on #answer
					$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
					$('#answer').fadeIn();
					$('a.check-toggle').fadeOut( function(){
						$('a.next-toggle').fadeIn();
					});
				} else {
					$('.bg').css('background-image', 'url(images/3/bg.jpg)');
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
				}
			});
		}

		$('a.check-toggle').click(function(){
			$('#question').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				$('#answer').fadeIn();
				$('a.check-toggle').fadeOut( function(){
					$('a.next-toggle').fadeIn();
				});
				
			});
		});

		$('a.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('.bg').css('background-image', 'url(images/3/bg.jpg)');
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
				});
			}else{
				$('a.back-toggle').attr('href','2.php');
			}
		});

	});
	</script>
	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
