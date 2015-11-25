<!DOCTYPE html>
<html>
<head>
	<title>jPlayer</title>

	<link href="css/jplayer.css" rel="stylesheet">

	<style>
		body { width: 440px; height: 280px; }

		#jp_container_1 { width: 100%; border: none !important; margin: 10px 0; }
		#jp_container_1 video { margin: 0; border-radius: 0 !important; }
		.jp-controls-holder { width: auto !important; }
		.jp-audio, .jp-audio-stream, .jp-video { font-size: 20px !important; border: none !important; }
		.jp-video .jp-interface { border-top: 0 !important; }
	</style>
</head>

<body>
	<div id="jp_container_1" class="jp-video">
		<div id="jplayer" class="jp-jplayer"></div>

		<div class="jp-no-solution">
			<span><?php echo _("Update Required"); ?></span>
			<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
		</div>
	<div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

<script>
$("#jplayer").jPlayer({
	ready: function () {
		$(this).jPlayer("setMedia", { 
			webmv: "assets/pollution.webm", // for .webm format, use this conversion tool: http://video.online-convert.com/convert-to-webm
			m4v: "assets/pollution.m4v" // for .m4v format, use this conversion tool: http://www.convertfiles.com/convert/video/MP4-to-M4V.html
		}).jPlayer("play");
	},

	ended: function() { $(this).jPlayer("play"); },
    swfPath: "js",
    supplied: "webmv, m4v",
    size: { width: "100%", height: "auto" },
    solutions: "flash, html",
    nativeVideoControls: { all: /./ }
});
</script>
</body>
</html>
