<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style>
			.container {
				margin-top: 80px;
				color: #333;
			}
		</style>
	</head>
	<body>
		<div class="titulo">Weight Corvertation</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h1 class="display-4 text-center">
						Weight Convertor
					</h1>
				<form>
					<div class="form-group">
						<input type="number" class="form-control form-control-lg"
						id="kginput" placeholder="Enter KG">
					</div>
				</form>
					<div id="output">
						<div class="card">
							<div class="card-block bg-primary mb-2">
							<h4>Grams:</h4>
							<div id="grams"></div>
							</div>
						</div>
						<div class="card">
							<div class="card-block bg-success mb-2">
							<h4>Pounds:</h4>
							<div id="pounds"></div>
							</div>
						</div>
						<div class="card">
							<div class="card-block bg-danger mb-2">
							<h4>Ounce:</h4>
							<div id="ounce"></div>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
		<script>
			document.getElementById("output").style.visibility = "hidden";
			document.getElementById("kginput").addEventListener("input", function (e) {
				document.getElementById("output").style.visibility = "visible";
				let kg = e.target.value;
				document.getElementById("grams").innerHTML = kg * 1000;
				document.getElementById("pounds").innerHTML = kg * 2.2046;
				document.getElementById("ounce").innerHTML = kg * 37.254;
			});
		</script>
	</body>
</html>
