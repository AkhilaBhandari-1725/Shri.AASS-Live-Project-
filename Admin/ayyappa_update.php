<?php
include("pro_con.php");

	$z1=$_POST["n1"];
	$z2=$_POST["n2"];
	$z3=$_POST["n3"];
	$s="";
	/*if(isset($_FILES['fileToUpload']))
	{*/
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . ".";
        $uploadOk = 1;
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
		//insert code
		
		//file name contain in $target_file variable
    } 
	else 
	{
        echo "File is not an image.";
        $uploadOk = 0;
    }
	
	$s="update about set(Title,info,status,imgname) values('$z1','$z2','$z3','$target_file')";
	//}	
	/*else
	{
		$s="update about set(Title,data) values('$z1','$z2')";
		*/
		if(mysqli_query($mycon,$s))
		{
		echo "Record inserted....";	
		}
		else
		{	
			echo mysqli_error();
		}
	//}
?>