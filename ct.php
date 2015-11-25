<?php 
	require_once 'session.php';	
	require_once 'locale.php';	
	include_once 'header.php';
	require_once 'libraries/functions.php';
	
	$userid 		= $user->getUserid();
	$teacherid 		= $user->getTeacher();
	$timelimit		= $_GET['tl'];
	$startdate 		= urldecode($_GET['date']);
	$mid			= "cumulative";
	$mode			= 3;
	
	$qid 			= getQuestionIDs($mid, $teacherid, $mode);
	$testid 		= getTestID($mid, $teacherid, $mode);
	
	$sdt 			= new StudentDtFactory();
	$sdt_set		= $sdt->getStudentDt($userid, "cumulative", $mode);
	
	$answers	= [];
	$questions	= [];
	
	if($sdt_set) { // fix on refresh. check if there is existing test for this student. if none, it adds test.
		$sdtid 		= $sdt_set->getStudentDtID();
		$answer_set	= $sdt->getStudentAnswer($sdtid);
		
		foreach($answer_set as $ans) {
			array_push($questions, $ans['qid']);
			array_push($answers, $ans['answer']);
		}
	} else {
		$testvalues = array(
			"userid" 		=> $userid,
			"moduleid"		=> $mid,
			"mode"			=> $mode,
			"dtid"			=> $testid,
			"datestarted"	=> $startdate,
		);
		$sdt->addStudentDT($testvalues);
		
		$student_test 	= $sdt->getStudentDt($userid, $mid, $mode);
		$sdtid 			= $student_test->getStudentDtID();
	}
	
	$dtq 			= new DtQuestionFactory();
	$question_set 	= $dtq->getAllQuestions();
	
	$ctr = 1;
	$letters = range('A','Z');
	$qnum = 1;
?>
<div id="container">
<a class="link" href="student.php">&laquo <?php echo _("Go Back"); ?></a>
<h1><?php echo _("Cumulative Test"); ?></h1>
<?php echo _("You have"); ?> <?php $timelimit; ?> <?php echo _("minutes to answer the questions below."); ?>
<form action="save-ct.php?sdtid=<?php echo $sdtid; ?>&sd=<?php echo $startdate; ?>" method="post">
	<table border="0" class="result morepad">
		<tr>
			<td colspan="2" class="bold"><?php echo _("Time Left:"); ?> <span id="note" style="color:green;"></span><br/><div id="countdown"></div><br/></td>
			
		</tr>
		<tr>
			<td colspan="2"><span class="bold"><?php echo _("Questions"); ?></td>
		</tr>
		<?php 
			foreach($question_set as $row) { 
				if(in_array($row['qid'], $qid)) {
					$cc = 0;
		?>
		<tr class="trline" id="question-<?php echo $row['qid']; ?>">
			<td>
			<?php 
				echo $qnum.". "._($row['question']);
				$choices = explode(":", $row['choices']);
				
				if($row['image'] != null || $row['image'] != "") {
			?>
				<br/>
				<img src="<?php echo $row['image']; ?>" class="dtq-image">
			<?php } ?>
			<br/>
			<?php
				for($i = 0; $i < count($choices); $i++) {
			?>
				<input type="radio" name="q-<?php echo $ctr; ?>" value="<?php echo $letters[$i]; ?>" id="c<?php echo $ctr + $i;     ?>">
				<label for="c<?php echo $ctr + $i;     ?>"><?php echo "<span class='letters'>{$letters[$i]}</span>".". "._($choices[$i]); ?></label>
				<br/>
				<?php
						$cc++;
					}
				?>
			</td>
		</tr>
		<?php
					$ctr+=$cc;
					$qnum++;
				}
			}
		?>
	</table>
	<div class="clear"></div>
	<br/>
	<input type="submit" class="button1" name="student-test" id="submit-test">
</form>
<a href="ct-results.php" class="hidden button1" id="check-results"><?php echo _("Check Results"); ?></a>
</div>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>
var sdtid = <?php echo $sdtid; ?>;
var qs = [], sa = [];
var expired = false;
var sd = "<?php echo $startdate; ?>";
$(document).ready(function() {
	<?php if(isset($questions)) { ?>
		qs = <?php echo json_encode($questions); ?>;
		sa = <?php echo json_encode($answers); ?>;
	<?php } ?>
	
	$('#submit-test').click(function(e) {
		e.preventDefault();
		window.onbeforeunload = null;
		var ctr = 0;
		
		$('.trline').each(function() {
			var question = $(this);
			var check = false;
			
			$('#' + question.attr('id') + ' input[type="radio"]').each(function() {
				if($(this).is(':checked')) check = true;
			});
			
			if(!check) ctr++;
		});
		
		if(ctr > 0) {
			alert('<?php echo _("You have not answered all the questions."); ?>');
		} else {
			document.location.href = "save-ct.php?sdtid=<?php echo $sdtid; ?>&sd=<?php echo $startdate; ?>";
		}
	});
	
	$('.trline').each(function() {
		var question 	= $(this);
		var questionid 	= question.attr('id').split('-');
		
		if(qs.length != 0) {
			$.each(qs, function(index, val) {
				if(questionid[1] == val) {
					$('#' + question.attr('id') + ' input[type="radio"]').each(function() {
						if($(this).val() == sa[index]) {
							$(this).attr('checked','checked');
						}
					});
				}
			});
		}
		
		question.find("input[type='radio']").click(function() {
			var ans = $(this).val();
			$.ajax({
				type	: "POST",
				url		: "save-dt-answer.php",
				data	: {	sdtid: sdtid, qid: questionid[1], answer: ans },
			});
		});
	});

});

