<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Forces of all Kinds"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/captionHoverEffects.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<script src="js/jquery.blink.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/save-answer.js"></script>
	

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #df3e3e; text-align: left; margin-bottom:0;}
		h2 { color: #00739f; font-size: 24px; }

		#question { text-align: left; overflow: hidden; }
		#answer { display: none; }
		#answer #pAns { text-align: left; margin: -10px 0; font-size: 24px; color:#00739f; margin-top: -10px;}
		#answer table p { font-size: 24px; }
		#answer h1 {margin-top: -10px;}
		#answer table p img { vertical-align: middle; }
		.answer span { display: block; }
		
		<!-- temporary -->	
		
		<!-- table { color: #000; text-align: left; width: 680px; margin-top: 10px; margin-left: 0px; font-size: 18px; } -->
		table td {width:30%;}
		table th {width: 32%; text-align: center;}
		.answer table td:first-child img { width: 25px; height:20px; }
		
		
		
		.arrows {margin-left: 150px;}
		.click_btn { text-align: center; }
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/9/qq.jpg); }

		#question { text-align: left; overflow: hidden; }
		#answer { margin: 10px 2%; display: none; }
		#answer p { text-align: center; margin-top: -10px;}
		#answer table p { font-size: 22px; }
		#answer table p img { vertical-align: middle; }
		#check {width:25px; height: 25px;}
		.answer span { display: block; }

		#he1 {height: 75px; width: 100px;}
		select { padding: 2px; font-size: 18px; font-family: 'PlaytimeRegular'; cursor: pointer; }

		table { background-color:; border-collapse: separate; border-spacing: 2px; width: auto; margin-left: auto; margin-right: auto; font-size: 20px;}
		table tr div { margin-top: 20px; width: 120px; height: 95px; margin: 0 auto; }
		#answer table tr div { margin-top: 20px; width: 90px; height: 45px; margin: 0 auto; margin-top: -36px;}
		#answer table td{ padding: 33px; font-size: 22px; border: 2px solid #ffffba; margin: 5px; border-radius: 10px; box-sizing: border-box; }

		#question table td{ padding: 4px; font-size: 22px; border: 2px solid #ffffba; margin: 5px; border-radius: 10px; box-sizing: border-box; }
		#question table th, #answer table th { padding: 4px; font-size: 22px; border: 2px solid #e65c4f; margin: 5px; border-radius: 10px; box-sizing: border-box;  }
		table tr td { text-align: center; }
		table tr td img { border-radius: 10px; display: block; margin: 0 auto; }
		#answer table tr td img { border-radius: 10px; display: block; margin: 0 auto; margin-top:;}

		table th { font-weight: normal; color: #000; padding: 0 5px; }
		table tr td:first-child { height: auto;}

		.qtip-wrapper { font-size: 15px; }

		.answer table { margin-top: 10px; }

		.feedback { font-size: 20px; text-align: center; width: 90%; margin: 10px auto;}
		.feedback img { vertical-align: middle; }

		.grab {cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

		img.next-toggle { display: none; }
		img.drag {  border: 2px dashed #FF6A6B; background-color: ; height: 95px; width: 120px;}
		#question .placeholder, #answer .placeholder { padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
		<?php if($language == "es_ES") { ?>
			table tr:nth-child(3) td:first-child { font-size: 17px; }
		<?php } ?> 

		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		h2 {
		    color: #00739f;
		    font-size: 20px;
		    line-height: 25px;
		    margin-top: 0;
		}
		#question table th, #answer table th {
    		line-height: 20px;
		}
		#answer #pAns {
		    text-align: left;
		    margin: -10px 0;
		    font-size: 20px;
		    color: #00739f;
		    margin-top: -10px;
		    line-height: 25px;
		    margin-bottom: 5px;
		}
		.feedback {
		    font-size: 18px;
		    text-align: center;
		    width: 90%;
		    margin: 10px auto;
		    line-height: 20px;
		}
		#answer table td {
		    padding: 18px;
		    font-size: 22px;
		    border: 2px solid #ffffba;
		    margin: 5px;
		    border-radius: 10px;
		    box-sizing: border-box;
		}
		#answer table tr div {
		    margin-top: 20px;
		    width: 57px;
		    height: 25px;
		    margin: 0 auto;
		    margin-top: -27px;
		}
		img.drag {
		    border: 2px dashed #FF6A6B;
		    height: 70px;
		    width: 80px;
		}

    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="question" class="grid_12">
						<h1><?php echo _("Quick Check #3"); ?></h1>
			
						<h2><?php echo _("Drag the images below into the correct column to indicate whether they are experiencing balanced or unbalanced forces. Hover your mouse over the images to see the details."); ?></h2>
						<div class='placeholder'>
						
					<table >
									<tr>
										<th><?php echo _('Items'); ?></th>
										<th><?php echo _('Forces are balanced'); ?></th>
										<th><?php echo _('Forces are unbalanced'); ?></th>
									</tr>

									<tr>

										<td name="first-column" id="col1s"><img src="assets/9/space.jpg" class="drag" id = "appear1"></td>
										<td><div id="2"></div></td>
										<td><div id="3"></div></td>


									</tr>


									<tr>
										<td name="first-column" id="5"><img src="assets/9/baseball.jpg" class="drag" id = "appear2"></td>
										<td><div id="6"></div></td>
										<td><div id="7"></div></td>
									</tr>

									<tr>
										<td name="first-column" id="9"><img src="assets/9/bowling.jpg" class="drag" id = "appear3"></td>
										<td><div id="10"></div></td>
										<td><div id="11"></div></td>
									</tr>
								</table>
						</div>
			</div>
					</div>
					<div class="clear"></div>

					<div id="answer">
				<h1><?php echo _('Quick Check #3'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div class='placeholder'>
				<p id = "pAns"><?php echo _('Drag the images below into the correct column to indicate whether they are experiencing balanced or unbalanced forces. Hover your mouse over the images to see the details.'); ?>
				</p>
					<p><?php echo _('You answered...'); ?></p>

					<div class="answer">
						<table >
							<tr>
								<th><?php echo _('Answer'); ?></th>
								<th><?php echo _('Forces are balanced'); ?></th>
								<th><?php echo _('Forces are unbalanced'); ?></th>
							</tr>

							<tr>
								<td class="1"><img src="assets/9/space.jpg" class="drag"></td>
								<td><div class="2" value = "2ans"></div></td>
								<td><div class="3"></div></td>
							</tr>

							<tr>
								<td class="5"><img src="assets/9/baseball.jpg" class="drag"></td>
								<td><div class="6"></div></td>
								<td><div class="7"></div></td>
							</tr>

							<tr>
								<td class="9"><img src="assets/9/bowling.jpg" class="drag" id = "he1"></td>
								<td><div class="10"></div></td>
								<td><div class="11"></div></td>
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
		<a href="10.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Standing on a balance beam..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jquery.qtip.min.js"></script>


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

		$(document).ready(function() {
			$('#appear1').qtip({ content: "<?php echo _("A satellite circles the Earth at a constant speed"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
			$('#appear2').qtip({ content: "<?php echo _("A softball player slides to a stop in the dirt"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
			$('#appear3').qtip({ content: "<?php echo _("A bowling ball rolls at a constant speed"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
		});	

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
			ive = ren = joa = 0;
			
			if ($('#2').html() != '') {
				answer.find('.1').html('<img src="assets/wrong.png">');
				answer.find('.2').html('<img src="assets/9/space.jpg">').qtip({ content: "<?php echo _("A satellite circles the Earth at a constant speed"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				answer.find('.3').html('');
				ans6 = '1st Image (Forces are balanced)';

			} else {
				answer.find('.1').html('<img src="assets/correct.png">');
				answer.find('.2').html('');
				answer.find('.3').html('<img src="assets/9/space.jpg">').qtip({ content: "<?php echo _("A satellite circles the Earth at a constant speed"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				ans6 = '1st Image (Forces are unbalanced)';
				ive = 1;
			}

			if ($('#6').html() != '') {
				answer.find('.5').html('<img src="assets/wrong.png">');
				answer.find('.6').html('<img src="assets/9/baseball.jpg">').qtip({ content: "<?php echo _("A softball player slides to a stop in the dirt"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				answer.find('.7').html('');
				ans7 = '2nd Image (Forces are balanced)';
				
			} else {
				answer.find('.5').html('<img src="assets/correct.png">');
				answer.find('.6').html('');
				answer.find('.7').html('<img src="assets/9/baseball.jpg">').qtip({ content: "<?php echo _("A softball player slides to a stop in the dirt"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				ans7 = '2nd Image (Forces are unbalanced)';
				ren = 1;
			}

			if ($('#10').html() != '') {
				answer.find('.9').html('<img src="assets/correct.png">');
				answer.find('.10').html('<img src="assets/9/bowling.jpg">').qtip({ content: "<?php echo _("A bowling ball rolls at a constant speed"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				answer.find('.11').html('');
				ans8 = '3rd Image (Forces are balanced)';
				joa = 1;
			} else {
				answer.find('.9').html('<img src="assets/wrong.png">');
				answer.find('.10').html('');
				answer.find('.11').html('<img src="assets/9/bowling.jpg">').qtip({ content: "<?php echo _("A bowling ball rolls at a constant speed"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				ans8 = '3rd Image (Forces are unbalanced)';
			}

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qc3-a', ans6);
				saveAnswer('forces-of-all-kinds-qc3-b', ans7);
				saveAnswer('forces-of-all-kinds-qc3-c', ans8);
				answered = 1;
			}

		if (ive == 1 && ren == 1 && joa == 1) {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You got it! The satellite traveling on a curved path and the softball player slowing down are both examples of unbalanced forces."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Not quite! The satellite moving in a circular path as it orbits around the earth requires an unbalanced force even if it\'s moving at a constant speed. The softball player is using a friction interaction with the ground to slow to a stop – this is a type of acceleration and that means forces are unbalanced. The bowling ball moving in a straight line at a constant speed is an example of an object experiencing balanced forces.'); ?></p>");
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
				document.location.href = "8.php#screen3";
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

	<script src="js/toucheffects.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
