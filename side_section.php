
<div id="sideNav">
	
	<h1> Projects </h1>

	<ul>
		<?php
		$projects = array("Positional Games", "Ride-Sharing Web App", "Personal Site", "Local Event Finder", "Fitness Timer");
		$projectLinks = array("project_games.php", "project_rideshare.php", "project_website.php", "project_event_finder.php", "project_timer.php");
		$numProjects = count($projects);
		
		for ($project = 0; $project < $numProjects; $project ++) {
			echo '<li><a href="';
			echo $projectLinks[$project];
			echo '">';
			echo '<div>';
			echo $projects[$project];
			echo '</div>';
			echo '</a></li>';
		}
		?>
		
	</ul>		
</div>