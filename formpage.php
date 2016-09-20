<!DOCTYPE html>
<html>
<head>
	<title>FormPage</title>

	<!--Jquery Library-->
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS Style Sheet-->
	

	<!--script file-->
	
</head>
<body>
<!--Display uploaded comments-->
<!--Form to upload comments-->
<div class="container-fluid"></div>
<form method="POST" enctype="multipart/form-data">
Write text of image phrase or clause: <input type="text" name="text" size="40"><br>
Add: <br>
<div>
Image: <br>
<input type="file" name="image" accept="image/*"/><br>
Video:
<input type="file" name="video" accept="image/*"/><br>
URL:
<input type="text" name="url" accept="image/*"/><br>
</div>
<input type="submit" name="submit">
	
</form>
</body>
</html>