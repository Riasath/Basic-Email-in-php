<!DOCTYPE html>
<html>
<head>
	<title>Sent a Email</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="container">
		<h1> You Can sent Email From Here </h1>
		</div>


	</header>

	<section>
		<div class="container">
		<form action="sentemail.php" method="POST">
			<label>To :</label>
			<input type="text" name="sender">
			<label>Email Subject:</label>
			<input type="text" name="Subject">
			<label>Email Body:</label>
			<textarea rows="5" name="body"></textarea>
			<label>MyPass:</label>
			<input type="password" name="mypassword">
			<input type="submit" name="">
		</form>
		</div>
	</section>

</body>
</html>