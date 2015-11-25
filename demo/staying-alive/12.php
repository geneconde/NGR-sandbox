<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$smc->updateStudentLastscreen(14, $_SESSION['smid']);
		$problem = $mmc->getModuleProblem('staying-alive');
		$sa = $mac->getProblemAnswer2($_SESSION['smid'],$problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #3986C9; font-size: 30px; }
		h2 { text-align: center; color: #3F5473; }
		.wrap { border-color: #A4D896; }
		.bg { background-image: url(assets/12/bg.jpg); overflow: hidden; }

		#task { display: none; text-align: left; }
		#task h2 { margin-top: 0; padding-top: 20px; }
		textarea { width: 90%; margin-top: 20px; display: inline-block; border-radius: 5px; border: solid grey; outline: 0; padding: 10px; font-size: 24px; }
		#buttons .next { display: none; }
		#scenario img { margin: 2% auto; display: block; width: 50%; }
		<?php if($language == "es_ES") { ?>
			h1 { font-size: 22px; }
		<?php } ?> 

		html[dir="rtl"] h1 { text-align: right; font-size: 28px; }

		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#scenario img { width: 40% !important; }
			#task h2 { margin-top: 20px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="scenario">
						<h1><?php echo _("Using what you know... about staying alive... to solve a problem"); ?></h1>

						<h2><?php echo _("The Problem"); ?></h2>

						<p><?php echo _("Officials want to expand biodiversity conservation efforts on a certain island. The main goals are to protect the biodiversity of the ecosystem, and to protect the native primates that live in the forests on the island. The endangered primates are unique and have become an eco-tourist attraction. They are sensitive to habitat changes, and at a high risk of extinction. Only one of four forest areas will receive full support for conservation."); ?></p>
						<img src="assets/12/island.jpg" />
					</div>

					<div id="task">
						<h2><?php echo _("The Task"); ?></h2>

						<p><?php echo _("You are a scientist on the conservation team that will decide which area should get full conservation support. How would you choose one forest to protect the biodiversity of the island? List three factors you would consider to compare the forests. For example, what economic advantage each island has could be a factor. What else would you consider to make a decision that would best meet the biodiversity conservation goals?"); ?></p>

						<div class="grid_8 prefix_2">
							<textarea cols="80" rows="7" placeholder="<?php echo _("Please type your answer here..."); ?>"></textarea>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Protecting biodiversity..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		var answered = 1; /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */

		$('.next').click(function() {
			if ($('textarea').val() == '') {
				alert("<?php echo _("Please type your answer."); ?>");
				return false;
			} else {
				if (answered == 0) {
					saveMeta('staying-alive', $('textarea').val());
					answered = 1;
				}

				document.location.href = "11.php";
			}
		});

		$('.back').click(function(){
			if ($('#scenario').is(':visible')) {
				document.location.href= "11.php";
			} else if ($('#task').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#task').fadeOut(function() { $('#scenario').fadeIn(); });
			}
		});

		$('.readmore').click(function() {

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});

			$('#scenario').fadeOut(function() {
				$('#task').fadeIn();

				window.location.hash = '#task';
			});
		});

		$(".slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
