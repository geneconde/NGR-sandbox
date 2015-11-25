<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq6-a');
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

    <script type="text/javascript">
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time', "<?php echo _('Object A'); ?>", "<?php echo _('Object B'); ?>", "<?php echo _('Object C'); ?>"],
          [0,  	2,      5,	8],
          [10,  null,	null,	null],
          [20,  null,	null,	null],
          [30,  null,	null,	null],
		  [40, 	null,	null,	null],
		  [50, 	12,		null, null],
		  [60, 	  ,		11,	8]
        ]);

        var options = {
			legend: {
				position: 'bottom',
				textStyle: {  fontSize: 10, bold: true},
				alignment: 'start'
			},
			chartArea: { top: 10, left: 50, width: '85%', height: '80%',   backgroundColor: { stroke: '#000', strokeWidth: 1 } },
			width: 470,
			height: 330,
			lineWidth: 1,
			pointSize: 8,
			pointShape: 'square',
			hAxis: { title: "<?php echo _('Time in seconds') ?> ", titleTextStyle: {  bold: true, italic: false}, textStyle: {  bold: true, italic: false}, maxValue: 60, ticks: [0,10,20,30,40,50,60], gridLines: { count: 14 }},
			vAxis: { title: "<?php echo _('Position in meters'); ?> ", titleTextStyle: {  bold: true, italic: false}, textStyle: {  bold: true, italic: false}, maxValue: 14, ticks: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14], gridLines: { color: '#000', count: 9 } },	
			colors: [ '#28b966', '#fe445c', '#fee15a' ],
			interpolateNulls: true
        };
		/*
		#fe445c red
		#fee15a yellow
		#28b966 green
		*/
        var chart = new google.visualization.LineChart(document.getElementById('chartA'));

        chart.draw(data, options);
      }
    </script>

	
	<title><?php echo _("Module"); ?></title>

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

		#sortable { width: 150px; padding: 10px 0; margin-left: 80px; margin-top: 40px;}
		#sortable li { text-align: center; color: #000; margin-bottom: 40px; border-radius: 5px; cursor: move; border: 2px dashed #ff9a00; }
		#sortable li:last-child { margin-bottom: 0; }		
		#sort-1 { background-color: #28b966; }
		#sort-2 { background-color: #fe445c; }
		#sort-3 { background-color: #fee15a; }
		.qq_chart {margin-top: 20px;}

		#answer .answer { width: 150px; margin: 0 auto; }
		#answer .answer li {  list-style: none; text-align: center;  margin-bottom: 4px; border-radius: 5px; }
		

		#buttons .next { display: none; }
		.legend {
		    left: 26px;
		    display: inline-block;
		    width: 100px;
		    position: absolute;
		    text-align: center;
		    top: 61px;
		}
		#sortable {
		    width: 150px;
		    padding: 10px 0;
		    margin-left: 150px;
		    margin-top: 40px;
		}
		i.fa.fa-arrow-down {
		    font-size: 55px;
		}
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		.container_12 .grid_5 {
		    width: 35.667%;
		}
		.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
    }
    @media only screen and (max-width: 960px){
		.container_12 .grid_5 {
		    width: 35.667%;
		}
    }
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
    	#chartA{ width: 100%; margin-left: 110px !important; }
		#sortable-container { margin-left: 180px; }
    }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?></h1>

						<h2 ><?php echo _("<span class='black' > This position versus time graph shows the motion for three different objects.</span> <br/><br/>Drag the objects into order from fastest to slowest, based on how fast they are moving at the time 10 seconds."); ?></h2>
						<div id="sortable-container" class="grid_5">
							<div class="legend">
								<p> <?php echo _("Fastest"); ?></p>
								<p><i class="fa fa-arrow-down"></i></p>
								<p> <?php echo _("Slowest"); ?></p>
							</div>
							<ul id="sortable">
								<li id="sort-3"><?php echo _("Object C"); ?></li>
								<li id="sort-1"><?php echo _("Object A"); ?></li>
								<li id="sort-2"><?php echo _("Object B"); ?></li>
							</ul>
						</div>
						<div id="chartA" class="grid_7"></div>
					</div>
					<div class="clear"></div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Dragging objects..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('#sortable').html());

			answer = $('#sort-1').index().toString() + $('#sort-2').index().toString() + $('#sort-3').index().toString();
			if (answer == '012') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes!  Object A has the steepest graph at 10 seconds, Object B’s graph is not quite as steep, and Object C’s graph is flat, it isn’t changing position at all."); ?></p>");
			} else if (answer == '201'){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  Object C’s graph shows the highest position at 10 seconds, but it isn’t changing position at all.  Object C is actually the slowest.  Object A has the lowest position at 10 seconds, but the graph for Object A is steeper than the others, it is actually fastest."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No.  Object A moves from the 2 meter mark to the 6 meter mark in the first 10 seconds, Object B moves from the 5 meter mark to the 6 meter mark in the first 10 seconds, and Object C doesn’t move at all during the first 5 seconds."); ?></p>");
			}


			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {

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
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "18.php";
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

		$("#sortable").sortable({ scroll: false, containment: "#sortable-container" });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
