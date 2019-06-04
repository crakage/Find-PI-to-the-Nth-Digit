<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>e of a number</title>
</head>
<body>
	<form action="calculateExpOfNumber.php" method="post">
		<label for="num">Enter a number between 0 and 100</label>
		<input type="number" min="0" max="100" name="num">
		<input type="submit" name="submit" value="Submit">
	</form>
	<p><em>I have limited the program to n <= 50 just because</em></p>
	<br>

	<?php 
	if (isset($_POST["submit"])) {
		$number = $_POST["num"];

		echo "<p>n with a precision of " . $number . " is " . pow((1 + 1 / $number), $number) . "</p>";
	
	}
	?>




</body>
</html>

