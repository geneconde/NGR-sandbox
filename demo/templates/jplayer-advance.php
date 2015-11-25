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
		<div class="jp-type-single">
		    <div id="jplayer" class="jp-jplayer"></div>

		    <div class="jp-gui">
			    <div class="jp-video-play">
					<a href="javascript:;" class="jp-video-play-icon" tabindex="1"><?php echo _("Play"); ?></a>
				</div>

				<div class="jp-interface">
				    <div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>
						</div>
				    </div>

					<div class="jp-current-time"></div>
				    <div class="jp-duration"></div>
					<div class="jp-controls-holder">

					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-play" tabindex="1"><?php echo _("Play"); ?></a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1"><?php echo _("Pause"); ?></a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1"><?php echo _("Stop"); ?></a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="<?php echo _("Mute"); ?>"><?php echo _("Mute"); ?></a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="<?php echo _("Unmute"); ?>"><?php echo _("Unmute"); ?></a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="<?php echo _("Max volume"); ?>"><?php echo _("Max volume"); ?></a></li>
					</ul>

					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>

					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="<?php echo _("Full screen"); ?>"><?php echo _("Full screen"); ?></a></li>
						<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="<?php echo _("Restore screen"); ?>"><?php echo _("Restore screen"); ?></a></li>
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="<?php echo _("Repeat"); ?>"><?php echo _("Repeat"); ?></a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="<?php echo _("Repeat off"); ?>"><?php echo _("Repeat off"); ?></a></li>
					</ul>
				</div>

				<div class="jp-details">
					<ul><li><span class="jp-title"><?php echo _("Pollution"); ?></span></li></ul>
				</div>
			</div>
		</div>

		<div class="jp-no-solution">
			<span><?php echo _("Update Required"); ?></span>
			<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
		</div>
	</div>

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
    solutions: "flash, html"
});
</script>
</body>
</html>
