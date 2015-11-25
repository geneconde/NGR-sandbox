<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Forces of all Kinds"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/nlform_rtl.css">
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/nlform.css">
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #df3e3e; }
		h2 {color:#00739f;}
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/16/qq.jpg); }

		#nl-form {}
		#nl-form a { border-bottom: 0; background-color: #df3e3e; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #FF6A6B; }
		.nl-field li { color: #fff; font-size: 28px; }
		.nl-dd ul li.nl-dd-checked { background-color: #df3e3e; color: #fff; }

		#n2-form {}
		#n2-form a { border-bottom: 0; background-color: #df3e3e; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.n2-field ul { background-color: #FF6A6B; }
		.n2-field li { color: #fff; font-size: 28px; }
		.n2-dd ul li.nl-dd-checked { background-color: #df3e3e; color: #fff; }

.feedback.grid_12 {
    line-height: 25px;
    font-size: 22px;
}
div#selector {
    position: absolute;
    bottom: -15%;
    width: 100%;
}
.feedback.grid_12 {
    top: 55px;
}
span.text {
    /* line-height: 20px !important; */
    font-size: 20px;
}
.answer #nl-form a {
    border-bottom: 0;
    background-color: #df3e3e;
    padding: 0 8px;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    left: -55px;
}

		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		a.nl-field-toggle {
		    position: absolute;
		}


    }

	<?php if ($language == 'es_ES') : ?>
	@media only screen and (max-width: 1250px){
		.grid_3 {
		    line-height: 20px;
		}
		.feedback.grid_12 {
		    line-height: 18px;
		    font-size: 20px;
		}
	}
	<?php endif; ?>
	@media only screen and (max-width: 960px){
		img, video {
		    width: 90%;
		}
		div#selector {
		    position: absolute;
		    bottom: -6%;
		    width: 100%;
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

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?></h1>
						<h2 class="grid_12"><?php echo _("Use the pull down menu to indicate whether the object is experiencing balanced or unbalanced forces."); ?></h2>

						<div class="grid_12">
							<div class="grid_3">
							<!-- <input type="radio" id="a1" name="q1" value="A"> -->
								<label for="a1"><img src="assets/16/riverside.jpg"><span class="text"><?php echo _("A ferry slows down as it approaches a dock."); ?></span></label>
							</div>
							
							<div class="grid_3">
							<!-- 	<input type="radio" id="b1" name="q1" value="B"> -->
								<label for="b1"><img src="assets/16/basketball.jpg"><span class="text"><?php echo _("A basketball arcs towards the hoop."); ?></span></label>
							</div>
							
							<div class="grid_3">
							<!-- 	<input type="radio" id="c1" name="q1" value="C"> -->
								<label for="c1"><img src="assets/16/hockey.jpg"><span class="text"><?php echo _("A hockey puck slides across the ice at a constant speed."); ?></span></label>
							</div>
							
							<div class="grid_3">
							<!-- 	<input type="radio" id="d1" name="q1" value="D"> -->
								<label for="d1"><img src="assets/16/stones.jpg"><span class="text"><?php echo _("A red rock sits motionless atop some other rocks."); ?></span></label>
							</div>

						<div id="selector">
							<form id="nl-form" class="nl-form">
								<div class="grid_3">
								<select class="selector" name="select1">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="opt1A"><?php echo _("Balanced"); ?></option>
									<option value="opt1B"><?php echo _("Unbalanced"); ?></option>
								</select>
								</div>

								<div class="grid_3">
								<select class="selector" name="select2" >
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="opt2A"><?php echo _("Balanced"); ?></option>
									<option value="opt2B"><?php echo _("Unbalanced"); ?></option>
								</select>
								</div>

								<div class="grid_3">
								<select class="selector" name="select3" >
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="opt3A"><?php echo _("Balanced"); ?></option>
									<option value="opt3B"><?php echo _("Unbalanced"); ?></option>
								</select>
								</div>

								<div class="grid_3">
								<select class="selector" name="select4" >
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="opt4A"><?php echo _("Balanced"); ?></option>
									<option value="opt4B"><?php echo _("Unbalanced"); ?></option>
								</select>
								</div>

								<div class="nl-overlay"></div>
							</form>
						</div>
							


						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<p class="answer grid_12"></p>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="17.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/nlform.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			
			answer = "";
			$('#question select option:selected').each( function(){
				answer += $(this).text() + " ";
			});

			answer = answer.trim();
			/* alert(answer); */	
				

			if (answer == 'Unbalanced Unbalanced Balanced Balanced') {
				$('#answer .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes. The ferry is changing speeds, so is the ball, so they experience unbalanced forces. The puck moving at a constant speed and the motionless rock are examples of balanced forces."); ?></p>");
			} else{
				$('#answer .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('The ferry is slowing down and the ball is changing speeds as it rises and falls, and its path is arced – these things all require an unbalanced force. The puck isn\'t speeding up or slowing down, and the rock is at rest - that means that the forces are balanced.'); ?></p>");
			}

			$('.answer').html($('#question div.grid_12').html());

			console.log(answer);

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qq#1-a', answer); // Correct answer: Unbalanced Unbalanced Balanced Balanced
				answered = 1;
			}
		}
/*
		function allIsAnswered(){
			$('select')

		} */




		$('.checkanswer').click(function() {
			var noAnswer = false;

			$('#nl-form').find('select').each(function() {
				if ($(this).val() == '') noAnswer = true;

			});

			if (noAnswer) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('.back').fadeOut();
				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#question').fadeOut(function() { 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "15.php";
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

		var nlform = new NLForm(document.getElementById('nl-form'));
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
