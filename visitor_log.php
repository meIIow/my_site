

<!DOCTYPE>

<html>

<head>
<title> Max White - Visitor Log </title>

<?php include 'style_sheets.php';?>

<link rel="stylesheet" type="text/css" href="visitor_log.css">

</head>

<body>

<?php include 'top_section.php';?>

<div id="dynamicContent">
	
	<?php include 'side_section.php';?>
	
	<div id="pageContent">
		<div class="contentTitle">
			<p> Visitor Log </p>
		</div>
		<div id ="lowerSection">
			<div id="leftSide">
				<div class ="infoBox">
					<p>
						Sign in to my visitor log to let me know you've been to my site!
						<br><br>
						Feel free to leave the form blank if you want to remain anonymous.
						Only the most recent entry will be recorded for each unique visitor each day.
					</p>
					
					<?php include 'visitor_log_submit.php';?>
					
				</div>
			</div>
			<div id="rightSide">
			
				<?php include 'visitor_log_table.php';?>
				
			</div>
		</div>
	</div>

</div>
</body>

<?php include 'footer.php';?>

</html>

