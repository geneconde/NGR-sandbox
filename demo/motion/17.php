<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(17, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq4-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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

		#question p { /*text-align: center;*/ }
		#question p.no-height { font-size: 0; }
		#question p.label { background: #fffa78; border-radius: 5px; margin-bottom: 20px; }
		#question .grid_2 { margin-top: -5px; }
		.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }
		
		.drop {
			width: 100%;
			height: 77px;	
			background: #ffc178;
			border-radius: 5px;
		}
		.drag { position: relative; z-index: 999; }
		.drag img { margin: 0; height: 77px; }

		#answer p { text-align: center; padding: 10px 10px;}
		
		#answer li {list-style: none; }
		#answer .answer img{width:50%; height:50%;}

		#image_1, #image_2, #image_3, #image_4{ height:88px; border: 2px dashed #ff9a00; }
		#image_1 { width:100%;}
		#image_2 { width:100%;}
		#image_3 { width:100%;}
		#image_4 { width:100%;}

		html[dir=rtl] #answer p { text-align: right; }
		#choices { float: left; list-style: none; text-align: center; font-size: 23px;}
		#sortable { float: left; list-style: none; cursor:pointer; position: relative; z-index: 6; }
		#choices li {margin-bottom: 0px; margin-top: 30px;}

		#buttons .next { display: none; }
		.white { color: white; }
		.key1{ color: #9AC0FA; }
		
		li p { margin: 0; }
	    @media screen and (max-width: 1250px) {
	    	.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
	    	h1 { padding-top: 33px; }
	    }
	    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
	    	ul#choices li {
				position: relative;
				top: 10px;
			}
			ul#choices li:nth-child(2) { top: 60px; }
			ul#choices li:nth-child(3) { top: 90px; }
			ul#choices li:nth-child(4) { top: 100px; }
	    }
	    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
		    ul#choices li {
				position: relative;
			}
			ul#choices li:nth-child(2) { top: 10px; }
			ul#choices li:nth-child(3) { top: 10px; }
			ul#choices li:nth-child(4) { top: -5px; }
	    }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
							<h1><?php echo _("Quiz Question #2");?></h1>
							<h2><?php echo _("The following motion maps show the position of a duck every 5 seconds as it moves from left to right.  Match the motion map to the correct description of the duck’s motion.");?></h2>
							
							<ul id="choices" class="grid_2">
								<li><p><?php echo _("Getting Slower"); ?></p></li>
								<li><p><?php echo _("Getting Faster"); ?></p></li>
								<li><p><?php echo _("Slow, Constant Velocity"); ?></p></li>
								<li><p><?php echo _("Fast, Constant Velocity"); ?></p></li>
							</ul>
							<div id="sortable-container" class="grid_10">
								<ul id="sortable" class="grid_12">
									<li id="1">
										<div id="mark1"></div><span data-name="A"></span>
										<img id="image_1" src="assets/17/choice-a.png" alt="choice-a"/>
									</li>
									<li id="2">
										<div id="mark2"></div><span data-name="B"></span>
										<img id="image_2" src="assets/17/choice-b.png" alt="choice-b"/>
									</li>
									<li id="3">
										<div id="mark3"></div><span data-name="C"></span>
										<img id="image_3" src="assets/17/choice-c.png" alt="choice-c"/>
									</li>
									<li id="4">
										<div id="mark4"></div><span data-name="D"></span>
										<img id="image_4" src="assets/17/choice-d.png" alt="choice-d"/>
									</li>
								</ul>
							</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="18.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Counting ducklings..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('#sortable').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString();

			if (answer == '2310') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Alright, you’ve got it!  The spacing of the ducks on the motion map shows the duck’s position every 5 seconds.  Evenly spaced ducks have constant velocity, and ducks that have different spacing are changing speeds."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  The ducks in A are evenly spaced, showing constant velocity; the ducks in B are also evenly spaced, but farther apart, showing a faster constant velocity; the ducks in C are getting farther apart, showing that the duck was getting faster; the ducks in D are getting closer together, showing the duck was slowing down."); ?></p>");
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
				document.location.href = "16.php";
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
