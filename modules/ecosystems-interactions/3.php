<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #a05a74; }
h2 { color: darkcyan; }
.wrap { border-left: 1px dashed #feda74; border-right: 1px dashed #feda74; }
table { display: inline-block; }
th { background-color: #f89fa2; color: black; padding: 5px 10px; font-size: 24px; border-radius: 8px; font-weight: normal; }
td { position: relative; background-color: #c1d0e5; padding: 13px 10px; font-size: 24px; text-align: left; border-radius: 8px; }
.bg { background: url('images/3/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.ac-custom { padding: 0; }
.ac-custom li { padding: 0; }
.ac-custom svg { position: absolute; width: 28px; height: 28px; top: 22px; left: 33%; pointer-events: none; }
.ac-custom svg path { stroke: #ec6b76; stroke-width: 16px; stroke-linecap: round; stroke-linejoin: round; fill: none; }
.ac-custom input[type="radio"], .ac-custom label::before { width: 38px; height: 38px; top: 21px; left: 27%; cursor: pointer; }
.ac-custom label::before { border: 3px solid #ec6b76; }
#question { text-align: center; }
#answer { display: none; padding-top: 20px; }
#answer p { padding: 10px; background: rgba(255, 255, 255, .3); border-radius: 5px; }
#buttons .next { display: none; }

html[dir="rtl"] td { text-align: right; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 27px; }
<?php } ?>	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about ecosystems interactions"); ?></h1>
				<h2><?php echo _("Read the following statements and decide if they are true or false."); ?></h2>

				<table>
					<tr>
						<th><?php echo _("Statement"); ?></th>
						<th><?php echo _("True"); ?></th>
						<th><?php echo _("False"); ?></th>
					</tr>
					<tr>
						<td><?php echo _("Ecosystems are simply a collection of organisms."); ?></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul><li><input id="a1" name="a" type="radio"><label for="a1"></label></li></ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul><li><input id="b1" name="a" type="radio"><label for="b1"></label></li></ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><?php echo _("Ecosystems don't change; they stay the same over time."); ?></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul><li><input id="a2" name="b" type="radio"><label for="a2"></label></li></ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul><li><input id="b2" name="b" type="radio"><label for="b2"></label></li></ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><?php echo _("Species that live together in an ecosystem need to get along."); ?></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul><li><input id="a3" name="c" type="radio"><label for="a3"></label></li></ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul><li><input id="b3" name="c" type="radio"><label for="b3"></label></li></ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><?php echo _("Some species may disappear with no effect on an ecosystem."); ?></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul><li><input id="a4" name="d" type="radio"><label for="a4"></label></li></ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul><li><input id="b4" name="d" type="radio"><label for="b4"></label></li></ul>
							</section>
						</td>
					</tr>
				</table>
			</div>
			<div id="answer">
				<p><?php echo _("Ecosystems include not just the organisms but also the interactions among the organisms and between the organisms and their physical environment. All organisms are important within an ecosystem even though some may compete for resources and feed on one another. After going through this module come back and see if you would answer any of the true/false statements differently."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Working together..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/svgcheckbx.js"></script>
	<script>
	$(document).ready(function() {
		var question = $('#question'),
			answer = $('#answer');

		$('a.back-toggle').click(function() {
			if(question.is(':visible')) {
				document.location.href = "2.php";
			} else if (answer.is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				answer.fadeOut(function() {
					$('.bg').css('background-image', 'url(images/3/bg.jpg)');
					$('.wrap').css('border-left', '1px dashed #feda74');
					$('.wrap').css('border-right', '1px dashed #feda74');
					question.fadeIn();
				});
			}
		});
		
		$('a.check-toggle').click(function(){ 
			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			question.fadeOut(function(){ 
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				$('.wrap').css('border-left', '1px dashed #1984cc');
				$('.wrap').css('border-right', '1px dashed #1984cc');
				answer.fadeIn();
			}); 
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
			question.fadeOut(function() { 
				answer.fadeIn(); 
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				$('.wrap').css('border-left', '1px dashed #1984cc');
				$('.wrap').css('border-right', '1px dashed #1984cc');
			});

			check.fadeOut(function() { next.fadeIn(); });
			addHash('#answer');
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
