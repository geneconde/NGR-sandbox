<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		p { text-align: left }
		h1 { color: #cf8e34; padding-bottom: 20px; }
		#buttons .next { display: none; }
		.bg { background-image: url(images/8/bg.jpg); overflow: hidden; }

		#screen2 {  display: none; }
		#screen2 div p { position: relative; z-index: 44; }

		#screen1 img { border-radius: 0; }
		#screen1 .images { width: 87%; margin: 50px auto 0; }

		#screen1 .images img { padding-right: 30px; }
		#screen1 .images img:last-child { padding-right: 0; }

		#sun { margin-right: -100px; margin-top: -70px; height: 33%; position: absolute; right: 0; z-index: 1; top: 0; width: 30%; background:url("images/8/sun.png") no-repeat center; -webkit-animation: infinite-spinning 5s infinite; -moz-animation: infinite-spinning 5s infinite; -o-animation: infinite-spinning 5s infinite; }

		@-webkit-keyframes infinite-spinning { from { -webkit-transform: rotate(0deg); } to { -webkit-transform: rotate(360deg); } }
		@-moz-keyframes infinite-spinning { from { -moz-transform:  rotate(0deg); } to { -moz-transform:  rotate(360deg); } }

		<?php if ($language == 'es_ES') : ?>
			#screen2 p { font-size: 21px !important; }
		<?php endif; ?>

		html[dir="rtl"] p { text-align:right; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#screen1 .images { width: 100%; }
			#screen2 div img { width: 350px; }
			#screen2 div p { width: 320px; margin: 110px 0 0; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 40px; }
			#screen1 .images { margin: 7px auto 0; }
			#screen1 p { line-height: 25px; }
			#screen1 .images img { width: 100%; }
		}
		#screen2 .imgc div { float:left; width: 45%; }
		#screen2 img { margin-top: 40px !important; width: 100% !important; }
		#screen2 .imgc p { float: right; width: 50%; padding-top: 14%; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="screen1">
				<h1><?php echo _("More big ideas... about energy and its forms"); ?></h1>
				
				<p><?php echo _("We use some forms of energy more than others in our daily lives. But all sources of energy are important because we can change one form to another. For example, electrical energy is one energy form that is very important in our daily lives. But the electricity we use has to be made from other kinds of energy. Most of our electricity is made from burning fossil fuels. Oil, coal and natural gas are <span class='key'>fossil fuels</span>. But fossil fuels come from plants and animals that died and decayed a long, long time ago. That means that they are <span class='key'>nonrenewable</span> because it would take thousands and thousands of years to make more fossil fuels. So we will eventually burn all the fossil fuels that we have."); ?></p>

				<div class="images"><img src="images/8/8.gif"></div>
			</div>

			<div id="screen2">
				<div id="sun"></div>

				<div class='imgc'>
					<div><img src="images/8/2.jpg"></div>
					<p><?php echo _("Solar panels take solar energy from the sun to generate power."); ?></p>
				</div>
				<div class="clear"></div>
				<p><?php echo _("Renewable sources of energy are the ones that will not run out. Solar energy is a <span class='key'>renewable energy</span>. Solar energy is the main source of energy for everything on earth. Solar energy heats the ground and water, produces weather that generates wind, and is stored as energy in the plants we eat and the wood that we burn. Solar energy is also a clean energy because it doesn't <span class='key'>pollute</span> or dirty the air like burning fossil fuels does."); ?></p>

				<p><?php echo _("A final thing to remember about energy is that no matter how many times or ways energy changes forms, the total amount of energy always stays the same. That means energy cannot be created or destroyed. Scientists call this idea the <span class='key'>law of conservation of energy</span>."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Turning on electricity..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var hash = window.location.hash.slice(1);
		
		var back = $('a.back'),
		next = $('a.next'),
		more = $('a.readmore'),

		screen1 = $('#screen1'),
		screen2 = $('#screen2');

		more.on('click', function() {
			screen1.fadeOut(function() {
				window.location.hash = '#screen2';
				screen2.fadeIn();
			});
			more.fadeOut(function() { next.fadeIn(); });
		});

		back.on('click', function() {
			if (screen1.is(':visible')) {
				document.location.href = "7.php";
			} else {
				screen2.fadeOut(function() { screen1.fadeIn(); 
					$('h1').show(); });
				next.fadeOut(function() { more.fadeIn(); });
				removeHash();
			}
		});
		
		if (hash == 'screen2') {
			$('#screen1').hide();
			$('h1').hide();
			$('#screen2').show(function() {
				$('a.readmore-toggle').fadeOut(function() {
					$('a.next-toggle').fadeIn();
				});
			});
		} else { $('h1').show(); }
	</script>
</body>
</html>
