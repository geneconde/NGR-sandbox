<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("The Air Around Us"); ?></title>

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
		h1 { color: #fe8a17; margin:0; }
		h2 { color: #00a49d;font-size: 22px; }
		
		.wrap { border-color: #78DFFE; }
		.bg { background-image: url(assets/11/bg.jpg); }
		.wrap > .bg { overflow: hidden !important; }
		#question2 input[type="radio"] { display: none; }
		#question2 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question2 input[type="radio"]:checked + label img { border: 4px solid #31b573; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; }
		#question2 input[type="radio"]:checked + label span { color: #31b573; }
		#question2 span { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; }

		.ac-custom li { padding: 0.2em 0; }
		.ac-custom input[type="checkbox"]:checked + label { color: #31b573; }
		.ac-custom label { color: #000; padding-left: 49px; font-size: 22px; }
		.ac-custom label::before { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #31b573; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer2 p { text-align: left; }

		html[dir=rtl] #answer2 p { text-align: right; }

		#buttons .next { display: none; }
		
		.show_table span { background: #F2EA3F; padding: 2px 10px; text-align: center; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; cursor: pointer; }	
		#answers p { margin: 0; }
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {
			#chart_div { margin-left: -50px; }	
		}

			@media only screen and (max-width: 1250px){
				h2.grid_12 {
				    line-height: 25px;
				    font-size: 21px;
				    margin-top: 0px;
				    margin-bottom: 0px;
				}
				.ac-custom svg {
				    height: 23px;
				    width: 20px;
				    left: 9px;
				    margin-top: -25px !important;
				}
				.ac-custom label::before {
				    border: 2px solid #31b573;
				    height: 28px;
				    width: 34px;
				    margin-top: -18px;
				}
				.ac-custom label {
				    color: #000;
				    padding-left: 49px;
				    font-size: 20px;
				    line-height: 12px;
				}
			}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>


						<div id="question1">
							<h2 class="grid_12"><?php echo _("The data in the table below show some climatic variables (precipitation, minimum temperatures, high temperatures and average temperatures) for a location in Hawaii, United States. Use table and what you know about Earth's atmosphere, check off <span class='blink'>ALL</span> of the true statements about the relationship between temperature and precipitation."); ?></h2>
							<div id="table" class="grid_10 prefix_1 suffix_1">
								<div id="chart_div"></div>
							</div>
							<div class="grid_12">
								<div class="grid_12">
									<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
										
										<ol>
											<li><input id="a1" name="q1" type="checkbox" value="A"><label for="a1"><span><?php echo _("As the air temperature increases, the amount of precipitation decreases."); ?></span></label></li>
											<li><input id="b1" name="q1" type="checkbox" value="B"><label for="b1"><span><?php echo _("As the air temperature decreases, the amount of precipitation decreases."); ?></span></label></li>
											<li><input id="c1" name="q1" type="checkbox" value="C"><label for="c1"><span><?php echo _("The wettest months are also the coolest months in this area."); ?></span></label></li>
											<li><input id="d1" name="q1" type="checkbox" value="D"><label for="d1"><span><?php echo _("The warmest months are also the driest months in this area."); ?></span></label></li>
										<ol>
									</form>
								</div>
							</div>
							
							
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
						
						<h2 class="grid_12"><?php echo _("The data in the table below show some climatic variables (precipitation, minimum temperatures, high temperatures and average temperatures) for a location in Hawaii, United States. Use table and what you know about Earth's atmosphere, check off <span class='blink'>ALL</span> of the true statements about the relationship between temperature and precipitation."); ?></h2>
						
						<div id="answer1">

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
						
							<div class="answer"></div>
							<div class="feedback"></div>
							
							<div class="clear"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		$('.close').click(function() {
			$('#grey').fadeOut();
		});
		
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('input[type=checkbox]').each(function() {
				if ($(this).is(':checked')) {
					$('#answer1 .answer').append("<p>" + $(this).parent().find('span').text() + "</p>");

					answer1 += $(this).val();
				}
			});

			if (answer1 == 'ACD')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! You've selected all the appropriate responses."); ?></p>");

			else if (answer1.indexOf('B') > -1)
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! 2<sup>nd</sup> choice is not a true statement."); ?></p>");			
			else 
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. Some other statements are also true."); ?></p>");

			

			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1); // Correct answer: A
				saveAnswer('module-qc#-b', answer2); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer1 = $('input:checkbox:checked').length;

			if (checkAnswer1 < 1 ) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "10.php#screen3";
			} else if ($('#answers').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn();
					$('.back').fadeIn();
			   	});

				$('#answers').fadeOut(function() {
					
					$('.answer').html('');
					$('.feedback').html('');
					answer1 = '';
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>
	
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      


      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['<?php echo _('Month'); ?>',
          '<?php echo _('Precip (in)'); ?>', 
          '<?php echo _('Min Temp (°F)'); ?>',
          '<?php echo _('AVG TMP (°F)'); ?>',
          '<?php echo _('MAX TMP (°F)'); ?>'],
          
          ['<?php echo _('JAN'); ?>',  3.94,      63.3,		70.6,		77.8],
          ['<?php echo _('FEB'); ?>',  3.19,      62.9,		70.2,		77.6],
          ['<?php echo _('MAR'); ?>',  2.67,      63.7,		71.1,		78.5],
          ['<?php echo _('APR'); ?>',  1.87,      65.4,		72.6,		79.7],
          ['<?php echo _('MAY'); ?>',  1.11,      66.6,		74.6,		81.7],
          ['<?php echo _('JUN'); ?>',  0.48,      69.5,		76.6,		83.6],
          ['<?php echo _('JUL'); ?>',  0.61,      70.8,		77.7,		84.5],
          ['<?php echo _('AUG'); ?>',  0.63,      71.4,		78.5,		85.5],
          ['<?php echo _('SEP'); ?>',  0.75,      71.1,		78.3,		85.6],
          ['<?php echo _('OCT'); ?>',  1.88,      70.0,		77.1,		84.3],
          ['<?php echo _('NOV'); ?>',  3.26,      68.0,		74.8,		81.6],
          ['<?php echo _('DEC'); ?>',  3.94,      63.3,		70.6,		77.8]
        ]);
			
        var options = {
          title: 'MOLOKAI KAUNAKAKAI MOLOKAI AIRPORT, HI US',
          curveType: 'function',
          chartArea: { top: 30, left: 50,  height: '70%', },
          width: 732,
          height: 250,
          pointSize: 3
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
