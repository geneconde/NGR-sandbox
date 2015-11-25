<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'air-around-us-qc3-a');
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

	<script type="text/javascript"
	  src="https://www.google.com/jsapi?autoload={
		'modules':[{
		  'name':'visualization',
		  'version':'1',
		  'packages':['corechart']
		}]
	  }"></script>

	<script type="text/javascript">
      google.setOnLoadCallback(setOptions);
      google.setOnLoadCallback(drawChartA);
	  
	  var options;
	  
	  function setOptions(){
		  options = {
			legend: 'none',
			chartArea: { top: 10, left: 40, width: '75%', height: '75%', backgroundColor: { stroke: '#000', strokeWidth: 1 }},
			pointShape: 'circle',
			pointSize: 3,
			reverseCategories: true,
			width: 250,
			height: 250,
			lineWidth: 2,
			hAxis: { title: '',  titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false},   minValue: 1.40, maxValue:0.80 , ticks: [{ v:1.4, f:'1.40'}, { v:1.30, f:''}, { v:1.2, f:'1.20'}, { v:1.10, f:''}, { v:1, f:'1.00'}, { v:0.90, f:''}, { v:0.8, f:'0.80'}]},
			vAxis: { title: '<?php echo _('Temperature'); ?>(°C)', titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false},  minValue: 0, maxValue: 240, ticks: [0, 40, 80, 120, 160, 200]},	
			colors: [ 'blue'],
			interpolateNulls: true,
			curveType: 'function'
        };		  
	  }
	  
      function drawChartA() {
        var data = google.visualization.arrayToDataTable([
          ['Time', 'Object C'],
          [1.4,  	0],
          [1.28,  	20],
          [1.15,  	50],
          [1,  	100],
          [0.80,  	200]
        ]);
        var chart = new google.visualization.LineChart(document.getElementById('figure'));
        chart.draw(data, options);
      }	   
	  
    </script>

	<style>
		.container_12 .grid_12 {
		    width: 98.0%;
		    margin-top: 13px;
		}	
		h1 { color: #fe8a17; }
		h2 { color: #00a49d; }
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
		.wrap { border-color: #78DFFE; }
		.bg { background-image: url(assets/9/bg.jpg); }
		.container_12 > div { line-height: 25px;}
		.wrap > .bg { overflow: hidden !important; }
		#buttons .next { display: none; }
		
		#answers p { margin: 0; }
		
		.ac-custom input[type="radio"]:checked + label { color: #31b573; } /* Change color */
		.ac-custom label { color: #000; padding-left: 49px; line-height: 20px; } /* Change color */
		.ac-custom label::before { background-color: #31b573; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		.ac-custom svg path { stroke: #31b573; } /* Change stroke-color */
		.ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }
		.ac-custom li {padding: 5px 0;}

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { background-color: #31b573; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		html[dir=rtl] .ac-custom svg { right: 3px; left: 98% /* for Safari */ }
		
		.chart-container {float:right;}
		.figure {height: 230px; background-repeat: no-repeat; background-size: 100%; position: relative; }

		#question2 > h2 { width: 54%;}
		.img-container { padding: 0; margin: 0;}
		.img-container div { display: inline-block; float: left;}
		#questions .img-container { width: 44% !important; }
		#qimage { width: 44%; height: 100%;}
		#qimage img { height: auto;}
		#sortable-container { width: 50%; position: relative;}
		#sortable { padding: 10px;}
		#sortable img { margin: 1px;border: 2px dashed #438A96; height: 55px;}

		#answers img{ margin-top: 0;}
		#answers #sortable { padding-top: 0;}

		#sortable { width: 100%; padding: 10px 0; }
		#sortable li { margin-bottom: 1px; border-radius: 5px; cursor: move; }
		#sortable li:last-child { margin-bottom: 0; }

		#hLabel { font: 11px 'Arial'; position: absolute; top: 215px; left: 95px;}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#sortable img { height: 63px; }
			#qimage img { height: 260px; }
	    }
	    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
	    	#question2 #qimage img { margin-top: 12px; }
	    	#qimage img { height: 230px; }
	    	#sortable img { height: 56px; }
	    }

		<?php if ($language == 'es_ES' || $language == 'en_US' || $language == 'zh_CN') : ?>
			h2.grid_8 {  line-height: 22px; }
			span { font-size: 21px; }
			@media only screen and (max-width: 1250px){
				span { font-size: 20px; }
				h2.grid_8 {
				    line-height: 22px;
				    font-size: 21px;
				}
				#answer .container_12 .grid_12 {
				    width: 98.0% !important; 
				    margin-top: 4px !important;
				}
				#answer2 h2.grid_12 {
				    line-height: 20px !important;
				    margin: 5px !important;
				}
				#answer2 #qimage img {
				    height: 207px !important;
				}
				.container_12 .grid_12 {
				    width: 98.0%;
				    margin-top: 7px;
				}
				#answer1 h2.grid_12, #answer2 h2.grid_12 {
				    font-size: 21px;
				    line-height: 25px;
				}	
				div#answers {
				    font-size: 21px;
				}	
				#qimage img {
				    height: 210px;
				}
				#sortable img {
					height: 50px !important; 
				}
			}
			<?php if ($language == 'es_ES') : ?>
				h2.grid_8 {  font-size: 21px; }
				span { font-size: 21px; }
				@media only screen and (max-width: 1250px){
					span { font-size: 20px !important; }
					h2.grid_8, .grid_12 {
					    line-height: 20px !important;
					    font-size: 20px !important;
					}
					#sortable img {
					    height: 50px !important; 
					}
					h1.grid_12 {
					    font-size: 32px !important;
					}
				}
			<?php endif; ?>
		<?php endif; ?> 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?></h1>

						<div id="question1">
							<h2 class="grid_8"><?php echo _("Question A. Look at the graph to the right showing the relationship between temperature and the density of air. Which of the following statements about the relationship is true?"); ?></h2>
						
							<div class="chart-container grid_4  ">
								<div id ="figure" class="figure">
								</div>
								<p id="hLabel"><?php echo _("Density"); ?>(kg/m<sup>3</sup>)</p>
							</div>
							
							<div class="grid_8">
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("Cold air generally has less density than warm air."); ?></span></label></li>
										<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("Warm air generally has less density than cold air."); ?></span></label></li>
										<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("Warm air exerts greater pressure on Earth’s surface than cold air."); ?></span></label></li>
										<li><input id="d" name="q" type="radio"><label for="d"><span><?php echo _("Cold air exerts less pressure on Earth’s surface than warm air."); ?></span></label></li>
									<ol>
								</form>
							</div>
							
						</div>

						<div id="question2">
							<h2 class="grid_8" ><?php echo _("Question B. Examine the picture in the box to the right. It contains a cross section of Earth's atmosphere from the ground up to several thousand feet. The box, alongside the picture, represents varying concentrations of molecules of air in a given space. Molecules that are closer together represent atmospheric gas that is more dense than molecules that are further apart. Think about how density of Earth’s atmosphere changes as elevation increases or decreases. Use what you know to order the boxes from lowest density to highest density alongside the picture."); ?></h2>
							<div class="grid_4 img-container">
								<div id="qimage">
									<img src="assets/9/9.jpg" />
								</div>
								<div id="sortable-container">
									<ul id="sortable">
										<li id="1"><img src="assets/9/a.jpg" /></li>
										<li id="2"><img src="assets/9/b.jpg" /></li>
										<li id="3"><img src="assets/9/c.jpg" /></li>
										<li id="4"><img src="assets/9/d.jpg" /></li>
									</ul>
								</div>
							</div>
						</div>

					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Look at the graph below showing the relationship between temperature and the density of air. Which of the following statements about the relationship is true?"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="grid_12 answer"></p>

							<div class="grid_12 feedback"></div>
						</div>
						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. Examine the picture in the box to the right. It contains a cross section of Earth's atmosphere from the ground up to several thousand feet. The box, alongside the picture, represents varying concentrations of molecules of air in a given space. Molecules that are closer together represent atmospheric gas that is more dense than molecules that are further apart. Think about how density of Earth’s atmosphere changes as elevation increases or decreases. Use what you know to order the boxes from lowest density to highest density alongside the picture."); ?></h2>
							<div class="grid_6">
								<div class="grid_12 img-container"></div>
							</div>
							<div class="grid_6 feedback"></div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Reading barometer..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	
	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		$('#question1').find('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

			if (id == 'a') {
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! Cold air is generally more dense than warm air."); ?></p>");

				answer1 = 'A';
			}

			if (id == 'b') {
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct. Warm air generally has less density than cold air."); ?></p>");
				
				answer1 = 'B';
			}

			if (id == 'c') {
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No! Warm air is less dense than cold air. Therefore it exerts less pressure on Earth’s surface than cold air."); ?></p>");

				answer1 = 'C';
			}

			if (id == 'd') {
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Cold air is more dense than warm air. Therefore it exerts more pressure on Earth’s surface than warm air."); ?></p>");

				answer1 = 'D';
			}
		});

		function save() {
			$('#answers .img-container').html($('#questions .img-container').html());

			answer2 = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString(); //
		
			if (answer2 == '3201') {
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct. The density of Earth's atmosphere decreases as elevation increases."); ?></p>");
			} else {
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! The closer the molecules are in the box, the higher the density is. The density of the gases in Earth’s atmosphere decreases as elevation increases."); ?></p>");
			} 

			if (answered == 0) {
				saveAnswer('module-qc3-a', answer1);
				saveAnswer('module-qc3-b', answer2);

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('.checkanswer').fadeOut(function() { $('.next').fadeIn(); });

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();
					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "8.php";
			} else if ($('#answers').is(':visible')) {
				$('.next').fadeOut(function() { $('.checkanswer').fadeIn(); });

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();
					window.location.hash = '';
				});
			}
		});

		$("#sortable").sortable({ scroll: false, containment: "#sortable-container" });

	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
