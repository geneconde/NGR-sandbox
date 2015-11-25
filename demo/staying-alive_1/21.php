<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/jquery.jsPlumb-1.4.1-all-min.js"></script>
<style>
h1 { color: #000; }
.bg { background-image: url(images/21/bg.jpg); }

h3 { color: #336666; }
h3:last-of-type { text-align: center; }
.bg { background-image: url(images/20/bg.jpg); }

#question li { padding: 8px 0; }

.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #780046; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #780046; }
.ac-custom svg path { stroke: #780046; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }
#click { margin: 5% auto; }
#close { margin: 0 auto; }
#click, #close { padding: 5px; background-color: #68c4af; width: 200px; border-radius: 5px; }
#click:hover,#close:hover { cursor: pointer; }
#click p, #close p { text-align: center; }

._jsPlumb_endpoint  { z-index: 999; }
#diagram-wrapper { background-color: rgba(212, 212, 210, .9); position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: none; z-index: 998; }
#diagram { margin: 2% auto; background-color: white; }
#diagram { height: 520px; width: 705px; }
#diagram div:not(._jsPlumb_endpoint ) { width: 100px; border-radius: 50%; padding: 10px; position: absolute; z-index: 1000; }
#diagram div:not(._jsPlumb_endpoint ) p { font-size: 20px; text-align: center; }
#diagram div._jsPlumb_overlay { background-color: transparent; border-radius: 5px; padding: 2px; }
#diagram div._jsPlumb_overlay p { font-size: 18px; text-align: center; padding: 0; }

#beaver { margin: 10px 0 0 300px; background-color: #c9a0c7; }
#wolf { margin: 20px 0 0 550px; background-color: #ffddbd; }
#lilies { margin: 160px 0 0 5px; background-color: #72ffe6; }
#pond { margin: 160px 0 0 300px; background-color: #a1ced8; }
#duck { margin: 160px 0 0 600px; background-color: #d889ff; }
#trout  { margin: 320px 0 0 70px; background-color: #d47d7d; }
#mayfly { margin: 450px 0 0 300px; background-color: #c4d080; }
#bullfrog { margin: 320px 0 0 550px; background-color: #ffc27c; }

<?php if($language == "ar_EG") { ?>
	#diagram div:not(._jsPlumb_endpoint ) { left: 95px; }
#beaver { margin: 10px 0 0 300px; background-color: #c9a0c7; }
#wolf { margin: 20px 0 0 550px; background-color: #ffddbd; }
#lilies { margin: 160px 0 0 5px; background-color: #72ffe6; }
#pond { margin: 160px 0 0 300px; background-color: #a1ced8; }
#duck { margin: 160px 0 0 600px; background-color: #d889ff; }
#trout  { margin: 320px 0 0 70px; background-color: #d47d7d; }
#mayfly { margin: 450px 0 0 300px; background-color: #c4d080; }
#bullfrog { margin: 320px 0 0 550px; background-color: #ffc27c; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("Keystone species are plants or animals who interact most with other species, often determining how large the other species population can grow. A beaver pond is a simple ecosystem, centered around a small body of water backed up behind a temporary dam made by beavers. Click on the button to show the plants and animals in this ecosystem."); ?></h2>
				<div id="click"> <p><?php echo _("Show diagram"); ?></p></div>
				<div id="diagram-wrapper">
					
					<div id="diagram">
						<div id="beaver"><p><?php echo _("Beaver"); ?></p></div>
						<div id="wolf"><p><?php echo _("Wolf"); ?></p></div>
						<div id="lilies"><p><?php echo _("Water lilies"); ?></p></div>
						<div id="pond"><p><?php echo _("Beaver pond"); ?></p></div>
						<div id="duck"><p><?php echo _("Wood duck"); ?></p></div>
						<div id="trout"><p><?php echo _("Trout"); ?></p></div>
						<div id="mayfly"><p><?php echo _("Mayfly"); ?></p></div>
						<div id="bullfrog"><p><?php echo _("Bullfrog"); ?></p></div>
					</div>
					<div id="close"><p><?php echo _("Close me!"); ?></p></div>
				</div>

				<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
					<ul>
						<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("Trout and wood ducks both live in beaver ponds and eat mayflies."); ?></label></li>
						<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("Water lilies live in beaver ponds where they eat mayflies and bullfrogs."); ?></label></li>
						<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("Wolves eat bullfrogs who build ponds where trout eat mayflies."); ?></label></li>
						<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("Bullfrogs live in beaver ponds where they eat water lilies and wood ducks."); ?></label></li>
					</ul>
				</form>
				
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script>
	var answer = $('#answer'),
	
	question = $('#question');
	
	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<?php echo _("Trout and wood ducks both live in beaver ponds and eat mayflies."); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes, that is correct."); ?></p>');
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<?php echo _("Water lilies live in beaver ponds where they eat mayflies and bullfrogs."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry, that is incorrect."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<?php echo _("Wolves eat bullfrogs who build ponds where trout eat mayflies."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope, that is incorrect."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<?php echo _("Bullfrogs live in beaver ponds where they eat water lilies and wood ducks."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not really. Try again."); ?></p>');
			ans = 'D';
		}
	});
	
	$('#close').click(function() {
		$('#diagram-wrapper').fadeOut();
	});
	$('#click').click(function() {
		$('#diagram-wrapper').fadeIn();
			jsPlumb.bind("ready", function() {
		var endpointOptions = { isTarget:true,container:$('#diagram'), connector:["Straight"], endpoint:["Dot", {radius:5}] };
			jsPlumb.connect({source:"wolf", target:"beaver",overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Eats"); ?></p>", location:0.3} ] ], paintStyle:{lineWidth:2,strokeStyle:'#ffddbd'} }, endpointOptions );
			jsPlumb.connect({source:"wolf", target:"duck",overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Eats"); ?></p>", location:0.3} ] ], paintStyle:{lineWidth:2,strokeStyle:'#ffddbd'} }, endpointOptions );
		
			jsPlumb.connect({source:"beaver", target:"pond", overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Builds"); ?></p>", location:0.3 } ] ], paintStyle:{lineWidth:2,strokeStyle:'#c9a0c7'}}, endpointOptions );
			jsPlumb.connect({source:"beaver", target:"lilies",overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Eats"); ?></p>", location:0.3} ] ], paintStyle:{lineWidth:2,strokeStyle:'#c9a0c7'} }, endpointOptions );
	
			jsPlumb.connect({source:"lilies", target:"pond",overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Lives in"); ?></p>", location:0.3} ] ], paintStyle:{lineWidth:2,strokeStyle:'#72ffe6'} }, endpointOptions );
		
			jsPlumb.connect({source:"trout", target:"mayfly",overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Eats"); ?></p>", location:0.3} ] ], paintStyle:{lineWidth:2,strokeStyle:'#d47d7d'} }, endpointOptions );
			jsPlumb.connect({source:"trout", target:"pond",overlays:[["Arrow", { location:.7}], [ "Label", { label:"<p><?php echo _("Lives in"); ?></p>", location:0.5} ] ], paintStyle:{lineWidth:2,strokeStyle:'#d47d7d'} }, endpointOptions );
		
			jsPlumb.connect({source:"mayfly", target:"pond",overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Lives in"); ?></p>", location:0.3} ] ], paintStyle:{lineWidth:2,strokeStyle:'#c4d080'} }, endpointOptions );
			jsPlumb.connect({source:"mayfly", target:"lilies",overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Eats"); ?></p>", location:0.3} ] ], paintStyle:{lineWidth:2,strokeStyle:'#c4d080'} }, endpointOptions );
		
			jsPlumb.connect({source:"bullfrog", target:"pond",overlays:[["Arrow", { location:.55}], [ "Label", { label:"<p><?php echo _("Lives in"); ?></p>", location:0.4} ] ], paintStyle:{lineWidth:2,strokeStyle:'#ffc27c'} }, endpointOptions );
			jsPlumb.connect({source:"bullfrog", target:"mayfly",overlays:[["Arrow", { location:.5}], [ "Label", { label:"<p><?php echo _("Eats"); ?></p>", location:0.3} ] ], paintStyle:{lineWidth:2,strokeStyle:'#ffc27c'} }, endpointOptions );
		
			jsPlumb.connect({source:"duck", target:"trout",overlays:[["Arrow", { location:.7}], [ "Label", { label:"<p><?php echo _("Eats"); ?></p>", location:0.6} ] ], paintStyle:{lineWidth:2,strokeStyle:'#d889ff'} }, endpointOptions );
			jsPlumb.connect({source:"duck", target:"mayfly",overlays:[["Arrow", { location:.6}], [ "Label", { label:"<p><?php echo _("Eats"); ?></p>", location:0.5} ] ], paintStyle:{lineWidth:2,strokeStyle:'#d889ff'} }, endpointOptions );

	});
	});
	
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	answered = 1;

	function save() {
		if (answered == 0) {
			saveAnswer('staying-alive-qq6-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "20.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
				$('#feedback1').removeClass('green');
				$('#feedback1').removeClass('red');
			}); 
		}
	});
	
	check.click(function() {
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){
				answer.fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});
	function checkAnswer(){
	}
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
