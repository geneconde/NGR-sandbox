<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'genetic-codes';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Genetic Codes"); ?></title>
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
h1 { color: #42A0A0; }
.wrap { border-color: #c1fdff; }
.bg { background-image: url(images/3/bg.jpg); }

.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #A53983; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #A53983; }
.ac-custom svg path { stroke: #A53983; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question ol { margin: 0; }
#question li { padding: 10px 0; }
#question .clear { height: 170px; margin-top: 10px; }
#question .clear p { float: left; height: 100%; width: 300px; background: #b1cdfa; padding: 10px; }
#question .clear p { border-top-left-radius: 10px; }
#question .clear:last-child p { height: 200px; border-top-left-radius: 0; border-bottom-left-radius: 10px; }
#question .clear section { float: right; border-top-right-radius: 10px; width: 540px; background: #f8bea6; padding: 10px; }
#question .clear:last-child section { border-top-right-radius: 0; border-bottom-right-radius: 10px; }

#answer { display: none; padding-top: 10px; }
#answer p:first-child { padding-top: 15px; }
.placeholder { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px }
#buttons .next { display: none; }
img.next-toggle { display: none; }

<?php if ($language == 'es_ES'): ?>
	#question li { padding: 5px 0; }
	#question .clear:last-child p { height: 170px; }
<?php endif; ?>
<?php if ($language == 'zh_CN'): ?>
	.ac-custom label { font-size: 20px; }
	#question li { padding: 9px; }
	#question .clear:last-child section { height: 200px; }
<?php endif; ?>


html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -20px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -13px; }
html[dir="rtl"] li label { text-align: right; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#question .clear p {
		float: left;
		height: auto !important;
		width: 181px;
		background: #b1cdfa;
		padding: 10px;
	}
	#question .clear {
	height: 167px;
	margin-top: 10px;
	}
	.fix-it {
		height: 240px;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about genetic codes"); ?></h1>
				<h2><?php echo _("Click in the right column the most likely outcomes determined by the events shown in the left column."); ?></h2>

				<div class="clear">
					<p><?php echo _("Two parents contribute to the genetic makeup of children."); ?></p>

					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Children always look most like their fathers."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Children always look most like their mothers."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("Children inherit characteristics from both parents."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>

				<div class="clear">
					<p><?php echo _("A child inherits one gene for ear shape from one parent, and a different gene for ear shape from the other parent."); ?></p>

					<section>
						<form class="ac-custom ac-radio ac-swirl fix-it" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("The child has two different ear shapes."); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("The child's ears are shaped like that of one of the parents only."); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("The child is born without ears."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>
			</div>

			<div id="answer">
				<div class='placeholder'>
					<p><?php echo _("Children inherit about half of their characteristics from each parent. Two parents contribute to the genetic makeup of children. In the case of a trait such as ear shape, a child inherits one gene from one parent and a different gene for ear shape from the other parent. While we inherit traits from both parents, only one may show itself at a time. Read on to learn more about genetic codes and how traits are passed on."); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Inheriting characteristics..."); ?></strong></section></section>

	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2;

	if(hash != "") {
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				$('.wrap').css('border-color', '#97a693');
				$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });
				$('a.check-toggle').fadeOut( function(){ $('a.next-toggle').fadeIn(); });
			} else {
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				$('.wrap').css('border-color', '#c1fdff');
				$('#question').fadeIn();
				$('a.back-toggle').fadeIn();
				$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
			}
		});
	}

	$('a.check-toggle').click(function(){
		$('#question').fadeOut(function(){
			$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			$('.wrap').css('border-color', '#97a693');
			$('#answer').fadeIn();
			$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			window.location.hash = '#answer';
		});
	});

	$('a.back-toggle').click(function(){
		if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				$('.wrap').css('border-color', '#c1fdff');
				$('#question').fadeIn();
				$('a.back-toggle').fadeIn();
				$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
				window.location.hash = '';
			});
		} else {
			$('a.back-toggle').parent().attr('href','2.php');
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include_once "setlocale.php"; ?>
</body>
</html>
