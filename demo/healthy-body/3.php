<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'healthy-body';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _('Healthy Body'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
table { display: inline-block; }
h1 { font-size: 33px; color: #c2317e; }
.wrap { border-left: 1px dashed #eaaab0; border-right: 1px dashed #eaaab0; }
.bg { background: url('images/3/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question ul { list-style: none; padding: 0; }
#question li { margin: 0 auto; padding: 5px 0; position: relative; }
#question label { display: inline-block; position: relative; font-size: 22px; padding: 0 0 0 40px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
#question input[type="radio"], #question label::before{ width: 30px; height: 30px; top: 50%; left: 0; margin-top: -15px; position: absolute; cursor: pointer; }
#question input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; } 
#question label::before { content: ''; background: url(images/3/buttons.png) left top no-repeat; width: 30px; height: 30px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
#question input[type="radio"]:checked + label { color: #000; } 
#question input[type="radio"]:checked + label::before { background-position: left bottom; }
#question .placeholder { overflow: hidden; margin-bottom: 20px; margin-top: -13px;}
#question .placeholder:last-child { margin-bottom: 0; }
#question .placeholder img { float: left; background: rgba(0, 0, 0, .1); padding: 6px; margin: 5px 20px 0 0; }
#question .placeholder div { float: left; }
#question .placeholder div ul { margin: -5px 0 0;  }
#answer { display: none; }
#answer .images { text-align: center; margin: 20px 0 10px; } 
#answer .images img { display: inline-block; background: rgba(0, 0, 0, .1); padding: 6px; margin-right: 20px; }
#answer .images img:last-child { margin-right: 0; }
#answer p { padding-top: 10px; }
img.next-toggle { display: none; }

<?php if($language == "es_ES") { ?>
	#question label { font-size: 21px; }
	#question p { font-size: 22px; }
	h2 { font-size: 23px; }
	h1 { font-size: 32px; }
<?php } ?>

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] #question .placeholder img { float:right;}
html[dir="rtl"] #question .placeholder div { float:right;}
html[dir="rtl"] #question label::before { right: 1px; }
html[dir="rtl"] #question label {padding: 0 40px 0 0 ;} 
#question .placeholder img {margin: 5px 0 0 20px;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about a healthy body"); ?></h1>
				<h2><?php echo _("Choose <span class='blink'>true</span> or <span class='blink'>false</span> for each of the following statements and decide whether these ideas about the human body are fact or myth."); ?></h2>

				<div class="placeholder">
					<img src="images/3/a.jpg">
					<div>
						<p><?php echo _("It is safe to follow the 5-second rule for dropped food."); ?></p>
						<ul>						
							<li><input id="a1" name="q1" type="radio"><label for="a1"><?php echo _("True"); ?></label></li>
							<li><input id="b1" name="q1" type="radio"><label for="b1"><?php echo _("False"); ?></label></li>
						</ul>
					</div>
				</div>

				<div class="placeholder">
					<img src="images/3/b.jpg">
					<div>
						<p><?php echo _("Eating after dark causes weight gain."); ?></p>
						<ul>						
							<li><input id="a2" name="q2" type="radio"><label for="a2"><?php echo _("True"); ?></label></li>
							<li><input id="b2" name="q2" type="radio"><label for="b2"><?php echo _("False"); ?></label></li>
						</ul>
					</div>
				</div>

				<div class="placeholder">
					<img src="images/3/c.jpg">
					<div>
						<p><?php echo _("Cracking your knuckles can cause arthritis."); ?></p>
					<ul>						
							<li><input id="a3" name="q3" type="radio"><label for="a3"><?php echo _("True"); ?></label></li>
							<li><input id="b3" name="q3" type="radio"><label for="b3"><?php echo _("False"); ?></label></li>
						</ul>
					</div>
				</div>

				<div class="placeholder">
					<img src="images/3/d.jpg">
					<div>
						<p><?php echo _("Soda is bad for your kidneys."); ?></p>
						<ul>						
							<li><input id="a4" name="q4" type="radio"><label for="a4"><?php echo _("True"); ?></label></li>
							<li><input id="b4" name="q4" type="radio"><label for="b4"><?php echo _("False"); ?></label></li>
						</ul>
					</div>
				</div>
			</div>

			<div id="answer">
				<p><?php echo _("The acid in soda is hard on your kidneys. It is what you eat (and how many calories it contains) not when you eat it. Cracking your knuckles is a bad habit that causes hand swelling and less grip strength. It is not safe to eat anything off the floor."); ?></p> 

				<div class="images">
					<img src="images/3/a.jpg">
					<img src="images/3/b.jpg">
					<img src="images/3/c.jpg">
					<img src="images/3/d.jpg">
				</div>

				<p><?php echo _("If you got these correct, you are on the right track to knowing how to keep your body healthy. You will see how all of what your body does is connected. Any part that stops working affects your whole system."); ?></p>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="4.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Finding facts..."); ?></strong></section></section>
	<script src="scripts/svgcheckbx.js"></script>
	<script>
	$(document).ready(function() {
		var question = $('#question'),
			answer = $('#answer');

		$('img.back-toggle').click(function() {
			if(question.is(':visible')) {
				document.location.href = "2.php";
			} else if (answer.is(':visible')) {
				$('img.next-toggle').fadeOut(function() { $('img.check-toggle').fadeIn(); });
				answer.fadeOut(function() {
					//$('.bg').css('background-image', 'url(images/3/bg.jpg)');
					question.fadeIn();
				});
			}
		});
		
		$('img.check-toggle').click(function(){
			var checkAnswer = $('input:radio:checked').length;
		
			if(checkAnswer < 4)
			{
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				$('img.check-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
				question.fadeOut(function(){ 
					//$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
					answer.fadeIn();
				}); 
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
			question.fadeOut(function() { 
				answer.fadeIn(); 
				//$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			});

			check.fadeOut(function() { next.fadeIn(); });
			addHash('#answer');
		}
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
