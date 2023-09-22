<html>
<body>
<form method="POST">
Enter First No:<input type="text" name="num1">
Enter Second No:<input type="text" name="num2"><br><br>
Result:<input type="submit" name="OK">
</form>
</body>
</html>
<?php
if(isset($_POST['OK']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$max=($num1>$num2)?$num1:$num2;
	while (1)
	{
		if($max%$num1==0 && $max%$num2==0)
		{
			echo "LCM of".$num1."and".$num2."is:".$max;
			break;
		}
		$max=$max+1;
	}
}
?>