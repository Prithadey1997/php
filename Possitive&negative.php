<html>
<head>
<?php
if(isset($_POST['submit']))
{
	$number = $_POST['number'];
	echo "Entered the Number: $number <br>";
	if ($number < 0)
{	
	echo " The Number is negative";
}
else
{
	echo "The Number is positive";
}
}
?>
<form method="POST">
Enter the Number:<input type="text" name="number">
<input type="submit" name="submit" value="Check">
</form>
</head>
<title>positive/negative </title>
</html>