<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(7, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'earth-materials-and-systems-qc2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-default.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-component.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/nlform-modernizr.custom.js"></script>
<style>
//h1 { color: #000; }
h2 { margin-bottom: 0; }
.wrap { border-color: #F8C104; }
.bg { background-image: url(images/7/bg.jpg); }

#questions { position: relative; z-index: 5; }
#question1 .ac-custom li { padding: 5px 0; }
#question1 .ac-custom { padding: 0; }
#question1 .ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
#question1 .ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="checkbox"]:checked + label { color: #780046; }
#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question1 .ac-custom label::before { border: 2px solid #780046; }
#question1 .ac-custom svg path { stroke: #780046; }
#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
.nl-field ul { top:0; }

.nl-field-toggle, .nl-form input, .nl-form select {	color: #ee6143;	border-bottom: 1px dashed #ee6143; }
.nl-dd ul li.nl-dd-checked { color: #20440F; }
.nl-dd ul li { font-size: 30px; }
.nl-form { font-size: 24px; text-align: center; }
.sphere, #a, #b, #c, #d { color: #ee6143; }

#answers { display: none; }
#answers p { text-align: center; padding: 5px 0; font-size: 20px; }

#answer2 { }
#buttons .next { display: none; }html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] .ac-custom svg { right: 37px; margin-top: -10px; }
html[dir="rtl"] li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Click on <span class='blink'>all</span> the <span class='blink'>correct</span> statements below."); ?></h2>	

					<section>
						<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="checkbox"><label for="a1"><span><?php echo _("The hydrosphere, atmosphere, biosphere, and geosphere are Earth's major components."); ?></span></label></li>
								<li><input id="b1" name="q1" type="checkbox"><label for="b1"><span><?php echo _("There are only interactions between the hydrosphere and atmosphere, and biosphere and geosphere."); ?></span></label></li>
								<li><input id="c1" name="q1" type="checkbox"><label for="c1"><span><?php echo _("Each subsystem of the Earth interacts with every other subsystem."); ?></span></label></li>
								<li><input id="d1" name="q1" type="checkbox"><label for="d1"><span><?php echo _("The interactions between the earth's systems are the processes that go on to shape the landscape and make the earth the way it is."); ?></span></label></li>
							<ol>
						</form>
					</section>
					
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. The following are examples of how earth systems interact. Click on 'select' for each statement then click on the <span class='blink'>correct</span> system (sphere) from the pop up menu for each of the statements. The first one is done for you."); ?></h2>	
 
					<form id="nl-form" class="nl-form">
						<?php echo _("Volcanoes <span class='key'>(geosphere)</span> change plant growth in the biosphere. Rainfall"); ?> 
						<select id="opt1">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="geosphere">(<?php echo _("geosphere"); ?>)</option>
							<option value="biosphere">(<?php echo _("biosphere"); ?>)</option>
							<option value="hydrosphere">(<?php echo _("hydrosphere"); ?>)</option>
							<option value="atmosphere">(<?php echo _("atmosphere"); ?>)</option>
						</select>
						<?php echo _("often increases after a volcanic eruption, causing plant growth"); ?> 
						<select id="opt2">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="geosphere">(<?php echo _("geosphere"); ?>)</option>
							<option value="biosphere">(<?php echo _("biosphere"); ?>)</option>
							<option value="hydrosphere">(<?php echo _("hydrosphere"); ?>)</option>
							<option value="atmosphere">(<?php echo _("atmosphere"); ?>)</option>
						</select>
						. <?php echo _("Very small matter in the air"); ?>
						<select id="opt3">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="geosphere">(<?php echo _("geosphere"); ?>)</option>
							<option value="biosphere">(<?php echo _("biosphere"); ?>)</option>
							<option value="hydrosphere">(<?php echo _("hydrosphere"); ?>)</option>
							<option value="atmosphere">(<?php echo _("atmosphere"); ?>)</option>
						</select>
						<?php echo _("falls out, first smothering plants, but eventually it enriches the soil"); ?> 
						<select id="opt4">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="geosphere">(<?php echo _("geosphere"); ?>)</option>
							<option value="biosphere">(<?php echo _("biosphere"); ?>)</option>
							<option value="hydrosphere">(<?php echo _("hydrosphere"); ?>)</option>
							<option value="atmosphere">(<?php echo _("atmosphere"); ?>)</option>
						</select>
						, <?php echo _("and causes more plant growth down the road."); ?> 

						<div class="nl-overlay"></div>
 					</form>
 					
 					
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Click on <span class='blink'>all</span> the <span class='blink'>correct</span> statements below."); ?></h2>	
					<div class="clear">
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. The following are examples of how earth systems interact. Click on 'select' for each statement then click on the <span class='blink'>correct</span> system (sphere) from the pop up menu for each of the statements. The first one is done for you."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer">
						<p><?php echo _("Volcanoes <span class='key'>(geosphere)</span> changes plant growth in the biosphere. Rainfall often increases after a volcanic eruption, causing plant growth out, first smothering plants, but eventually it enriches the soil, and causes more plant growth down the road."); ?></p>
					</div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Earth systems interaction..."); ?></strong></section></section>

	<script>
	var ans1 = '', ans2, ans3, ans4, ans5, answered = <?php echo $answered; ?>, checkAnswer = 0;
	var a2, b2, c2, d2;
	var str ='<select>';
	var nullAnswer = false;

	$('#question1').find('input[type=checkbox]').on('click', function() {
		var me = $(this);

		if (me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').append("<p class='a'><?php echo _("The hydrosphere, atmosphere, biosphere, and geosphere are Earth's major components."); ?></p>");
			ans1 = 'A';
		} else if ( ! me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').find('p.a').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').append('<p class="b"><?php echo _("There are only interactions between the hydrosphere and atmosphere, and biosphere and geosphere."); ?></p>');
			ans1 += 'B';
		} else if ( ! me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').find('p.b').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').append('<p class="c"><?php echo _("Each subsystem of the Earth interacts with every other subsystem."); ?></p>');
			ans1 += 'C';
		} else if ( ! me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').find('p.c').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').append("<p class='d'><?php echo _("The interactions between the earth's systems are the processes that go on to shape the landscape and make the earth the way it is."); ?></p>");
			ans1 += 'D';
		} else if ( ! me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').find('p.d').remove(); 
		}

		if ($('#a1').is(':checked') == true && $('#b1').is(':checked') == false && $('#c1').is(':checked') == true && $('#d1').is(':checked') == true) {
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's correct! Hydrosphere, atmosphere, biosphere and geosphere are Earth's systems; They are interdependent and each subsystem interacts with every other subsystem which means that the events that happen in one sphere affect the other systems of the earth and cause the earth to be the way it is."); ?></p>"); 
		} else {
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite! Hydrosphere, atmosphere, biosphere and geosphere are Earth's systems; They are interdependent and each subsystem (the spheres) interacts with every other subsystem which means that the events that happen in one sphere affect the other systems of the earth and cause the earth to be the way it is."); ?></p>"); 
		}
	});

	$('.check-toggle').click(function(){
		checkNull();
		if (nullAnswer == true) {
			alert("<?php echo _("Please select your answers."); ?>");
			nullAnswer = false;
		} else {
			
			checkAnswer2();
			
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function checkAnswer2(){
		a2=$('#opt1').val(),
		b2=$('#opt2').val(),
		c2=$('#opt3').val(),
		d2=$('#opt4').val();
	
		$('#a').text($('#opt1 option:selected').text());
		$('#b').text($('#opt2 option:selected').text());
		$('#c').text($('#opt3 option:selected').text());
		$('#d').text($('#opt4 option:selected').text());

		ans2 = a2;
		ans3 = b2;
		ans4 = c2;
		ans5 = d2;
	
		if (a2=="hydrosphere" && b2=="biosphere" && c2=="atmosphere" && d2=="geosphere") {
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Great job! Volcanoes and soil are part of the geosphere, rainfall is part of the hydrosphere, plants are part of the biosphere, and air is part of the atmosphere."); ?></p>');
		} else {
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. Volcanoes and soil are part of the geosphere, rainfall is part of the hydrosphere, plants are part of the biosphere, and air is part of the atmosphere."); ?></p>');
		}
	}

	function save() {
		if (answered == 0) {
			saveAnswer('earth-materials-and-systems-qc2-a', ans1);
			saveAnswer('earth-materials-and-systems-qc2-b', ans2);
			saveAnswer('earth-materials-and-systems-qc2-c', ans3);
			saveAnswer('earth-materials-and-systems-qc2-d', ans4);
			saveAnswer('earth-materials-and-systems-qc2-e', ans5);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "6.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	
	function checkNull() {
		checkAnswer = $('input:checkbox:checked').length;
		//alert($('#opt1 option:selected').val());
		if (checkAnswer < 1 || $('#opt1 option:selected').val()==1 || $('#opt3 option:selected').val()==1 || $('#opt2 option:selected').val()==1 || $('#opt4 option:selected').val()==1 ) { nullAnswer = true; }
	}
	</script>
	<script src="scripts/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
