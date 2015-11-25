<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qc3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<script type="text/javascript"
	  src="https://www.google.com/jsapi?autoload={
		'modules':[{
		  'name':'visualization',
		  'version':'1',
		  'packages':['corechart']
		}]
	  }"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
      google.setOnLoadCallback(setOptions);
      google.setOnLoadCallback(drawChartA);
      google.setOnLoadCallback(drawChartB);
      google.setOnLoadCallback(drawChartC);
      google.setOnLoadCallback(drawChartD);
	  
	  var options;
	  
	  function setOptions(){
		  options = {
			legend: 'none',
			chartArea: { top: 10, left: 30, width: '85%', height: '75%'},
			width: 350,
			height: 200,
			lineWidth: 2,
			hAxis: { title: "<?php echo _('Time'); ?> ",  titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false}, gridlines: { color:'transparent'}, maxValue: 60, ticks: [0,10,20,30,40,50,60]},
			vAxis: { title: "<?php echo _('Position') ?> ", titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false},  maxValue: 12, ticks: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]},	
			colors: [ 'green', 'red' ],
			interpolateNulls: true
        };		  
	  }
	  
      function drawChartA() {
        var data = google.visualization.arrayToDataTable([
          ["<?php echo _('Time'); ?> ", 'Object C', 'Object D'],
          [0,  	7.5,      0],
		  [60, 7.5,	6]
        ]);
        var chart = new google.visualization.LineChart(document.getElementById('chartA'));
        chart.draw(data, options);
      }	  
	  
      function drawChartB() {
        var data = google.visualization.arrayToDataTable([
          ["<?php echo _('Time'); ?> ", 'Object C', 'Object D'],
          [0,  	2,      0],
		  [60, 8,	6]
        ]);
        var chart = new google.visualization.LineChart(document.getElementById('chartB'));
        chart.draw(data, options);
      }	  
	  
      function drawChartC() {
        var data = google.visualization.arrayToDataTable([
          ["<?php echo _('Time'); ?> ", 'Object C', 'Object D'],
          [0,  	11, 9],
		  [60, 5, 3]
        ]);
        var chart = new google.visualization.LineChart(document.getElementById('chartC'));
        chart.draw(data, options);
      }	  
	  
      function drawChartD() {
        var data = google.visualization.arrayToDataTable([
          ["<?php echo _('Time'); ?> ", 'Object C', 'Object D'],
          [0,  	2,      5],
		  [50, 12,	null],
		  [60,  ,	11]
        ]);
        var chart = new google.visualization.LineChart(document.getElementById('chartD'));
        chart.draw(data, options);
      }	  
	  
    </script>

	<title><?php echo _("Motion"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #44311f; }
		h2 { color: #88633E; }
		
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }
		
		.grid_5 { margin: 10px;}

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label > div.chart {
			border: 4px solid transparent;
			border-radius: 10px;
			width:350px;
			height:200px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label div.chart {
			border: 4px solid #ff9a00; 
			border-radius: 10px;
			
			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question .grid_5 { margin-left:35px; margin-right: 50px;}

		#question span {
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}

		#question input[type="radio"]:checked + label span { color: #777; }
		#answer .answer { clear: both;}
		#answer .answer div  div:first-child { margin: 0 auto; border: 1px solid #000;}

		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) {
    	.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
    }
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
    	div.grid_5 { width: 40% !important; margin-left: 18px !important; }
    }
	</style>
</head>
 
<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?></h1>
						<h2 class="grid_12"><?php echo _("Take a look at the graphs of position versus time below.  Which set shows one object passing another object?"); ?></h2>

						<div class="grid_5">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><div class="chart" id="chartA"></div></label>
						</div>

						<div class="grid_5">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><div class="chart" id="chartB"></div></label>
						</div>

						<div class="grid_5">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><div class="chart" id="chartC"></div></label>
						</div>

						<div class="grid_5">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><div class="chart" id="chartD"></div></label>
						</div>

						<div class="clear"></div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<h2 class="grid_12"><?php echo _("Take a look at the graphs of position versus time below.  Which set shows one object passing another object?"); ?></h2>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer"></div>

						<div class="feedback grid_12"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the graph..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  These lines don’t cross on this graph, so these objects are never at the same position."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No.  These lines are parallel, so they’re never going to cross."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No.  These lines are parallel, so they’re never going to cross."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes!  These lines cross, indicating that the object shown with the green line passes the object shown with the red line."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
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

				$('#question').fadeOut(function() { 

					save();

					$('#answer .answer').html( $('input:radio:checked + label div').html() );					

					
					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "8.php#screen2";
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

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
