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
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link href="css/jplayer.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.rslides {
		    float: right;
		    width: 100% !important;
		    height: 100% !important;
		}
		.rslides { float: right; width: 365px; height: 280px; }
		h1 { color: #9c41a3; }

		#screen1 p { line-height: 30px; }

		.wrap { border-color: #FF00FF; }
		.bg { background-image: url(assets/4/4.jpg); overflow: hidden;}

		#screen2 { display: none; padding-top: 20px; }
		#screen2 div.grid_12 { padding-left: 0; padding-right: 0; }

		#buttons .next { display: none; }
		#jp_container_1 { margin: 0 auto; }
		@media only screen and (min-device-width: 768px) and (max-width: 1250px) {
			#screen2 { padding-top: 55px; }
			.bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... electric circuits");?></h1>
						<p class="grid_12"><?php echo _("You need to first know something about the <span class='key'>atoms</span> that make up matter to understand what <span class='key'>electricity</span> is.  All atoms contain very small negatively charged particles called <span class='key'>electrons</span>. The electrons orbit around a nucleus or large center part of the atom. In most metals, these negatively charged electrons begin to move away from the nucleus if a <span class='key'>magnet</span> moves near the metal or if the metal moves near a magnet. The electrons in the atoms of a wire can be made to move one direction or the other, depending on how the wire and magnet are moved. This movement of electrons in a wire is called an <span class='key'>electric current</span> or <span class='key'>electricity</span>.");?></p>

						<p class="grid_7"><?php echo _("The amount of electric current that moves in either direction in a wire is measured in a unit called <span class='key'>Amperes</span> or Amps. One amp is about the amount of electric current needed to light a kitchen ceiling light. Increasing the amount of wire being moved, using a stronger magnet or moving the wire or magnet more quickly near each other all produce larger electric currents.");?></p>
						
						<div class="grid_5">
							<ul class="rslides">
								<li><img src="assets/4/4a.jpg"></li>
								<li><img src="assets/4/4b.jpg"></li>
								<li><img src="assets/4/4c.jpg"></li>
							</ul>	
						</div>
							

					</div>

					<div id="screen2" class="screen">
						<div class="grid_12">
							<div id="jp_container_1" class="jp-video jp-video-270p">
								<div id="jplayer" class="jp-jplayer" style="width: 100%; height: auto;">
									<img id="jp_poster_0" style="width: 100%; height: auto; display: none;">
									<video id="jp_video_0" preload="metadata" controls="" poster="" src="assets/4/stock-footage-wind-turbines.webm" style="width: 100%; height: auto;"></video>
								</div>

								<div class="jp-no-solution" style="display: none;">
									<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
								</div>
							</div>
						</div>
						<p><?php echo _("Electric power plants use very large turbines that spin loops made up of thousands of meters of wire very, very quickly next to very large magnets to generate electric current. Power plants use the <span class='key'>energy</span> from such things as steam from burning fuels, water from dams, and moving blades of windmills to turn the turbines in generating electric current. They then use wires to move the energy of the electric current to our homes and businesses.");?></p>					
					</div>
		</div>
	</div>
</div>
</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Monitoring electric meter..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	
	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/4/4.jpg)');
					$('.wrap').css('border-color', '#FF00FF');

					$('#screen1').fadeOut(100, function() { $('#screen2').fadeIn(); });

					$('.back').fadeOut();

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				} else {
					$('.bg').css('background-image', 'url(assets/4/4.jpg)');
					$('.wrap').css('border-color', '#FF00FF');

					$('#screen1').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.readmore').click(function() {
			$('#screen1').fadeOut(function() {
				$('.bg').css('background-image', 'url(assets/4/4.jpg)');
				$('.wrap').css('border-color', '#FF00FF');

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
					$('.bg').css('background-image', 'url(assets/4/4.jpg)');
					$('.wrap').css('border-color', '#FF00FF');

					$('#screen1').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn(); 
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '3.php#answer'); }
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	<ul class="lang-menu">
	<li><a href="../../teacher.php#">Go Back to Dashboard</a></li>
	<li>
		<a href="#">Language: English</a>

		<ul>
			<li><a href="/ngr/demo/electric-circuits/4.php?lang=en_US">English</a></li>
			<li><a href="/ngr/demo/electric-circuits/4.php?lang=ar_EG">Arabic</a></li>
			<li><a href="/ngr/demo/electric-circuits/4.php?lang=es_ES">Spanish</a></li>
			<li><a href="/ngr/demo/electric-circuits/4.php?lang=zh_CN">Chinese</a></li>
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

	<script src="js/responsiveslides.js"></script>

<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>
</body>
</html>
