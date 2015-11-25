<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'human-impact-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Human Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #00A7D4; }
		h2 { color: #F84D82; margin: 5px 0; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/5/bg.jpg); }

		#question1 input[type="radio"] { display: none; }
		#question1 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question1 input[type="radio"]:checked + label img { border: 4px solid #00A7D4; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; }
		#question1 input[type="radio"]:checked + label span { color: #00A7D4; }
		#question1 div span { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; }
		label img { width: 90%; margin: 0 5%; }
		.ac-custom input[type="radio"]:checked + label { color: #777; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #777; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer1 p { text-align: left; }

		html[dir=rtl] #answer1 p { text-align: right; }

		#buttons .next { display: none; }
		#question1 .clear { height: 40px; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following activities you do everyday has <span class='blink'>no</span> negative effect on the environment?"); ?></h2>
							
							<div class="grid_4">
								<input type="radio" id="a1" name="q1" value="A">
								<label for="a1"><img src="assets/5/a.jpg"><span><?php echo _("Eating breakfast"); ?></span></label>
							</div>

							<div class="grid_4">
								<input type="radio" id="b1" name="q1" value="B">
								<label for="b1"><img src="assets/5/b.jpg"><span><?php echo _("Going to school"); ?></span></label>
							</div>

							<div class="grid_4">
								<input type="radio" id="c1" name="q1" value="C">
								<label for="c1"><img src="assets/5/c.jpg"><span><?php echo _("Watching TV"); ?></span></label>
							</div>

							<div class="clear"></div>	
							
							<div class="grid_4 prefix_1 suffix_2">
								<input type="radio" id="d1" name="q1" value="D">
								<label for="d1"><img src="assets/5/d.jpg"><span><?php echo _("Sleeping"); ?></span></label>
							</div>
		
							<div class="grid_4">
								<input type="radio" id="e1" name="q1" value="E">
								<label for="e1"><img src="assets/5/e.jpg"><span><?php echo _("None of the above"); ?></span></label>
							</div>
											
							
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _(""); ?></h2>

						
							<div class="clear"></div>

						</div>
												
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
						
						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following activities you do everyday has <span class='blink'>no</span> negative effect on the environment?"); ?></h2>

							<div class="image grid_2"></div>

							<div class="grid_10">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
						<!--	<h2 class="grid_12"><?php echo _(""); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						-->
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check…"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		$('input.q1').on('change', function(evt) {
		   if($('input.q1:checked').length == 3) {
		       this.checked = false;
		   }
		});
		
		$('#grey').append($('#table'));
		$('.show_table span').click(function() {
			$('#grey').fadeIn();
		});
		$('.close').click(function() {
			$('#grey').fadeOut();
		});

		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = ''

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());
			$('#answer1 .image').html($('#question1 input:radio:checked').parent().find('img').clone());
			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Wrong - Watching TV requires electricity that usually comes from burning fossil fuel or damming rivers. An exception might be if your house uses solar powered electricity. But even then you're probably watching TV in your house that required wood and other materials to build it that were taken from the environment."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong - Eating breakfast requires farms to make your food – cereal, eggs, and bacon, whatever you eat. And these farms had to change whatever habitat existed before it became a farm so farms have a great environmental impact to make food for us."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong - Going to school is a big one. It requires transportation such as a car or bus – which requires fuel like gasoline and oil. And the school is build from lots of materials from the environment – like you house – but even more. Then the environment where the school is located had to be destroyed to make room for the school."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong - Sleeping is relatively low impact but you still need a house that's heated or cooled which requires materials for the house and electricity or other fuel to heat or cool it. But if you went camping and slept outside you would really have a low impact."); ?></p>");

			if (answer1 == 'E')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Right!! Actually - all of student's daily activities have some negative effect on the environment."); ?></p>");

			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect. The data show that there are variations in the concentrations of each."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect. Argon is a trace element in Earth's atmosphere. It has a concentration of less than 1%."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct. The composition varies from location to location."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect."); ?></p>");
				
			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('human-impact-qc1-a', answer1); // Correct answer: B
				saveAnswer('human-impact-qc1-b', answer2); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;
			
			if (checkAnswer < 1 ) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "4.php#screen2";
			} else if ($('#answers').is(':visible')) {
				
				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
