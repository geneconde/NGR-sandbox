<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/19/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }
h1 { color: #003399; }
#answer { display: none; }
#answer p { text-align: center; }
#choices { float:left; width: 100%; text-align: left; margin: 10px 15px; }
#answer-icon1 { display:inline-block; height: 30px; margin-right: 10px; }
.pic { height: 260px; width: 431px; margin: 0 auto; }
.pic img { height: 100%; margin-top: 20px; }
#buttons .next { display: none; }

input[type="radio"] { display:none; }
input[type="radio"]:checked + label span { background:url('images/19/checked3.png') no-repeat; }
label { vertical-align: top; line-height: 36px; cursor: pointer; font-size: 24px; }
input[type="radio"] + label span {
    display:inline-block;
    width:30px;
    height:30px;
    background:url('images/19/unchecked3.png') no-repeat;
    cursor:pointer;
	margin-right: 15px;
}

html[dir="rtl"] #choices { text-align: right; }
html[dir="rtl"] input[type="checkbox"] + label span { float: right; }
html[dir="rtl_es"] #choices { margin: 0; }
html[dir="rtl_es"] h1 { padding-bottom: 0; }
html[dir="rtl_es"] .pic img { margin-top: 0;}
html[dir="rtl_es"] h2 { font-size: 23px;}
html[dir="rtl_es"] label { font-size: 21px;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("Due to the number of volcanic eruptions and earthquakes, the Pacific &#34;Ring of Fire&#34; is the most common place for tsunamis to happen. Which true statement can we infer from this information?"); ?></h2>
				<div id="choices">
					<input type="radio" name="choices" id="a">
					<label for="a"><span></span>A. <?php echo _("Some natural hazards are more likely to occur than others in a given region."); ?></label><br>
					<input type="radio" name="choices" id="b">
					<label for="b"><span></span>B. <?php echo _("Some kinds of natural hazards only happen in a certain region."); ?></label><br>
					<input type="radio" name="choices" id="c">
					<label for="c"><span></span>C. <?php echo _("Humans cannot eliminate the hazards but can take steps to reduce their impacts."); ?></label><br>
					<input type="radio" name="choices" id="d">
					<label for="d"><span></span>D. <?php echo _("Humans can eliminate the hazards and take steps to reduce their impacts."); ?></label>
				</div>
				<div class="pic">
					<img src="images/19/pic.jpg">
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p><span id="textanswer1"></span></p>
				<p><img src="" id="answer-icon1"><span id="answer1"></span></p>
				<div class="pic">
					<img src="images/19/pic.jpg">
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("The ring of fire"); ?></strong></section></section>
	<script>
	var answer;
	var answered = 1;
	var textstr = '';
	var nullAnswer = false;
	$(document).ready(function() {
		/* Back Screen */
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = '18.php';
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');			
					$('#answer2').removeClass('red');
					$('#answer2').removeClass('green');
					$('#answer-icon1').removeClass('img-align');
					$('#answer-icon2').removeClass('img-align');
				});
			}
		});
		
		/* Check Answer */
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answer."); ?>");
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){
					$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
					$('#answer').fadeIn(); 
					if($('#a').is(':checked')) {
						textstr = '<?php echo _("Correct. Tsunamis are triggered by underwater volcanoes and earthquakes. The \"Ring of Fire\" shows the region that this happens often and will most likely cause a tsunami."); ?>';
						$('#textanswer1').text('<?php echo _("A. Some natural hazards are more likely to occur than others in a given region."); ?>');
						$('#answer-icon1').attr("src", "images/19/correct.png");
						$('#answer1').addClass('green');
						answer = "A";
					} else {
						textstr = '';
						if($('#b').is(':checked')) {
							textstr = "<?php echo _("No, this is not true; underwater volcanoes and earthquakes and therefore tsunamis could happen anywhere- not just in the Ring of Fire."); ?>";
							$('#textanswer1').text('<?php echo _("B. Some kinds of severe weather only happen in a certain region."); ?>');
							answer = "B";
						} else if ($('#c').is(':checked')) {
							textstr = "<?php echo _("Not quite, it is correct – but we cannot infer this from this information."); ?>";
							$('#textanswer1').text('<?php echo _("C. Humans cannot eliminate the hazards but can take steps to reduce their impacts."); ?>');
							answer = "C";
						} else if ($('#d').is(':checked')) {
							textstr = "<?php echo _("No, this is not true. People cannot eliminate natural hazards, at best we can predict them."); ?>";
							$('#textanswer1').text('<?php echo _("D. Humans can eliminate the hazards and take steps to reduce their impacts."); ?>');
							answer = "D";
						}
						$('#answer-icon1').attr("src", "images/19/wrong.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					
					if (answered == 0) {
						saveAnswer('natural-hazards-qq6-a', answer);
						answered = 1;
					}
				}); // end question fade
			} // end else
		}); // end check answer
	}); // end doc ready

	function checkNull() {
		if(!$('#a').is(':checked') && !$('#b').is(':checked') && !$('#c').is(':checked') && !$('#d').is(':checked')) nullAnswer = true;
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
