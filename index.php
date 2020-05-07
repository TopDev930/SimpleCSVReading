

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<form method="POST" action="upload.php" enctype="multipart/form-data">
		    Select csv file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" accept=".csv">
    <input type="submit" value="Upload CSV file" name="submit" class="btn btn-success">
	</form>

</body>
</html>


