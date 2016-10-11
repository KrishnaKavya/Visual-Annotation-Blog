<?php
	//adding database connection. 
	require_once('mysqli_connect.php'); 
	session_start();
	$word=$_REQUEST['word'];		//getting poem Text from the poem. 
	$user_login=$_SESSION['user_login'];

	// ToDo: 1. Fetch the time stamp and save it in database. While executing the query. orderBy timestamp. 
	// ToDo: 2. update display method. 
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
<div class="display" id="display">
	<?php
		display($word, $dbc);
	?>
</div>
<hr noshade>
<div class="form">
<form method="POST" enctype="multipart/form-data">
<span class="font">Write text of image phrase or clause:</span>
<input type="text" name="text" size="40" class="inputfield"><br>
<span class="font">Add: </span><br>
<div class="add">
<span class="font">Image: </span><br>
<input type="file" name="image" accept="image/*"/><br>
<span class="font">Video: </span>
<input type="file" name="video" accept="video/*"/ ><br>
<span class="font"> URL: </span>
<input type="text" name="url" size="25" class="inputfield" ><br><br>
</div>
<span class="font"> Reflect:</span><input type="text" name="reflect" size="40" class="inputfield"><br>
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

	$temp_name=$_FILES['image']['tmp_name'];
	echo $temp_name;

	if($temp_name==null){
		$image=null;
		$imagename=null;
	}else{
	/*The image is feteched from the Files array using 
	* a temporary name then its encoded usinf base64. 
	*/
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$imagename=addslashes(($_FILES['image']['name']));
		
	}
	/*
	* To save the uploaded video. 
	* the name of the video is saved in the database and the file is moved to the 
	* uploaded directory.
	* The name of the directory is concatenated with the user id to maintain the Unique name. 
	*/
	$videoname=addslashes($_FILES['video']['name']);
	$video=$_FILES['video']['tmp_name'];
	move_uploaded_file($video, "uploaded/".$videoname);

	/*
	* Fetching a time zone and getting the current date. 
	*/
	// Change the line below to your timezone!
	date_default_timezone_set('America/Chicago');
	$date = date('m/d/Y h:i:s a', time());
	/*Query to insert a row in the visual table. 
	* Visual table keeps track of all the data uploaded or submitted to the orm
	*/ 

	$insertquery= "INSERT INTO `visual` (`user_id`, `poem_text`, `text`, `imagename`,`image`, `videoname`, `url`, `reflect`) VALUES ('$user_login', '$word', '$text', '$imagename', '$image','$videoname','$url', '$reflect')";
	$insertresult =@mysqli_query($dbc, $insertquery);

}
function display($word, $dbc){
	$selectQuery="SELECT * from visual where poem_text='$word'";
	$result=mysqli_query($dbc, $selectQuery);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$userid=$row['user_id'];
			$text=$row['text'];
			$imagename=$row['imagename'];
			//image display
			$videoname=$row['videoname'];
			//video display
			$url=$row['url'];
			$reflect=$row['reflect'];
			echo $userid." ".$text." ".$imagename." ".$videoname." ".$url." ".$reflect;
			echo '<img  height="250" width="250" src="data:image;base64,'.base64_encode( $row['image'] ).'"/>';

	}
}else{
	echo "Be the first to add an annotation for ". $word;
}
}
?>