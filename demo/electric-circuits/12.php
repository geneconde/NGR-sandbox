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
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

			<link rel="stylesheet" href="css/grid.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>
	
	<style>
		p#tasklabel {
		    margin-top: 33px;
		}
		h1 { color: #088DA5; }
		p { margin-left: 10px; }
		p#tasklabel {
		    color: #0F7583;
		}
		img { margin: 0px auto; }

		
		.wrap { border-color: #0F7583; }
		.bg { background-image: url(assets/12/12.jpg); overflow: hidden;}

		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #777;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}
		#question h1 {font-size: 31px;}

		#question span {
			color: #777;
			cursor: pointer;
			transition: all .3s ease;
			backface-visibility: hidden;
		}

		#task { display: none; }
		#task p { text-align: left; }

		html[dir=rtl] #task p { text-align: right; }

		#buttons .next { display: none; }
		textarea { width: 100%; border: 1px solid #8781bd; margin: 10px 0; max-height: 300px; min-height: 300px; padding: 12px; }

		@media screen and (max-width: 1250px) { #question h1 { font-size: 30px; } #question p {margin-top: -10px; } .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }  }
		.container_12 .grid_5 {
		  padding-left: 30% !important;
		}
		p#tasklabel {
		    text-align: center;
		}
	</style>
<style type="text/css"></style></head>

<body>
	<?php include 'setlocale.php'; ?>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Using what you know about... electric circuits... to solve a problem");?></h1>
						<h2 class="prefix_5"><?php echo _("The Problem");?></h2>

						<p class="grid_12"><?php echo _("A local college is trying to determine whether they should install wind turbines or solar panels, or convert all lighting to LEDs in order to help them spend less money each year on electricity for the campus.  You are an engineer for a firm that has been hired to consult on project options.");?> </p>

						<div class="grid_5">
							<ul class="rslides">
								<li><img src="assets/12/12a.jpg"/></li>
								<li><img src="assets/12/12b.jpg"></li>
								<li><img src="assets/12/12c.jpg"></li>
							</ul>
						</div>	

						

						<div class="clear"></div>
					</div>

					<div id="task">
						<p id='tasklabel'><?php echo _("The Task"); ?></p>
						<p><?php echo _("Please provide a list of considerations to go along with each of those options in order to help the administrators at the college make a good decision about improving energy efficiency. Write your answers in the space below.");?></p>
						<div class="grid_8 prefix_2">
							<textarea placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Converting LED lights..."); ?></strong></section></section>

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
					saveMeta('gravity-in-action', $('textarea').val());
					answered = 1;
				}

				document.location.href = "13.php";
			}
		});
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/12/12.jpg)');
					$('.wrap').css('border-color', '#0F7583');

					$('#question').fadeOut(100, function() { $('#task').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				} else {
					$('.bg').css('background-image', 'url(assets/12/12.jpg)');
					$('.wrap').css('border-color', '#0F7583');

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
			$('#question').fadeOut(function() {
				$('.bg').css('background-image', 'url(assets/12/12.jpg)');
				$('.wrap').css('border-color', '#0F7583');

				$('#task').fadeIn();

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				window.location.hash = '#task';
			});
		});

		$('.back').click(function() {
			if ($('#task').is(':visible')) {
				$('#task').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/12/12.jpg)');
					$('.wrap').css('border-color', '#0F7583');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn(); 
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '11.php'); }
		});

		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>


	
<ul class="lang-menu">
	<li><a href="../../teacher.php#">Go Back to Dashboard</a></li>
	<li>
		<a href="#">Language: English</a>

		<ul>
			<li><a href="/shymansky/sandbox/demo/templates/checking-what-you-already-know-image-select.php?lang=en_US">English</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/checking-what-you-already-know-image-select.php?lang=ar_EG">Arabic</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/checking-what-you-already-know-image-select.php?lang=es_ES">Spanish</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/checking-what-you-already-know-image-select.php?lang=zh_CN">Chinese</a></li>
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

</body></html>