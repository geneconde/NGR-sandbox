<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq6-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Forces of all Kinds"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #df3e3e; }
		h2 { color: #00739f; text-align: left; }
		
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

		/*#answer p { text-align: center; padding: 10px 10px;}*/
		
		#answer li { float: left; list-style: none; display: inline;}
		#answer .answer img{width:180px; height:160px; padding:0px;}
		#sortable img { width:100%; height:180px; border: 2px dashed #FF6A6B; }
		#sortable-container ul li {
		    float: left;
		    display: inline;
		    padding: 5px;
		    position: relative;
		    width: 22%;
		}

		.click { text-align: ; }
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/21/qq.jpg); }

		#textDisp {text-align: center;}
		
		#sortable-container ul li p {position: absolute; top: 85px; left:40px;}

		html[dir=rtl] #answer p { text-align: right; }
		#choices { float: left; list-style: none; text-align: center; font-size: 23px;}
		#sortable { float: left; list-style: none; cursor:pointer; position: relative; z-index: 6; }
		#choices li {margin-bottom: 0px; margin-top: 30px;}


		#buttons .next { display: none; }
		.white { color: white; }
		.key1{ color: #9AC0FA; }
		
		li p { margin: 0; }
		p.label-letter {
		    top: 200px !important;
		    left: 90px !important;
		}
		.answer p.label-letter { top: 180px !important; }
		p.answer.grid_12 { margin-bottom: 30px; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#sortable img{ margin-left: 12px; }
		}
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?></h1>
						<h2 class="click"><?php echo _("Each of the arrows in the diagrams below represents a force of 10 Newtons in the direction shown. The masses of the boxes are not the same. Drag the diagrams in order from greatest acceleration on the left to least acceleration on the right."); ?></h2>
						<div class="grid_12">
							
							<div class="clear"></div>
							<div id="sortable-container" class="grid_12">
								<ul id="sortable" class="grid_12">
									<li id="1">
										<div id="mark1"></div><span data-name="A"></span>
										<img id="image" src="assets/11/BOX1.png" alt="Box1" />
										<p id = "idNiya1">	<?php echo _("10kg"); ?></p>
										<p class="label-letter"><?php echo _("A"); ?></p>
									</li>

									<li id="2">
										<div id="mark2"></div><span data-name="B"></span>
										<img id="image" src="assets/11/BOX1.png" alt="Box2"/>
										<p id = "idNiya2">	<?php echo _("5kg "); ?></p>
										<p class="label-letter"><?php echo _("B"); ?></p>
									</li>
									<li id="3">
										<div id="mark3"></div><span data-name="C"></span>
										<img id="image" src="assets/11/BOX3.png" alt="Box3"/>
										<p id = "idNiya3">	<?php echo _("5kg "); ?></p>
										<p class="label-letter"><?php echo _("C"); ?></p>
									</li>
									<li id="4">
										<div id="mark4"></div><span data-name="D"></span>
										<img id="image" src="assets/11/BOX3.png" alt="Box4"/>
										<p id = "idNiya4">	<?php echo _("10kg "); ?></p>
										<p class="label-letter"><?php echo _("D"); ?></p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clear"></div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						
						<p class="answer grid_12"></p>
						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="22.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
			
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('#question div.grid_12').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString();

			if (answer == '3102'|| answer == '3201') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! You have to take into account the unbalanced force and the mass of the object to determine the acceleration."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! C and D both have 20 Newtons of unbalanced force, but C only has 5 kg of mass. 20 Newtons acting on 10 kg is the same ratio as 10 Newtons acting on 5 kg, so D and B are equal. Diagram A only has 10 Newtons acting on 10 kg, so it will have the smallest acceleration."); ?></p>");
			} 

			console.log(answer);

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qq6-a', answer); //Correct answer: CBDA or CDBA
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {

			$('.back').fadeOut();

			$('.checkanswer').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn(); 
			});

			$('#question').fadeOut(function(){ 

				save();

				$('#answer').fadeIn();

				window.location.hash = '#answer';
			}); 
		});

		$('.back').click(function(){
			if ($('#question').is(':visible')) {
				document.location.href = "20.php";
			} else if ($('#answer').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#answer').fadeOut(function () {
					
					$('#question').fadeIn();
					$('.checkanswer').fadeIn();

					window.location.hash = '';
				});
			} 

		});

		$('.readmore').click(function(){
			$('.back').fadeOut();
			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
			
			$('#screen1').fadeOut(function() {
				$('#screen2').fadeIn();

				window.location.hash = '#screen2';
			});
		});
		$("#sortable").sortable({ scroll: false, containment: "#sortable-container" });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
