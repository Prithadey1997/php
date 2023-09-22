<html>
<form method="post">
Enter a number:<input type="text" name="input"><tr><br><input type="submit" name="Submit">
</form>
<?php
if($_POST)
{
	$input=$_POST['input'];
	for($i=2; $i<=$input-1; $i++)
	{
		if($input%$i==0)
		{
			$value=True;
		}
	}
	if(isset($value)&& $value)
	{
		echo 'The Number'.$input.'is Composite';
	}
	else
	{
		echo 'The Number'.$input.'is Prime';
	}
}
?>
</html>