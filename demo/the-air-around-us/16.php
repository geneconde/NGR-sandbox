<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'air-around-us-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("The Air Around Us"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/hexaflip.css">
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
		h1 { color: #fe8a17; }
		h2 { color: #00a49d; }
		.wrap { border-color: #78DFFE; }
		.bg { background-image: url(assets/16/bg.jpg); }
		.wrap > .bg { overflow: hidden !important; }
		.ac-custom input[type="radio"]:checked + label { color: #31b573; }
		.ac-custom label { color: #000; padding-left: 49px; line-height: 24px;}
		.ac-custom label::before { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #31b573; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		.ac-custom li {padding: .4em 0;}

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		
		#question > div img {margin: 0;}
		#question > div > span {display: block;text-align: center;}
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}

			@media only screen and (max-width: 1250px){
				body, h2 {
				    font-size: 22px;
				}
				.ac-custom label {
				    color: #000;
				    padding-left: 49px;
				    line-height: 16px;
				    font-size: 20px;
				}
				.container_12 .prefix_1 {
				    padding-left: 11.333%;
				}
				.container_12 .grid_4 {
				    width: 27.333%;
				}
			}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?></h1>
						<h2><?php echo _("Look at the two illustrations below (Figure A and Figure B).  Which of the following can you reasonably infer as true based on your observations?"); ?></h2>

						<div class="grid_4 prefix_1 suffix_2">
							<img src="assets/16/a.jpg" />
							<span><?php echo _("Figure A"); ?></span>
						</div>
						<div class="grid_4 suffix_1">
							<img src="assets/16/b.jpg" />
							<span><?php echo _("Figure B"); ?></span>
						</div>

						<div class="clear"></div>

						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("The air outside the freezer door of Figure A contains more molecules of nitrogen and oxygen than the air outside the freezer door in Figure B."); ?></span></label></li>
								<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("The air outside the freezer door of Figure A contains less molecules of water vapor than the air outside the freezer door in Figure B."); ?></span></label></li>
								<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("The air outside the freezer door of Figure A contains less molecules of nitrogen and oxygen than the air outside the freezer door in Figure B."); ?></span></label></li>
								<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("The air outside the freezer door of Figure B contains molecules of water that have condensed to form tiny droplets of water to create a “fog”."); ?></span></label></li>
							<ol>
						</form>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="17.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'D')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! The denser fog outside freezer door A is a result of a greater quantity of water vapor in the air outside freezer door A than freezer door B being condensed by the cold air flowing out of the freezer."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No! The abundance of molecules of nitrogen and oxygen cannot be inferred from the illustrations."); ?></p>");

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! The abundance of molecules of nitrogen and oxygen cannot be inferred from the illustrations."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
