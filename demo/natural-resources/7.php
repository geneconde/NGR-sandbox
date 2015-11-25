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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
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
.bg { background-image: url(images/7/bg.jpg); }

#question1 ul { list-style: none; float: left; padding: 20px 0 0 60px; }
#question1 li { font-size: 24px; }
#question1 input[type=radio] { display: none; }
#question1 label { font-size: 24px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; border-radius: 0px !important; width: 180px; }
#question1 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #780046; -webkit-backface-visibility: hidden; }
#question1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question1 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #780046; -webkit-backface-visibility: hidden;  ;}
#question1 input[type="radio"] + label { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; }
#question1 input[type="radio"]:checked + label {}

#box { float: right; margin-right: 20px; width: 400px; }
#box .info { padding-bottom: 20px; padding-top: 0; color: #BD6F6F; font-size: 20px; text-align: center; }
#hexaflip { margin: 0 auto; }
.hexaflip-cube .hexaflip-side { width: 101%; }

#question2 ol { margin: 0 0 0 55px; padding: 0; }
#question2 li { padding: 7px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #294D11; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #294D11; }
#question2 .ac-custom svg path { stroke: #294D11; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answers { display: none; }
#answers p { text-align: center; }

#answer1 .image { float: left; margin: 0 20px 0 0; }
#answer1 .image img { width: 140px; height: 140px; border-radius: 0 !important; }
#answer1 .placeholder { float: left; width: 685px; }
#answer1 p { text-align: left; }
#answer1 .clear { width: 100%; margin: 0 auto; }
#answer1 .feedback { margin: 0; }

#answer2 .feedback { margin: 0 auto; width: 800px; }
#buttons .next { display: none; }
#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] #question1 ul { float: right; padding: 20px 0 0 60px; }
html[dir="rtl"] #box { float: right; margin-right: 0; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 20px; }
html[dir="rtl"] #question2 .ac-custom svg { right: 23px; }
html[dir="rtl"] #answer1 p { text-align: right; }
html[dir="rtl"] #answer1 .image { float: right; margin: 0 0 0 20px; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#answer1 .placeholder {
	float: left;
	width: 557px;
	}
	.red { width: 80%; }
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Which of the following energy resources is <span class='blink'>not</span> an alternative to fossil fuels?"); ?></h2>	

					<ul>
						<li>A. <?php echo _("Nuclear energy"); ?></li>
						<li>B. <?php echo _("Energy from natural gas"); ?></li>
						<li>C. <?php echo _("Solar Energy"); ?></li>
						<li>D. <?php echo _("Energy from wind"); ?></li>
					</ul>

					<div id="box">
						<p class="info"><?php echo _("Click, hold and drag up or down"); ?></p>
						<div id="hexaflip"></div>
					</div>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. There is a larger demand for energy resources now than in the past because now the world:"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q" type="radio"><label for="a"><span>A. <?php echo _("Has a larger resource base."); ?></span></label></li>
								<li><input id="b" name="q" type="radio"><label for="b"><span>B. <?php echo _("Uses fewer industry products now."); ?></span></label></li>
								<li><input id="c" name="q" type="radio"><label for="c"><span>C. <?php echo _("Has more people than before."); ?></span></label></li>
								<li><input id="d" name="q" type="radio"><label for="d"><span>D. <?php echo _("Does not need as much energy."); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following energy resources is <span class='blink'>not</span> an alternative to fossil fuels?"); ?></h2>	
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
					<h2><?php echo _("Question B. There is a larger demand for energy resources now than in the past because now the world:"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Storing energy..."); ?></strong></section></section>

	<script src="scripts/hexaflip.js"></script>

	<script>
	var hexa,
		images = [
			'./images/others/a.png',
			'./images/others/b.png',
			'./images/others/c.png',
			'./images/others/d.png'
		];

	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 140 });

	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("Has a larger resource base."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the resources are decreasing because people are using them up. Also, human population is larger now."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("Uses fewer industry products now."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, people use a lot of industry products today, but natural resources are needed to make these products. There is now a large population with limited resources."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("Has more people than before."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes, there is a larger population today. With advances in medicine and technology, people do not die as quickly as they did before. Meanwhile, all the people use up more and more resources."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("Does not need as much energy."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, there are more people in the world today and they do use up a lot of energy. So the population is growing with very limited resources to use."); ?></p>');
			ans2 = 'D';
		}
	});

	$('a.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
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
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			$('#answer1').find('.image').html('<img src="images/others/a.png">');
			$('#answer1').find('.answer').html('<p>A. <?php echo _("Nuclear energy"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Nuclear energy is a clean, safe alternative that does not burn fuel like coal. There are no pollutants released into the air."); ?></p>');
			ans1 = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			$('#answer1').find('.image').html('<img src="images/others/b.png">');
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Energy from natural gas"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes. Coal, natural gas, and petroleum are fossil fuels. Other energy sources are energy source alternatives."); ?></p>');
			ans1 = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			$('#answer1').find('.image').html('<img src="images/others/c.png">');
			$('#answer1').find('.answer').html('<p>C. <?php echo _("Solar Energy"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Solar energy is the radiation from the sun that hits the earth and is converted into heat and electricity. It does not cause pollution when it is produced or used."); ?></p>');
			ans1 = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			$('#answer1').find('.image').html('<img src="images/others/d.png">');
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Energy from wind"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Converting energy from wind (e.g. heat, electricity) does not burn fossil fuel. It can be noisy but it is a clean alternative."); ?></p>');
			ans1 = 'D';
		}

		if (answered == 0) {
			saveAnswer('natural-resources-qc2-a', ans1);
			saveAnswer('natural-resources-qc2-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "6.php#screen2";
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
