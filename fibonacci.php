<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fibonacci Sequence</title>
</head>
<body>
	<form action="fibonacci.php" method="post">
		<label for="num">Enter a number between 0 and 50</label>
		<input type="number" min="0" max="50" name="num">
		<input type="submit" name="submit" value="Submit">
	</form>
	<p><em>I have limited the program to n <= 50 just because</em></p>
	<br>

	<?php 
	if (isset($_POST["submit"])) {
		$number = $_POST["num"];

		$fibonacci = [];
		$x = 0;

		while ( $x <= $number) {
			if ($x == 0 || $x == 1) {
				$fibonacci[$x] = $x;
				echo $fibonacci[$x] . ",";
			} else {
				$fibonacci[$x] = $fibonacci[$x-1] + $fibonacci[$x-2];
				echo $fibonacci[$x] . ",";
			}
			$x++;

		}






	}
	?>




</body>
</html>

