<?php require_once('session.php'); ?>	
<?php include_once('header.php');?>	
<a class="link" href="all-students-ct-results.php">&laquo; Go Back to Students Cumulative Test Results</a>
<h1>Cumulative Test Item Statistics <a href="http://www.printfriendly.com" style="float: right; color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-grnw20.png" alt="Print Friendly and PDF"/></a></h1>
<h3>Question Item Information</h3>
<table border="0" class="result morepad">
	<tr>
		<td class="bold">Question</td>
		<td>Which of the following is an example of a predator-prey relationship?</td>
		
	</tr>
	<tr>
		<td class="bold vtop">Choices</td>
		<td>A. a bee getting a nectar from a flower<br/>
		B. a rabbit feeding on a carrot <br/>
		C. a lion hunting a zebra<br/>
		D. a mushroom feeding on a tree bark</td>
	</tr>
	<tr>
		<td class="bold">Answer</td>
		<td>C. a lion hunting a zebra</td>
	</tr>
</table>
<h3>Correct and Wrong Answer Statistics</h3>
<p>The following pie chart shows how many students got this question correct and how many students got it wrong.</p>
<div id="piechart2" style="width: 100%; height: 350px;"></div>
<h3>Student Answer Statistics</h3>
<br/>
<p>The following pie chart shows the students' answers for this question and how many answered each question item's choices.</p>
<div id="piechart1" style="width: 100%; height: 350px;"></div>
<br/>
<?php
$arr = array(
		array('',''),
		array('A. a bee getting a nectar from a flower', 28),
		array('B. a rabbit feeding on a carrot', 12),
		array('C. a lion hunting a zebra', 15),
		array('D. a mushroom feeding on a tree bark', 22)
		);
$piedata1 = json_encode($arr);

$arr = array(
		array('',''),
		array('Correct', 15),
		array('Wrong', 62)
		);
$piedata2 = json_encode($arr);
?>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data1 = google.visualization.arrayToDataTable(<?php echo $piedata1; ?>);
		var data2 = google.visualization.arrayToDataTable(<?php echo $piedata2; ?>);
        var options1 = { is3D: true };
		var options2 = { is3D: true, colors: ['green', 'red'] }
        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
		var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
		
        chart1.draw(data1, options1);
		chart2.draw(data2, options2);
      }
</script>