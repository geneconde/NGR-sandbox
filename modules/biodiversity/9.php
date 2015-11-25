<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'biodiversity-qc3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #576306; }
.bg { background: url('images/7/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap { border-left: 1px dashed #d3e547; border-right: 1px dashed #d3e547; }
.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #566204; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #566204; }
.ac-custom svg path { stroke: #566204; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question1 ol { margin: 0 0 0 40px; padding: 0; }
#question1 li { padding: 6px 0; }
#question2 { margin-top: 20px; }
#question2 ul { margin: 20px 0 0 40px; list-style: none; padding: 0; }
#question2 li { float: left; width: 180px; margin-right: 13px; }
#question2 li:last-child { margin-right: 0; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 18px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question2 input[type="radio"] + label img { border: 4px solid #9da84b; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 180px; }
#question2 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #839414; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#question2 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #839414; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"] + label { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; height: 195px;}
#question2 input[type="radio"]:checked + label {}
#answers { display: none; }
#answers p { text-align: center; font-size: 22px; }
#answer1 .feedback { width: 660px; margin: 0 auto; }
#answer2 .image { float: left; margin: 20px 20px 0 0; }
#answer2 .image img { border: 4px solid #9da84b; }
#answer2 .placeholder { float: left; margin-top: 20px; width: 500px; }
#answer2 p { text-align: left; }
#answer2 .clearfix { width: 780px; margin: 0 auto; }
#answer2 .feedback { width: 555px; margin: 0; }
#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] .ac-custom label { padding:0 110px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 60px; }
html[dir="rtl"] .ac-custom svg { right: 62px; }
html[dir="rtl"] #question2 li { float: right; }
html[dir="rtl"] #answer2 .placeholder { float:right; }
html[dir="rtl"] #question2 li { float:right; } 
html[dir="rtl"] #answer2 .image { float:right; margin: 20px 0 0 20px; }
html[dir="rtl"] #question2 li:last-child { margin-right: 13px; }
html[dir="rtl"] #answer2 p { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. Our ideas about forest fires have changed in the United States over the years. We now know that..."); ?></h2>	
					<section>
						<form class="ac-custom ac-radio ac-fill" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span>A. <?php echo _("Fires can be good for the health of a forest."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span>B. <?php echo _("Fires destroy the soil and prevent new trees from growing."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span>C. <?php echo _("Fires need to be extinguished as soon as they are spotted."); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span>D. <?php echo _("Fires reduce the number of tourists who visit areas that have burned."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. What primary source do Biosphere 2 and Earth use for energy?"); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="radio" id="a2" name="q2">
							<label for="a2"><img src="images/9/a.jpg"><span><?php echo _("Batteries"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b2" name="q2">
							<label for="b2"><img src="images/9/b.jpg"><span><?php echo _("Nuclear Power"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c2" name="q2">
							<label for="c2"><img src="images/9/c.jpg"><span><?php echo _("The Sun"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d2" name="q2">
							<label for="d2"><img src="images/9/d.jpg"><span><?php echo _("Gasoline"); ?></span></label>
						</li>
					</ul>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> -<?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. Our ideas about forest fires have changed in the United States over the years. We now know that..."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					
				<div id="answer2">
					<h2><?php echo _("Question B. What primary source do Biosphere 2 and Earth use for energy?"); ?></h2>	
					<div class="clearfix">
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
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="10.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>
	<script>

	var ans1, ans2, answered = <?php echo $answered; ?>, checkAnswer = 0;

	$('#question1').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>A. <?php echo _("Fires can be good for the health of a forest."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right. Small fires rid forests of dead, dry materials that can lead to bigger fires if allowed to build up."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Fires destroy the soil and prevent new trees from growing."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not true. A young healthy forest needs a few fires."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>C. <?php echo _("Fires need to be extinguished as soon as they are spotted."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not always. Sometimes forest managers actually start small fires to get rid of some of the dead, dry debris in a forest."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Fires reduce the number of tourists who visit areas that have burned."); ?></p>');
				$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not true. Even areas that have suffered large, destructive fires begin to grow new trees and plants that attract tourists."); ?></p>');
			ans1 = 'D';
		}
	});

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			$('#answer2').find('.image').html('<img src="images/9/a.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Batteries"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not this one. Earth is a bit big for batteries."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.image').html('<img src="images/9/b.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Nuclear Power"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. While Earth may generate some nuclear power, Biosphere does not."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.image').html('<img src="images/9/c.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("The Sun"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("There you go. Solar power provides energy for both."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.image').html('<img src="images/9/d.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Gasoline"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No... Neither Earth nor Biosphere uses gasoline."); ?></p>');
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('biodiversity-qc3-a', ans1);
			saveAnswer('biodiversity-qc3-b', ans2);
		}
	}

	$('img.back-toggle').click(function() {
		if($('#questions').is(':visible')) {
			document.location.href = "8.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if ($('#answers').is(':visible')) {
			$('img.next-toggle').fadeOut(function() { $('img.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
		
	$('img.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('img.check-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>


