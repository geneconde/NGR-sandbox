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

	<title><?php echo _("Basic Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #f36d90; }
		h2 { color: #000;}
		.wrap { border-color: #A23763; }
		.bg { background: url(assets/3/bg.jpg);overflow: hidden; }

		#question p { /*text-align: center;*/ }
		#question p.no-height { font-size: 0; }
		#question p.label { background: #fffa78; border-radius: 5px; margin-bottom: 20px; }
		#question .grid_2 { margin-top: -5px; }
		.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }
		
		.drop {
			width: 100%;
			height: 77px;	
			background: #ffc178;
			border-radius: 5px;
		}

		.drag { position: relative; z-index: 999; }
		.drag img { margin: 0; height: 77px; }

		#answer p { text-align: left; padding: 10px 10px;}
		#answer { 
			background-color: rgba(0, 0, 0, .5);
			border-radius: 10px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		
		}

		html[dir=rtl] #answer p { text-align: right; }
		#choices { float: left; list-style: none; }
		#sortable { float: left; list-style: none; cursor:pointer; position: relative; z-index: 6; }
		#choices li { 
			width: 100%; 
			margin: 5px 0px; 
			background-color: #82CA9C; 
			padding: 5px 5px 5px 6px; 
			min-height: 65px; 
			-webkit-border-radius:10px; 
			-moz-border-radius:10px;
			border-radius:10px;
		}
		#sortable li { 
			background-color: #FFF200;
			margin: 5px 0px; 
			min-height: 65px; 
			padding: 3px 5px 3px 6px;
			-webkit-border-radius:10px; 
			-moz-border-radius:10px; 
			border-radius:10px;
			border: 3px dashed #8F6C13;
			}
		#buttons .next { display: none; }
		.white { color: white; }
		.key1{ color: #9AC0FA; }
		
		li p { margin: 0; }
		@media screen and (max-width: 1250px){
			#answer{ padding-top: 0; margin-top: 45px;}
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="bounds clearfix">
							<h1><?php echo _("Checking what you now know about... basic cells");?></h1>
							<p><?php echo _("Arrange the items on the right to match up with the results on the left. Drag the boxes up and down.");?></p>		
							
							<ul id="choices" class="grid_6">
								<li><p><?php echo _("Cells increase in size until they burst"); ?></p></li>
								<li><p><?php echo _("Cells shrivel up and die"); ?></p></li>
								<li><p><?php echo _("Green structures in plant cells move around inside the cells."); ?></p></li>
							</ul>
							<ul id="sortable" class="grid_6">
								<li>
									<div id="mark1"></div><span data-name="A"></span>
									<p><?php echo _("Placing cells under a strong light source"); ?></p>
								</li>
								<li>
									<div id="mark2"></div><span data-name="B"></span>
									<p><?php echo _("Placing cells in distilled water"); ?></p>
								</li>
								<li>
									<div id="mark3"></div><span data-name="C"></span>
									<p><?php echo _("Placing cells in salt water"); ?></p>
								</li>
							</ul>
					</div>

					<div id="answer">
						<p class="white"><?php echo _("Cells have many structures that help them perform the jobs that keep them alive. All cells are separated from the nonliving world by membranes. The membranes allow some substances to cross but serve as a barrier to others. Water moves back and forth across the membrane to help keep it in balance with its environment. Plant cells have special structures called <span class='key1'>chloroplasts</span> which absorb energy from light and use it to make food."); ?>
						</p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Observing cells..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

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
		});
		$( "#sortable" ).sortable({ scroll: false, containment: "#sortable" });
		$( "#sortable" ).disableSelection();
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
			} else if ($('#question').is(':visible')) { 
				document.location.href = "2.php#screen2";
			}
		});

	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
