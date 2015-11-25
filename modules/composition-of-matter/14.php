<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(14, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'composition-of-matter-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
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
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/nlform.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
@font-face { font-family: 'nlicons'; src:url('fonts/nlicons/nlicons.eot'); src:url('fonts/nlicons/nlicons.eot?#iefix') format('embedded-opentype'), url('fonts/nlicons/nlicons.woff') format('woff'), url('fonts/nlicons/nlicons.ttf') format('truetype'), url('fonts/nlicons/nlicons.svg#nlicons') format('svg'); font-weight: normal; font-style: normal; }
.wrap { border-left: 1px dashed #E6C0DE; border-right: 1px dashed #E6C0DE; }
.bg { background: url('images/14/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.bg p { font-size: 36px; text-align: center; }
.nl-form { width: 100%; margin: 0.3em auto 0 auto; font-size: 35px; text-align: center; line-height: 1.5; }
.nl-form ul { list-style: none;  margin: 0; padding: 0; }
.nl-form input, .nl-form select, .nl-form button { border: none; background: transparent; font-family: inherit; font-size: inherit; color: inherit; font-weight: inherit; line-height: inherit; display: inline-block; padding: 0; margin: 0; -webkit-appearance: none; -moz-appearance: none; }
.nl-form input:focus { outline: none; }
.nl-field { display: inline-block; position: relative; }
.nl-field.nl-field-open { z-index: 10000; }
.nl-field-toggle, .nl-form input, .nl-form select  { padding: 0 10px; border-radius: 6px; border-bottom: 3px solid #dc71a4; line-height: inherit; display: inline-block; color: #fff; cursor: pointer; background-color: #F87EB8;/* border-bottom: 1px dashed #b14943; */ }
.nl-field ul { border-radius: 6px; border-bottom: 3px solid #dc71a4; position: absolute; visibility: hidden; background: #F87EB8; left: -0.5em; top: 50%; font-size: 24px; padding: 10px 0; opacity: 0; -webkit-transform: translateY(-40%) scale(0.9); -moz-transform: translateY(-40%) scale(0.9); transform: translateY(-40%) scale(0.9); -webkit-transition: visibility 0s 0.3s, opacity 0.3s, -webkit-transform 0.3s; -moz-transition: visibility 0s 0.3s, opacity 0.3s, -moz-transform 0.3s; transition: visibility 0s 0.3s, opacity 0.3s, transform 0.3s; }
.nl-field.nl-field-open ul { visibility: visible; opacity: 1; -webkit-transform: translateY(-50%) scale(1); -moz-transform: translateY(-50%) scale(1); transform: translateY(-50%) scale(1); -webkit-transition: visibility 0s 0s, opacity 0.3s, -webkit-transform 0.3s; -moz-transition: visibility 0s 0s, opacity 0.3s, -moz-transform 0.3s; transition: visibility 0s 0s, opacity 0.3s, transform 0.3s; }
.nl-field ul li { color: #fff; position: relative; font-size:45px; }
.nl-dd ul li { padding: 0 60px; cursor: pointer; white-space: nowrap; }
.nl-dd ul li.nl-dd-checked:before, .nl-submit:before, .nl-field-go:before {font-family: 'nlicons'; speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; -webkit-font-smoothing: antialiased; }
.nl-dd ul li.nl-dd-checked { color: #b05882; }
.nl-dd ul li.nl-dd-checked:before { content: "\e000"; position: absolute; right: .5em; font-size: 35px; }
.nl-dd ul li:hover { background-color: #dc71a4 !important; }
.nl-dd ul li:hover:active { color: #883b5f; }
.nl-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); opacity: 0; z-index: 9999; visibility: hidden; -webkit-transition: visibility 0s 0.3s, opacity 0.3s; -moz-transition: visibility 0s 0.3s, opacity 0.3s; transition: visibility 0s 0.3s, opacity 0.3s; }
.nl-field.nl-field-open ~ .nl-overlay { opacity: 1; visibility: visible; -webkit-transition-delay: 0s; -moz-transition-delay: 0s; transition-delay: 0s; }
.nl-form option { text-align: center; }

#answer .a, #answer .b { color: #b14943; }
#ans2, #ans1 { color: #b14943; }
#answer { display: none; }
#answer p { text-align: center; font-size: 24px; }
#answer { margin-top: 0; }
.answer span { color: #b14943; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }
.feedback img { padding-right: 10px; }
.placeholder { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	.nl-form { width: 80%; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
			
				<h1><?php echo _('Quiz Question #1'); ?></h1>
				<div class='placeholder'>
				<h2><?php echo _('Choose from the items to select your answer.'); ?></h2>
				
				<form id="nl-form" class="nl-form">
					<?php echo _('Molecules that contain the same type of atoms are molecules of'); ?>
						<select id="a">
							<option value="" selected>&#60;<?php echo _('select'); ?>&#62;</option>
							<option value="an element"><?php echo _('an element'); ?></option>
							<option value="a compound"><?php echo _('a compound'); ?></option>
						</select>. 
					
					<?php echo _('An example is'); ?>
						<select id="b">
							<option value="" selected>&#60;<?php echo _('select'); ?>&#62;</option>
							<!--<option value="chlorine gas"><?php //echo _('chlorine gas'); ?></option>-->
							<option value="water"><?php echo _('water'); ?></option>
							<option value="oxygen gas"><?php echo _('oxygen gas'); ?></option>
							<option value="carbon dioxide"><?php echo _('carbon dioxide'); ?></option>
						</select>.
					

					<div class="nl-overlay"></div>	
				</form>
				</div>
			</div>
			<div id="answer">
			
				<h1><?php echo _('Quiz Question #1'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div class='placeholder'>
				<p><?php echo _('You answered...'); ?></p>
				<p><?php echo _('Molecules that contain the same type of atoms are molecules of'); ?> <span id="ans1"></span>. 
				<?php echo _('An example is'); ?> <span id="ans2"></span>.</p>
				<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Your first quiz question is...'); ?></strong></section></section>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	answericon1 = $('#answer-icon1'),
	ans = '',
	checkAnswer = 0,
	answered = 0,
	studentAnswer1,
	answered = <?php echo $answered; ?>;

	var nlform = new NLForm(document.getElementById('nl-form'));
	
	function checkAns(){
		studentAnswer1 = $('#a option:selected').val() + '-' + $('#b option:selected').val();
		$('#ans1').text($('#a option:selected').text());
		$('#ans2').text($('#b option:selected').text());
		

		if(studentAnswer1 == 'an element-oxygen gas') {
			textstr1 =  "<?php echo _("That's correct! Oxygen is an element and it is composed of only Oxygen atoms."); ?>";
			answericon1.attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
			$('#feedback1').text(textstr1);
		/*} else if(studentAnswer1 == 'an element-chlorine gas'){
			textstr1 = "<?php echo _("That's correct! Chlorine is an element and it is composed of only Chlorine atoms."); ?>";
			answericon1.attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
			$('#feedback1').text(textstr1);
		} else if(studentAnswer1 == 'a compound-carbon dioxide'){
			textstr1 = '<?php echo _("Great job! carbon dioxide is compound, made of different elements."); ?>';
			answericon1.attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
			$('#feedback1').text(textstr1);	
		} else if(studentAnswer1 == 'a compound-water'){
			textstr1 = '<?php echo _("Great job! Water is a compound, made of different elements."); ?>';
			answericon1.attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
			$('#feedback1').text(textstr1);	*/
		} else {
			textstr1 = '<?php echo _("Not quite! An element is made up of the same type of atom while a compound is made up of two or more elements. Chlorine and Oxygen are elements but Water and Carbon dioxide are compounds."); ?>';
			answericon1.attr("src", "images/others/wrong.png");
			$('#feedback1').addClass('red');
			$('#feedback1').text(textstr1);
		}

		if(answered == 0) {
			saveAnswer('composition-of-matter-qq1-a', studentAnswer1);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "13.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); 
				$('#feedback1').removeClass('red');
				$('#feedback1').removeClass('green');
			}); 
		}
	});
	
	check.click(function() {
		checkAnswer = 0;
		$('select').each(function() {
			if ($(this).val() == '') {
				checkAnswer = 1;
			}
		});
		if (checkAnswer == 1) {
			alert("<?php echo _('Please select your answers.'); ?>");
		} else {
			checkAns();
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){ answer.fadeIn(); });
		}
	});
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
