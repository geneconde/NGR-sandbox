<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = structures-and-properties-of-matter';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #F16D2D; font-size: 1.14em; }
		h2 { color: #765DF9; }
		/* h2 { color: #000; } */
		#answer p {text-align: left;}
		.wrap { border-color: #048DBB; }
		.bg { background-image: url("assets/3/bg1.jpg"); overflow: hidden;}
		
		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #9BBF21;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}
		
		#question input[type="checkbox"]:checked + label span {
			color: #9BBF21;
		}

		#question span {
			color: #000;
			cursor: pointer;
			transition: all .3s ease;
			backface-visibility: hidden;
		}

		#answer { display: none; }
		#answer p { text-align: left; }

		html[dir=rtl] #answer p { text-align: right; }

		#buttons .next { display: none; }
		#answer div {  position: absolute; top: 335px; }
		#answer div p { padding: 10px; background: rgba(255, 255, 255, .6); -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
		.full-height{
			height: 100%;
		}

		@media all and (max-width: 1250px) {
			#answer div { bottom: 12%; }
		}

		<?php if ($language == 'es_ES') : ?>
			p, h2 { line-height: 28px;}
		<?php endif; ?>

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix full-height">
				<div class="grid_12 full-height">

					<div id="question" class="grid_12">
						<h1><?php echo _("Checking what you know about... the structure and properties of matter"); ?></h1>
						<h2><?php echo _('Which of the following do you think is <span class="blink">not</span> matter – the "stuff" that makes up the universe?'); ?></h2>
						
					
						<div class="grid_3 prefix_1 suffix_1">
							<input type="checkbox" id="a">
							<label for="a"><img src="assets/3/a.jpg"></label>
							<span class="caption"><?php echo _("Rocks"); ?></span>
						</div>

						<div class="grid_3 suffix_1">
							<input type="checkbox" id="b">
							<label for="b"><img src="assets/3/b.jpg"></label>
							<span class="caption"><?php echo _("Sunlight"); ?></span>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="c">
							<label for="c"><img src="assets/3/c.jpg"></label>
							<span class="caption"><?php echo _("Water"); ?></span>
						</div>

						<div class="grid_3 prefix_2 suffix_1">
							<input type="checkbox" id="d">
							<label for="d"><img src="assets/3/d.jpg"></label>
							<span class="caption"><?php echo _("Air"); ?></span>
						</div>
						
						<div class="grid_3">
							<input type="checkbox" id="e">
							<label for="e"><img src="assets/3/e.jpg"></label>
							<span class="caption"><?php echo _("Snow"); ?></span>
						</div>
					</div>

					<div id="answer" class="grid_12 full-height">
						<div class="grid_12">
							<p><?php echo _("Matter is anything that has mass and takes up space. Most people know that rocks, dirt, snow and water are matter because they can see and feel them. Sometimes people think that air isn't matter because they can't see it – it's invisible - and they can't feel its weight because they're so used to it pressing down on them every day. But air is matter because it takes up space and has mass – you can feel it when the wind blows and it pushes upon airplane wings to keep them in the air. The only one of these choices that isn't matter is sunlight – because sunlight is energy - which doesn't have mass or take up space."); ?></p>
						</div>
						<div class="clear"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying properties of matter..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#719201');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn();
						$('.back').fadeIn();
				   	});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#058EBC');

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
			var checkAnswer = $('input:checkbox:checked').length;
			
			if(checkAnswer == '')
			{
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#719201');

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
					$('.wrap').css('border-color', '#058EBC');

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
