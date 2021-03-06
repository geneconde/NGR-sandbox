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
          [10,  	null,	null,	null],
          [20,  	null,	null,	null],
          [30,  	null,	null,	null],
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
			chartArea: { top: 10, left: 40, width: '85%', height: '80%',   backgroundColor: { stroke: '#000', strokeWidth: 1 } },
			width: 330,
			height: 280,
			lineWidth: 1,
			pointSize: 8,
			pointShape: 'square',
			hAxis: { title: "<?php echo _('Time in seconds'); ?>", titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false}, maxValue: 60, ticks: [0,10,20,30,40,50,60], gridLines: { count: 14 }},
			vAxis: { title: "<?php echo _('Position in meters'); ?>", titleTextStyle: {   italic: false}, textStyle: {  bold: true, italic: false}, maxValue: 14, ticks: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14], gridLines: { color: '#000', count: 9 } },	
			colors: [ '#28b966', '#fe445c', '#fee15a' ],
			interpolateNulls: true
        };

        var chart = new google.visualization.LineChart(document.getElementById('chartA'));

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
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>

		h1 { color: #44311f; }
		h2 { color: #88633E; }
		.click { text-align: center; }
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }
		#graphDiv{ display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}

		.pet:hover{cursor: pointer;}
		.pet {width: 100%;padding: 0;display: block;margin: 20px auto 0;}

		.ac-custom input[type="radio"]:checked + label { color: #ff9a00; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #ff9a00; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		.ac-custom li { width:450px;}

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #ff9a00; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		.small { display: block; width:600px; }
		.click {text-align: center;font-size:22px;}
		#close { background: white; color: #406468; display: block; margin: 0 auto; width: 65px; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
		#close:hover { cursor: pointer; }

		#buttons .next { display: none; }
	    @media only screen and (max-width: 1250px){
	    	.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
	        h1 { padding-top: 33px; }
	    }
	    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
		    form li { width: 95% !important; }
			#chartA { margin-left: -25px !important; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv" >
				<span id="close"><?php echo _('Close!'); ?></span>
				<img class="small" src="assets/19/qq.png" width="200"/>
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?></h1>

						<h2><?php echo _("What is the meaning of the point on the graph at 30 seconds where all the lines cross each other?"); ?></h2>
							<div class="grid_7">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("That’s where all three objects have the same position at the same time."); ?></span></label></li>
										<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("That’s where all three objects have the same velocity at the same time."); ?></span></label></li>
										<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("That’s where all three objects have the same acceleration at the same time."); ?></span></label></li>
										<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("That’s where all three objects have the same position and velocity at the same time."); ?></span></label></li>
									<ol>
								</form>
							</div>
						<div class="grid_5">
							<div id="chartA" ></div>
						</div>
					</div>
					<div class="clear"></div>

					<div id="answer" class="grid_12" >
						<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="21.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Drawing a line..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it!  All three objects are at the 8 meter mark at 30 seconds."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  Object A traveled from the 2 meter mark to the 8 meter mark prior to  that point, so its velocity is higher than that of Object B, which only traveled from the 5 meter mark to the 8 meter mark in that time.  Object C hasn’t changed position at all in the first 30 seconds, so has a velocity of zero."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. None of these objects are accelerating, they all have constant velocities."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  They are all at the same position, but they’ve all moved different distances to get there.  Object A moved the farthest, so it has the highest velocity.  Object C hasn’t moved at all, so it has the lowest velocity."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			answer = $('input:radio:checked').val();
			if(!answer){
				alert("<?php echo _("Please select your answer."); ?>");
			}else{
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
				document.location.href = "19.php";
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
