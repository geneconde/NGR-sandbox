<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<html lang="en">
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
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
/* h1 { color: #000; } */
.bg { z-index: 1 !important; }
.wrap { border-color: #afa583; }
.bg { background-image: url(images/11/bg.jpg); }
#questions h2 { margin:0; }
#question1 .ac-custom { padding: 0; }
#question1 .ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
#question1 .ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="checkbox"]:checked + label { color: #e17523; }
#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -9px; }
#question1 .ac-custom label::before { border: 2px solid #e17523; }
#question1 .ac-custom svg path { stroke: #e17523; }
#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question1 li { padding: 12px 0; }

#question2 ol { margin: 0 0 0 20px; padding: 0; }
#question2 li { padding: 5px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #e17523; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #e17523; }
#question2 .ac-custom svg path { stroke: #e17523; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question2 .ac-custom li { margin:0; }
#question2 li { width:600px; }
#question2 li:nth-child(1) { width:100%; }
#question2 li:nth-child(2) { width:580px; }
#question2 li:nth-child(3) { width:580px; }
#buttons .next { display: none; }
#answers { display: none; }
#answers p { text-align: center; }
/* #question1 .ac-custom svg:last-child { display:none; } */
/* #question2, #answer2 { margin-top: 25px; } */
img.next-toggle { display: none; }

<?php if($language == "es_ES") { ?>
	#question2 .ac-custom label { font-size: 22px; }
<?php } ?>

html[dir="rtl"] .ac-swirl label::before { right: 0; margin-top: -15px; }
html[dir="rtl"] .ac-custom svg { right: 36px; margin-top: -8px; }
html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 35px; margin-top: -17px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] .ac-custom label { padding: 0 85px 0 0; }
html[dir="rtl"] #question2 ol { margin: 0 22px 0 0; }
html[dir="rtl"] #question2 li:nth-child(2) { width: 100%; }
html[dir="rtl"] #question2 li:nth-child(3) { width: 100%; }
    <?php if ($language == 'es_ES') : ?>
    <?php endif; ?>        
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, #answer  {
		    padding-top: 50px;
		}
		ol span {
		    font-size: 20px;
		    line-height: 23px;
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4, #answer {
		    padding-top: 60px !important;
		}
   	}
	i.fa.fa-arrow-left, i.fa.fa-arrow-right, i.fa.fa-comment, i.fa.fa-question {
	    position: relative;
	    top: 6px;
	}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #4"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Which of the following ideas is <span class='blink'>not</span> an essential part of natural selection?"); ?></h2>	
					<section>
						<form class="ac-custom ac-radio ac-fill" autocomplete="off">
							<ol class="cross-custom">
								<li id="cross1"><input id="a1" name="q1" type="radio">
									<label for="a1"><span>A. <?php echo _("Populations display inherited variations for nearly every trait."); ?></span></label>
								</li>
								<li id="cross2"><input id="b1" name="q1" type="radio">
									<label for="b1"><span>B. <?php echo _("Species produce very large numbers of offspring."); ?></span></label>
								</li>
								<li id="cross3"><input id="c1" name="q1" type="radio">
									<label for="c1"><span>C. <?php echo _("There is a competition for survival in nature."); ?></span></label>
								</li>
								<li id="cross4"><input id="d1" name="q1" type="radio">
									<label for="d1"><span>D. <?php echo _("Every few million years, a comet strikes the earth."); ?></span></label>
								</li>
							<ol>
						</form>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. The example of the peppered moths living near English industrial cities demonstrates that:"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio">
									<label for="a2"><span>A. <?php echo _("A change in an environment can result in the evolution of species living there."); ?></span></label>
									
								</li>
								<li><input id="b2" name="q2" type="radio">
									<label for="b2"><span>B. <?php echo _("The environment near these cities has always favored dark colored moths."); ?></span></label>
									
								</li>
								<li><input id="c2" name="q2" type="radio">
									<label for="c2"><span>C. <?php echo _("Evolution occurs so slowly that it is not possible to determine that it has happened in less than a million years."); ?></span></label>
									
								</li>
								<li><input id="d2" name="q2" type="radio">
									<label for="d2"><span>D. <?php echo _("None of the above."); ?></span></label>
									
								</li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following ideas is <span class='blink'>not</span> an essential part of natural selection?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. The example of the peppered moths living near English industrial cities demonstrates that:"); ?></h2>	
					<div class="ansPos">
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
						<div class="feedback"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;
	var a1 = $('#a1'),
	b1 = $('#b1'),
	c1 = $('#c1'),
	d1 = $('#d1');

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');
		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>A. <?php echo _("Populations display inherited variations for nearly every trait."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope. It's true, but this is an important part of natural selection."); ?></p>");
			ans2 = 'A';
		}
		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Species produce very large numbers of offspring."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Natural selection depends upon this one."); ?></p>');
			ans2 = 'B';
		}
		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>C. <?php echo _("There is a competition for survival in nature."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not this one. This is a key point in natural selection."); ?></p>');
			ans2 = 'C';
		}
		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Every few million years, a comet strikes the earth."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Bingo! While this is true, and does affect evolution, it's not part of the natural selection idea."); ?></p>");
			ans2 = 'D';
		}
	//});
		//$('#question2').find('input[type=radio]').on('click', function() {
		//	var me = $(this).attr('id');
		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("A change in an environment can result in the evolution of species living there."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. The traits nature selects for or against can change as the environment changes."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("The environment near these cities has always favored dark colored moths."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. When air pollution was reduced during the last few decades, tree bark became lighter in color. As a result, lighter colored moths were favored."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("Evolution occurs so slowly that it is not possible to determine that it has happened in less than a million years."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. In species with short generational times, such as moths and other insects, evolution can often be seen in just a few decades or less."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("None of the above."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. The traits nature selects for or against can change as the environment changes. The environment near cities does not favor dark colored moths, and evolution in species with short generational times can often be seen in just a few decades or less."); ?></p>');
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
			saveAnswer('changing-life-forms-qc3-a', ans1);
			saveAnswer('changing-life-forms-qc3-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "10.php#screen2";
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
