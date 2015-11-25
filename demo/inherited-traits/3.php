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

	<title><?php echo _("Inherited Traits"); ?></title>

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
		p.grid_12 {
		    margin-left: 0px !important;
		}
		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #f36d90; }
		h2 { color: #000;}
		.wrap { border-color: #A23763; }
		.bg { background: url(assets/3/bg.jpg); }

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

		#answer p { text-align: left; }

		html[dir=rtl] #answer p { text-align: right; }
		#choices { float: left; list-style: none; }
		#sortable { float: left; list-style: none; cursor:pointer; position: relative; z-index: 6; }
		#choices li { 
			width: 100%; 
			margin: 5px 0px; 
			background-color: #82CA9C; 
			padding: 5px 5px 5px 6px; 
			min-height: 37px; 
			-webkit-border-radius:10px; 
			-moz-border-radius:10px;
			border-radius:10px;
		}
		#sortable li { 
			background-color: #FFF200;
			margin: 5px 0px; 
			min-height: 35px; 
			padding: 3px 5px 3px 6px;
			-webkit-border-radius:10px; 
			-moz-border-radius:10px; 
			border-radius:10px;
			border: 3px dashed #8F6C13;
			}
		#buttons .next { display: none; }
		.white { color: white; }
		.key1{ color: #9AC0FA; }

		.bg li { padding: 12px 0; list-style: none; }
		.ac-custom input[type="radio"]:checked + label { color: #F34345; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #F34345; height: 34px; width: 34px; margin-top: -6px; margin-left: 47px; }
		.ac-custom svg path { stroke: #F34345; }
		.ac-custom svg { height: 20px; width: 20px; left: 42px; margin-top: -11px; margin-left: 17px;}

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #F34345; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		li img { width: auto; margin: 0; vertical-align: auto; padding-right: 10px; }

		html[dir=rtl] .answer .items img { padding-left: 10px; }

		#buttons .next { display: none; }
		
		.bg li { 
			line-height: 25px; 
			font-size: 21px; 
			padding: 5px 3px; 
			-webkit-border-radius: 
			5px;-moz-border-radius: 
			5px;border-radius: 5px; 
		}
		#question table { float: left;}
		#answer table { margin-left: 15px; float: left; }
		/* table td li { background: #FFE8AB; } */
		table td { border: 4px solid #95D8FF; border-radius: 2px; height: 50px;}
		table th { font-weight: normal;}
		table th:nth-child(2), table th:nth-child(3), table th:nth-child(4), tr td {
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			border: 4px solid #95D8FF;;
		}
		/* table tr:nth-child(even) td li { background: #FFD873; } */
		/* table th { color: #D96831; } */

		table {
		    border-collapse: separate;
		    border-spacing: 5px;
		}

		
		tr { position: relative; }
		tr td:last-of-type { position: absolute; left: 160px; z-index: 5; display: none; }
		table tr td:last-of-type li { background: #eaeaea; font-size: 18px; }
		.answer tr:hover > td:last-of-type { display: block; } 
		
		li p { margin: 0; }
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
		}
		@media screen and (max-width: 1250px){ .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }

		<?php if ($language=="zh_CN") { ?>
		td .radio { width: 125px; }
		<?php } ?>

		<?php if ($language == 'ar_EG') { ?>
		.ac-custom label::after {
		  margin-top: -5px !important;
		}
		.bg li {
		  text-align: center;
		  left: -28px;
		}
		.ac-custom svg { right: 12px !important; }
		li#a,li#b,li#c { right: 0; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="bounds clearfix">
							<h1><?php echo _("Checking what you now know about... inherited traits");?></h1>
							<!-- <p><?php //echo _("Move the phrases on the right so that they match the observations on the left");?></p>		
							
							<ul id="choices" class="grid_6">
								<li><p><?php //echo _("Some traits are able to skip generations."); ?></p></li>
								<li><p><?php //echo _("Genetic information is carried on these."); ?></p></li>
								<li><p><?php //echo _("Some traits never skip generations."); ?></p></li>
							</ul>
							<ul id="sortable" class="grid_6">
								<li>
									<div id="mark1"></div><span data-name="A"></span>
									<p><?php //echo _("Dominant genes"); ?></p>
								</li>
								<li>
									<div id="mark2"></div><span data-name="B"></span>
									<p><?php //echo _("Recessive genes"); ?></p>
								</li>
								<li>
									<div id="mark3"></div><span data-name="C"></span>
									<p><?php //echo _("Chromosomes"); ?></p>
								</li>
							</ul> -->

							<p class="grid_12"><?php echo _("Select which phrases <span class='blink key1'>BEST</span> describe the observation on the left");?></p>	
					
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<table>
									<tr>
										<th></th>
										<th><?php echo _("Dominant genes"); ?></th>
										<th><?php echo _("Recessive genes"); ?></th>
										<th><?php echo _("Chromosomes"); ?></th>
									</tr>
									<tr class="a">
										<!-- <ul> -->
											<td><li id="a"><?php echo _("Some traits are able to skip generations."); ?></li></td>
											<td><li class="radio"><input id="a1" name="q1" type="radio" value="A"><label for="a1"></label></li></td>
											<td><li class="radio"><input id="b1" name="q1" type="radio" value="B"><label for="b1"></label></li></td>
											<td><li class="radio"><input id="c1" name="q1" type="radio" value="C"><label for="c1"></label></li></td>
											
										<!-- </ul> -->
											<td><li><?php echo _("This is not a pollutant because humans are part of the environment and their breathing is part of what naturally occurs. But what about if it’s a huge city of humans like New York or Tokyo? See the next item below."); ?></li></td>
									</tr>
									<tr class="b">
										<!-- <ul> -->
											<td><li id="b"><?php echo _("Genetic information is carried on these."); ?></li></td>
											<td><li class="radio"><input id="a2" name="q2" type="radio" value="A"><label for="a2"></label></li></td>
											<td><li class="radio"><input id="b2" name="q2" type="radio" value="B"><label for="b2"></label></li></td>
											<td><li class="radio"><input id="c2" name="q2" type="radio" value="C"><label for="c2"></label></li></td>											
										<!-- </ul> -->
											<td><li><?php echo _("Yes, because cows on a farm, especially a big farm with thousands of cows, add much more methane to the environment than would be normal in a natural field or woods with just a few animals."); ?></li></td>
									</tr>
									<tr class="c">
										<!-- <ul> -->
											<td><li id="c"><?php echo _("Some traits never skip generations."); ?></li></td>
											<td><li class="radio"><input id="a3" name="q3" type="radio" value="A"><label for="a3"></label></li></td>
											<td><li class="radio"><input id="b3" name="q3" type="radio" value="B"><label for="b3"></label></li></td>
											<td><li class="radio"><input id="c3" name="q3" type="radio" value="C"><label for="c3"></label></li></td>											
										<!-- </ul> -->
											<td><li><?php echo _("Yes. If the water temperature of the river is normally cold and hot or even warm water is added, then that’s a pollutant. It’s called thermal pollution."); ?></li></td>
									</tr>					
									
								</table>
							</form>
							<div class="clear"></div>

					</div>

					<div id="answer">
						<p><?php echo _("The rules of inheritance apply to all types of plants and animals that reproduce sexually. <span class='key'>Traits</span> are the characteristics we see in all living things. <span class = 'key'>Traits</span> that sometimes skip generations are said to be <span class='key'>recessive</span>. Traits that never skip generations are <span class='key'>dominant</span>. The information that causes a trait to appear is known as a <span class='key'>gene</span>. Genes are actually chemical messages carried in structures called <span class='key'>chromosomes</span>, which are found in the nuclei of cells. Every individual carries two sets of chromosomes in every cell, one set inherited from each parent. For this reason, each parent contributes half of the information needed to make an individual."); ?>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Carrying chromosomes...​"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>

		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					/*$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');*/
					$('.wrap').css('border-color', '#777'); // Change border-color

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});
				} else {
					/*$('.bg').css('background-image', 'url(assets/3/bg.jpg)');*/
					/*$('.wrap').css('border-color', '#000');*/ // Change border-color

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
			if (checkAnswer < 3 ) {
			
				alert("<?php echo _("Please select your answers."); ?>");
			
			} else {

				$('#question').fadeOut(function() {
					/*$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');*/
					/*$('.wrap').css('border-color', '#777');*/ // Change border-color

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
		$( "#sortable" ).sortable({ scroll: false, containment: "#sortable" });
		$( "#sortable" ).disableSelection();
		$('.back').click(function() {
			if ($('#answer').is(':visible')) {
				$('#answer').fadeOut( function() {
					/*$('.bg').css('background-image', 'url(assets/3/bg.jpg)');*/
					/*$('.wrap').css('border-color', '#000');*/ // Change border-color 

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
