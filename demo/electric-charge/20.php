<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(16, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'electric-charge-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Charge"); ?></title>

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
		h1 { color: #8200d4; }
		h2 { color: #0090ff; }
		
		.wrap { border-color: #94E081; }
		.bg { background-image: url(assets/18/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #35B5C0; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #0090FF; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #35B5C0; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #0090FF; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		.proton-fix {
		    background: url('assets/20/proton.jpg');
		    position: absolute;
		    top: 0;
		    height: 252px;
		    width: 264px;
		    background-size: 100% 100%;
		}
		.proton-fix span{ position: inherit; display:block; font-family: arial; font-size: 9px; }
		.electron { top: 17px; left: 68px; }
		.neutron { top: 110px; left: 42px; }
		.protons { top: 128px; left: 42px; }
		.protons2 { top: 191px; left: 29px; }
		.neutrons2 { top: 207px; left: 29px; }
		.electron2 { top: 223px; left: 29px; }
		.nucleus { top: 207px; left: 86px; }

		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			.wrap > .bg { overflow: hidden !important; }
			#question div.grid_8 { width: 62%; }
		}
		#answer .grid_4.prefix_4 { height: 264px; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?></h1>

						<h2><?php echo _("The different parts of the atom are shown in different colors.   Based on what you are able to see in this image, what would be a true statement about the charge on the material made of atoms like this."); ?></h2>
						
						<div class="grid_8">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("The material would be positively charged due to the protons in the nucleus."); ?></span></label></li>
									<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("The material would be negatively charged due to the electrons surrounding the atom."); ?></span></label></li>
									<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("The material would be negatively charged because the neutrons cancel out the protons."); ?></span></label></li>
									<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("The material would be positively charged due to the difference between the number of protons in the nucleus and the number of electrons surrounding the atom."); ?></span></label></li>
								<ol>
							</form>
						</div>
						<div class="grid_4">
							<!-- <img src="assets/20/proton.jpg" /> -->
							<div class="proton-fix">
								<span class="electron"><?php echo _("Electron") ?></span>
								<span class="neutron"><?php echo _("Neutron") ?></span>
								<span class="protons"><?php echo _("Protons") ?></span>
								<span class="protons2"><?php echo _("Protons") ?></span>
								<span class="neutrons2"><?php echo _("Neutrons") ?></span>
								<span class="electron2"><?php echo _("Electrons") ?></span>
								<span class="nucleus"><?php echo _("Nucleus") ?></span>
							</div>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<div class="grid_4 prefix_4">
							<div class="proton-fix">
									<span class="electron"><?php echo _("Electron") ?></span>
									<span class="neutron"><?php echo _("Neutron") ?></span>
									<span class="protons"><?php echo _("Protons") ?></span>
									<span class="protons2"><?php echo _("Protons") ?></span>
									<span class="neutrons2"><?php echo _("Neutrons") ?></span>
									<span class="electron2"><?php echo _("Electrons") ?></span>
									<span class="nucleus"><?php echo _("Nucleus") ?></span>
							</div>
						</div>
						<div class="clear"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying atom..."); ?></strong></section></section>

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
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect.  All atoms contain protons, so that alone would not cause the material to be positively charged."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  All atoms contain electrons, so the fact that this atom is surrounded by electrons is not enough to cause the material to be negatively charged."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No.  All atoms contain neutrons, but it is the electrons, not the neutrons, that are responsible for balancing out the charge of the protons."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it!  The key to the charge on a material is the difference between the number of positively charged protons and negatively charged electrons.  In the image, the atom has only three electrons, and at least four protons, so would make up a positively charged material."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('electric-charge-qq3-a', answer); // Correct answer: 
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			 checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 1) {
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
