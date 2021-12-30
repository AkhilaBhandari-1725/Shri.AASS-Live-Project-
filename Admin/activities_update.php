<?php
include("pro_con.php");
echo "<tr><th>Id</th><th>Title</th><th>Image</th><th>Information</th><th>LINK</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
	$s="select * from activities";
	$res=mysqli_query($mycon,$s);
	
	while($r=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo"<td>$r[0]</td>";
		echo"<td>$r[1]</td>";
		echo"<td>$r[2]</td>";
		echo"<td>$r[3]</td>";
		echo"<td><a href='activities_display.php?id=$r[0]'>Edit</a></td>";
		echo"</tr>";
	}
?>