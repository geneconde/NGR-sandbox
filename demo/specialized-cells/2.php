<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Specialized Cells"); ?></title>

	<link href="css/jplayer.css" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { z-index: 10; color: #660066;}
		.wrap { border-color: #807A6A; }
		.bg { background-color: #fff; background-image:  url(assets/2/bg.jpg); background-size: 100% 100% !important; overflow: hidden; }
		.content { text-align: left; margin-top: 360px; }
		h1, h2, p { margin-left: 1%; }
		.video { margin-left: 10px; border-radius: 5px; }

		img {
		  	height: 216px; 
		  	width: 400px;
		  	float: right;
		  	margin-right: 10px;
		 }

		.margin { margin-top: 15px; }

		.container_12 .grid_12 {
		    width: 100% !important;
		    margin: auto !important;
		}
		.video {
		    margin-left: auto !important;
		    margin-right: auto !important;
		}		
		div.jp-video-270p {
		    width: 100% !important;
		}
		@media screen and (max-width: 1250px ){
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Thinking about... specialized cells"); ?></h1>
										
					<p class="grid_12"><?php echo _("Watch this...."); ?></p>
					<div class="grid_12 margin">
						<div id="jp_container_1">
							<div id="jplayer" class="video">
								<span><?php echo _("Update Required"); ?></span>
								<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
							</div>
						</div>
					</div>
					<div>
						<p class="content">
							<?php echo _("Scary? Well, it might be if you were a bacterium instead of a person. All living things are made of cells. Cells are responsible for all of the complex processes that keep all living things alive. Some of the processes are simple, and can be performed by simple cells. Others are much more complicated, and must be handled by cells that are highly specialized to handle complex chemical and structural problems. Sound pretty complex? That's OK. In this module, we'll focus on the cells most familiar to us - human cells."); ?>
						</p>
					</div>
				</div>

			</div>
			<div id="animation">
				<img id="cells1" class="cells" src="assets/2/cells1.png" />
				<img id="cells2" class="cells" src="assets/2/cells2.png" />
				<img id="cells3" class="cells" src="assets/2/cells2.png" />
				<img id="cell1" class="cell" src="assets/2/cell2.png" />
				<img id="cell2" class="cell" src="assets/2/cell2.png" />
				<img id="cell3" class="cell" src="assets/2/cell1.png" />
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jpreloader.js"></script>
	<script>
		$("#jplayer").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", { 
					webmv: "assets/2/video.webm", // for .webm format, use this conversion tool: http://video.online-convert.com/convert-to-webm
					m4v: "assets/2/video.m4v" // for .m4v format, use this conversion tool: http://www.convertfiles.com/convert/video/MP4-to-M4V.html
				}).jPlayer("play");
			},

			ended: function() { $(this).jPlayer("play"); },
		    swfPath: "js",
		    supplied: "webmv, m4v",
		    size: { width: "400px", height: "216px" },
		    solutions: "flash, html",
		    nativeVideoControls: { all: /./ }
		});
	</script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
