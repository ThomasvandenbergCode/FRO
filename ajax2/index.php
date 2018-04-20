<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ajax 2</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<img class="logo" src="logo.png" alt="logo">
		<div id="main">
			<h1>BMI Calculator</h1>
			<h3>Weight(kg):</h3>&nbsp;<input type="number" id="weight" placeholder="Weight"/>
			<h3>Height(cm):</h3>&nbsp;<input type="number" id="height" placeholder="Height"/>
			<button onclick="bmiCalc()">Calculate</button>
			<span id="bmiSpan"></span>
		</div>
		<script>
		function bmiCalc() {
			var weight = document.getElementById("weight").value;
			var height = document.getElementById("height").value;

			var xhttp;

			if ((weight.length == 0) || (height.length == 0)) {
				document.getElementById("bmiSpan").innerHTML = "";
				return;
			}

			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("bmiSpan").innerHTML = this.responseText;
				}
			};

			xhttp.open("GET", "bmiCalc.php?weight=" + weight + "&height=" + height, true);
			xhttp.send();
		}
		</script>

	</body>
</html>
