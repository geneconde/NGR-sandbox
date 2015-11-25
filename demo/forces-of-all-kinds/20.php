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
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
		<link rel="stylesheet" href="css/nlform_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
		<link rel="stylesheet" href="css/nlform.css">
	<?php endif; ?>

	<style>
		h1 { color: #df3e3e; }
		h2 { color: #00739f; }
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/20/qq.jpg); }

		#topImg {}
		.ac-custom input[type="radio"]:checked + label { color: #FF6A6B; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #FF6A6B; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #FF6A6B; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #FF6A6B; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }
		#answers h2 {text-align:center;margin-top:30px; color: #000;}
		#fig_desc { position: relative; }
		#fig_desc p { position: absolute; font-size: 18px; z-index: 2; text-align: center; line-height: 1; color: #000; }
		#fig_desc p:first-child, #fig_desc2 p:first-child { color: blue; left: 40%; top: 0%; }
		#fig_desc p:nth-child(2), #fig_desc2 p:nth-child(2) { color: blue; left: -80%; top: 25%;}
		#fig_desc p:nth-child(3), #fig_desc2 p:nth-child(3) { color: blue; left: 70%; top: 52%;}
		#fig_desc p:nth-child(4), #fig_desc2 p:nth-child(4) { color: blue; left: 0%; top: 95%;}
		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?></h1>

					<!--	<div id="question1">
							<h2 class="grid_12"><?php echo _("A large crate is placed on the back of a flatbed truck. As the truck accelerates from rest, the crate stays on the truck because of"); ?></h2>
						</div>

					-->


						<div id="question2">
							<h2 class="grid_12"><?php echo _("Determine the unbalanced force acting on the object in this diagram."); ?></h2>

					<div class = "grid_3 prefix_4 suffix_4 " id = "topImg">
					<div id="fig_desc">
					<p class="grid_12 prefix_1"><?php echo _('10 Newtons North'); ?> </p>
					<p class="grid_12 prefix_1"><?php echo _('10 Newtons West'); ?> </p>
					<p class="grid_12 prefix_1"><?php echo _('20 Newtons East'); ?> </p>
					<p class="grid_12 prefix_1"><?php echo _('10 Newtons South'); ?> </p>
						<img src = "assets/20/20.png">
					</div>
					</div>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("50 Newtons"); ?></span></label></li>
										<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("10 Newtons East"); ?></span></label></li>
										<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("0 Newtons"); ?></span></label></li>
										<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("20 Newtons East"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<p class="grid_12"><?php echo _("You answered..."); ?></p>

								<div class = "grid_3 prefix_4 suffix_4 " id = "topImg">
									<div id="fig_desc">
										<p class="grid_12 prefix_1"><?php echo _('10 Newtons North'); ?> </p>
										<p class="grid_12 prefix_1"><?php echo _('10 Newtons North'); ?> </p>
										<p class="grid_12 prefix_1"><?php echo _('10 Newtons North'); ?> </p>
										<p class="grid_12 prefix_1"><?php echo _('10 Newtons North'); ?> </p>
										<img src = "assets/20/20.png">
									</div>
								</div>

							<h2 class="answer grid_12" id = "ansKey"></h2>

							<div class="feedback grid_12"></div>
						</div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Drawing a diagram..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/nlform.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '';

		function save() {

			answer1 = $('input:radio:checked').val();

			if (answer1 == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Nope. The direction of the force matters, so you can\'t just add the numbers together. The 10 Newtons North balances out the 10 Newtons South.'); ?></p>");

			if (answer1 == 'B')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! The North and South forces balance out, and there are 10 Newtons of force to the East that are unbalanced."); ?></p>");

			if (answer1 == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Nope. The forces in the North and South direction balance, but there\'s more force to the East than to the West. That means the forces here will be unbalanced.'); ?></p>");

			if (answer1 == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. The 10 Newtons to the West will balance out half of the 20 Newton force to the East, that leaves just 10 Newtons East unbalanced."); ?></p>");

			$('#answer1 .answer').html($('input:radio:checked').parent().find('span').text());

			console.log(answer1);

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qq5-a', answer1); // Correct answer: B

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
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
				document.location.href = "19.php";
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

		var nlform = new NLForm(document.getElementById('nl-form'));
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
