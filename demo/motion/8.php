<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
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
      google.setOnLoadCallback(drawChartA);
      google.setOnLoadCallback(drawChartB);

      function drawChartA() {
        var data = google.visualization.arrayToDataTable([
          ['Time', 	"<?php echo _('Object A'); ?> ", 	"<?php echo _('Object B'); ?> "],
          [0,  		-5,      		0],
		  [70, 		7,				6]
        ]);

        var options = {
			legend: {
				position: 'bottom',
				textStyle: {  fontSize: 10, bold: true}
			},
			chartArea: { top: 10, left: 30, width: '85%', height: '80%' },
			width: 350,
			height: 280,
			lineWidth: 5,
			hAxis: { title: "<?php echo _('Time in seconds'); ?>", titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false}, gridlines: { color:'transparent'}, maxValue: 70, ticks: [0,10,20,30,40,50,60]},
			vAxis: { title: "<?php echo _('Position in meters') ?>",  titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false}, minValue: -6, maxValue: 8, ticks: [-6, -5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8]},	
			colors: [ '#5670f2', '#f65f5f' ],
			interpolateNulls: true
        };

        var chart = new google.visualization.LineChart(document.getElementById('chartA'));

        chart.draw(data, options);
      }
	  
	  function drawChartB() {
        var data = google.visualization.arrayToDataTable([
          ['Time', "<?php echo _('Object C'); ?> ", "<?php echo _('Object D'); ?> "],
          [0,  		4,      	0],
		  [60, 		10,			6]
        ]);

        var options = {
			legend: {
				position: 'bottom',
				textStyle: {  fontSize: 10, bold: true}
			},
			chartArea: { top: 10, left: 30, width: '85%', height: '75%'},
			width: 300,
			height: 210,
			lineWidth: 2,
			hAxis: { title: "<?php echo _('Time in seconds'); ?>", titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false}, gridlines: { color:'transparent'}, maxValue: 60, ticks: [0,10,20,30,40,50,60]},
			vAxis: { title: "<?php echo _('Position in meters') ?>", titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false},  maxValue: 8, ticks: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]},	
			colors: [ 'green', 'red' ],
			interpolateNulls: true
        };

        var chart = new google.visualization.LineChart(document.getElementById('chartB'));

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
		h1 { color: #eb7100; }
		
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/8/bg.jpg); }
		#chartB { margin-top: 20px; }

		.graphDiv { 
			display: none;
			position: absolute;
			background: rgba(45, 45, 45, .9); 
			z-index: 1000;  
			width: 100%; 
			height: 100%; 
			text-align: center; }

		.graphDiv img { width: 600px; display: none; }

		.close { 
			background: white; 
			color: #406468; 
			display: block; 
			margin: 0 auto; width: 65px; 
			padding:10px; 
			border-radius: 5px;
			margin-top:20px;
			text-align:center; }

		.close:hover { cursor: pointer; background-color: #406468; color: #fff; }

		.enlarge { cursor: pointer; }

		.fl { float: left; }
		.fr { float: right; }
		.m-left5 { margin-left: 5px; }

		#screen2 { display: none; }

		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) {
    	.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
    }
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
    	.grid_5.fr { width: 46%; }
    	p.grid_7 { width: 48% !important; }
    }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="graphDiv">
				<p class="close"><?php echo _('Close!'); ?></p>
				<img class="small" id="img1" src="assets/8/image1.png">
				<img class="small" id="img2" src="assets/8/image2.png">
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... motion"); ?></h1>
						
						<p class="grid_7">
							<?php echo _("Another useful tool for representing motion is a <span class='key'>graph of position versus time</span>. A graph can make differences in the motion of two objects easier to see.  Here’s a plot of the data from the table in the previous section."); ?>
						</p>

						<div class="grid_5 fr">							
							<div id="chartA"></div>
						</div>

						<p class="m-left5">
							<?php echo _("Plotting data on a graph of position versus time makes it easier to observe patterns in motion. A graph can make it easier to see when Object A passes Object B, and which object is travelling faster. Object A, shown in blue, has a steeper line on the graph. That lets you know that it has a bigger change in position than Object B during the time shown on this graph. A steeper line on a graph of position versus time means that the object has a greater speed."); ?>
						</p>
					</div>

					<div id="screen2" class="screen">
						<div class="prefix_4 grid_4">
							<div id="chartB"></div>
						</div>
						<div class="clear"></div>
						<p>
							<?php echo _("This graph plots the position of Object C and Object D.  The lines for the two objects appear to be parallel to each other. Based on the graph, you can see that Object D never catches up to Object C, but Object C is always the same distance ahead of Object D. During the time shown on this graph. Both objects change position by the same amount. Object C moves from the 4 meter mark to the 10 meter mark, and Object D moves from the 0 meter mark to the 6 meter mark.  That represents a change in position of 6 meters for both objects. Both objects change position by 6 meters in 60 seconds. That’s why the red line on the graph is just as steep as the green line."); ?>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Plotting data..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1);

		if (hash != "") {
			$('.screen').hide();
			$('#screen2').show();

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
		}

		$('#img1-btn').click(function() {
			$('.graphDiv').fadeIn();
			$('#img1').fadeIn();
		});

		$('#img2-btn').click(function() {
			$('.graphDiv').fadeIn();
			$('#img2').fadeIn();
		});

		$('.close').click(function() {
			$('.graphDiv').fadeOut();
			$('#img1').fadeOut();
			$('#img2').fadeOut();
		});
		
		$('.back').click(function() {
			if ($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				}); 
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {				
				$('.back').fadeOut();

				$('.readmore').fadeOut(function() {
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();
					drawChartB();
					window.location.hash = '#screen2';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
