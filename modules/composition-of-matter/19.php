<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'composition-of-matter-qq6-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { margin-bottom:0; }
h2 { margin: 0 0 5px 0; }
.wrap { border-left: 1px dashed #E6C0DE; border-right: 1px dashed #E6C0DE; }
.bg { background: url('images/18/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question { text-align: center; overflow: hidden; }
#answer { display: none; }
#answer p { text-align: center; }
#answer table p { font-size: 22px; }
#answer table p img { vertical-align: middle; }
.answer span { display: block; }

select { padding: 2px; font-size: 18px; font-family: 'PlaytimeRegular'; cursor: pointer; }

table { width: 100%; }
table tr div { margin-top: 20px; background: #eee; width: 100px; height: 74px; border: 1px dashed #aaa; margin: 0 auto; }
table td, table th { padding: 4px; border: 1px solid #e6def3; background: rgba(255, 255, 255, .6); font-size: 22px; }
table tr td { text-align: center; }
table tr td img { border-radius: 0; display: block; margin: 0 auto; }
table th { font-weight: normal; color: #7090C2; }

.answer table { margin-top: 10px; }

.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }

.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

img.next-toggle { display: none; }
#question .placeholder, #answer .placeholder { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
h2 { font-size: 22px; }
h1 { margin-bottom:0; }
<?php if($language == "es_ES") { ?>
	table tr:nth-child(3) td:first-child { font-size: 17px; }
<?php } ?> 
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _('Quiz Question #6'); ?></h1>
				<div class='placeholder'>
					<h2><?php echo _('Below you will find a chart comparing the properties of a suspension, a colloid, and a solution. There are eight sections that need to be filled. For a-e click on the correct answer in each box. For f-h, drag the images below the chart and drop them into the correct box.'); ?></h2>
					<table>
						<tr>
							<th><?php echo _('Property'); ?></th>
							<th><?php echo _('Colloid'); ?></th>
							<th><?php echo _('Solution'); ?></th>
							<th><?php echo _('Suspension'); ?></th>
						</tr>

						<tr>
							<td><?php echo _('Type of mixture'); ?></td>
							<td></td>
							<td><?php echo _('A'); ?>. <select id="a">
								<option value="Select"><?php echo _('Select'); ?></option>
								<option value="Heterogeneous"><?php echo _('Heterogeneous'); ?></option>
								<option value="Homogeneous"><?php echo _('Homogeneous'); ?></option></select></td>
							<td><?php echo _('B'); ?>. <select id="b">
								<option value="Select"><?php echo _('Select'); ?></option>
								<option value="Heterogeneous"><?php echo _('Heterogeneous'); ?></option>
								<option value="Homogeneous"><?php echo _('Homogeneous'); ?></option></select></td>
						</tr>

						<tr>
							<td><?php echo _('Particle settling'); ?></td>
							<td><?php echo _('C'); ?>. <select id="c">
								<option value="Select"><?php echo _('Select'); ?></option>
								<option value="Settle"><?php echo _('Settle'); ?></option>
								<option value="Do not settle"><?php echo _('Do not settle'); ?></option></select></td>
							<td><?php echo _('D'); ?>. <select id="d">
								<option value="Select"><?php echo _('Select'); ?></option>
								<option value="Settle"><?php echo _('Settle'); ?></option>
								<option value="Do not settle"><?php echo _('Do not settle'); ?></option></select></td>
							<td>E. <select id="e">
								<option value="Select"><?php echo _('Select'); ?></option>
								<option value="Settle"><?php echo _('Settle'); ?></option>
								<option value="Do not settle"><?php echo _('Do not settle'); ?></option></select></td>
						</tr>

						<tr>

						</tr>
							<th><?php echo _('Particles'); ?></th>
							<th colspan="3"><?php echo _('Particle size'); ?></th>
						<tr>

						<tr>
							<td>&nbsp;</td>
							<td><?php echo _('F'); ?>.</td>
							<td><?php echo _('G'); ?>.</td>
							<td><?php echo _('H'); ?>.</td>
						</tr>

						<tr>
							<td id="1"><img src="images/19/f.png" class="drag"></td>
							<td><div id="2"></div></td>
							<td><div id="3"></div></td>
							<td><div id="4"></div></td>
						</tr>

						<tr>
							<td id="5"><img src="images/19/g.png" class="drag"></td>
							<td><div id="6"></div></td>
							<td><div id="7"></div></td>
							<td><div id="8"></div></td>
						</tr>

						<tr>
							<td id="9"><img src="images/19/h.png" class="drag"></td>
							<td><div id="10"></div></td>
							<td><div id="11"></div></td>
							<td><div id="12"></div></td>
						</tr>
				</table>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _('Quiz Question #6'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div class='placeholder'>
					<p><?php echo _('You answered...'); ?></p>

					<div class="answer">
						<table>
							<tr>
								<th><?php echo _('Property'); ?></th>
								<th><?php echo _('Colloid'); ?></th>
								<th><?php echo _('Solution'); ?></th>
								<th><?php echo _('Suspension'); ?></th>
							</tr>

							<tr>
								<td><?php echo _('Type of mixture'); ?></td>
								<td></td>
								<td class="a"></td>
								<td class="b"></td>
							</tr>

							<tr>
								<td><?php echo _('Particle settling'); ?></td>
								<td class="c"></td>
								<td class="d"></td>
								<td class="e"></td>
							</tr>

							<tr>

							</tr>
								<th><?php echo _('Particles'); ?></th>
								<th colspan="3"><?php echo _('Particle size'); ?></th>
							<tr>

							<tr>
								<td>&nbsp;</td>
								<td><?php echo _('F'); ?>.</td>
								<td><?php echo _('G'); ?>.</td>
								<td><?php echo _('H'); ?>.</td>
							</tr>

							<tr>
								<td class="1"><img src="images/19/f.png" class="drag"></td>
								<td><div class="2"></div></td>
								<td><div class="3"></div></td>
								<td><div class="4"></div></td>
							</tr>

							<tr>
								<td class="5"><img src="images/19/g.png" class="drag"></td>
								<td><div class="6"></div></td>
								<td><div class="7"></div></td>
								<td><div class="8"></div></td>
							</tr>

							<tr>
								<td class="9"><img src="images/19/h.png" class="drag"></td>
								<td><div class="10"></div></td>
								<td><div class="11"></div></td>
								<td><div class="12"></div></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="feedback center"></div>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="20.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Ready for your last quiz question?'); ?></strong></section></section>
	<script>
	var back = $('img.back-toggle'),
	next = $('img.next-toggle'),
	check = $('img.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans1 = '', ans2 = '', ans3 = '', ans4 = '', ans5 = '', ans6 = '', ans7 = '', ans8 = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;

	$('#question img').draggable({ revert: 'invalid' });
		
	$('#question img').each(function() {
		var image = $(this);
		var drop1 = $(this).parent().parent().children(':nth-child(2)').find('div');
		var drop2 = $(this).parent().parent().children(':nth-child(3)').find('div');
		var drop3 = $(this).parent().parent().children(':nth-child(4)').find('div');
		
		image.mousedown(function() { image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
		image.mouseup(function() { image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
		
		drop1.droppable ({
			accept: image,
			drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop1); }
		});
		
		drop2.droppable ({
			accept: image,
			drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop2); }
		});

		drop3.droppable ({
			accept: image,
			drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop3); }
		});
	});

	function save() {
		ans1 = $('#a').val();
		if ($('#a').val() == 'Homogeneous') {
			answer.find('.a').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Homogeneous"); ?></p>');
		} else {
			answer.find('.a').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Heterogeneous"); ?></p>');
		}

		ans2 = $('#b').val();
		if ($('#b').val() == 'Heterogeneous') {
			answer.find('.b').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Heterogeneous"); ?></p>');
		} else {
			answer.find('.b').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Homogeneous"); ?></p>');
		}

		ans3 = $('#c').val();
		if ($('#c').val() == 'Do not settle') {
			answer.find('.c').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Do not settle"); ?></p>');
		} else {
			answer.find('.c').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Settle"); ?></p>');
		}

		ans4 = $('#d').val();
		if ($('#d').val() == 'Do not settle') {
			answer.find('.d').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Do not settle"); ?></p>');
		} else {
			answer.find('.d').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Settle"); ?></p>');
		}

		ans5 = $('#e').val();
		if ($('#e').val() == 'Settle') {
			answer.find('.e').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Settle"); ?></p>');
		} else {
			answer.find('.e').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Do not settle"); ?></p>');
		}

		if ($('#2').html() != '') {
			answer.find('.1').html('<img src="images/others/correct.png">');
			answer.find('.2').html('<img src="images/19/f.png">');
			answer.find('.3').html('');
			answer.find('.4').html('');
			ans6 = '1st Image (Colloid)';
		} else if ($('#3').html() != '') {
			answer.find('.1').html('<img src="images/others/wrong.png">');
			answer.find('.2').html('');
			answer.find('.3').html('<img src="images/19/f.png">');
			answer.find('.4').html('');
			ans6 = '1st Image (Solution)';
		} else {
			answer.find('.1').html('<img src="images/others/wrong.png">');
			answer.find('.2').html('');
			answer.find('.3').html('');
			answer.find('.4').html('<img src="images/19/f.png">');
			ans6 = '1st Image (Suspension)';
		}

		if ($('#6').html() != '') {
			answer.find('.5').html('<img src="images/others/wrong.png">');
			answer.find('.6').html('<img src="images/19/g.png">');
			answer.find('.7').html('');
			answer.find('.8').html('');
			ans7 = '2nd Image (Colloid)';
		} else if ($('#7').html() != '') {
			answer.find('.5').html('<img src="images/others/wrong.png">');
			answer.find('.6').html('');
			answer.find('.7').html('<img src="images/19/g.png">');
			answer.find('.8').html('');
			ans7 = '2nd Image (Solution)';
		} else {
			answer.find('.5').html('<img src="images/others/correct.png">');
			answer.find('.6').html('');
			answer.find('.7').html('');
			answer.find('.8').html('<img src="images/19/g.png">');
			ans7 = '2nd Image (Suspension)';
		}

		if ($('#10').html() != '') {
			answer.find('.9').html('<img src="images/others/wrong.png">');
			answer.find('.10').html('<img src="images/19/h.png">');
			answer.find('.11').html('');
			answer.find('.12').html('');
			ans8 = '3rd Image (Colloid)';
		} else if ($('#11').html() != '') {
			answer.find('.9').html('<img src="images/others/correct.png">');
			answer.find('.10').html('');
			answer.find('.11').html('<img src="images/19/h.png">');
			answer.find('.12').html('');
			ans8 = '3rd Image (Solution)';
		} else {
			answer.find('.9').html('<img src="images/others/wrong.png">');
			answer.find('.10').html('');
			answer.find('.11').html('');
			answer.find('.12').html('<img src="images/19/h.png">');
			ans8 = '3rd Image (Suspension)';
		}

		if (answered == 0) {
			saveAnswer('composition-of-matter-qq6-a', ans1);
			saveAnswer('composition-of-matter-qq6-b', ans2);
			saveAnswer('composition-of-matter-qq6-c', ans3);
			saveAnswer('composition-of-matter-qq6-d', ans4);
			saveAnswer('composition-of-matter-qq6-e', ans5);
			saveAnswer('composition-of-matter-qq6-f', ans6);
			saveAnswer('composition-of-matter-qq6-g', ans7);
			saveAnswer('composition-of-matter-qq6-h', ans8);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "18.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = 0;

		$('select').each(function() {
			if ($(this).val() == 'Select') {
				checkAnswer = 1;
			}
		});

		if ($('#1').html() != '' || $('#5').html() != '' || $('#9').html() != '') {
			checkAnswer = 1;	
		}

		if (checkAnswer == 1) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){ answer.fadeIn(); }); 
			save();
		}
	});

	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
