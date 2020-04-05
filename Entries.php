<?php
	session_start();
	$name=$_GET['name'];
	if($name != '')
	{
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,$_SESSION['database']);
		if(mysqli_query($con,"insert into ".$_SESSION['table']."(Name,Points) values('$name',0)"))
			echo "";
		else
			echo "* ".$name." already Exist";
		mysqli_close($con);
	}
?>