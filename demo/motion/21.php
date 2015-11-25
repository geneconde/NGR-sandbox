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
		h2 { color: #88633E }
		
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
		
		#answer li { float: left; list-style: none; display: inline;}
		#answer .answer img{width:200px; height:250px; padding:10px;}
		table { color: #000; background-color: #fff; text-align: left; width: 100%; margin: 0 auto; font-size: 20px; }
		table th {font-weight: normal; width: 20% ; text-align: center; }
		td, th {padding:5px; border: 1px solid black;}
		.table_image { width:100%; height: 120px;  border-radius: 5px; margin: 0;}
		#sortable {}
		#sortable img{width:189px; height:220px; border: 2px dashed #ff9a00; }
		#sortable-container ul li { float: left; display: inline; padding:5px;}
		.arrows {margin-left: 150px;}
		.click { text-align: center; }
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }
		#graphDiv{ display: none; position: absolute; background: rgba(0,0,0,0.77); z-index: 1000;  width: 100%; height:100%;}
		#graphDiv > div > div { width: 90%; padding: 20px 20px; margin: 40px auto; margin-top: 60px; background-color: #fff; }

		.pet:hover{cursor: pointer;}
		.pet {width: 100%;padding: 0;display: block; margin-left:320px;}

		.small { display: block; width:800px; }
		.click {text-align: center;font-size:22px; }
		.click:hover{cursor: pointer;}
		#btn_view { background-color: #6C92D4; color: #fff; width:180px; margin: 10px auto; border-radius: 10px; padding: 10px; }
		#close { clear: both; background: #e0e67c; color: #406468; display: block; margin: 0 auto; width: 150px; padding:10px; border-radius: 5px; margin-top:20px; text-align:center;}
		#close:hover { cursor: pointer; }

		html[dir=rtl] #answer p { text-align: right; }
		#choices { float: left; list-style: none; text-align: center; font-size: 23px;}
		#sortable { float: left; list-style: none; cursor:pointer; position: relative; z-index: 6; }
		#choices li {margin-bottom: 0px; margin-top: 30px;}


		#buttons .next { display: none; }
		.white { color: white; }
		.key1{ color: #9AC0FA; }
		
		li p { margin: 0; }
		@media only screen and (min-device-width: 768px) and (orientation: portrait) {
			#sortable img {
			    width: 157px !important;
			}
		}
		#sortable-container ul li {
		    float: left;
		    display: inline;
		    padding: 5px;
		    width: 23%;
		}
	    @media only screen and (max-width: 1250px){
	        .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
	        h1 { padding-top: 33px; }
			#sortable img {
			    width: 174px;
			    height: 185px;
			    border: 2px dashed #ff9a00;
			}
	    }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv" >
				<div class="grid_4">
					<div>
						<table>
								<thead>
									<th><?php echo _("Time"); ?></th>
									<th>
										<img class="table_image" src="assets/21/a.jpg">
										<?php echo _("Tortoise's"); ?><br/><?php echo _("Position"); ?>
									</th>
									<th>
										<img class="table_image" src="assets/21/b.jpg">
										<?php echo _("Cheetah's"); ?><br/><?php echo _("Position"); ?>
									</th>
									<th>
										<img class="table_image" src="assets/21/c.jpg">
										<?php echo _("Gazelle's"); ?><br/><?php echo _("Position"); ?>
									</th>
									<th>
										<img class="table_image" src="assets/21/d.jpg">
										<?php echo _("Hare's"); ?><br/><?php echo _("Position"); ?>
									</th>
								</thead>
								<tbody>
									<tr>
										<td>0</td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>0</td>
										<td>10 <?php echo _("meters"); ?></td>
										<td>0</td>
									</tr>
									<tr>
										<td>1 <?php echo _("minute"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>15 <?php echo _("meters"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>5 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>2 <?php echo _("minutes"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>30 <?php echo _("meters"); ?></td>
										<td>30 <?php echo _("meters"); ?></td>
										<td>10 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>3 <?php echo _("minutes"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>45 <?php echo _("meters"); ?></td>
										<td>40 <?php echo _("meters"); ?></td>
										<td>15 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>4 <?php echo _("minutes"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>60 <?php echo _("meters"); ?></td>
										<td>50 <?php echo _("meters"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>5 <?php echo _("minutes"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>75 <?php echo _("meters"); ?></td>
										<td>60 <?php echo _("meters"); ?></td>
										<td>25 <?php echo _("meters"); ?></td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					<span id="close"><?php echo _('Close me!'); ?></span>
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?></h1>

						<h2 class="black"><?php echo _("Take a look at the data tables below listing the positions of the animals along this number line at different times. "); ?></h2>
							<div class="grid_8"><img class="arrows" src="assets/21/arrows.jpg"></div>
							
						<div class="grid_12">
							<h2 id="btn_view" class="click"><?php echo _("Click to view table"); ?></h2>
							<h2 class="click"><?php echo _("Based on the evidence from the data table, drag the animals into order from fastest to slowest with the fastest on the left and the slowest on the right."); ?></h2>
							<div class="clear"></div>
							<div id="sortable-container" class="grid_12">
								<ul id="sortable" class="grid_12">
									<li id="1">
										<div id="mark1"></div><span data-name="A"></span>
										<img id="image" src="assets/21/a.jpg" alt="Tortoise"/>
									</li>
									<li id="2">
										<div id="mark2"></div><span data-name="B"></span>
										<img id="image" src="assets/21/b.jpg" alt="Cheetah"/>
									</li>
									<li id="3">
										<div id="mark3"></div><span data-name="C"></span>
										<img id="image" src="assets/21/c.jpg" alt="Gazelle"/>
									</li>
									<li id="4">
										<div id="mark4"></div><span data-name="D"></span>
										<img id="image" src="assets/21/d.jpg" alt="Hare"/>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clear"></div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer grid_12"></p>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

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

			$('.answer').html($('#sortable').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString();

			if (answer == '3012') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Nicely done!  The Cheetah moves 15 meters every minute, the Gazelle moves 10 meters every minute, the Hare moves 5 meters every minute and the Tortoise doesn’t change position at all."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  Take a look at the pattern with which the position of each animal changes.  For the Tortoise, there’s no change in position, he’s not moving at all!  The Cheetah has the pattern showing the greatest change in position each minute, so he’s moving the fastest."); ?></p>");
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

		$('.back').click(function(){
			if ($('#question').is(':visible')) {
				document.location.href = "20.php";
			} else if ($('#answer').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#answer').fadeOut(function () {
					
					$('#question').fadeIn();
					$('.checkanswer').fadeIn();

					window.location.hash = '';
				});
			} 

		});
		$('h2.click').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});
		$('.readmore').click(function(){
			$('.back').fadeOut();
			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
			
			$('#screen1').fadeOut(function() {
				$('#screen2').fadeIn();

				window.location.hash = '#screen2';
			});
		});
		$("#sortable").sortable({ scroll: false, containment: "#sortable-container" });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
