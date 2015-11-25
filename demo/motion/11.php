<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(11, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Module"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="styles/locale.css" />
	<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
	<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/modernizr.min.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jquery.blink.min.js"></script>
	<script src="scripts/jquery-ui.js"></script>
	<script src="scripts/jquery.ui.touch-punch.min.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/save-answer.js"></script>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h2 {
		    text-align: left;
		}
		h1 { color: #44311f; text-align: left; }
		h2 { color: #88633E; }
		#question { text-align: center; overflow: hidden; }
		#answer { display: none; }
		#answer p { text-align: center; }
		#answer table p { font-size: 22px; }
		#answer table p img { vertical-align: middle; }
		.answer span { display: block; }
		
		<!-- temporary -->	
		
		<!-- table { color: #000; text-align: left; width: 680px; margin-top: 10px; margin-left: 0px; font-size: 18px; } -->
		table td {width:25%;}
		table th {width: 25%; text-align: center;}
		.answer table td:first-child img { width: 30px; height:25px; }
		
		
		
		.arrows {margin-left: 150px;}
		.click_btn { text-align: center; }
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }
		#graphDiv{ display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#graphDiv table th{ color: #000;}
		#graphDiv table tr td{ color: #000;}
		#graphDiv .grid_4 div { margin: 30px auto; width: 80%; padding: 30px; background-color: #fff;}

		.pet:hover{cursor: pointer;}
		.pet {width: 100%;padding: 0;display: block; margin-left:320px;}

		.small { display: block; width:800px; }
		.click_btn {text-align: center;font-size:22px; background: #6C92D4; color: #fff; display: block; margin: 0 auto; width: 160px; padding:10px; border-radius: 5px;}
		.click_btn:hover{cursor: pointer;}
		#close { background: #e0e67c; color: #406468; display: block; margin: 10px auto; clear:both; width: 150px; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
		#close:hover { cursor: pointer; }
		
		#question { text-align: center; overflow: hidden; }
		#answer { margin: 10px 2%; display: none; }
		#answer h2 {margin: 0;}
		#answer p { text-align: center; }
		#answer table p { font-size: 22px; }
		#answer table p img { vertical-align: middle; }
		#check {width:25px; height: 25px;}
		.answer span { display: block; }

		select { padding: 2px; font-size: 18px; font-family: 'PlaytimeRegular'; cursor: pointer; }

		table { background-color: #fff;  width: auto; margin-left: auto; margin-right: auto; font-size: 20px;}
		table tr div { margin-top: 20px; width: 100px; height: 65px; margin: 0 auto; }
		#question table td, #answer table td{ padding: 4px; font-size: 22px; border: 2px solid #78bc43; margin: 5px; border-radius: 10px; box-sizing: border-box; }
		#question table th, #answer table th { padding: 4px; font-size: 22px; border: 2px solid #e279ae; margin: 5px; border-radius: 10px; box-sizing: border-box;  }
		table tr td { text-align: center; }
		table tr td img { border-radius: 10px; display: block; margin: 0 auto; }
		table th { font-weight: normal; color: #000; padding: 0 5px; }
		table tr td:first-child { height: auto; }
		td, th { border: 1px solid black; }

		.answer table { margin-top: 10px; }

		.feedback { font-size: 24px; text-align: center; width: 90%; margin: 10px auto;}
		.feedback img { vertical-align: middle; }

		.grab {cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

		img.next-toggle { display: none; }
		img.drag {  border: 2px dashed #ff9a00; background-color: #fff; height: 65px; width: 100px;}
		#question .placeholder, #answer .placeholder { padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
		h2 { font-size: 22px; }
		h1 { margin-bottom:0; }
		<?php if($language == "es_ES") { ?>
			table tr:nth-child(3) td:first-child { font-size: 17px; }
		<?php } ?> 

		#buttons .next { display: none; }
	    @media only screen and (max-width: 1250px){
	        h1 { padding-top: 33px; }
	        p {
			    margin: 0px 0 !important;
			}
			.feedback {
			    font-size: 19px;
			    text-align: center;
			    width: 89%;
			    margin: 5px auto;
			}
	    }
	    @media screen and (max-width: 1250px) {
	    	.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
	    }
	    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	    	#graphDiv { padding-top: 5%; }
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
										<img class="table_image" src="assets/11/c.jpg">
										<?php echo _("Joaquin's Position"); ?>
									</th>
									<th>
										<img class="table_image" src="assets/11/b.jpg">
										<?php echo _("Renee's Position"); ?>
									</th>
									<th>
										<img class="table_image" src="assets/11/a.jpg">
										<?php echo _("Ivette's Position"); ?>
									</th>
								</thead>
								<tbody>
									<tr>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
									</tr>
									<tr>
										<td>1 <?php echo _("minute"); ?></td>
										<td>4 <?php echo _("meters"); ?></td>
										<td>2 <?php echo _("meters"); ?></td>
										<td>14 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>2 <?php echo _("minutes"); ?></td>
										<td>8 <?php echo _("meters"); ?></td>
										<td>5 <?php echo _("meters"); ?></td>
										<td>27 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>3 <?php echo _("minutes"); ?></td>
										<td>12 <?php echo _("meters"); ?></td>
										<td>9 <?php echo _("meters"); ?></td>
										<td>39 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>4 <?php echo _("minutes"); ?></td>
										<td>16 <?php echo _("meters"); ?></td>
										<td>14 <?php echo _("meters"); ?></td>
										<td>50 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>5 <?php echo _("minutes"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>20 <?php echo _("meters"); ?></td>
										<td>60 <?php echo _("meters"); ?></td>
									</tr>
										<tr>
										<td>6 <?php echo _("minutes"); ?></td>
										<td>24 <?php echo _("meters"); ?></td>
										<td>27 <?php echo _("meters"); ?></td>
										<td>69 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>7 <?php echo _("minutes"); ?></td>
										<td>28 <?php echo _("meters"); ?></td>
										<td>35 <?php echo _("meters"); ?></td>
										<td>77 <?php echo _("meters"); ?></td>
									</tr>
									<tr>
										<td>8 <?php echo _("minutes"); ?></td>
										<td>32 <?php echo _("meters"); ?></td>
										<td>44 <?php echo _("meters"); ?></td>
										<td>84 <?php echo _("meters"); ?></td>
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
						<h1><?php echo _("Quick Check #4"); ?></h1>

						<h2><?php echo _("A group of students decide to collect some data for their motion on bicycles.  They end up with the following data table.  See if you can match the student to the correct description of their motion."); ?></h2>
						<h2 class="click_btn"><?php echo _("Click to view table"); ?></h2>
						<div class='placeholder'>
								<table >
									<tr>
										<th><?php echo _('Choices'); ?></th>
										<th><?php echo _('Getting Faster'); ?></th>
										<th><?php echo _('Getting Slower'); ?></th>
										<th><?php echo _('Constant Velocity'); ?></th>
									</tr>

									<tr>
										<td name: "first-column" id="1">
											<img src="assets/11/a.jpg" class="drag">
											<p><?php echo _("Ivette"); ?></p>
										</td>
										<td><div id="2"></div></td>
										<td><div id="3"></div></td>
										<td><div id="4"></div></td>
									</tr>

									<tr>
										<td name: "first-column" id="5">
											<img src="assets/11/b.jpg" class="drag">
											<p><?php echo _("Renee"); ?> </p>
										</td>
										<td><div id="6"></div></td>
										<td><div id="7"></div></td>
										<td><div id="8"></div></td>
									</tr>

									<tr>
										<td name: "first-column" id="9">
											<img src="assets/11/c.jpg" class="drag">
											<p><?php echo _("Joaquin"); ?> </p>
										</td>
										<td><div id="10"></div></td>
										<td><div id="11"></div></td>
										<td><div id="12"></div></td>
									</tr>
								</table>
						</div>
			</div>
					</div>
					<div class="clear"></div>

					<div id="answer">
				<h1><?php echo _('Quick Check #4'); ?> - <?php echo _('How did I do?'); ?></h1>
				<h2><?php echo _("A group of students decide to collect some data for their motion on bicycles.  They end up with the following data table.  See if you can match the student to the correct description of their motion."); ?></h2>
				<div class='placeholder'>
					<p><?php echo _('You answered...'); ?></p>

					<div class="answer">
						<table >
							<tr>
								<th><?php echo _('Answer'); ?></th>
								<th><?php echo _('Getting Faster'); ?></th>
								<th><?php echo _('Getting Slower'); ?></th>
								<th><?php echo _('Constant Velocity'); ?></th>
							</tr>

							<tr>
								<td class="1"><img src="assets/11/a.jpg" class="drag"></td>
								<td><div class="2"></div></td>
								<td><div class="3"></div></td>
								<td><div class="4"></div></td>
							</tr>

							<tr>
								<td class="5"><img src="assets/11/b.jpg" class="drag"></td>
								<td><div class="6"></div></td>
								<td><div class="7"></div></td>
								<td><div class="8"></div></td>
							</tr>

							<tr>
								<td class="9"><img src="assets/11/c.jpg" class="drag"></td>
								<td><div class="10"></div></td>
								<td><div class="11"></div></td>
								<td><div class="12"></div></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="feedback"></div>
			</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	
	<script>
		var back = $('img.back-toggle'),
		next = $('img.next-toggle'),
		check = $('img.check-toggle'),
		question = $('#question'),
		answer = $('#answer'),
		ans6 = '', ans7 = '', ans8 = '',
		ive = 0,
		ren = 0,
		joa = 0,
		checkAnswer = 0,
		answered = 1;
		var nullAnswer=true;


		$('#question img').draggable({ revert: 'invalid' });
			
		$('#question img').each(function() {
			var image = $(this);
			var drop1 = $(this).parent().parent().children(':nth-child(2)').find('div');
			var drop2 = $(this).parent().parent().children(':nth-child(3)').find('div');
			var drop3 = $(this).parent().parent().children(':nth-child(4)').find('div');
			
			image.mousedown(function() { image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
			image.mouseup(function() { image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
			
			drop1.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop1); }
			});
			
			drop2.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop2); }
			});

			drop3.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop3); }
			});
		});
			
		function save() {
			ren = ive = joa =0;
			
			if ($('#2').html() != '') {
				answer.find('.1').html('<img src="assets/wrong.png">');
				answer.find('.2').html('<img src="assets/11/a.jpg">');
				answer.find('.3').html('');
				answer.find('.4').html('');
				ans6 = '1st Image (Getting Faster)';
			} else if ($('#3').html() != '') {
				answer.find('.1').html('<img src="assets/correct.png">');
				answer.find('.2').html('');
				answer.find('.3').html('<img src="assets/11/a.jpg">');
				answer.find('.4').html('');
				ans6 = '1st Image (Getting Slower)';
				ive = 1;
			} else {
				answer.find('.1').html('<img src="assets/wrong.png">');
				answer.find('.2').html('');
				answer.find('.3').html('');
				answer.find('.4').html('<img src="assets/11/a.jpg">');
				ans6 = '1st Image (Constant Velocity)';
			}

			if ($('#6').html() != '') {
				answer.find('.5').html('<img src="assets/correct.png">');
				answer.find('.6').html('<img src="assets/11/b.jpg">');
				answer.find('.7').html('');
				answer.find('.8').html('');
				ans7 = '2nd Image (Getting Faster)';
				ren = 1;
			} else if ($('#7').html() != '') {
				answer.find('.5').html('<img src="assets/wrong.png">');
				answer.find('.6').html('');
				answer.find('.7').html('<img src="assets/11/b.jpg">');
				answer.find('.8').html('');
				ans7 = '2nd Image (Getting Slower)';
			} else {
				answer.find('.5').html('<img src="assets/wrong.png">');
				answer.find('.6').html('');
				answer.find('.7').html('');
				answer.find('.8').html('<img src="assets/11/b.jpg">');
				ans7 = '2nd Image (Constant Velocity)';
			}

			if ($('#10').html() != '') {
				answer.find('.9').html('<img src="assets/wrong.png">');
				answer.find('.10').html('<img src="assets/11/c.jpg">');
				answer.find('.11').html('');
				answer.find('.12').html('');
				ans8 = '3rd Image (Getting Faster)';
			} else if ($('#11').html() != '') {
				answer.find('.9').html('<img src="assets/wrong.png">');
				answer.find('.10').html('');
				answer.find('.11').html('<img src="assets/11/c.jpg">');
				answer.find('.12').html('');
				ans8 = '3rd Image (Getting Slower)';
			} else {
				answer.find('.9').html('<img src="assets/correct.png">');
				answer.find('.10').html('');
				answer.find('.11').html('');
				answer.find('.12').html('<img src="assets/11/c.jpg">');
				ans8 = '3rd Image (Constant Velocity)';
				joa = 1;
			}

			if (answered == 0) {
				saveAnswer('composition-of-matter-qq6-f', ans6);
				saveAnswer('composition-of-matter-qq6-g', ans7);
				saveAnswer('composition-of-matter-qq6-h', ans8);
				answered = 1;
			}

			if (ive == 1 && ren == 1 && joa == 1) {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it! Joaquin changes his position by 4 meters every 15 seconds, Renee’s pattern keeps getting bigger by 1 meter every 15 seconds, and Ivette’s pattern is getting smaller by 1 meter every second."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  Joaquin changes his position by 4 meters every 15 seconds, so he has a constant velocity; Renee’s pattern keeps getting bigger by 1 meter every 15 seconds, so she’s getting faster; and Ivette’s pattern is getting smaller by 1 meter every second, so she’s getting slower."); ?></p>");
			} 
		}

		$('.checkanswer').click(function() {
			checkNull();
			if(nullAnswer){
				alert('Please select your answer.');
			} else{
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

		$('.back').click(function(){
			if ($('#question').is(':visible')) {
				document.location.href = "10.php#screen2";
			} else if ($('#answer').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#answer').fadeOut(function () {
					
					$('#question').fadeIn();

					window.location.hash = '';
				});
			} 

		});
		$('h2.click_btn').click(function() {
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


	function checkNull() {
		nullAnswer=false;
		var parentID;
		$('#question img').each(function() {
			parentID = $(this).parent().attr('id');
			if(parentID % 4 ==1) {
				nullAnswer = true;
			}
		});
	}

	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
