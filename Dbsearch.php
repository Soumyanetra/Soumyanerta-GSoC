<?php
	$dbname=$_GET['dbname'];
	if($dbname != '')
	{
		$con=mysqli_connect('localhost','root');
		if(mysqli_select_db($con,$dbname))
			echo "";
		else
			echo "* No such Database Present";
		mysqli_close($con);
	}
?>