<?php
 include '../../controllers/admin/reportController.php';
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Salles %"
	},
	axisY: {
		suffix: "%",
		scaleBreaks: {
			autoCalculate: true
		}
	},
	data: [{
		type: "column",
		yValueFormatString: "#.#####%",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
        
});
chart.render();
var chartt = new CanvasJS.Chart("chartContainerr", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "items"
	},
	axisY: {
		title: "Exist Mount"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPointss, JSON_NUMERIC_CHECK); ?>
	}]
});
chartt.render();
var charttt = new CanvasJS.Chart("chartContainerrr", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Selles at last 10 Days"
	},
	axisY: {
		title: "Soled"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Piece",
		dataPoints: <?php echo json_encode($dataPointsss, JSON_NUMERIC_CHECK); ?>
	}]
});
charttt.render(); 
var charttts = new CanvasJS.Chart("chartContainerrrs", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Selles at last 12 Mounth"
	},
	axisY: {
		title: "Soled"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Piece",
		dataPoints: <?php echo json_encode($dataPointsssp, JSON_NUMERIC_CHECK); ?>
	}]
});
charttts.render(); 
}
</script>
</head>
<body>
<div id="chartContainerrrs" style="height: 370px; width: 100%; margin-bottom: 50px;"></div>
<div id="chartContainerr" style="height: 370px; width: 100%;margin-bottom: 50px;"></div>
<div id="chartContainer" style="height: 370px; width: 100%;margin-bottom: 50px;"></div>
<div id="chartContainerrr" style="height: 370px; width: 100%;margin-bottom: 50px;"></div>
<script src="../../../canvasjs.min.js"></script>
</body>
</html>