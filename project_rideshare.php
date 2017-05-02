

<!DOCTYPE>

<html>

<head>
<title> Max White - Rideshare App </title>

<?php include 'style_sheets.php';?>

<link rel="stylesheet" type="text/css" href="project_default.css">

</head>

<body>

<?php include 'top_section.php';?>

<div id="dynamicContent">
	
	<?php include 'side_section.php';?>
	
	
	<div id="pageContent">
		<div class="contentTitle">
			<p> Rideshare Web App </p>
		</div>
		<div class ="contentInfo">
			<p>
				As part of a small team of Middlebury College students, I created a ride-share web application to help people at our rural school get lifts to bigger cities during breaks and weekends
				It was an awesome experience that taught me about web development tools and, perhaps more importantly, how to work with others on a large communal project.
				<br><br>
				Essentially, the app allowed drivers to advertise free space in their car for potential passengers and for passengers to request carpools to their desired destination.
				We wanted people to be able to able to get matched automatically as well as check rides and express interest manually.
				<br><br>
				We used a Scrum-based agile development approach to coordinating and directing our work on the application,
				with daily stand-up meetings to share our progress and larger meetings between sprints to agree on functionality and divvy up responsibilities.
				<br><br>
				One of the most rewarding experiences for me was getting together and discussing how we wanted to handle certain aspects of the application,
				like how drivers would get matched with and accept potential riders, or how to deal with things like cancellations and round-trips.
				<br><br>
				We decided to use Mongo as our database, with Node.js as a backend and bootstrap on the front-end.
				I focused primarily on server-side issues, which means I got to implement some of the relatively complicated
				database updates that might result from situations like ride cancellations.
				<br><br>
				You can check out our initial prototype
				<a href="https://github.com/meIIow?tab=repositories">here</a>.
			</p>		
		</div>
	</div>

</div>
</body>

<?php include 'footer.php';?>

</html>

