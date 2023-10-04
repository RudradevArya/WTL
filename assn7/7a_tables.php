<!-- 
<?php

$number = $_POST['number'];
for($i = 1; $i <= 10; $i++) {
  echo $number . " * " . $i . " = " . $number * $i . "<br>";
}
?> -->


<!-- <?php
    // Get the number from user
    $number = $_POST['2'];

    // Print the table
    for($i = 1; $i <= 10; $i++){
        echo $number . " * " . $i . " = " . $number * $i . "<br>";
    }
?> -->


<!-- 
7-A] Write a PHP script to take number from user and print the table of that
number. -->

<!DOCTYPE html>
<html>

<body>
	<center>
		<h1 style="color: green;">
			GeeksforGeeks
		</h1>

		<h3>
			Program to print multiplication<br>
			table of any number in PHP
		</h3>

		<form method="POST">
			Enter a number:
			<input type="text" name="number">
			
			<input type="Submit"
				value="Get Multiplication Table">
		</form>
	</center>
</body>

</html>

<?php
if($_POST) {
	$num = $_POST["number"];

	echo nl2br("<p style='text-align: center;'>
		Multiplication Table of $num: </p>
	");
		
	for ($i = 1; $i <= 10; $i++) {
		echo ("<p style='text-align: center;'>$num"
			. " X " . "$i" . " = "
			. $num * $i . "</p>
		");
	}
}
?>
