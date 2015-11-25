<html>
<head>
	<title>Snap</title>

	<link rel="stylesheet" href="css/snap.css">
</head>

<body>
	<div id="grid" class="grid clearfix">
		<a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
			<figure>
				<img src="http://420placehold.it/tech/600-600-normal">
				
				<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>

				<figcaption>
					<h2><?php echo _("European"); ?></h2>
					<p><?php echo _("The European languages are members of the same family."); ?></p>
				</figcaption>
			</figure>
		</a>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/snap.svg-min.js"></script>

	<script>
		function init() {
			var speed = 330,
				easing = mina.backout;

			[].slice.call (document.querySelectorAll('#grid > a')).forEach(function(el) {
				var s = Snap(el.querySelector('svg')), path = s.select('path'),
					pathConfig = {
						from : path.attr('d'),
						to : el.getAttribute('data-path-hover')
					};

				el.addEventListener('mouseenter', function() {
					path.animate({ 'path' : pathConfig.to }, speed, easing);
				});

				el.addEventListener('mouseleave', function() {
					path.animate({ 'path' : pathConfig.from }, speed, easing);
				});
			} );
		}

		init();
	</script>
</body>
</html>
