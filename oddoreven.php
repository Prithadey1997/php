<html>
<body>
<form method="post">
Enter the number:<input type="number" name="number">
                 <input type="submit" name="Submit">
	</form>
	</body>
	</html>
<?php
if ($_POST)
{
	$number=$_POST['number'];
	if(($number%2)==0)
	{
		echo"$number is an Even number";
	}
	else
	{
		echo"$number is Odd number";
	}
}
?>