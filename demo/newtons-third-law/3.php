<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Newton's Third Law"); ?></title>

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
		h1 { color: #f66aff; font-size:33px;}
		h2 { color: #008fff; font-size: 24px}
		
		#pSize {font-size: 24px;}
		/*#ph1 {font-size: 24px;}*/
		.wrap { border-color: #00C2FF; }
		.bg { background: url(assets/3/bg.jpg); }
		.ta-center{text-align:center;}
		
		.ac-custom {margin-left:10px;}
		.ac-custom input[type="checkbox"]:checked + label { color: #0C5586; }
		.ac-custom label { color: #000; padding-left: 49px;font-size: 24px; }
		.ac-custom label::before { border: 2px solid #0C5586; height: 34px; width: 34px; margin-top: -18px;}
		.ac-custom svg path { stroke: #0C5586; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #0C5586; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#question img { width: auto; display: block; }
		#answer p { text-align: left; color: #fff; font-size: 24px; }

		html[dir=rtl] #answer p { text-align: right; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px){
			#question h2{ margin: 0px 0 ;}
			#question img { width: 40%;  }
		}
		@media screen and (max-width: 1250px){
			#pSize {
			  left: 11px !important;;
			}
		}
	

		<?php if($language  == 'ar_EG'){ ?>
			#pSize {
			  	right: 10px !important;
			}

			.ac-custom li {
				right: 10px !important;
			}
		<?php } ?>
		<?php if($language 	== "es_ES"){?>
			@media screen and (max-width: 900px){
				#question li span{font-size: 20px;}
			}
			.ac-custom li{
				padding: .3em 0;
			}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Checking what you already know about... Newton's Third Law"); ?></h1>
						<h2 class="grid_12" id = "pSize"><?php echo _("Which of these forces are occurring in the photo of the child on the swing?"); ?></h2>
						<div class="grid_12 ta-center">
							<img src="assets/3/3a.jpg"/>
						</div>
						<div class="clear"></div>
						<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ol>
								<li><input id="a" type="checkbox" value="A"><label for="a" id = "ph1"><span><?php echo _("The woman pulling back on the swing."); ?></span></label></li>
								<li><input id="b" type="checkbox" value="B"><label for="b" id = "ph1"><span><?php echo _("The swing pulling forward on the woman."); ?></span></label></li>
								<li><input id="c" type="checkbox" value="C"><label for="c" id = "ph1"><span><?php echo _("The child pulling down on the swing."); ?></span></label></li>
								<li><input id="d" type="checkbox" value="D"><label for="d" id = "ph1"><span><?php echo _("The swing pulling up on the child."); ?></span></label></li>
							<ol>
						</form>
					</div>

					<div id="answer">
						<div class="clear"></div>
						<p><?php echo _("If you checked all the boxes, you're heading in the right direction. If objects are interacting, they are exerting forces on each other."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Playing at the park..."); ?></strong></section></section>

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
					$('.wrap').css('border-color', '#777'); // Change border-color

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg.jpg)');
					$('.wrap').css('border-color', '#000'); // Change border-color

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
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#777'); // Change border-color

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
					$('.bg').css('background-image', 'url(assets/3/bg.jpg)');
					$('.wrap').css('border-color', '#000'); // Change border-color 

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
