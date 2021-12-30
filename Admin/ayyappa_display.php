<?php
include("pro_con.php");
echo "<tr><th>Id</th><th>Title</th><th>Information</th><th>Status</th><th>Image</th><th>LINK</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
	$s="select * from ayyappa";
	$res=mysqli_query($mycon,$s);
	
	while($r=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo"<td>$r[0]</td>";
		echo"<td>$r[1]</td>";
		echo"<td>$r[2]</td>";
		echo"<td>$r[3]</td>";
		echo"<td>$r[4]</td>";
		echo"<td><a href='ayyappa_disp.php?id=$r[0]'>Edit</a></td>";
		echo"</tr>";
	}
?>