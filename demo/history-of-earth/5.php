<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #000; }
.wrap { border-color: #845833; }
.bg { background-image: url(images/5/bg.jpg); }

#questions { position: relative; z-index: 5; }
#question1 ol { list-style: none; padding: 0; margin: 0 0 0 10px; }
#question1 li { padding: 6px 0; }
#question1 section { float: left; width: 583px; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] {}
#question1 .ac-custom input[type="radio"]:checked + label { color: #588B38; }
#question1 .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question1 .ac-custom svg path { stroke: #588B38; }
#question1 .ac-custom label::before { background: #588B38; height: 20px; width: 20px; margin-top: -12px;}

#usa { width: 265px; height: 168px; float: right; }
#usa p { width: 50px; font-size: 13px; padding: 50px 91px; }

#question2 ol { margin: 0 0 0 20px; padding: 0; }
#question2 li { padding: 10px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #588B38; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #588B38; }
#question2 .ac-custom svg path { stroke: #588B38; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answers { display: none; }
#answers p { text-align: center; }

#question2, #answer2 { margin-top: 0; }
#buttons .next { display: none; }
#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
#graphDiv img { width:100%; margin-top: 40px; }
.pet:hover {cursor: pointer;}
.pet {width: 45%;padding: 0;display: block;margin: 20px auto 0;}
#close { background: white; color: #406468; display: block; margin: 0 auto; width: 65px; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
p.click { position: absolute; right: 45px; font-size: 22px; top: 150px; }
#close:hover { cursor: pointer; }
div.right { overflow: hidden; position: relative; }
span.img-p { position: absolute; left: 104px; margin-top: 80px; }
span.img-p:nth-child(3) { margin-top: 95px; }
span.img-p:nth-child(4) { margin-top: 110px; }
span.img-p2 { position: absolute; top: 315px; font-size: 40px; left: 327px; }
span.img-p2:nth-child(4) { top: 350px; left: 330px; }
span.img-p2:nth-child(5) { top: 385px; }
<?php if($language == "es_ES") { ?>
	p.click { right: 10px; top: 130px; width: 300px; text-align: center; }
	#question2 li { padding: 7px 0; }
<?php } ?> 
<?php if($language == "zh_CN") { ?>
	p.click { right: 69px; font-size: 22px;	top: 138px; }
	span.img-p { left: 97px; }
	#close { width: 68px; }
<?php } ?> 

html[dir="rtl"] h2 { font-size: 23px; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] p.click {right: 71%;top: 125px;}
html[dir="rtl"] div.right {float:left;}
html[dir="rtl"] #question1 section {float:right;}
span.img-p {left: 92px;}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 section {width: 463px;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
		<div id="graphDiv" >
			<span id="close"><?php echo _("Close!"); ?></span>
			<img class="small" src="images/5/usa.png" width="200"/>
			<span class="img-p2"><?php echo _("Western"); ?></span>
			<span class="img-p2"><?php echo _("Interior"); ?></span>
			<span class="img-p2"><?php echo _("Seaway"); ?></span>
		</div>
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Look at the map of what the United States looked like a long time ago (in the Cretaceous geological period as shown on the map below). How is it different from what it is today?"); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Florida was a mountain range."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Most of the middle part of the country was underwater."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("The northeast US (New England) was underwater."); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("It was pretty much the same as it is now."); ?></span></label></li>
							<ol>
						</form>
					</section>

					<!-- <div id="usa"><p>Western Interior Seaway</p></div> -->
					<div class="right">
						<img id="usa" class="small pet" src="images/5/usa.png"/>
						<span class="img-p"><?php echo _("Western"); ?></span>
						<span class="img-p"><?php echo _("Interior"); ?></span>
						<span class="img-p"><?php echo _("Seaway"); ?></span>
						<!-- <p class="click"><?php echo _("Click the image to enlarge."); ?></p> -->
					</div>
					<p class="click"><?php echo _("Click the image to enlarge."); ?></p>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. There are differences between the geography of the US during the Cretaceous period as shown on the map above and the current geography of the United States. How fast do you think the changes from sea to land have occurred?"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Very quickly like from a flood."); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Very slowly from changes in sea level."); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Very slowly from lots of rain every day."); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("Very quickly from big rain storms."); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Look at the map of what the United States looked like a long time ago (in the Cretaceous geological period as shown on the map below). How is it different from what it is today?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. There are differences between the geography of the US during the Cretaceous period as shown on the map above and the current geography of the United States. How fast do you think the changes from sea to land have occurred?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Florida was a mountain range."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, Florida was not a mountain range. Most of the middle part of the country was underwater."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Most of the middle part of the country was underwater."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct, Most of the middle part of the country was underwater."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("The northeast US (New England) was underwater."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the northeast was a mountain range. Most of the middle part of the country was underwater."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("It was pretty much the same as it is now."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, there are many differences. For instance, most of the middle part of the country was underwater."); ?></p>');
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Very quickly like from a flood.") ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, these changes took place slowly over a very long time, from changes in sea level."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Very slowly from changes in sea level.") ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct, these changes occurred slowly from changes in sea level."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Very slowly from lots of rain every day.") ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, rain every day wouldn't be enough water to cover the entire central US with a sea – even if it rained every day for a year. Also, the sea covering the Midwest was salt water, so it came from rising sea levels, not rain or flooding."); ?></p>"); //'
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Very quickly from big rain storms.") ?></p>'); //'
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, these changes took place slowly over time, from changes in sea level."); ?></p>');
			ans2 = 'D';
		}
	});

	$('.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert("<?php echo _("Please select your answers."); ?>");
		} else {
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('history of earth-qc1-a', ans1);
			saveAnswer('history of earth-qc1-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "4.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	
	});
	$(document).ready(function(){
		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});
	});
	</script>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
