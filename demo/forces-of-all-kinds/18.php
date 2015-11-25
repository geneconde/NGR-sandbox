<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'gravity-in-action-qq3-a');
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
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #df3e3e; }
		h2 {color:00739f;}
		
		.wrap { border-color: #e5dd6f; }
		.bg { background-image: url(assets/18/qq.jpg); }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { .bg { background-size: cover !important; } }

		.ac-custom input[type="radio"]:checked + label { color: #FF6A6B; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { background-color: #FF6A6B; height: 20px; width: 20px; margin-top: -11px; }
		.ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }
		.ac-custom svg path { stroke: #FF6A6B; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { background-color: #FF6A6B; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] .ac-custom svg { right: 3px; left: 98%; }

		#sidepic {float: left;}
		#answer { display: none; }
		#answer p { text-align: center; }
		#answer #imgside {margin-left:103%;}

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

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?></h1>
						<h2><?php echo _("A tow rope pulling on a box gives it a certain amount of acceleration. Doubling the mass of the box, without changing the force in the tow rope, would have what effect on the acceleration?"); ?></h2>

						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol class = "grid_6">
								<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("The acceleration would double."); ?></span></label></li>
								<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("The acceleration would not change."); ?></span></label></li>
								<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("The acceleration would quadruple."); ?></span></label></li>
								<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("The acceleration would be half as much."); ?></span></label></li>
							</ol>
						</form>
									<div class = "grid_5">
					<img src = "assets/18/rope.jpg" id = "sidepic">
				</div>
					</div>
						<div id="answer">
							<h1 class="grid_12"><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<div class = "grid_4">
							<img src = "assets/18/rope.jpg" id = "imgside">
							</div>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Securing a tow rope..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Mass and acceleration have an inverse relationship, and one thing increases, the other thing decreases."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Mass and acceleration have an inverse relationship, changing the mass of the object will definitely have an effect on acceleration."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Mass and acceleration have an inverse relationship, increasing the mass will not result in an increase in acceleration."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! Mass and acceleration have an inverse relationship, increasing the mass will decrease the acceleration. In this case, doubling the mass will cut the acceleration in half."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qq3-a', answer); // Correct answer: D
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			 checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

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
				document.location.href = "17.php";
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
