<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'chemical-and-physical-changes';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
	
	
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

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
		h1 { color: #916D5D; font-size: 32px; }
		h2 { color: #93648D; }
		#answer p {text-align: left;}
		.wrap { border-color: #FFE0CE; }
		.bg { background-image: url(assets/3/bg1.jpg); overflow: hidden; background-size: 100% 100% !important;}
		
		.ac-custom li { padding: .2em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #EB6966; }
		.ac-custom label { color: #000; padding-left: 49px; font-size: 24px; }
		.ac-custom label::before { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px;}
		.ac-custom svg path { stroke: #EB6966; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		#question div > img { border: solid #aae3fd 10px; }
		#answer div p { background: rgba(255, 255, 255, .5); padding: 5px 10px; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; }
		#question > div:nth-of-type(2) > img { border: none; }
		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			#question img{
				width: 80%;
			}

			#question li span{
				font-size: 20px;
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
						<h1 class="grid_12"><?php echo _("Checking what you know about... chemical and physical changes"); ?></h1>
						<h2 class="grid_12"><?php echo _("When the ingredients in the bowl change to become a cake, what do you think is the <span class='blink'>best explanation</span> for what happens?"); ?></h2>
						
						<div class="grid_3 prefix_1">
							<img  src="assets/3/a.jpg" />
						</div>
						
						<div class="grid_3">
							<?php if ($language == 'ar_EG') { ?>
								<img src="assets/3/b-r.png" />
			        		<?php } else { ?>
								<img src="assets/3/b.png" />
			        		<?php } ?>
						</div>
						
						<div class="grid_3">
							<img src="assets/3/c.jpg" />
						</div>
						
						<div class="grid_12">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" type="radio"><label for="a"><span><?php echo _("Stirring the ingredients together causes them to mix and change to make the cake."); ?></span></label></li>
									<li><input id="b" type="radio"><label for="b"><span><?php echo _("The chemicals that make up the ingredients automatically combine to make new chemicals in the cake."); ?></span></label></li>
									<li><input id="c" type="radio"><label for="c"><span><?php echo _("The heat from the oven causes the chemicals in the ingredients to have a chemical reaction to form new chemicals that make up the cake."); ?></span></label></li>
									<li><input id="d" type="radio"><label for="d"><span><?php echo _("Cake mixes from the grocery store automatically make cakes when you cook them."); ?></span></label></li>
								<ol>
							</form>
						</div>
						
					</div>

					<div id="answer" class="grid_12">
						<div class="grid_12">
							<p><?php echo _("Simply stirring the ingredients together just makes a mixture of ingredients but not a cake. Even if you let the mixture sit for a long time, you still won't get a cake. The chemicals in the ingredients, like the eggs and milk and sugar, don't automatically combine and change to make the cake. The heat from the oven causes the chemicals that make up the cake ingredients to have a chemical reaction that changes them into new chemicals that make up a cake. These new chemicals give the cake its new properties that are different from those of the ingredients. You can't taste raw eggs or flour or milk anymore. But you can taste cake."); ?></p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Baking sweet cakes..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#806754');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn();
						$('.back').fadeIn();
				   	});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#F34345');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.checkanswer').click(function() {
			var checkAnswer = $('input:radio:checked').length;
			
			if (checkAnswer < 1 ) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#806754');

					$('#answer').fadeIn();

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});

					window.location.hash = '#answer';
				});
			}
		});

		$('.back').click(function() {
			if ($('#answer').is(':visible')) {
				$('#answer').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#F34345');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn();
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '2.php'); }
		});
	</script>
	
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