(function($){
	
	// Number of seconds in every time division
	var days	= 24*60*60,
		hours	= 60*60,
		minutes	= 60;
	
	// Creating the plugin
	$.fn.countdown = function(prop){
		
		var options = $.extend({
			callback	: function(){},
			timestamp	: 0
		},prop);
		
		var left, d, h, m, s, positions;

		// Initialize the plugin
		init(this, options);
		
		positions = this.find('.position');
		
		(function tick(){
			
			// Time left
			left = Math.floor((options.timestamp - (new Date())) / 1000);
			
			if(left < 0){
				left = 0;
				expired = true;
			}
			
			// Number of days left
			d = Math.floor(left / days);
			updateDuo(0, 1, d);
			left -= d*days;
			
			// Number of hours left
			h = Math.floor(left / hours);
			updateDuo(2, 3, h);
			left -= h*hours;
			
			// Number of minutes left
			m = Math.floor(left / minutes);
			updateDuo(4, 5, m);
			left -= m*minutes;
			
			// Number of seconds left
			s = left;
			updateDuo(6, 7, s);
			
			// Calling an optional user supplied callback
			options.callback(d, h, m, s);
			
			// Scheduling another call of this function in 1s
			setTimeout(tick, 1000);
		})();
		
		// This function updates two digit positions at once
		function updateDuo(minor,major,value){
			switchDigit(positions.eq(minor),Math.floor(value/10)%10);
			switchDigit(positions.eq(major),value%10);
		}
		
		return this;
	};


	function init(elem, options){
		elem.addClass('countdownHolder');

		// Creating the markup inside the container
		$.each(['Days','Hours','Minutes','Seconds'],function(i){
			$('<span class="count'+this+'">').html(
				'<span class="position">\
					<span class="digit static">0</span>\
				</span>\
				<span class="position">\
					<span class="digit static">0</span>\
				</span>'
			).appendTo(elem);
			
			if(this!="Seconds"){
				elem.append('<span class="countDiv countDiv'+i+'"></span>');
			}
		});

	}

	// Creates an animated transition between the two numbers
	function switchDigit(position,number){
		
		var digit = position.find('.digit')
		
		if(digit.is(':animated')){
			return false;
		}
		
		if(position.data('digit') == number){
			// We are already showing this number
			return false;
		}
		
		position.data('digit', number);
		
		var replacement = $('<span>',{
			'class':'digit',
			css:{
				top:'-2.1em',
				opacity:0
			},
			html:number
		});
		
		// The .static class is added when the animation
		// completes. This makes it run smoother.
		
		digit
			.before(replacement)
			.removeClass('static')
			.animate({top:'2.5em',opacity:0},'fast',function(){
				digit.remove();
			})

		replacement
			.delay(100)
			.animate({top:0,opacity:1},'fast',function(){
				replacement.addClass('static');
			});
	}
})(jQuery);

$(function(){
	var note = $('#note'),
		ts = new Date(2012, 0, 1),
		newYear = true;
		//Added by Jone for retaining the countdown timer after page refresh
		ts = localStorage.getItem('<?php echo $mid; ?>-date');
		//END
		
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = (new Date()).getTime() + <?php echo $timelimit; ?>*60*1000;
		newYear = false;
		
		//Added by Jone for retaining the countdown timer after page refresh
		localStorage.setItem('<?php echo $mid; ?>-date', ts);
		//END	
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			var message = "";
			message += hours   + " hour"   + ( hours==1   ? '':'s' ) + ", ";
			message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
			message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
			note.html(message);
			
			if(expired) {
				$('#submit-test').addClass('hidden');
				$('#check-results').removeClass('hidden');
				$('input[type="radio"]').attr('disabled','disabled');
				var unanswered = "";

				$('.trline').each(function() {
					var question 	= $(this);
					var questionid 	= question.attr('id').split('-');
					var answered 	= false;
					
					$('#' + question.attr('id') + ' input[type="radio"]').each(function() {
						if($(this).is(':checked')) {
							answered = true;
						}
					});
					
					if(!answered) unanswered += questionid[1] + "-";
				});
				
				if(unanswered != "") {
					$.ajax({
						type	: "POST",
						url		: "save-dt-unanswered.php",
						data	: {	sdtid: sdtid, uqid: unanswered, startdate: sd },
					});
				}
				
				$('#countdown').disable();

			}
		}
	});
	
	window.onbeforeunload = confirmOnPageExit;
});

var confirmOnPageExit = function (e) 
{
    // If we haven't been passed the event get the window.event
    e = e || window.event;

    var message = '<?php echo _("You are currently taking your exam."); ?>';

    // For IE6-8 and Firefox prior to version 4
    if (e) 
    {
        e.returnValue = message;
    }

    // For Chrome, Safari, IE8+ and Opera 12+
    return message;
};
</script>
<?php require_once "footer.php"; ?>