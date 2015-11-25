<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #558653; }
.wrap { border-color: #b8d767; }
.bg { background-image: url(images/5/bg.jpg); }

#question1 ol { margin: 0 0 0 20px; padding: 0; }
#question1 li { padding: 8px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="radio"]:checked + label { color: #294D11; }
#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question1 .ac-custom label::before { border: 2px solid #294D11; }
#question1 .ac-custom svg path { stroke: #294D11; }
#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question2 ul { margin: 20px auto 0; width: 800px; list-style: none; padding: 0; }
#question2 li { float: left; width: 180px; margin-right: 26px; }
#question2 li:last-child { margin-right: 0; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 22px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question2 input[type="radio"] + label img { border: 4px solid #b7d767; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 180px; }
#question2 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #294D11; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question2 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #294D11; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"] + label { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; }
#question2 input[type="radio"]:checked + label {}

#answers { display: none; }
#answers p { text-align: center; }

#answer2 .image { float: left; margin: 0 20px 0 0; }
#answer2 .image img { border: 4px solid #b7d767; }
#answer2 .placeholder { float: left; width: 640px; }
#answer2 p { text-align: left; }
#answer2 .clear { width: 100%; margin: 0 auto; }
#answer2 .feedback { margin: 0; }
#buttons .next { display: none; }
#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }
<?php if($language == "es_ES") { ?>
	#question2 label { font-size: 19px; }
<?php } ?>

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] #question1 .ac-custom svg { right: 3px; }
html[dir="rtl"] #question2 li { float: right; margin:0 0 0 26px; }
html[dir="rtl"] #question2 li:last-child { margin: 0; }
html[dir="rtl"] #answer2 p { text-align: right; }
html[dir="rtl"] #answer2 .image { float: right; margin: 0 0 0 20px; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#question2 ul {
		margin: 20px auto 0;
		width: 100%;
		list-style: none;
		padding: 0;
	}
	#question2 li {
		float: left;
		width: 159px;
		margin-right: 26px;
	}
	#answer2 .placeholder {
		float: left;
		width: 490px;
	}


}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Natural resource is anything that humans..."); ?></h2>
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Invent or build"); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Design or create"); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("Have not created"); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("Use to meet their needs"); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Trees are natural resources. Click on the <span class='blink'>correct</span> reason for this."); ?></h2>	

					<ul class="clear">
						<li>
							<input type="radio" id="a2" name="q2">
							<label for="a2"><img src="images/5/a.jpg"><span><?php echo _("Trees are a source for firewood."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b2" name="q2">
							<label for="b2"><img src="images/5/b.jpg"><span><?php echo _("Trees have the ability to regrow once they are cut down."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c2" name="q2">
							<label for="c2"><img src="images/5/c.jpg"><span><?php echo _("Trees grow in nature and provide people with lumber, fuel, and other products."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d2" name="q2">
							<label for="d2"><img src="images/5/d.jpg"><span><?php echo _("Trees provide shade necessary for certain animals."); ?></span></label>
						</li>
					</ul>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Natural resource is anything that humans..."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Trees are natural resources. Click on the <span class='blink'>correct</span> reason for this."); ?></h2>	
					<div class="clear">
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#question1').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p><?php echo _("Invent or build"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, a natural resource is anything from nature. These are things in the environment humans did not invent or build. They have built great things over time, but these things are not natural resources."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p><?php echo _("Design or create"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, a natural resource is anything found in the environment not designed or created by humans. They use their creativity to solve problems by making new things, but these are not natural resources."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p><?php echo _("Have not created"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes, a natural resource is anything from the environment humans did not create. Natural resources are simply found in nature."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p><?php echo _("Use to meet their needs"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, a natural resource is anything in the environment humans did not create. Humans make a lot of things to meet their needs, which are great resources, but are just not natural resources."); ?></p>');
			ans1 = 'D';
		}
	});

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			$('#answer2').find('.image').html('<img src="images/5/a.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Trees are a source for firewood."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, trees are natural resources because humans use many products from trees."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.image').html('<img src="images/5/b.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Trees have the ability to regrow once they are cut down."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, trees are natural resources because humans use many products from trees."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.image').html('<img src="images/5/c.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Trees grow in nature and provide people with lumber, fuel, and other products."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes, trees are natural resources because they grow in nature and humans use many products from trees."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.image').html('<img src="images/5/d.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Trees provide shade necessary for certain animals."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, trees are natural resources because humans use many products from trees."); ?></p>');
			ans2 = 'D';
		}
	});

	$('a.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('natural-resources-qc1-a', ans1);
			saveAnswer('natural-resources-qc1-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "4.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
