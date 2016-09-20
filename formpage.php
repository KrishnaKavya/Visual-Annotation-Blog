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
	<link rel="stylesheet" type="text/css" href="style/formpagestyle.css">

	<!--script file-->
	
</head>
<body>
<!--Display uploaded comments-->
<!--Form to upload comments-->
<!--
The form or the phase box is used as an input to upload new comments to the annotation blog. 
The fields are 
	-text of image or clause
	-Add is inturn split into 3 categories
		-uploading an image
		-uploading a video
		-adding the url of a web page.
	- Reflection of the mediator. 
The fields are indented according to the layout of the form. 


-->
<div class="container-fluid"></div>
<div class="form">
<form method="POST" enctype="multipart/form-data"> <br>
Write text of image phrase or clause: <input type="text" name="text" size="40" class="inputfield"><br><br>
Add: <br>
<div class="add">
Image: <br>
<input type="file" name="image" accept="image/*"/><br>
Video:
<input type="file" name="video" accept="video/*"/ ><br>
URL:
<input type="text" name="url" size="25" class="inputfield" ><br><br><br>
</div>
Reflect: <input type="text" name="text" size="40" class="inputfield"><br><br>
<div class="submit">
<input type="submit" name="submit">
</div>
</div>	
</form>
</body>
</html>