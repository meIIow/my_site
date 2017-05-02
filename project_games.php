

<!DOCTYPE>

<html>

<head>
<title> Max White - AI Project </title>

<?php include 'style_sheets.php';?>

<link rel="stylesheet" type="text/css" href="project_games.css">

</head>

<body>

<?php include 'top_section.php';?>

<div id="dynamicContent">
	
	<?php include 'side_section.php';?>
	
	
	<div id="pageContent">
		<div class="contentTitle">
			<p> Positional Games </p>
		</div>
		<div class ="contentInfo">
			<p>
				I wanted to tackle a project that would require me to understand and implement some of the 
				fundamental algorithms in the field of artificial intelligence.
				With this in mind, I decided to create a program in Java that can play positional games –
				games like tic-tac-toe, Qubic, 5-in-a-row, and hex.
				This family of games has a relatively conserved ruleset, so it seemed possible to construct a
				strategy that could be generalized to play any one of them. 
				<br><br>
				My program needed to do three things:
			</p>
			<ol>
				<li> Understand how the game works by knowing how to win, which it accomplishes by
				constructing a list of winning sets </li>
				<li> Determine what makes a board position “good” by learning how to
				assess different board positions, which it does by
				keeping track of win sets and optimizing its criteria via genetic algorithm </li>
				<li>  Think ahead by considering how its moves affect its opponent
				using a MiniMax algorithm </li>
			</ol>
			<p>
				I developed my own algorithm for determining all unique win-sets for an n-in-a-row game on a board with any number of dimensions,
				coded a robust method that used each player’s progress towards completing these win-sets to assess board control,
				and implemented my own genetic algorithm which I trained to optimize my board-assessment method
				 I tied it together with a simple ASCII interface and a minimax algorithm with alpha-beta pruning that I coded from scratch.
				<br><br>
				Ultimately, the code was able to play positional n-in-a-row games that use a board with set dimensions (i.e. 5-in-a-row, 3D tic-tac-toe).
				I believe my approach to be robust enough to apply to games with more complicated win conditions (like Hex)
				or constraints on where one can move (like Connect4).
				One of the biggest challenges was making my code as flexible as possible,
				so that these modifications could be incorporated with minimal effort if I decided to add this functionality.
				I think this is a very important skill to develop.
				<br><br>
				Check it out 
				<a href="https://github.com/meIIow?tab=repositories">here</a>.
				You can also find a poster I made that goes into a bit more detail 
				<a href="PositionalGamesPoster.jpg" download>here</a>.
			</p>

			
		</div>
	</div>

</div>
</body>

<?php include 'footer.php';?>

</html>

