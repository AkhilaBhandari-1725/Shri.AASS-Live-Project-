<?php
include("pro_con.php");
echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
	$s="select * from contact";
	$res=mysqli_query($mycon,$s);
	
	while($r=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo"<td>$r[0]</td>";
		echo"<td>$r[1]</td>";
		echo"<td>$r[2]</td>";
		echo"<td>$r[3]</td>";
		echo"<td>$r[4]</td>";
		echo"</tr>";
	}
?>