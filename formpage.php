<?php
	//adding database connection. 
	require_once('mysqli_connect.php'); 
?>
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
Reflect: <input type="text" name="reflect" size="40" class="inputfield"><br><br>
<div class="submit">
<input type="submit" name="submit">
</div>
</div>	
</form>
</body>
</html>

<?php
/*
* The function to store the uploaded data to the database. 
* If the submit button is clicked, the fields of the form are fetched in the php variables.
* 
*/
if(isset($_POST['submit'])){
	/*fetching variables from form and assigning to variables. */
	$text=$_POST['text'];
	$url=$_POST['url'];
	$reflect=$_POST['reflect'];
	/* The getimage size checks if the image is uploaded or null.
	* if the files returns false, the image is not uploaded.
	*/
	if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
		$image=null;
	}else{
	/*The image is feteched from the Files array using 
	* a temporary name then its encoded usinf base64. 
	*/
		$image=addslashes($_FILES['image']['tmp_name']);
		$imagename=addslashes(($_FILES['image']['name']));
		$image=file_get_contents($image);
		$image=base64_encode($image);

	}
	/*Query to insert a row in the visual table. 
	* Visual table keeps track of all the data uploaded or submitted to the orm
	*/ 
	$insertquery= "INSERT INTO `visual` (`user_id`, `poem_text`, `text`, `imagename`,`image`, `url`, `reflect`) VALUES ('krishna', 'lak', '$text', '$imagename', '$image','$url', '$reflect')";
	$insertresult =@mysqli_query($dbc, $insertquery);
 	if($insertresult){
 		echo "success";
 	}else{
 		echo "query not executed";
 	}

}

?>