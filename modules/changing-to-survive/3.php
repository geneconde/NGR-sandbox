<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>
<!-- Template for pages 3, 5, 7 and 9 and possibly quiz questions -->
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
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
h1 { color: #ffcfff !important; }
.bg { background-image: url('images/3/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #9d7ec6; border-right: 1px dashed #9d7ec6; }
h3 { font-size: 24px; margin: 2% 0; color: black; }
#answer { display: none; }
#answer p { padding-top: 2%; }
#question section { margin-left: 1%; width: 60%; float: left; }
img.back-toggle-answer, img.next-toggle { display: none; }
.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 22px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #ffcfff; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -12px; }
.ac-custom label::before { border-color: #ffcfff ; }
.ac-custom svg path { stroke: #ffcfff; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question ol { margin: 0 0 0 20px; padding: 0; list-style: none; }
#question li { margin: 0; padding: 8px 0; }
.ac-custom li { padding: 8px 0; }
#question img { width: 260px; float: right; margin: 20px 20px 0 0;}
#answer img { margin: 30px 10px; }
#answer p { color: #fff; text-align: left; }

<?php if($language == "es_ES") { ?>
		h1 { font-size:34px; }
<?php } ?>
html[dir="rtl"] #answer p {text-align: right;}

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 29px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #question img {float:left;}
html[dir="rtl"] #question section {float:right;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div class="screens" id="question">
				<h1><?php echo _("Checking what you know... about changing to survive"); ?></h1>
				<h2><?php echo _("Click on <span class='red blink'>all</span> the changes in the left column most probably determined by events in the right column."); ?></h2>
			
				<section>
				<h3><?php echo _("1. Massive volcanic eruption"); ?></h3>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li><input id="a1" name="q1a" type="checkbox"><label for="a1"><?php echo _("Local extinction of many nearby populations of plants and animals."); ?></label></li>
							<li><input id="b1" name="q1b" type="checkbox"><label for="b1"><?php echo _("Rapid population growth in plants and animals living near the volcano."); ?></label></li>
							<li><input id="c1" name="q1c" type="checkbox"><label for="c1"><?php echo _("Changes in living conditions in areas affected by the eruption."); ?></span></label></li>
						<ol>
					</form>
				</section>
				<img src="images/3/a.jpg" />
		
				<section>
				<h3><?php echo _("2. Expansion of cities into the surrounding areas"); ?></h3>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li><input id="a2" name="q2a" type="checkbox"><label for="a2"><?php echo _("Increase in plant and animal habitat."); ?></span></label></li>
							<li><input id="b2" name="q2b" type="checkbox"><label for="b2"><?php echo _("Decrease in plant and animal habitat."); ?></span></label></li>
							<li><input id="c2" name="q2c" type="checkbox"><label for="c2"><?php echo _("Increase in local species extinction."); ?></span></label></li>
						<ol>
					</form>
				</section>
				<img src="images/3/b.jpg" />
			</div>
			<div class="screens" id="answer">
				<p><?php echo _("The blast from a massive volcanic eruption and its after-effects will have profound local impacts. The nearby plants and animals will have a tough time surviving at all. Dramatic changes in living conditions will occur in areas near the eruption."); ?></p>
				<p><?php echo _("Expansion of cities into the surrounding areas will lead to a decrease in plant and animal habitat and increase in local species extinction."); ?></p>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#answer" class="wiggle"><img class="check-toggle" src="images/buttons/checkanswer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="4.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Flowing lava..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2; // Set number of screens for this page
	
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen = screenCount) { //refresh on #answer
					$('.bg').css('background-image', 'url(images/3/bg2.png)');
					$('.wrap').css('border-left', '1px dashed #61a44d');
					$('.wrap').css('border-right', '1px dashed #61a44d');
					$('#question').fadeOut();
					$('#answer').fadeIn();
					$('img.check-toggle').fadeOut( function(){
						$('img.next-toggle').fadeIn();
					});
				} else {
					$('.bg').css('background-image', 'url(images/3/bg.png)');
					$('.wrap').css('border-left', '1px dashed #9d7ec6');
					$('.wrap').css('border-right', '1px dashed #9d7ec6');
					$('#question').fadeIn();
					$('img.back-toggle').fadeIn();
					$('img.next-toggle').fadeOut(function(){$('img.check-toggle').fadeIn();});
				}
			});
		}

		$('img.check-toggle').click(function(){
			$('#question').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg2.png)');
				$('.wrap').css('border-left', '1px dashed #61a44d');
				$('.wrap').css('border-right', '1px dashed #61a44d');
				$('#answer').fadeIn();
				$('img.check-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn(); });
				
			});
		});

		$('img.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('.bg').css('background-image', 'url(images/3/bg.png)');
					$('.wrap').css('border-left', '1px dashed #9d7ec6');
					$('.wrap').css('border-right', '1px dashed #9d7ec6');
					$('#question').fadeIn();
					$('img.back-toggle').fadeIn();
					$('img.next-toggle').fadeOut(function(){$('img.check-toggle').fadeIn();});
				});
			}else{
				$('img.back-toggle').parent().attr('href','2.php');
			}
		});

	});
	</script>
	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
