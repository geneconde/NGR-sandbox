<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(15, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'biodiversity-qq2-a');
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
.wrap { border-left: 1px dashed #d3e547; border-right: 1px dashed #d3e547; }
.bg { background: url('images/15/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #4A530D; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -12px; }
.ac-custom label::before { border: 2px solid #839314; }
.ac-custom svg path { stroke: #839314; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question li { padding: 12px 0; }
#answer { display: none; }
#answer p { text-align: center; width:85%; margin:0 auto;}
img.next-toggle { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 110px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 65px; }
html[dir="rtl"] .ac-custom svg { right: 67px; }
html[dir="rtl"] {}
html[dir="rtl"] {}
html[dir="rtl"] {}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _('Click on <span class="blink">all</span> the reasons for doing a lengthy and expensive project as Biosphere 2?'); ?></h2>
				<section>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li><input id="a" name="q" type="checkbox"><label for="a"><span>A. <?php echo _("Biosphere could become an important source of food."); ?></span></label></li>
							<li><input id="b" name="q" type="checkbox"><label for="b"><span>B. <?php echo _("Biosphere lets us experiment with climate conditions."); ?></span></label></li>
							<li><input id="c" name="q" type="checkbox"><label for="c"><span>C. <?php echo _("Biosphere could become an important source of water."); ?></span></label></li>
							<li><input id="d" name="q" type="checkbox"><label for="d"><span>D. <?php echo _("Biosphere lets us study interactions between people and nature."); ?></span></label></li>
						<ol>
					</form>
				</section>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback"></div>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="16.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying the zone of life on earth..."); ?></strong></section></section>
	<script>
	var question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>,
	a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d');

	question.find('input[type="checkbox"]').on('click', function() {
		var me = $(this);

		if (me.is(':checked') && me.attr('id') == 'a') {
			answer.find('.answer').append('<p class="a">A. <?php echo _("Biosphere could become an important source of food."); ?></p>');
			ans += 'A';
		} else if ( ! me.is(':checked') && me.attr('id') == 'a') {
			answer.find('.answer').find('p.a').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'b') {
			answer.find('.answer').append('<p class="b">B. <?php echo _("Biosphere lets us experiment with climate conditions."); ?></p>');
			ans += 'B';
		} else if ( ! me.is(':checked') && me.attr('id') == 'b') {
			answer.find('.answer').find('p.b').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'c') {
			answer.find('.answer').append('<p class="c">C. <?php echo _("Biosphere could become an important source of water."); ?></p>');
			ans += 'C';
		} else if ( ! me.is(':checked') && me.attr('id') == 'c') {
			answer.find('.answer').find('p.c').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'd') {
			answer.find('.answer').append('<p class="d">D. <?php echo _("Biosphere lets us study interactions between people and nature."); ?></p>');
			ans += 'D';
		} else if ( ! me.is(':checked') && me.attr('id') == 'd') {
			answer.find('.answer').find('p.d').remove(); 
		}

		if (a.is(':checked') == false && b.is(':checked') == true && c.is(':checked') == false && d.is(':checked') == true) {
			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. Biosphere 2 does let us see how changing conditions impact biomes as well as how people and nature interact. The Biosphere isn't nearly large enough to provide much food and it doesn't actually produce any new water."); ?></p>"); 
		} else if (a.is(':checked') == false && b.is(':checked') == true && c.is(':checked') == false && d.is(':checked') == false) {
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Biosphere 2 does allow experimentation with climate conditions, but see if there are any other correct choices."); ?></p>'); 
		} else if (a.is(':checked') == false && b.is(':checked') == false && c.is(':checked') == false && d.is(':checked') == true) {
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Biosphere 2 does allow us to observe interactions between people and nature, but see if there are any other correct choices."); ?></p>'); 
		} else {
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite, Biosphere 2 does let us see how changing conditions impact biomes as well as how people and nature interact. The Biosphere isn't nearly large enough to provide much food and it doesn't actually produce any new water."); ?></p>"); 
		}
	});	

	function save() {
		if (answered == 0) {
			saveAnswer('biodiversity-qq2-a', ans);
		}
	}

	$('img.back-toggle').click(function() {
		if($('#question').is(':visible')) {
			document.location.href = "14.php";
		} else if ($('#answer').is(':visible')) {
			$('img.next-toggle').fadeOut(function() { $('img.check-toggle').fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			});
		}
	});

		$('img.check-toggle').click(function() { 
			checkAnswer = $('input:checkbox:checked').length;
			if (checkAnswer == 0) {
				alert('<?php echo _("Please select your answer."); ?>');
			} else {
				$('img.check-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
					question.fadeOut(function(){
						answer.fadeIn();
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
