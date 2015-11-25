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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/grid.css">
	
	<style>
		label#a, label#b, label#c, label#d {color: rebeccapurple;}
		#question p {
		    font-size: 24px;
		    line-height: 80% !important;
		}
		#sortable li { height: 362px !important; }		
    	h1{ color: #D27A00; margin-top: 10px;}
		p{ color: #00424B; }
		.wrap { border-color: #FF00FF; }
		.bg { background-image: url(assets/18/QQ.jpg); overflow: hidden;}

		#sortable { width: 97%; padding: 10px 0; display: block; }
		#sortable li { background-color: #ffb1dd; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; cursor: move; height: 350px; width: 22.5%; border:2px dashed #114B81; }
		#sortable li:last-child { margin-bottom: 0; }
		#sortable li span { font-size: 24px; color: #272727; }
		#sortable li img { width: 95%; }

		.nl-form a { border-bottom: 0; background-color: #000; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #000; }
		.nl-field li { color: #fff; font-size: 28px; }
		.nl-dd ul li.nl-dd-checked { background-color: #000; color: #fff; }
		.nl-form select { background: #ffff00; border: 0; border-radius: 5px; }

		#letters li { text-align: center; }
		#letters li span { background: #a59fe0; border-radius: 10px; /*border: 2px dashed #662d91;*/ }
		#letters .grid_2 { width: 16.6675%; }
		#letters li span:nth-child(3), #letters li span:nth-child(5) { margin: 0 20px; }

		#answer p {font-size: 24px; margin-top: -5px;}
		#answer h1 { margin-left: 15px; }
		#question p {font-size: 24px;}
		#answer .answer { font-size: 24px; margin-left:7px; margin-bottom: -50px;}
		#answer .answer li { background-color: #ffb1dd; list-style: none; text-align: center; color: #fff; margin-bottom: 80px; border-radius: 5px; height: 270px; }
		#answer .answer li span { font-size: 17px; color: #272727; float: left; }
		#answer li img { height: 70%; width: 80%;}

		#buttons .next { display: none; }
		#sortable img {margin: 5px auto; height: 260px; }
		@media screen and (max-width: 1250px) {#sortable img{ height: 200px; } #sortable li{ height: 290px; width: 21%; } #sortable li span{ font-size: 18px; } .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
		.feedback { padding-top: -10px;}
	</style>
<style type="text/css"></style></head>

<body>
	<?php include 'setlocale.php'; ?>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #3");?></h1>
						<h2 class="grid_12"><?php echo _("As mentioned in the review, compared to LEDs it takes four times as much energy to get the same light from fluorescent lights, and four times more than that to get the same light from incandescent bulbs.  Drag the following panels in order from greatest amount of  light on the left, to least amount of light on the right.")?></h2>
						<div id="sortable-container" class="grid_12">
							<ul id="sortable" class="grid_12 ui-sortable">
								<li id="1" class="grid_3">
									<label id="a">A</label>
									<img src="assets/18/18a1.jpg" alt="Images">
									<span><p><?php echo _("$40 of light from incandescent bulbs");?></p></span>
								</li>
								<li id="2" class="grid_3">
									<label id="b">B</label>
									<img src="assets/18/18a2.jpg" alt="Images">
									<span><p><?php echo _("$30 of light from fluorescent bulbs");?></p></span>
								</li>
								<li id="3" class="grid_3">
									<label id="c">C</label>
									<img src="assets/18/18a3.jpg" alt="Images">
									<span><p><?php echo _("$20 of light from LED bulbs");?></p></span>
								</li>
								<li id="4" class="grid_3" style="position: relative;">
									<label id="d">D</label>
									<img src="assets/18/18a4.jpg" alt="Images">
									<span><p><?php echo _("$50 of light from fluorescent bulbs");?></p></span>
								</li>
								
							</ul>
						</div>	
					</div>
				</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #3 - How did I do?");?></h1>

						<p class="grid_12"><?php echo _("You answered...");?></p>

						<div class="answer grid_12"></div>

						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	

    <div id="buttons">
        <a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
        <a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
        <a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
    </div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Replacing a light bulb..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to  when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

		// var	ans1 = $('#select1 option:selected').val();
		// var	ans2 = $('#select2 option:selected').val();
		// var	ans3 = $('#select3 option:selected').val();

			$('.answer').html($('#sortable').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString() + $('#4').index().toString();
			//var fanswer = ans1+ans2+ans3;
			//alert(answer);
			//if (answer == '1302' || answer == '2301' && fanswer == "GEG" ) {

			if (answer == '3201') {
				$('.feedback').html("<p class='green grid_12'><img src='assets/correct.png'><?php echo _("You’ve got it. To get the same light you get for $20 from an LED bulb, you’d spend $80 on fluorescent bulbs and $320 on incandescent bulbs."); ?></p>");
			}else if(answer == '1230'){
				$('.feedback').html("<p class='red grid_12'><img src='assets/wrong.png'><?php echo _("Nope. The light you get is not based on how much money you spend. Incandescent bulbs are the least efficient.  The $40 worth of light from an incandescent would only cost $10 for fluorescent bulbs, and less than $3 for LED bulbs."); ?></p>");
			}else{
				$('.feedback').html("<p class='red grid_12'><img src='assets/wrong.png'><?php echo _("Not quite. Compared to LED's, it costs four times as much to get the same light from flourescent bulbs, and you'd have to pay four times that amount to get the same light from incandescent bulbs."); ?></p>");
			}
			// } else if (answer == '3012') {
			// 	$('.feedback').html("<p class='green grid_12'><img src='assets/correct.png'>Nope. The light you get is not based on how much money you spend. Incandescent bulbs are the least efficient.  The $40 worth of light from an incandescent would only cost $10 for fluorescent bulbs, and less than $3 for LED bulbs.</p>");
			// 	//'
			// } else if (answer != '3012') {
			// 	$('.feedback').html("<p class='red grid_12'><img src='assets/wrong.png'>A</p>");
			// } 

			console.log(answer);

			if (answered == 0) {
				saveAnswer('electric-circuit-qq3-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			if ($('#select1 option:selected').val() == "" || $('#select2 option:selected').val() == "" || $('#select3 option:selected').val() == "") {
				alert("Please select your answer.");
			} else {
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
			}	 
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "17.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn();
					$('.back').fadeIn();
			   	});

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});

		$("#sortable").sortable({ scroll: false, containment: "#sortable-container" });
	</script>



	
<ul class="lang-menu">
			<li><a href="../../teacher.php#">Go Back to Dashboard</a></li>
	
	<li>
		<a href="#">Language: English</a>

		<ul>
			<li><a href="/shymansky/sandbox/demo/electric-circuits/19.php?lang=en_US">English</a></li>
			<li><a href="/shymansky/sandbox/demo/electric-circuits/19.php?lang=ar_EG">Arabic</a></li>
			<li><a href="/shymansky/sandbox/demo/electric-circuits/19.php?lang=es_ES">Spanish</a></li>
			<li><a href="/shymansky/sandbox/demo/electric-circuits/19.php?lang=zh_CN">Chinese</a></li>
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