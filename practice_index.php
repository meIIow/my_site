

<!DOCTYPE>

<html>

<head>
<title> My First Webpage </title>
<link rel="stylesheet" type="text/css" href="practiceStyleSheet.css">

</head>

<body>

<h1 id="header"> Maxwell Oliver White </h1>

<ul id="topNav">
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php">About Me</a></li>
  <li><a href="index.php">Projects</a></li>
  <li><a href="index.php">Resume</a></li>
  <li><a href="index.php">Links</a></li>
</ul>

<div id="dynamicContent">

	<div id="sideNav">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="index.php">About Me</a></li>
		  <li><a href="index.php">Projects</a></li>
		  <li><a href="index.php">Resume</a></li>
		  <li><a href="index.php">Links</a></li>
		</ul>		
	</div>
	
	<div id="pageContent">
		<div>
			<p>This is some text that is placed in the transparent box. This is some text that is placed in the transparent box. This is some text that is placed in the transparent box.</p>
		</div>
	</div>

</div>
</body>

<?php
/* echo $_SERVER['HTTP_USER_AGENT']; */
echo "Hosted on Raspberry Pi - built from scratch in HTML, CSS and PHP";
?>

</html>

