<?php
include("pro_con.php");
	$str="";
	$a=$_POST['i'];
	$s1="delete from more where id=$a";
	if(mysqli_query($mycon,$s1))
	{
		echo("Record deleted");
	}
	else
	{
		echo("Record not deleted");
	}
	
?>