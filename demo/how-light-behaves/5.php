<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'how-light-behaves-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("How Light Behaves"); ?></title>

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
		h1 { color: #31C1B7; }
		h2 { color: #EB6966; }
		
		.wrap { border-color: #9EF5FF; }
		.bg { background-image: url(assets/5/bg.jpg); }
		p { margin: 0; }
		
		#sortable { width: 100%; padding: 10px 0; }
		#sortable li { text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; cursor: move; }
		#sortable li:last-child { margin-bottom: 0; }
		
		#buttons .next { display: none; }
		
		#sortable img { margin: 5px 0; }
		#not-sortable ul { padding: 10px 0; }
		#not-sortable img { float: left; width: 41%; margin-right: 5%; margin: 5px 0; } 
		#not-sortable span { float: left; width: 45%; }
		#not-sortable span { margin-top: 15%; text-align: center; }
		#not-sortable li { margin-bottom: 4px; }
		
		#sortable img { border: #3C89F3 dashed; width: 81%; }
		
		#answer #not-sortable span { margin-top: 8%; }
		#answer #not-sortable img { float: left; width: auto; height: 88px; margin-right: 5%; margin: 5px 0; } 
		#answer #not-sortable li, #answer #sortable li { height: 90px; }
		#answer #sortable img { height: 88px; width: auto; margin: 5px 0; }
		#answer #sortable-container { margin-left: -88px; }
		#answer #sortable li, #answer #not-sortable li { margin-bottom: 0; }
		<?php if($language=='es_ES'){ ?>
			#not-sortable span { margin-top: 11%; }
			#not-sortable li:nth-child(2) span { margin-top: 7%; }
			#answer #not-sortable li:nth-child(2) span { margin-top: 4%; }
		<?php } ?>
		<?php if($language=='es_ES' || $language=='en_US'){ ?>
			#answers p, #answer p {
			    line-height: 25px;
			}
			@media (max-width: 735px ) { #answers p, #answer p { font-size: 14px; } }
		<?php } ?>
		@media (max-width: 1250px ) {
			#not-sortable img { width: 30%; }
			#sortable img { width: 60%; }
			#answer #not-sortable img { float: left; width: auto; height: 80px; margin-right: 5%; margin: 5px 0; } 
			#answer #sortable img { height: 80px; width: auto; margin: 5px 0; }
		}
		@media (max-width: 1100px ) { #answers p, #answer p { font-size: 20px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>
						<h2 class="grid_12"><?php echo _("Look at the pictures below of objects and shadows made with light from the Sun. Match the object with its shadow by dragging the shadow images up or down."); ?></h2>
						<div id="sort">	
							<div class="grid_6 prefix_1" id="not-sortable">
								<ul>
									<li><span><?php echo _("Funny Hat"); ?></span><img src="assets/5/a.jpg" /></li>
									<li><span><?php echo _("Toy Rake"); ?></span><img src="assets/5/b.jpg" /></li>
									<li><span><?php echo _("Basket"); ?></span><img src="assets/5/c.jpg" /></li>
								</ul>
							</div>
							
							<div id="sortable-container" class="grid_3">
								<ul id="sortable">
									<li id="1"><img src="assets/5/1.jpg" /></li>
									<li id="2"><img src="assets/5/2.jpg" /></li>
									<li id="3"><img src="assets/5/3.jpg" /></li>
								</ul>
							</div>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<h2 class="grid_12"><?php echo _("Look at the pictures below of objects and shadows made with light from the Sun. Match the object with its shadow by dragging the shadow images up or down."); ?></h2>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer"></div>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	
	<script>
	
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('#sort').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString();

			if (answer == '201') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Well done! The shadows that are formed will share common features with the objects. The shadow of the rake will have lines of light and dark; the shadow of the funny hat will show the pointy features of the hat; and the shadow of the basket will have a long dark arc because of the basket handle."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Look again. The shadows formed by the objects will share common features with the objects. Do the shadows in your matches look similar to the objects in the photos?"); ?></p>");
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
				document.location.href = "4.php#screen2";
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
