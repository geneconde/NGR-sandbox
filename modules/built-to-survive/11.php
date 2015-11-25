<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(11, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'built-to-survive-qc4-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="styles/nlform-default.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-component.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/nlform-modernizr.custom.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
body { color: #000; overflow: hidden; }
.bg { background-image: url('images/11/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: palevioletred; }
h2 { padding-bottom: 5px;  }
#buttons .next { display: none; }
.q-container { margin: 5px 0px 10px 0px !important; margin: 0 auto: width: 100%; height: 250px;  -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; width: 100%; }
#question1 { height: 320px; }
#choices1 { margin: 0 auto; width: 90%; margin-top: 10px; list-style: none; }
.pic { height: 160px; float: left; width: 33%; text-align: center; margin: 0 auto; }
.pic img { height: 100%; margin-right: 20px; margin: 0 auto; }
.pic p { padding: 0; font-size: 24px; text-align: center; color: #000; }
.answer-item { margin: 5px 0px !important; margin: 0 auto: width: 100%; padding: 0px 5px; }
.answer-item p { color: #000; padding: 5px 0px; }
#answer-icon1, #answer-icon2 { display: inline-block; height: 30px; margin-right: 10px; }
#ans1, #ans2 { color: #9031BD;}
.borderSelect { border: 5px solid #ECA25E; }
.nl-form { text-align: center; margin: 0; }

.grab {
    cursor: move;
    cursor: -moz-grab;
    cursor: -webkit-grab;
}

.grabbing {
	cursor: move;
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
}

.darkgreen { color: #4D6800; }
.brown { color: #47362A; }
.lightred { color: #AC3636; }
html[dir="rtl"] #answer p { text-align: center; }
<?php if($language == "es_ES") { ?>
	html, body { overflow: hidden; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#choices1 { width: 100%; }
	.pic img { width: 230px; height: auto; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #4"); ?></h1>
				<div class="q-container" id="question1">
					<h2><?php echo _("Question A. Which living thing can survive in the most different environments? Put the living things below in order from left to right, specifying the most adaptable to different environments to the least adaptable to different environments. Drag the images to order them."); ?></h2>
					<ul id="choices1">
						<li class="pic" class="ui-state-default" data-name="A">
							<img src="images/11/1.jpg" id="a1" class="grayscale">
							<p><span class="darkgreen"><?php echo _("Plants"); ?></span></p>
						</li>
						<li class="pic" class="ui-state-default" data-name="B">
							<img src="images/11/2.jpg" id="b1" class="grayscale">
							<p><span class="lightred"><?php echo _("Humans"); ?></span></p>
						</li>
						<li class="pic" class="ui-state-default" data-name="C">
							<img src="images/11/3.jpg" id="c1" class="grayscale">
							<p><span class="brown"><?php echo _("Animals"); ?></span></p>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="q-container clearfix">
					<h2><?php echo _("Question B. Fill in the blanks based on how humans are able to adapt to survive in different environments."); ?></h2>
					<form id="nl-form" class="nl-form">
						<?php echo _("People adapt in"); ?>
						<select id="opt1">
							<option value="1" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="biological"><?php echo _("biological"); ?></option>
							<option value="genetic"><?php echo _("genetic"); ?></option>
							<option value="cultural"><?php echo _("cultural"); ?></option>
							<option value="intellectual"><?php echo _("intellectual"); ?></option>
						</select>
						<?php echo _("and"); ?>
						<select id="opt2">
							<option value="1" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="cultural"><?php echo _("cultural"); ?></option>
							<option value="biological"><?php echo _("biological"); ?></option>
							<option value="technological"><?php echo _("technological"); ?></option>
						</select>
						<?php echo _("ways."); ?>
						<div class="nl-overlay"></div>
					</form>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<h2><?php echo _("Question A. Which living thing can survive in the most different environments? Put the living things below in order from left to right, specifying the most adaptable to different environments to the least adaptable to different environments. Drag the images to order them."); ?></h2>
					<p><img id="answer-icon1"><span id="answer1"></span></p>
				</div>
				<div class="answer-item">
					<h2><?php echo _("Question B. Fill in the blanks based on how humans are able to adapt to survive in different environments."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p><?php echo _("People adapt in"); ?> <span id="ans1"></span> <?php echo _("and"); ?> <span id="ans2"></span> <?php echo _("ways."); ?>
					<div><p><img id="answer-icon2"><span id="answer2"></span></p></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("You survived the quick checks!"); ?></strong></section></section>
	<script>
	var answer1= '';
	var answer2 = '';
	var answer2a = '';
	var answer2b = '';
	var answered = <?php echo $answered; ?>;
	var textstr = '';
	var nullAnswer = false;
	$(document).ready(function() {
		$('#choices1').sortable({ containment: "#choices1", scroll: false });
		$('#choices1').disableSelection();

		$('#choices1 li').each(function() {
			$(this).addClass('grab');
			$(this).mousedown(function() { $(this).removeClass('grab'); $(this).addClass('grabbing'); });
			$(this).mouseup(function() { $(this).removeClass('grabbing'); $(this).addClass('grab'); });
		});
		
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "10.php#screen2";
			} else if($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer2').removeClass('red');				
					$('#answer2').removeClass('green');
					$('#answer-icon1').removeClass('img-align');
					$('#answer-icon2').removeClass('img-align');
					answer1= '';
				});
			}
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answers."); ?>");
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
					
					/* For checking of question A */
					$('#choices1 li').each(function() {
						var val = $(this).data('name');
						answer1 += val;
					});

					textstr = '<?php echo _("All living things adapt to their environment to survive. Humans are the most adaptable, then animals, then plants. Humans have invented many things that allow us to live and survive in new environments without having to first adapt our bodies. We have clothes, shelter, fire and electricity to keep us warm in the arctic regions and cool in the deserts. Some animals are limited to only one kind of environment, and plants are even less adaptable."); ?>'
					
					if(answer1 == "BCA") {
						$('#answer-icon1').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
					} else {
						$('#answer-icon1').attr("src", "images/others/wrong.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					/* End checking of question A */
					
					/* For checking of question B */
					answer2a = $('#opt1 option:selected').val();
					answer2b = $('#opt2 option:selected').val();
					
					if((answer2a == 'biological' && answer2b == 'cultural') || (answer2a == 'cultural' && answer2b == 'biological')) {
						textstr =  '<?php echo _("Correct. Humans adapt biologically (internal organs for survival, genetic changes…) and culturally (for example using housing and technology for shelter)."); ?>';
						$('#answer-icon2').attr("src", "images/others/correct.png");
						$('#answer2').addClass('green');
						answer2 = 'cultural-biological';
					} else if (answer2a == 'genetic' && answer2b == 'biological'){
						textstr =  '<?php echo _("Not quite, genetic changes are an example of the biological adaptations humans undergo. Complex cultural adaptations have also helped mankind survive in various habitats around the world."); ?>';
						$('#answer-icon2').attr("src", "images/others/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
						answer2 = answer2a + "-" + answer2b;
					} else if ((answer2a == 'technological' && answer2b == 'cultural') || (answer2a == 'cultural' && answer2b == 'technological')) {
						textstr =  '<?php echo _("Not quite, technological advances are all passed on through cultural adaptations and would not be possible without many biological adaptations that humans have."); ?>';
						$('#answer-icon2').attr("src", "images/others/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
						answer2 = answer2a + "-" + answer2b;
					}
					else if ((answer2a == 'intellectual' && answer2b == 'cultural') || (answer2a == 'cultural' && answer2b == 'intellectual')) {
						textstr =  '<?php echo _("Not quite, intellectual advances are all passed on through cultural adaptations and would not be possible without many biological adaptations that humans have. For example the human brain has adapted physically in many ways before allowing the intellect to accomplish things."); ?>';
						$('#answer-icon2').attr("src", "images/others/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
						answer2 = answer2a + "-" + answer2b;
					} else {
						textstr =  '<?php echo _("Not quite, please try again."); ?>';
						$('#answer-icon2').attr("src", "images/others/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
					}

					$('#answer2').text(textstr);
					
					if(answered == 0) {
						saveAnswer('built-to-survive-qc4-a', answer1);
						saveAnswer('built-to-survive-qc4-b', answer2);
						answered = 1;
					} // end save to db
					/* End checking of question B */
				}); // end question fade
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function clearEverything() {
		$('.pic img').each(function() {
			$(this).removeClass('disabled');
			$(this).removeClass('borderSelect');
		});
	}
	
	function checkNull() {
		if($('#opt1').val() == 1 || $('#opt2').val() == 1) nullAnswer = true;
	}
	</script>
	<script src="scripts/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
