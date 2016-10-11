<?php
	session_start();
	//Deployment Changes:get the email id.
	$user_login="kavya";					//user id. 
	$_SESSION['user_login']= $user_login;	//Adding user login id to the session variables
?>
<!DOCTYPE html>
<html>
<head>
	<title>Visual Annotation Blog</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--stylesheet-->
	<link rel="stylesheet" type="text/css" href="style/visualstyle.css">
	<!--Java Script-->
	<script type="text/javascript" src="js/visualscript.js"></script>
</head>
<body>
<div class="container-fluid">
	<header>
		<h1 class="title">Visual Annotation Blog</h1>
	</header>

	<p>
	<b>Instructions</b>: 
	 Highlight a word in the poem that interests you.  At the top of your post, type the phrase or clause that uses that word to help create an image.  Upload your visual and reflect briefly on the connection between your visual and the text.  
	Also, do some research to create posts on the title and author as well as the time and place in which the poem was written.  You may add up to three media files per post.  
	Browse posts of your peers and respond to some of them.  You might want to agree with their ideas and add some supportive thoughts or visuals in the comment box.  Or you might want to suggest a different approach.  You might even choose to redefine the image and work with a new concept.  Once an image has been annotated, the only way to add visuals or thoughts about that image is to comment on a post.  You may comment on any post and upload media files with your comments.

	</p>
	<div class="row">
	<!--First Column-->
	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"  onload="highlightSelection();">
		<p class="poem" id="poem">
	<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=black'" id="black" value="Black" name="black" class="word"/></span> A, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=white'" value="white" name="white" class="word" /></span> E, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=red'" value="red" name="red" class="word"/></span> I, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=green'" value="green" name="green" class="word"/></span> U, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=blue'" value="blue" name="blue" class="word"/></span> O - 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=vowels'" value="vowels" name="vowels" class="word"/></span>,<br>		
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=some'" value="Some" name="some" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=day'" value="day" name="day" class="word"/></span> I will 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=open'" value="open" name="open" class="word"/></span> 
your 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=silent'" value="silent" name="silent" class="word"/></span>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=pregnancies'" value="pregnancies" name="pregnancies" class="word"/></span>:<br>
A, 
<span>black</span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=belt'" value="belt" name="belt" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=hairy'" value="hairy" name="hairy" class="word"/></span> 
with 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=burst'" value="burst" name="burst" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=flies'" value="flies" name="flies" class="word"/></span>,<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Bumbling'" value="Bumbling" name="Bumbling" class="word"/></span> and 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=buzzing'" value="buzzing" name="buzzing" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=over'" value="over" name="over" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=stinking'" value="stinking" name="stinking" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=cruelties'" value="cruelties" name="cruelties" class="word"/></span>,<br>
<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Pits'" value="Pits" name="Pits" class="word"/></span> 
of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=night'" value="night" name="night" class="word"/></span>; 
E, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=candour'" value="candour" name="candour" class="word"/></span> 
of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=sand'" value="sand" name="sand" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=pavilions'" value="pavilions" name="pavilions" class="word"/></span>
,<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=High'" value="High" name="High" class="word"/></span>
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=glacial'" value="glacial" name="glacial" class="word"/></span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=spears'" value="spears" name="spears" class="word"/></span>
 , 
 <span>white</span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=kings'" value="kings" name="kings" class="word"/></span>, 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=trembling'" value="trembling" name="trembling" class="word"/></span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Queen'" value="Queen" name="Queen" class="word"/></span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Anne" value="Anne's" name="Anne's" class="word"/></span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=lace'" value="lace" name="lace" class="word"/></span>;<br>
<span>I</span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=bloody'" value="bloody" name="bloody" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=spittle'" value="spittle" name="spittle" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=laughter'" value="laughter" name="laughter" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=dribbling'" value="dribbling" name="dribbling" class="word"/></span> 
<span>from</span> <span>a</span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=face'" value="face" name="face" class="word"/></span><br>
<span>In</span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=wild'" value="wild" name="wild" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=denial'" value="denial" name="denial" class="word"/></span> or in 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=anger'" value="anger" name="anger" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=vermilions'" value="vermilions" name="vermilions" class="word"/></span>;<br>
<br>
U,&#46;&#46;&#46; 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=divine'" value="divine" name="divine" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=movement'" value="movement" name="movement" class="word"/></span> of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=viridian'" value="viridian" name="viridian" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=seas'" value="seas" name="seas" class="word"/></span>,<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Peace'" value="Peace" name="Peace" class="word"/></span> of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=pastures'" value="pastures" name="pastures" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=animal'" value="animal-strewn" name="animal-strewn" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=peace'" value="peace" name="peace" class="word"/></span> of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=calm'" value="calm" name="calm" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=lines'" value="lines" name="lines" class="word"/></span><br>

<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Drawn'" value="Drawn" name="Drawn" class="word"/></span> on 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=foreheads'" value="foreheads" name="foreheads" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=worn'" value="worn" name="worn" class="word"/></span> with 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=heavy'" value="heavy" name="heavy" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=alchemies'" value="alchemies" name="alchemies" class="word"/></span>;<br>
<br>
O, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=supreme'" value="supreme" name="supreme" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Trumpet'" value="Trumpet" name="Trumpet" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=harsh'" value="harsh" name="harsh" class="word"/></span> with 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=strange'" value="strange" name="strange" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=stridencies'" value="stridencies" name="stridencies" class="word"/></span>,<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Silences'" value="Silences" name="Silences" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=traced'" value="traced" name="traced" class="word"/></span> in 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=angels'" value="angels" name="angels" class="word"/></span> and 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=astral'" value="astral" name="astral" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=designs'" value="designs" name="designs" class="word"/></span>:<br>
O&#46;&#46;&#46;
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Omega'" value="Omega" name="Omega" class="word"/></span>&#46;&#46;&#46;the 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=violet'" value="violet" name="violet" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=light'" value="light" name="light" class="word"/></span> of His 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/Visual-Annotation-Blog/formpage.php?word=Eyes'" value="Eyes" name="Eyes" class="word"/></span>!<br>

		</p>
	</div>
	<!--Second Column-->
	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" >
	<iframe src="" name="phaseBox" id="phaseBox" height="350%" width="100%" frameborder="2"></iframe>
	</div>
</div>
</body>