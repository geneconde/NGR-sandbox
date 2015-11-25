$(document).ready(function() {
	$('.blink').blink({ speed: 500, blinks: 1000 });
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

	/* Next Hover */
	$('img.next-toggle').hover( function () { 
		this.src = 'images/buttons/next-hover2.png';
	}, function () { 
		this.src = 'images/buttons/next.png';
	});

	/* Back Hover */
	$('img.back-toggle').hover(function () {
		this.src = 'images/buttons/back-hover.png';
	}, function () {
		this.src = 'images/buttons/back.png';
	});
	
	/* Back Screen Hover */
	$('img.back-toggle-screen').hover(function () {
		this.src = 'images/buttons/back-hover.png';
	}, function () {
		this.src = 'images/buttons/back.png';
	});
	
	/* Read More Hover */
	$('img.readmore-toggle').hover( function () {
		this.src = 'images/buttons/next-hover.png'; 
	}, function () { 
		this.src = 'images/buttons/readmore.png';
	});
	
	/* Back Screen Answer Hover */
	$('img.back-toggle-answer').hover(function () {
		this.src = 'images/buttons/back-hover.png';
	}, function () {
		this.src = 'images/buttons/check-answer-back.png';
	});
});