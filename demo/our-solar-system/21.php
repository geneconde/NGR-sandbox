<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'our-solar-system-qq4-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #735c00; }
		h2 { color: #5949a8; }
		form { clear: both; }
		
		.wrap { border-color: #D16824; }
		.bg { background-image: url(assets/21/bg.jpg); overflow: hidden;}

		.ac-custom li { padding: .2em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #32058D; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #32058D; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #32058D; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #32058D; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#question img, .img-feed img { width: auto; }
		.img-feed img { display: block; }
		.sub-head { display: block; text-align: center; font-size: 20px; }
		.label { padding-top: 70px; font-size: 19px; }
		circle { fill: rgb(238, 20, 229); }

		#buttons .next { display: none; }
		/*<?php if ($language == 'es_ES') : ?>*/
		@media only screen and (max-width: 960px){
			h2 {
			    line-height: 20px;
			}
		}
		/*<?php endif; ?>*/
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?></h1>

						<h2><?php echo _("If another planet were discovered in our system and that planet was found to be approximately 200 million kilometers from the Sun, how many Earth Days would you expect it would take that planet to make one complete revolution around the sun?"); ?></h2>
						<div class="grid_12 graph">
							<div id="series_chart_div" style="width: 100%;"></div>
						</div>	
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("100-200"); ?></span></label></li>
								<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("250-350"); ?></span></label></li>
								<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("300-350"); ?></span></label></li>
								<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("500-600"); ?></span></label></li>
							<ol>
						</form>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<div id="series_chart_div" style="width: 100%;"></div>
						<p class="answer"></p>
			
						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="22.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Revolving around the sun..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. You've under-estimated the number of Earth days required for that planet to orbit the Sun. At a distance of 200 million kilometers, a planet would take approximately 500 to 600 Earth days to orbit the Sun."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. You've under-estimated the number of Earth days required for that planet to orbit the Sun. At a distance of 200 million kilometers, a planet would take approximately 500 to 600 Earth days to orbit the Sun."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. You've under-estimated the number of Earth days required for that planet to orbit the Sun. At a distance of 200 million kilometers, a planet would take approximately 500 to 600 Earth days to orbit the Sun."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! At a distance of 200 million kilometers, a planet would take approximately 500 to 600 Earth days to orbit the Sun."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('our-solar-system-qq4-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#question').fadeOut(function(){ 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "20.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>
	<script>
		    google.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

      var data = google.visualization.arrayToDataTable([
        ['Planet', ['<?php echo _("Distance from the Sun"); ?>'], ['<?php echo _("Number of Earth Days"); ?>']],
        ['Mercury', 60, 90],
        ['Venus', 110, 210],
        ['Earth', 150, 380],
        ['Mars', 230, 710]
      ]);

      var options = {
        title: '<?php echo _("Relationship between distance from the Sun and number of Earth days to orbit around the Sun"); ?>',
        hAxis: {title: '<?php echo _("X-axis = Distance (Millions of Kilometers) from the Sun"); ?>'},
        vAxis: {title: '<?php echo _("Y-axis = Number of Earth Days to complete orbit around Sun"); ?>'},
        legend: 'none',  
        sizeAxis: {maxSize: 10},
        bubble: {textStyle: {fontSize: 6}}
      };

      var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div'));
      chart.draw(data, options);
    }
	</script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
