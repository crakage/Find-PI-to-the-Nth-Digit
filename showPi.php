<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show me PI</title>
</head>
<body>
	<form action="showPi.php" method="post">
		<label for="num">Enter a number between 0 and 18</label>
		<input type="number" min="0" max="18" name="num" placeholder="Enter a number Here">
		<input type="submit" name="submit" value="Submit">
	</form>
	<p><em>I have limited the program to 18 for precision purpose.</em></p>
	<br>
	<?php 
	if (isset($_POST["submit"])) {
		$precision = $_POST["num"];
		ini_set("precision", ($precision + 1));
		echo "<p>PI with " . $precision . " digit after the coma is:</p><br>";
		echo '<h1>' . pi() . '</h1>';
	}
	?>



</body>
</html>



