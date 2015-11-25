<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
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

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/captionHoverEffects.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

			<link rel="stylesheet" href="css/grid.css">
			
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>
	
	<style>
		h1 { color: #303b47; margin-top: 10px;}
		
		.wrap { border-color: #8b4414; }
		.bg { background-image: url(assets/8/8.jpg); overflow: hidden;}

		#screen2 { display: none; }
		#screen2 p { margin-left: 10px; margin-top: 15px; }
		#screen2 .grid_7 p, .grid_4 img{ margin-top: -5px;}
		#screen2 .cs-style-1 { margin-top: -60px; }
		#screen2 .img { margin-top: 10px; }

		.grid li { float: left; width: 283px; padding: 10px; }
		.grid a { display: none !important; }
		.grid figcaption { padding: 10px; background-color: #FFEBB5; height: auto; color: black; }
		.grid figcaption span { font-size: 20px; }

		html[dir=rtl] #screen2 p { text-align: right; }

		#buttons .next { display: none; }
		
		@media screen and (max-width: 1250px) { #screen2 .grid_4 p { margin-top: -5px;} #screen2 .grid_4 img { width: 80%;} .grid figure img { max-width: 80%; } 
						#screen2 .grid_8 { margin-top: -20px; } .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
<style type="text/css"></style></head>

<body style="display: block;">
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<div class="grid_12">

							<h1 class="grid_12"><?php echo _("More big ideas about... electric circuit");?></h1>

							<p class="grid_12"><?php echo _("The electric currents from power plants reach our homes and businesses by wires strung on poles above ground and buried in tubes underground.  Batteries that make our flashlights light and our cars start also generate electric currents.  In both cases wires are connected to and from either the batteries or the power plant in a loop called a circuit as shown below.");?></p>
							
							<div class="grid_6 prefix_3">
								<label for="a"><img src="assets/8/4a.png"></label>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div id="screen2">
						<p><?php echo _("There are two kinds of electric circuits: a <span class='key'>series circuit</span> and a <span class='key'>parallel circuit</span>.The diagrams below show a series circuit and a parallel circuit that both contain two light bulbs.");?></p>
						<p><?php echo _("Hover your mouse over in the images to know more about electric circuits.")?></p>
						
						<ul class="grid cs-style-1 prefix_2">
							<li>
								<figure>
									<p class="prefix_2"><?php echo _("Series Circuit")?></p><img src="assets/8/Series.jpg">

									<figcaption>
										<span><?php echo _("In a series circuit, the electric current flows in one single loop.")?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<p class="prefix_2"><?php echo _("Parallel Circuit")?></p><img src="assets/8/Parallel.jpg">

									<figcaption>
										<span><?php echo _("In a parallel circuit, the electric current can flow in more than one loop.")?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
						</ul>
						<div class="grid_8">
						<p><?php echo _("Electric current will move in a series circuit only if the loop is <span class='key'>closed</span> or not broken.  In the diagram of the series circuit, that means if one of the light bulbs is burned out or removed, the circuit will be broken or <span class='key'>open</span>. The electric current will stop moving and the other light bulb will not light.");?></p>
						</div>

						<div class="grid_4 img">
						<label for="a"><img src="assets/8/8c.jpg"></label>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="8" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the diagram..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/8/8.jpg)');
					$('.wrap').css('border-color', '#8b4414');

					$('#question').fadeOut(100, function() { $('#screen2').fadeIn(); });

					$('.back').fadeOut();

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				} else {
					$('.bg').css('background-image', 'url(assets/8/8.jpg)');
					$('.wrap').css('border-color', '#8b4414');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.readmore').click(function() {
			$('#question').fadeOut(function() {
				$('.bg').css('background-image', 'url(assets/8/8.jpg)');
				$('.wrap').css('border-color', '#8b4414');

				$('#screen2').fadeIn();

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				window.location.hash = '#screen2';
			});
		});

		$('.back').click(function() {
			if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/8/8.jpg)');
					$('.wrap').css('border-color', '#8b4414');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn(); 
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '7.php'); }
		});
	</script>


	
<ul class="lang-menu">
	<li><a href="../../teacher.php#">Go Back to Dashboard</a></li>
	<li>
		<a href="#">Language: English</a>

		<ul>
			<li><a href="/shymansky/sandbox/demo/templates/electric-circuits.php?lang=en_US">English</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/electric-circuits.php?lang=ar_EG">Arabic</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/electric-circuits.php?lang=es_ES">Spanish</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/electric-circuits.php?lang=zh_CN">Chinese</a></li>
		</ul>
	</li>		
</ul>

<script>
	function addHash(tag) {
		$("ul.lang-menu ul a").each(function() {
			this.href = this.href + tag;
		});
	}

	function removeHash() {
		$("ul.lang-menu ul a").each(function() {
			var str = this.href;
			if (str.indexOf("#") != -1) 
				this.href = str.substring(0, str.indexOf("#"));
		});
	}
</script>

	<script src="js/jpreloader.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>

</body></html>