

<!DOCTYPE>

<html>

<head>
<title> Max White - Making My Site </title>

<?php include 'style_sheets.php';?>

<link rel="stylesheet" type="text/css" href="project_default.css">

</head>

<body>

<?php include 'top_section.php';?>

<div id="dynamicContent">
	
	<?php include 'side_section.php';?>
	
	
	<div id="pageContent">
		<div class="contentTitle">
			<p> Personal Website </p>
		</div>
		<div class ="contentInfo">
			<p>
				I hope you like this site! I’ve coded it from scratch in PHP, HTML and CSS.
				While I considered using a front-end framework, I decided that it would be more educational for me to take a bare-bones approach.
				This way, I can better understand and appreciate those frameworks when I do use them.
				<br><br>
				I’m also currently hosting it on my own Raspberry Pi rather than using a service,
				which has forced me to understand firsthand how this process works.
				I'm using an Apache server I installed on Raspbian Jessie, and 
				got my domain name and dynamic DNS through no-ip.com.
				<br><br>
				Additionally, I wanted practice managing an SQL database and interacting with it using PHP, 
				so I’ve implemented a visitor log mini-project. It keeps track of unique visitors who
				submit a form letting me know they stopped by. You can find it
				<a href="visitor_log.php">here<a>!
			</p>
		</div>
	</div>

</div>
</body>

<?php include 'footer.php';?>

</html>

