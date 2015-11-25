$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
$('.blink').blink({ speed: 500, blinks: 1000 });

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
