<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
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
.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; overflow: hidden; }
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
#question2 ul { list-style: none; width: 440px; padding: 0; margin: 0 0 0 40px; float: left; }
#question2 li { font-size: 24px; }
#box { width: 300px; text-align: center; float: left; }
#box .info { font-size: 24px; color: #971714; }
#hexaflip { display: inline-block; margin-top: 20px; }
#answers { display: none; }
#answers p { text-align: center; }
#question2, #answer2 { margin-top: 25px; }
#answer1 .placeholder { width: 700px; margin: 0 auto; }
#answer2 .image { float: left; margin: 20px 20px 0 0; }
#answer2 h2 + div { margin: 0 60px; }
#answer2 .image img { width: 140px; height: 140px; border-radius: 0; }
#answer2 .placeholder { float: left; margin-top: 20px; width: 565px; }
#answer2 p { text-align: left; }
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	#box .info { font-size: 20px; }
	h2 { font-size: 23px; }
	#question2 li, .ac-custom label { font-size: 22px; }
<?php } ?>

html[dir="rtl"] .ac-custom label { padding:0 100px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 60px; }
html[dir="rtl"] .ac-custom svg { right: 62px; }
html[dir="rtl"] #question2 ul { float:right;margin:0 10px 0 0; }
html[dir="rtl"] #box { float:right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div id="question1">
					<h2><?php echo _('Question A. Which of the following events would be <span class="blink">least</span> expected in a tropical rainforest?'); ?></h2>	
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span>A. <?php echo _("During the winter, trees lose their leaves and plants stop growing."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span>B. <?php echo _("Large trees that support complex communities of birds and insects."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span>C. <?php echo _("Human settlers cut down and burn large areas of trees for farmland."); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span>D. <?php echo _("Heavy thunderstorms that occur nearly every day during the rainy season."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>
				<div id="question2" class="clearfix">
					<h2><?php echo _("Question B. Which of the following pairs of names actually refer to the same plant community? Rotate or flip the 3D box below either up or down to set your answer."); ?></h2>	
					<ul>
						<li>A. <?php echo _("Desert and grassland"); ?></li>
						<li>B. <?php echo _("Taiga and boreal forest"); ?></li>
						<li>C. <?php echo _("Tropical rainforest and temperate desert"); ?></li>
						<li>D. <?php echo _("Tundra and taiga"); ?></li>
					</ul>
					<div id="box">
						<p class="info"><?php echo _("Click, hold and drag up or down"); ?></p>
						<div id="hexaflip"></div>
					</div>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _('Question A. Which of the following events would be <span class="blink">least</span> expected in a tropical rainforest?'); ?></h2>	
					<div class="placeholder">
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
						<div class="feedback"></div>
					</div>
				</div>					
				<div id="answer2">
					<h2><?php echo _("Question B. Which of the following pairs of names actually refer to the same plant community? Rotate or flip the 3D box below either up or down to set your answer."); ?></h2>	
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
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>
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
	</script>
	<script>

	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>A. <?php echo _("During the winter, trees lose their leaves and plants stop growing."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The growing conditions are the same year-round in a rainforest."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Large trees that support complex communities of birds and insects."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Rainforests are full of large trees with lots of animals."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>C. <?php echo _("Human settlers cut down and burn large areas of trees for farmland."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. People actually do \"slash and burn\" many rainforest trees."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Heavy thunderstorms that occur nearly every day during the rainy season."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Periods of daily rain is a characteristic of all tropical rainforests."); ?></p>');
			ans1 = 'D';
		}
	});

	function save() {
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			$('#answer2').find('.image').html('<img src="images/others/a.png">');
			$('#answer2').find('.answer').html('<p><?php echo _("Desert and grassland"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry, grasslands get way more rain than deserts."); ?></p>');
			ans2 = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			$('#answer2').find('.image').html('<img src="images/others/b.png">');
			$('#answer2').find('.answer').html('<p><?php echo _("Taiga and boreal forest"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes! Taiga and boreal forest are pretty much the same."); ?></p>');
			ans2 = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			$('#answer2').find('.image').html('<img src="images/others/c.png">');
			$('#answer2').find('.answer').html('<p><?php echo _("Tropical rainforest and temperate desert"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No... These two couldn't be much more different."); ?></p>");
			ans2 = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			$('#answer2').find('.image').html('<img src="images/others/d.png">');
			$('#answer2').find('.answer').html('<p><?php echo _("Tundra and taiga"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not this time. Tundra has no trees. Taiga is full of trees."); ?></p>');
			ans2 = 'D';
		}

		if (answered == 0) {
			saveAnswer('biodiversity-qc1-a', ans1);
			saveAnswer('biodiversity-qc1-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if($('#questions').is(':visible')) {
			document.location.href = "4.php#screen3"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
		
	$('.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 1) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
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
