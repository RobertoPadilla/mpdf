<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mpdf library test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<h1 class="text-center text-white mt-3">Here we can make a PDF file</h1>
	<div class="row mt-5" style="max-width: 100%">
		<div class="col"></div>
		<div class="col-4 text-white">
			<form method="post" action="http://mpdf.test/pdf">
				<div class="form-group">
					<label for="formGroupExampleInput">New contractor</label>
					<input type="text" class="form-control" id="formContractorName" name="formContractorName" placeholder="Full name" required>
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput2">Responsable</label>
					<input type="text" class="form-control" id="formResponsableName" name="formResponsableName" placeholder="Full name" required>
				</div>
				<button type="submit" class="btn btn-success float-right mt-3">Generate PDF</button>
			</form>
		</div>
		<div class="col"></div>
	</div>
</body>
</html>